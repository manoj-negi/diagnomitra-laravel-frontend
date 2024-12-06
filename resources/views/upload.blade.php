<!DOCTYPE html>
<html>
<head>
    <title>Upload Form</title>
</head>
<body>
    <form action="{{ route('booktest.testbooking') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="full_name" placeholder="Full Name" required>
    
        <input type="email" name="email" placeholder="Email" required>
 
        <input type="text" name="mobile_number" placeholder="Mobile Number" required>
       
        <input type="text" name="location" placeholder="Your Location" required>
    
        <input type="file" name="prescription">
        <button type="submit">Submit</button>
    </form>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
</body>
</html>
