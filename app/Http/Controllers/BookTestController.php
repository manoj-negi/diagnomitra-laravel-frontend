<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\booktest;

use App\Http\Controllers\Controller;
class BookTestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
           
            'email' => 'required|string|email|max:255|unique:booktest',

            'mobile_number' => 'required|string|max:15',
         
            'location' => 'required|string|max:255',
        
            'prescription' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('prescription')) {
            $fileName = time() . '.' . $request->prescription->extension();
            $request->prescription->move(public_path('prescriptions'), $fileName);
            $data['prescription'] = $fileName;
        }

        booktest::create($data);

        return back()->with('success' , 'Your test has been booked successfully.');
    }
}
?>