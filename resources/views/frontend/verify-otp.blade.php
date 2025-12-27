
<x-frontend-layout :title="'Verify OTP'">
    <div class="otp_container">
    <h2>Verify OTP</h2>

    <p>An OTP has been sent to your email: <strong>{{ $email }}</strong></p>

    <form method="POST" action="{{ route('contact.verifyOtp') }}">
        @csrf

        <label>Enter OTP:</label>
        <input type="text" name="otp" required>

        @if($errors->has('otp'))
            <div class="alert alert-danger">
                {{ $errors->first('otp') }}
            </div>
        @endif

        <button type="submit">Verify</button>
    </form>
    </div>
</x-frontend-layout>
