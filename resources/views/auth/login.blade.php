{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | LCMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Compiled CSS & JS via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-onBackground font-sans min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-surface rounded-lg shadow-md p-8">
        <h1 class="text-2xl font-bold text-center mb-6 text-onBackground">Login to LCMS</h1>

        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium mb-1 text-onSurface">Email</label>
                <input id="email" name="email" type="email" required autofocus value="{{ old('email') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:outline-none focus:ring-2 focus:ring-primary" />
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium mb-1 text-onSurface">Password</label>
                <input id="password" name="password" type="password" required
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:outline-none focus:ring-2 focus:ring-primary" />
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox"
                       class="h-4 w-4 border-gray-300 text-primary focus:ring-primary">
                <label for="remember_me" class="ml-2 block text-sm text-onSurface">Remember me</label>
            </div>

            <!-- Submit + Forgot -->
            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-primary hover:underline">
                        Forgot your password?
                    </a>
                @endif

                <button type="submit"
                        class="bg-primary text-onPrimary px-4 py-2 rounded hover:bg-primaryVariant transition font-medium">
                    Log in
                </button>
            </div>
        </form>
    </div>
</body>

</html>
