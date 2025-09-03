<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <h2 class="text-2xl font-bold text-center mb-8 text-gray-800">Sign In to Your Account</h2>
        
        <x-validation-errors class="mb-6 bg-red-50 p-4 rounded text-red-600" />

        @if (session('status'))
            <div class="mb-6 p-4 bg-green-50 rounded text-green-600 font-medium text-sm">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-6">
                <x-label for="email" value="{{ __('Email Address') }}" class="text-gray-700 block mb-2 font-medium" />
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class='bx bx-envelope text-gray-400'></i>
                    </div>
                    <x-input id="email" class="block w-full pl-10 focus:ring-primary focus:border-primary py-3" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="your.email@example.com" />
                </div>
            </div>

            <div class="mb-6">
                <div class="flex justify-between mb-2">
                    <x-label for="password" value="{{ __('Password') }}" class="text-gray-700 font-medium" />
                    @if (Route::has('password.request'))
                        <a class="text-sm text-primary hover:text-primary-dark" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class='bx bx-lock-alt text-gray-400'></i>
                    </div>
                    <x-input id="password" class="block w-full pl-10 focus:ring-primary focus:border-primary py-3" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
                </div>
            </div>

            <div class="mb-8">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" class="text-primary focus:ring-primary" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mb-6">
                <x-button class="w-full justify-center py-3 text-base bg-primary hover:bg-primary-dark">
                    {{ __('Sign in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
