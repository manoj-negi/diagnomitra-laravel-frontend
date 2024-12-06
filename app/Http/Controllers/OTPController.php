<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log; // Ensure logging is included
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class OTPController extends Controller
{
    // Show the OTP form
    public function showOTPForm()
    {
        return view('otp');
    }

    // Send OTP method
    public function sendLoginOtp(Request $request)
    {
        try {
            // Log request data
            Log::info('OTP Request Data:', $request->all());

            // Validate phone number input
            $validator = Validator::make($request->all(), [
                'phoneNumber' => 'required|digits:10',
            ]);

            if ($validator->fails()) {
                Log::warning('Validation failed for phone number:', $validator->errors()->toArray());
                return back()->with('error', $validator->errors()->first());
            }

            $phoneNumber = $request->phoneNumber;

            // Debug the phone number
            Log::info("Searching for user with phone number: $phoneNumber");

            // Find user by phone number
            $user = User::where('number', $phoneNumber)->first();

            if (!$user) {
                Log::error("Phone number $phoneNumber not found in the database.");
                return back()->with('error', 'Phone number does not exist.');
            }
            $phoneNumber = $request->phoneNumber;
            if (!preg_match("/^91/", $phoneNumber)) {
                $phoneNumber = '91' . $phoneNumber;
            }
            // OTP logic
            $otp = rand(1000, 9999);
            $currentTime = time();

            // Check and update OTP if expired
            if ($user->otp_expire < $currentTime) {
                Log::info("Generating new OTP for user ID {$user->id}: $otp");

                $user->otp = $otp;
                $user->otp_expire = $currentTime + 180; // OTP expires in 3 minutes
                $user->save();

                Log::info("OTP updated for user ID {$user->id}: $otp");
            } else {
                Log::info("OTP still valid for user ID {$user->id}. Expiry: {$user->otp_expire}");
                return back()->with('error', 'An OTP is still valid. Please wait until it expires.');
            }

            // Send OTP via MSG91
            $this->sendOtpThroughMsg91($phoneNumber, $otp);
// Store phone number in session
$phoneNumber = $request->phoneNumber;
if (preg_match("/^91/", $phoneNumber)) {
    // Strip the country code (91) before saving it
    $phoneNumber = substr($phoneNumber, 2);
}

// Store phone number without the country code in session
// $request->session()->put('phoneNumber', $phoneNumber);
// Log::info("Phone number saved to session: $phoneNumber");
$request->session()->put('phoneNumber', $phoneNumber);
Log::info("Session after putting phone number: ", $request->session()->all());

            // Redirect to OTP verification page
            return redirect()->route('otp.verify')->with('phoneNumber', $phoneNumber);
        } catch (\Exception $e) {
            Log::error("Error in sendLoginOtp: " . $e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    public function showOtpVerificationForm(Request $request)
    {
        // Retrieve the phone number from the session
        // $phoneNumber = $request->session()->get('phoneNumber');
        // Log::info("Retrieved phone number from session: $phoneNumber");    
        $phoneNumber = $request->session()->get('phoneNumber');
Log::info("Retrieved phone number: $phoneNumber");
Log::info("Full session data: ", $request->session()->all());

        // Check if the phone number exists in the session
        if (!$phoneNumber) {
            Log::error("Phone number not found in session. Redirecting to OTP form.");
            return redirect()->route('otp.form')->with('error', 'Session expired. Please request a new OTP.');
        }
    
        // Render the OTP verification view and pass the phone number
        return view('verify-otp', ['phoneNumber' => $phoneNumber]);
    }
    

    // Verify OTP method
    public function verifyOtp(Request $request)
    {
        try {
            Log::info('OTP Verification Data:', $request->all());
        
            $validator = Validator::make($request->all(), [
                'otp' => 'required|digits:4',
            ]);
        
            if ($validator->fails()) {
                Log::warning('Validation failed during OTP verification:', $validator->errors()->toArray());
                return back()->with('error', 'Please enter a valid OTP');
            }
        
            $otp = $request->otp;
            // $phoneNumber = $request->session()->get('phoneNumber'); // Retrieve phone number from session
            // dd($phoneNumber) ;
            $phoneNumber = $request->input('phoneNumber'); // Fetch from the request
            Log::info("Phone number received from request: $phoneNumber");
            
            if (!$phoneNumber) {
                Log::error("Phone number missing from session during OTP verification.");
                return redirect()->route('otp.form')->with('error', 'Session expired. Please request a new OTP.');
            }
        
            Log::info("Verifying OTP for phone number: $phoneNumber");
        
            $user = User::where('number', $phoneNumber)->first();
        
            if (!$user || $user->otp !== $otp) {
                Log::error("Invalid OTP for phone number: $phoneNumber");
                return back()->with('error', 'Invalid OTP. Please try again.');
            }
        
            // OTP is valid, delete the user associated with the phone number
            Log::info("OTP verified successfully. Deleting user with phone number: $phoneNumber");
        
            $user->delete();
            Log::info("User with phone number $phoneNumber has been deleted.");
        
            // Clear the session after deletion
            $request->session()->forget('phoneNumber');
            Log::info("Phone number session cleared.");
        
            // return redirect()->route('otp.form')->with('success', 'User has been deleted successfully.');
            // return redirect()->route('otp.form')->with('success', 'Your account has been deleted successfully.');
            return redirect()->route('delete.success')->with('success', 'Your account has been deleted successfully.');

        } catch (\Exception $e) {
            Log::error("Error in verifyOtp: " . $e->getMessage());
            return back()->with('error', 'An error occurred while verifying the OTP. Please try again.');
        }
    }
    public function deleteSuccess(Request $request)
{
    return view('delete-success')->with('success', session('success'));
}

//     public function verifyOtp(Request $request)
// {
//     try {
//         Log::info('OTP Verification Data:', $request->all());
    
//         $validator = Validator::make($request->all(), [
//             'otp' => 'required|digits:4',
//         ]);
    
//         if ($validator->fails()) {
//             Log::warning('Validation failed during OTP verification:', $validator->errors()->toArray());
//             return back()->with('error', 'Please enter a valid OTP');
//         }
    
//         $otp = $request->otp;
//         $phoneNumber = $request->input('phoneNumber');
//         Log::info("Phone number received from request: $phoneNumber");
        
//         if (!$phoneNumber) {
//             Log::error("Phone number missing from session during OTP verification.");
//             return redirect()->route('otp.form')->with('error', 'Session expired. Please request a new OTP.');
//         }
    
//         Log::info("Verifying OTP for phone number: $phoneNumber");
    
//         $user = User::where('number', $phoneNumber)->first();
    
//         if (!$user || $user->otp !== $otp) {
//             Log::error("Invalid OTP for phone number: $phoneNumber");
//             return back()->with('error', 'Invalid OTP. Please try again.');
//         }
    
//         // OTP is valid, delete the user associated with the phone number
//         Log::info("OTP verified successfully. Deleting user with phone number: $phoneNumber");
    
//         $user->delete();
//         Log::info("User with phone number $phoneNumber has been deleted.");
    
//         // Clear the session after deletion
//         $request->session()->forget('phoneNumber');
//         Log::info("Phone number session cleared.");
    
//         // Set success message to show toast
//         return redirect()->route('otp.form')->with('toast', 'Your account has been deleted successfully.');
        
//     } catch (\Exception $e) {
//         Log::error("Error in verifyOtp: " . $e->getMessage());
//         return back()->with('error', 'An error occurred while verifying the OTP. Please try again.');
//     }
// }


    // Send OTP using MSG91
    private function sendOtpThroughMsg91($mobile_number, $otp)
    {
        $authkey = "425054Aag3ulsUGD67065ebdP1";
        $template_id = "672885acd6fc057400119843";

        try {
            Log::info("Sending OTP $otp to $mobile_number via MSG91");

            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://control.msg91.com/api/v5/flow",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode([
                    "template_id" => $template_id,
                    "short_url" => "0",
                    "recipients" => [
                        [
                            "mobiles" => $mobile_number,
                            "var1" => $otp,
                        ],
                    ],
                ]),
                CURLOPT_HTTPHEADER => [
                    "accept: application/json",
                    "authkey: $authkey",
                    "content-type: application/json",
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);

            if ($err) {
                Log::error("MSG91 API Error: " . $err);
                throw new \Exception("Failed to send OTP via MSG91.");
            }

            Log::info("MSG91 Response: " . $response);
        } catch (\Exception $e) {
            Log::error("Error in sendOtpThroughMsg91: " . $e->getMessage());
        }
    }
}