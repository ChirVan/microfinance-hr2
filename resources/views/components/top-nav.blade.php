{{-- resources/views/components/top-nav.blade.php --}}
<nav class="bg-primary border-b border-primary-dark">
    <div class="px-4 mx-auto lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Toggle Sidebar Button -->
            <button @click="sidebarOpen = !sidebarOpen" class="p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-accent">
                <i class='bx bx-menu text-xl'></i>
            </button>
            
            <!-- Logo and Brand -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg>
                    <span class="ml-2 text-lg font-semibold text-white">Human Resources 2</span>
                </a>
            </div>
            
            <!-- Settings Dropdown -->
            <div class="flex items-center space-x-6">
                <!-- Notification Icon -->
                <div class="relative p-2 text-white cursor-pointer hover:bg-primary-dark rounded-full">
                    <i class='bx bx-bell text-xl'></i>
                </div>
                
                <!-- Mail Icon -->
                <div class="relative p-2 text-white cursor-pointer hover:bg-primary-dark rounded-full">
                    <i class='bx bx-envelope text-xl'></i>
                </div>
                
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-white transition duration-150 ease-in-out hover:text-accent focus:outline-none focus:text-accent">
                            <div>{{ Auth::user()->name ?? 'John Doe' }}</div>

                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-dropdown-link href="#">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        @if (Route::has('logout'))
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-dropdown-link href="{{ route('logout') }}"
                                     @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        @endif
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
