<x-guest-layout>
    <div class="py-10 px-6 sm:px-10">
        <div class="mb-6 text-center">
            <a href="{{ route('dashboard') }}">
                <x-application-mark class="block h-12 w-auto mx-auto" />
            </a>
        </div>
        
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Email Verified Successfully</h2>

        <div class="mb-6 p-4 bg-green-50 rounded-md border-l-4 border-green-500">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class='bx bx-check-circle text-green-500 text-xl'></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-green-700">
                        {{ __('Your email address has been successfully verified. You now have full access to all features of the application.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="mb-5 text-center">
            <div class="inline-flex items-center px-4 py-2 bg-gray-100 rounded-full">
                <i class='bx bx-envelope text-gray-500 mr-2'></i>
                <span class="text-sm font-medium text-gray-700">{{ Auth::user()->email }}</span>
            </div>
        </div>

        <div class="flex items-center justify-center mt-6">
            <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-dark focus:bg-primary-dark active:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition ease-in-out duration-150">
                <i class='bx bx-home-alt mr-2'></i>
                {{ __('Go to Dashboard') }}
            </a>
        </div>
    </div>
</x-guest-layout>
