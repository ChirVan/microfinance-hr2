<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Verify Your Email</h2>

        <!-- User email display -->
        <div class="mb-5 text-center">
            <div class="inline-flex items-center px-4 py-2 bg-gray-100 rounded-full">
                <i class='bx bx-envelope text-gray-500 mr-2'></i>
                <span class="text-sm font-medium text-gray-700">{{ Auth::user()->email }}</span>
            </div>
        </div>

        <div class="mb-6 p-4 bg-blue-50 rounded-md border-l-4 border-blue-500">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class='bx bx-info-circle text-blue-500 text-xl'></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-blue-700">
                        {{ __('Before continuing, please verify your email address by clicking on the link we just emailed to you. If you didn\'t receive the email, we will gladly send you another.') }}
                    </p>
                </div>
            </div>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-6 p-4 bg-green-50 rounded-md border-l-4 border-green-500">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class='bx bx-check-circle text-green-500 text-xl'></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-green-700 font-medium">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <div class="mt-6 flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit" class="flex items-center bg-primary hover:bg-primary-dark">
                        <i class='bx bx-envelope mr-2 text-lg'></i>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <div class="flex items-center space-x-4">
                <a href="{{ route('profile.show') }}" 
                   class="inline-flex items-center text-sm text-primary hover:text-primary-dark">
                    <i class='bx bx-user-circle mr-1'></i>
                    {{ __('Edit Profile') }}
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900">
                        <i class='bx bx-log-out mr-1'></i>
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
