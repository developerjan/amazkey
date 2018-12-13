<div id="forgot-password-email">
    <h3>Hello, {{ $user->user_nicename }}</h3>

    <p>Please click the link below to reset your password</p>
    <p><a href="{{ $passwordResetLink }}" target="_blank">Reset Password</a></p>
</div>