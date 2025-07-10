{{-- resources/views/auth/forgot-password.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password | LCMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-background text-onBackground font-sans min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-surface rounded-lg shadow-md p-8">
        <h1 class="text-2xl font-bold text-center mb-6 text-onBackground">
            Forgot Password
        </h1>

        <p class="text-sm text-onSurface mb-6 text-center">
            Forgot your password? No problem. Enter your email below and we’ll send you a reset link.
        </p>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-onSurface mb-1">Email</label>
                <input id="email" name="email" type="email" required autofocus value="{{ old('email') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:ring-2 focus:ring-primary" />
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="text-right">
                <button type="submit"
                        class="bg-primary text-onPrimary px-6 py-2 rounded hover:bg-primaryVariant transition font-medium">
                    Email Password Reset Link
                </button>
            </div>
        </form>
    </div>
</body>
</html>
