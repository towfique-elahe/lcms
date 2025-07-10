{{-- resources/views/auth/register.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | LCMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-background text-onBackground font-sans min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md bg-surface rounded-lg shadow-md p-8">
        <h1 class="text-2xl font-bold text-center mb-6 text-onBackground">
            Create an Account
        </h1>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-onSurface mb-1">Name</label>
                <input id="name" type="text" name="name" required autofocus autocomplete="name" value="{{ old('name') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:ring-2 focus:ring-primary" />
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-onSurface mb-1">Email</label>
                <input id="email" type="email" name="email" required autocomplete="email" value="{{ old('email') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:ring-2 focus:ring-primary" />
                @error('email')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-onSurface mb-1">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:ring-2 focus:ring-primary" />
                @error('password')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-onSurface mb-1">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                       class="w-full px-4 py-2 border border-gray-300 rounded bg-white text-onBackground focus:ring-2 focus:ring-primary" />
                @error('password_confirmation')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Register Button -->
            <div class="flex items-center justify-between">
                <a href="{{ route('login') }}" class="text-sm text-primary hover:underline">
                    Already registered?
                </a>

                <button type="submit"
                        class="bg-primary text-onPrimary px-6 py-2 rounded hover:bg-primaryVariant transition font-medium">
                    Register
                </button>
            </div>
        </form>
    </div>
</body>
</html>
