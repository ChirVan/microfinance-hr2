{{-- resources/views/components/sidebar.blade.php --}}
<div class="w-64 bg-primary text-white" x-show="sidebarOpen">
    
    <!-- Main Navigation -->
    <nav class="p-4 mt-2 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base {{ request()->routeIs('dashboard') ? 'bg-accent bg-opacity-20' : '' }}">
            <div class="w-7 flex justify-center">
                <i class='bx bx-grid-alt text-xl'></i>
            </div>
            <span class="ml-3">Dashboard</span>
        </a>
        <div class="mb-3"></div>
        
        <!-- Training Management -->
        <div x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base">
                <div class="flex items-center">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-book-content text-xl'></i>
                    </div>
                    <span class="ml-3">Training Management</span>
                </div>
                <i class='bx' :class="open ? 'bx-chevron-down' : 'bx-chevron-right'"></i>
            </button>
            <div x-show="open" class="mt-1 ml-6 space-y-1">
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-file text-sm'></i>
                    </div>
                    <span class="ml-3">Training Plans</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-calendar text-sm'></i>
                    </div>
                    <span class="ml-3">Training Calendar</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-bar-chart-alt-2 text-sm'></i>
                    </div>
                    <span class="ml-3">Training Reports</span>
                </a>
            </div>
        </div>
        
        <!-- Competency Management -->
        <div x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base">
                <div class="flex items-center">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-medal text-xl'></i>
                    </div>
                    <span class="ml-3">Competency Management</span>
                </div>
                <i class='bx' :class="open ? 'bx-chevron-down' : 'bx-chevron-right'"></i>
            </button>
            <div x-show="open" class="mt-1 ml-6 space-y-1">
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-grid-alt text-sm'></i>
                    </div>
                    <span class="ml-2">Competency Framework</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-clipboard text-sm'></i>
                    </div>
                    <span class="ml-2">Assessment Tools</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-line-chart text-sm'></i>
                    </div>
                    <span class="ml-2">Skill Gap Analysis</span>
                </a>
            </div>
        </div>
        
        <!-- Succession Planning -->
        <div x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base">
                <div class="flex items-center">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-git-branch text-xl'></i>
                    </div>
                    <span class="ml-3">Succession Planning</span>
                </div>
                <i class='bx' :class="open ? 'bx-chevron-down' : 'bx-chevron-right'"></i>
            </button>
            <div x-show="open" class="mt-1 ml-6 space-y-1">
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-user-pin text-sm'></i>
                    </div>
                    <span class="ml-2">Key Positions</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-group text-sm'></i>
                    </div>
                    <span class="ml-2">Talent Pool</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-notepad text-sm'></i>
                    </div>
                    <span class="ml-2">Development Plans</span>
                </a>
            </div>
        </div>
        
        <!-- Learning Management -->
        <div x-data="{ open: false }">
            <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base">
                <div class="flex items-center">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-bulb text-xl'></i>
                    </div>
                    <span class="ml-3">Learning Management</span>
                </div>
                <i class='bx' :class="open ? 'bx-chevron-down' : 'bx-chevron-right'"></i>
            </button>
            <div x-show="open" class="mt-1 ml-6 space-y-1">
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-book-open text-sm'></i>
                    </div>
                    <span class="ml-2">Learning Catalog</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-user-voice text-sm'></i>
                    </div>
                    <span class="ml-2">My Learning</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-bar-chart text-sm'></i>
                    </div>
                    <span class="ml-2">Learning Analytics</span>
                </a>
            </div>
        </div>
    </nav>
</div>

<!-- No need for overlay since sidebar is not fixed position anymore -->
