<!DOCTYPE html>
<html>
<head>
    <title>OTP Form</title>
</head>
<body>
    <form id="otpForm" action="{{ url('/send-otp') }}" method="POST">
        @csrf <!-- CSRF token to protect against CSRF attacks -->
        <label for="phoneNumber">Enter Phone Number:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" required>
        <button type="submit">Submit</button>
    </form>
    
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>
