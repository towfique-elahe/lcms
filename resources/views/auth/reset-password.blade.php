{{-- resources/views/auth/reset-password.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password | LCMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-background text-onBackground font-sans min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-surface rounded-lg shadow-md p-8">
        <h1 class="text-2xl font-bold text-center mb-6 text-onBackground">
            Reset Your Password
        </h1>

        <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
            @csrf

            <!-- Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-onSurface mb-1">Email</label>
                <input id="email" name="email" type="email" required autofocus
                       value="{{ old('email', $request->email) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:ring-2 focus:ring-primary" />
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- New Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-onSurface mb-1">New Password</label>
                <input id="password" name="password" type="password" required autocomplete="new-password"
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:ring-2 focus:ring-primary" />
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-onSurface mb-1">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:ring-2 focus:ring-primary" />
                @error('password_confirmation')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <div class="text-right">
                <button type="submit"
                        class="bg-primary text-onPrimary px-6 py-2 rounded hover:bg-primaryVariant transition font-medium">
                    Reset Password
                </button>
            </div>
        </form>
    </div>
</body>
</html>
