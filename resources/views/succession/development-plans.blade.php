<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Succession Development Plans') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Succession Development Plans</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Create targeted development plans for potential successors to key positions.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('succession.successor-identification') }}" class="btn btn-secondary">
                            <i class='bx bx-left-arrow-alt mr-2'></i>
                            Back to Successors
                        </a>
                        <button class="btn btn-primary">
                            <i class='bx bx-plus mr-2'></i>
                            Create Plan
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Development Plans List -->
            <div class="bg-gray-50 border border-gray-200 rounded-base p-6">
                <!-- Filter and Search -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                    <div class="flex items-center space-x-3">
                        <div>
                            <label for="positionFilter" class="block text-xs font-medium text-gray-600 mb-1">Position</label>
                            <select id="positionFilter" class="bg-white border border-gray-200 rounded-md px-3 py-2 text-sm text-gray-700 w-44">
                                <option value="">All Positions</option>
                                <option>IT Manager</option>
                                <option>Finance Director</option>
                                <option>Operations Manager</option>
                                <option>Branch Manager</option>
                                <option>Chief Credit Officer</option>
                            </select>
                        </div>
                        <div>
                            <label for="statusFilter" class="block text-xs font-medium text-gray-600 mb-1">Status</label>
                            <select id="statusFilter" class="bg-white border border-gray-200 rounded-md px-3 py-2 text-sm text-gray-700 w-40">
                                <option value="">All Statuses</option>
                                <option>Active</option>
                                <option>Completed</option>
                                <option>On Hold</option>
                                <option>Not Started</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="w-full md:w-64">
                        <label for="search" class="block text-xs font-medium text-gray-600 mb-1">Search</label>
                        <div class="relative">
                            <input type="text" id="search" class="bg-white border border-gray-200 rounded-md pl-9 pr-3 py-2 w-full text-sm text-gray-700" placeholder="Search plans...">
                            <i class='bx bx-search absolute left-3 top-2.5 text-gray-400'></i>
                        </div>
                    </div>
                </div>
                
                <!-- Plans Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-md">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-200">
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Successor</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Target Position</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plan Period</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Readiness</th>
                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <!-- Plan 1 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 mr-3">
                                            <span>JD</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-800">John Doe</div>
                                            <div class="text-xs text-gray-500">Senior Network Engineer</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-800">IT Manager</div>
                                    <div class="text-xs text-gray-500">Technology Department</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-800">Sep 2025 - Mar 2026</div>
                                    <div class="text-xs text-gray-500">6 months</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <span class="h-2.5 w-2.5 rounded-full bg-yellow-500 inline-block"></span>
                                        </div>
                                        <div class="text-sm text-gray-800">Ready in 1-2 years</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">In Progress</span>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-primary hover:text-primary-dark mr-3">View</a>
                                    <a href="#" class="text-gray-600 hover:text-gray-900 mr-3">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Plan 2 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 mr-3">
                                            <span>MR</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-800">Maria Rodriguez</div>
                                            <div class="text-xs text-gray-500">Finance Analyst</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-800">Finance Director</div>
                                    <div class="text-xs text-gray-500">Finance Department</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-800">Aug 2025 - Aug 2026</div>
                                    <div class="text-xs text-gray-500">12 months</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <span class="h-2.5 w-2.5 rounded-full bg-red-500 inline-block"></span>
                                        </div>
                                        <div class="text-sm text-gray-800">Ready in 3+ years</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-800">Just Started</span>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-primary hover:text-primary-dark mr-3">View</a>
                                    <a href="#" class="text-gray-600 hover:text-gray-900 mr-3">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Plan 3 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 mr-3">
                                            <span>AS</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-800">Ahmed Saeed</div>
                                            <div class="text-xs text-gray-500">Assistant Branch Manager</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-800">Branch Manager</div>
                                    <div class="text-xs text-gray-500">Operations</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-800">Jul 2025 - Jan 2026</div>
                                    <div class="text-xs text-gray-500">6 months</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <span class="h-2.5 w-2.5 rounded-full bg-green-500 inline-block"></span>
                                        </div>
                                        <div class="text-sm text-gray-800">Ready Now</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">On Track</span>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-primary hover:text-primary-dark mr-3">View</a>
                                    <a href="#" class="text-gray-600 hover:text-gray-900 mr-3">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                            
                            <!-- Plan 4 -->
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-8 w-8 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 mr-3">
                                            <span>LW</span>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-800">Lisa Wong</div>
                                            <div class="text-xs text-gray-500">Credit Team Lead</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-800">Chief Credit Officer</div>
                                    <div class="text-xs text-gray-500">Credit Department</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-800">Aug 2025 - Feb 2027</div>
                                    <div class="text-xs text-gray-500">18 months</div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <span class="h-2.5 w-2.5 rounded-full bg-yellow-500 inline-block"></span>
                                        </div>
                                        <div class="text-sm text-gray-800">Ready in 1-2 years</div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">In Progress</span>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-primary hover:text-primary-dark mr-3">View</a>
                                    <a href="#" class="text-gray-600 hover:text-gray-900 mr-3">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="mt-4 flex items-center justify-between">
                    <div class="text-sm text-gray-500">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">4</span> results
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm disabled:opacity-50" disabled>
                            Previous
                        </button>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm disabled:opacity-50" disabled>
                            Next
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <!-- Success Stories -->
                <div class="bg-gradient-to-r from-emerald-50 to-teal-50 border border-emerald-100 rounded-lg p-5">
                    <h4 class="text-sm font-medium text-emerald-700 mb-3">Success Stories</h4>
                    <p class="text-xs text-emerald-600 mb-4">Our succession planning has led to successful leadership transitions in 3 key positions this year.</p>
                    <div class="text-right">
                        <a href="#" class="text-xs font-medium text-emerald-700 hover:underline">
                            Read More
                        </a>
                    </div>
                </div>
                
                <!-- Plan Templates -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-100 rounded-lg p-5">
                    <h4 class="text-sm font-medium text-blue-700 mb-3">Plan Templates</h4>
                    <p class="text-xs text-blue-600 mb-4">Use one of our pre-built succession development plan templates to speed up your planning process.</p>
                    <div class="text-right">
                        <a href="#" class="text-xs font-medium text-blue-700 hover:underline">
                            Browse Templates
                        </a>
                    </div>
                </div>
                
                <!-- Best Practices -->
                <div class="bg-gradient-to-r from-amber-50 to-yellow-50 border border-amber-100 rounded-lg p-5">
                    <h4 class="text-sm font-medium text-amber-700 mb-3">Best Practices</h4>
                    <p class="text-xs text-amber-600 mb-4">Learn how to create effective succession development plans with our best practices guide.</p>
                    <div class="text-right">
                        <a href="#" class="text-xs font-medium text-amber-700 hover:underline">
                            View Guide
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Create Plan Modal (Hidden by Default) -->
    <div id="createPlanModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-xl p-6 mx-3 mt-10">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium text-gray-900">Create Succession Development Plan</h3>
                <button class="text-gray-400 hover:text-gray-600" onclick="document.getElementById('createPlanModal').classList.add('hidden')">
                    <i class='bx bx-x text-2xl'></i>
                </button>
            </div>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Successor</label>
                    <select class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                        <option>Select Employee</option>
                        <option>John Doe - Senior Network Engineer</option>
                        <option>Maria Rodriguez - Finance Analyst</option>
                        <option>Ahmed Saeed - Assistant Branch Manager</option>
                        <option>Lisa Wong - Credit Team Lead</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Target Position</label>
                    <select class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                        <option>Select Position</option>
                        <option>IT Manager</option>
                        <option>Finance Director</option>
                        <option>Branch Manager</option>
                        <option>Operations Manager</option>
                        <option>Chief Credit Officer</option>
                    </select>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                        <input type="date" class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                        <input type="date" class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Current Readiness Level</label>
                    <select class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                        <option>Ready Now</option>
                        <option>Ready in 1-2 years</option>
                        <option>Ready in 3+ years</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Plan Template</label>
                    <select class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                        <option>No Template (Start from Scratch)</option>
                        <option>Management Fast-Track</option>
                        <option>Technical Leadership</option>
                        <option>Branch Operations</option>
                        <option>Credit Risk Management</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Initial Notes</label>
                    <textarea class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700 h-24" placeholder="Add any initial notes about this succession plan..."></textarea>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700" 
                        onclick="document.getElementById('createPlanModal').classList.add('hidden')">Cancel</button>
                <a href="{{ route('competency.development-plan') }}" class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md">Create Plan</a>
            </div>
        </div>
    </div>
    
    <!-- JavaScript for modal functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('createPlanModal');
            
            // Show create plan modal when create plan button is clicked
            const createPlanBtn = document.querySelector('.btn-primary');
            createPlanBtn.addEventListener('click', function() {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
            
            // Close modal when clicking outside
            window.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.remove('flex');
                    modal.classList.add('hidden');
                }
            });
            
            // Close modal when clicking the close button
            const closeBtn = modal.querySelector('button');
            closeBtn.addEventListener('click', function() {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            });
        });
    </script>
</x-app-layout>
