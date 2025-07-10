{{-- resources/views/auth/verify-email.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Email | LCMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-background text-onBackground font-sans min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-surface rounded-lg shadow-md p-8">
        <h1 class="text-2xl font-bold text-center mb-6 text-onBackground">
            Verify Your Email
        </h1>

        <p class="text-sm text-onSurface mb-6 text-center leading-relaxed">
            Thanks for signing up! Before getting started, please verify your email address by clicking on the link we just emailed to you.
            If you didn’t receive the email, we’ll gladly send you another.
        </p>

        @if (session('status') === 'verification-link-sent')
            <div class="mb-4 text-sm text-green-600 text-center">
                A new verification link has been sent to your email.
            </div>
        @endif

        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mt-6">
            <!-- Resend Verification -->
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit"
                        class="bg-primary text-onPrimary px-4 py-2 rounded hover:bg-primaryVariant transition font-medium">
                    Resend Verification Email
                </button>
            </form>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="text-sm text-primary hover:underline font-medium">
                    Log Out
                </button>
            </form>
        </div>
    </div>
</body>
</html>
