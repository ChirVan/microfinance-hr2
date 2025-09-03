{{-- resources/views/components/sidebar.blade.php --}}
<div class="w-16 md:w-64 bg-primary text-white h-full m-0 p-0 overflow-y-auto">
    
    <!-- Main Navigation -->
    <nav class="p-2 md:p-4 space-y-1 pb-20">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base {{ request()->routeIs('dashboard') ? 'bg-accent bg-opacity-20' : '' }}">
            <div class="w-7 flex justify-center">
                <i class='bx bx-grid-alt text-xl'></i>
            </div>
            <span class="ml-3">Dashboard</span>
        </a>
        <div class="mb-3"></div>
        
        <!-- Training Management -->
        <div x-data="{ open: false }" x-init="$watch('open', val => { if(val) localStorage.setItem('trainingOpen', 'true'); else localStorage.removeItem('trainingOpen') }); open = localStorage.getItem('trainingOpen') === 'true' || {{ request()->routeIs('training.*') ? 'true' : 'false' }}">
            <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base {{ request()->routeIs('training.*') ? 'bg-accent bg-opacity-20' : '' }}">
                <div class="flex items-center">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-book-content text-xl'></i>
                    </div>
                    <span class="ml-3">Training Management</span>
                </div>
                <i class='bx' :class="open ? 'bx-chevron-down' : 'bx-chevron-right'"></i>
            </button>
            <div x-show="open" class="mt-1 ml-6 space-y-1">
                <a href="{{ route('training.catalog') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('training.catalog') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-library text-sm'></i>
                    </div>
                    <span class="ml-2">Training Catalog</span>
                </a>
                <a href="{{ route('training.assign') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('training.assign') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-user-plus text-sm'></i>
                    </div>
                    <span class="ml-2">Assign Training</span>
                </a>
                <a href="{{ route('training.progress') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('training.progress') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-run text-sm'></i>
                    </div>
                    <span class="ml-2">Progress Tracker</span>
                </a>
                <a href="{{ route('training.evaluation') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('training.evaluation') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-star text-sm'></i>
                    </div>
                    <span class="ml-2">Evaluation & Feedback</span>
                </a>
            </div>
        </div>
        
        <!-- Competency Management -->
        <div x-data="{ open: false }" x-init="$watch('open', val => { if(val) localStorage.setItem('competencyOpen', 'true'); else localStorage.removeItem('competencyOpen') }); open = localStorage.getItem('competencyOpen') === 'true' || {{ request()->routeIs('competency.*') ? 'true' : 'false' }}">
            <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base {{ request()->routeIs('competency.*') ? 'bg-accent bg-opacity-20' : '' }}">
                <div class="flex items-center">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-medal text-xl'></i>
                    </div>
                    <span class="ml-3">Competency Management</span>
                </div>
                <i class='bx' :class="open ? 'bx-chevron-down' : 'bx-chevron-right'"></i>
            </button>
            <div x-show="open" class="mt-1 ml-6 space-y-1">
                <a href="{{ route('competency.framework') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('competency.framework') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-grid-alt text-sm'></i>
                    </div>
                    <span class="ml-2">Competency Framework</span>
                </a>
                <a href="{{ route('competency.framework-builder') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('competency.framework-builder') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-edit-alt text-sm'></i>
                    </div>
                    <span class="ml-2">Framework Builder</span>
                </a>
                <a href="{{ route('competency.assessment-builder') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('competency.assessment-builder') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-clipboard text-sm'></i>
                    </div>
                    <span class="ml-2">Assessment Builder</span>
                </a>
                <a href="{{ route('competency.gap-analysis') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('competency.gap-analysis') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-line-chart text-sm'></i>
                    </div>
                    <span class="ml-2">Skill Gap Analysis</span>
                </a>
                <a href="{{ route('competency.questionnaire-builder') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('competency.questionnaire-builder') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-list-check text-sm'></i>
                    </div>
                    <span class="ml-2">Questionnaire Builder</span>
                </a>
                <!-- Temporarily hidden
                <a href="{{ route('competency.comparison') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('competency.comparison') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-git-compare text-sm'></i>
                    </div>
                    <span class="ml-2">Comparison Tool</span>
                </a>
                <a href="{{ route('competency.report-card') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('competency.report-card') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-file text-sm'></i>
                    </div>
                    <span class="ml-2">Report Card</span>
                </a>
                <a href="{{ route('competency.analytics') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('competency.analytics') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-bar-chart-alt-2 text-sm'></i>
                    </div>
                    <span class="ml-2">Analytics Dashboard</span>
                </a>
                -->
            </div>
        </div>
        
        <!-- Succession Planning -->
        <div x-data="{ open: false }" x-init="$watch('open', val => { if(val) localStorage.setItem('successionOpen', 'true'); else localStorage.removeItem('successionOpen') }); open = localStorage.getItem('successionOpen') === 'true' || {{ request()->routeIs('succession.*') ? 'true' : 'false' }}">
            <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base {{ request()->routeIs('succession.*') ? 'bg-accent bg-opacity-20' : '' }}">
                <div class="flex items-center">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-git-branch text-xl'></i>
                    </div>
                    <span class="ml-3">Succession Planning</span>
                </div>
                <i class='bx' :class="open ? 'bx-chevron-down' : 'bx-chevron-right'"></i>
            </button>
            <div x-show="open" class="mt-1 ml-6 space-y-1">
                <a href="{{ route('succession.talent-pool') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('succession.talent-pool') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-group text-sm'></i>
                    </div>
                    <span class="ml-2">Talent Pool Management</span>
                </a>
                <a href="{{ route('succession.role-mapping') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('succession.role-mapping') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-map-alt text-sm'></i>
                    </div>
                    <span class="ml-2">Role Mapping</span>
                </a>
                <a href="{{ route('succession.successor-identification') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('succession.successor-identification') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-user-check text-sm'></i>
                    </div>
                    <span class="ml-2">Successor Identification</span>
                </a>
                <a href="{{ route('succession.development-plans') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('succession.development-plans') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-trending-up text-sm'></i>
                    </div>
                    <span class="ml-2">Development Plans</span>
                </a>
                <a href="{{ route('succession.readiness-evaluation') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('succession.readiness-evaluation') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-analyse text-sm'></i>
                    </div>
                    <span class="ml-2">Readiness Evaluation</span>
                </a>
                <a href="{{ route('succession.reports') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('succession.reports') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-chart text-sm'></i>
                    </div>
                    <span class="ml-2">Succession Reports</span>
                </a>
            </div>
        </div>
        
        <!-- Learning Management -->
        <div x-data="{ open: false }" x-init="$watch('open', val => { if(val) localStorage.setItem('learningOpen', 'true'); else localStorage.removeItem('learningOpen') }); open = localStorage.getItem('learningOpen') === 'true' || {{ request()->routeIs('learning.*') ? 'true' : 'false' }}">
            <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-3 text-white hover:bg-primary-dark hover:text-white rounded-base {{ request()->routeIs('learning.*') ? 'bg-accent bg-opacity-20' : '' }}">
                <div class="flex items-center">
                    <div class="w-7 flex justify-center">
                        <i class='bx bx-bulb text-xl'></i>
                    </div>
                    <span class="ml-3">Learning Management</span>
                </div>
                <i class='bx' :class="open ? 'bx-chevron-down' : 'bx-chevron-right'"></i>
            </button>
            <div x-show="open" class="mt-1 ml-6 space-y-1">
                <a href="{{ route('learning.path-setup') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('learning.path-setup') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-map-alt text-sm'></i>
                    </div>
                    <span class="ml-2">Learning Path Setup</span>
                </a>
                <a href="{{ route('learning.assignment') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('learning.assignment') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-user-plus text-sm'></i>
                    </div>
                    <span class="ml-2">Learning Assignment</span>
                </a>
                <a href="{{ route('learning.progress') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('learning.progress') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-run text-sm'></i>
                    </div>
                    <span class="ml-2">Progress & History</span>
                </a>
                <a href="{{ route('learning.analytics') }}" class="flex items-center px-4 py-2 text-sm text-white/70 hover:text-white {{ request()->routeIs('learning.analytics') ? 'bg-accent bg-opacity-20 text-white rounded-base' : '' }}">
                    <div class="w-5 flex justify-center">
                        <i class='bx bx-bar-chart-alt-2 text-sm'></i>
                    </div>
                    <span class="ml-2">Analytics & Reports</span>
                </a>
            </div>
        </div>
    </nav>
</div>

<!-- No need for overlay since sidebar is not fixed position anymore -->
