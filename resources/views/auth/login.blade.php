<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-primary">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Admin Login
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email"
                               name="email"
                               type="email"
                               autocomplete="email"
                               required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:z-10 sm:text-sm @error('email') border-red-500 @enderror"
                               style="focus:ring-color: var(--color-blue); focus:border-color: var(--color-blue);"
                               placeholder="Email address"
                               value="{{ old('email') }}">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password"
                               name="password"
                               type="password"
                               autocomplete="current-password"
                               required
                               class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:z-10 sm:text-sm @error('password') border-red-500 @enderror"
                               style="focus:ring-color: var(--color-blue); focus:border-color: var(--color-blue);"
                               placeholder="Password">
                    </div>
                </div>

                @error('email')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror

                @error('password')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror

                <div class="flex items-center">
                    <input id="remember"
                           name="remember"
                           type="checkbox"
                           class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-900">
                        Remember me
                    </label>
                </div>

                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-secondary hover:bg-dark focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors duration-200">
                        Sign in
                    </button>
                </div>
            </form>

            <div class="text-center">
                <a href="{{ url('/') }}" class="text-sm text-secondary hover:text-dark transition-colors duration-200">
                    Back to website
                </a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
