
    <div style="width: 40%; margin: 70px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); background-color: #fff; font-family: Arial, sans-serif;">
        <div style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 20px; text-align: center;">
            Account Deletion
        </div>

        @if (session('success'))
            <div style="border: 1px solid green; background-color: #d4edda; color: green; padding: 15px; text-align: center; border-radius: 5px; margin-bottom: 20px;">
                <strong>Success!</strong> {{ session('success') }}
            </div>
        @endif

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('home') }}" style="text-decoration: none; color: #007bff; font-size: 14px; font-weight: bold;">
                HOME
            </a>
        </div>
    </div>
