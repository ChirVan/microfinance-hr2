<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Learning Progress & History') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Employee Learning Progress</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Track and manage employee progress on assigned learning paths.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-export mr-2'></i>
                            Export Report
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-refresh mr-2'></i>
                            Update Progress
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Progress Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div>
                        <label for="employee_filter" class="block text-sm font-medium text-gray-700 mb-1">Employee</label>
                        <select id="employee_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Employees</option>
                            <option value="john_doe">John Doe</option>
                            <option value="jane_smith">Jane Smith</option>
                            <option value="robert_johnson">Robert Johnson</option>
                            <option value="emily_wilson">Emily Wilson</option>
                        </select>
                    </div>
                    <div>
                        <label for="department_filter" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                        <select id="department_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Departments</option>
                            <option value="it">IT Department</option>
                            <option value="hr">Human Resources</option>
                            <option value="finance">Finance</option>
                            <option value="operations">Operations</option>
                        </select>
                    </div>
                    <div>
                        <label for="learning_path_filter" class="block text-sm font-medium text-gray-700 mb-1">Learning Path</label>
                        <select id="learning_path_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Learning Paths</option>
                            <option value="supervisor_dev">Supervisor Development Path</option>
                            <option value="financial_analyst">Financial Analyst Career Path</option>
                            <option value="it_security">IT Security Specialist Path</option>
                            <option value="hr_onboarding">HR Onboarding Specialist</option>
                        </select>
                    </div>
                    <div>
                        <label for="status_filter" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select id="status_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Status</option>
                            <option value="not_started">Not Started</option>
                            <option value="in_progress">In Progress</option>
                            <option value="completed">Completed</option>
                            <option value="overdue">Overdue</option>
                        </select>
                    </div>
                    <div>
                        <label for="date_range" class="block text-sm font-medium text-gray-700 mb-1">Date Range</label>
                        <select id="date_range" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="all_time">All Time</option>
                            <option value="last_30">Last 30 Days</option>
                            <option value="last_90">Last 90 Days</option>
                            <option value="last_year">Last Year</option>
                            <option value="custom">Custom Range</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Employee Progress Summary -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-lg border border-blue-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-blue-800">Total Learning Paths</p>
                            <h4 class="mt-1 text-2xl font-bold text-blue-900">16</h4>
                        </div>
                        <div class="rounded-full bg-blue-200 p-3">
                            <i class='bx bx-map-alt text-blue-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-blue-700">
                        <span class="font-medium">+3</span> since last quarter
                    </p>
                </div>
                
                <div class="bg-gradient-to-r from-green-50 to-green-100 p-4 rounded-lg border border-green-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-green-800">Completed Paths</p>
                            <h4 class="mt-1 text-2xl font-bold text-green-900">5</h4>
                        </div>
                        <div class="rounded-full bg-green-200 p-3">
                            <i class='bx bx-check-circle text-green-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-green-700">
                        <span class="font-medium">31%</span> completion rate
                    </p>
                </div>
                
                <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 p-4 rounded-lg border border-yellow-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-yellow-800">In Progress</p>
                            <h4 class="mt-1 text-2xl font-bold text-yellow-900">9</h4>
                        </div>
                        <div class="rounded-full bg-yellow-200 p-3">
                            <i class='bx bx-time text-yellow-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-yellow-700">
                        <span class="font-medium">56%</span> of total paths
                    </p>
                </div>
                
                <div class="bg-gradient-to-r from-red-50 to-red-100 p-4 rounded-lg border border-red-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-red-800">Overdue</p>
                            <h4 class="mt-1 text-2xl font-bold text-red-900">2</h4>
                        </div>
                        <div class="rounded-full bg-red-200 p-3">
                            <i class='bx bx-alarm-exclamation text-red-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-red-700">
                        <span class="font-medium">13%</span> of total paths
                    </p>
                </div>
            </div>
            
            <!-- Learning Progress Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Employee</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Learning Path</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Progress</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Start Date</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Target Date</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-gray-600">JD</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">John Doe</div>
                                        <div class="text-xs text-gray-500">Operations - Team Lead</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Supervisor Development Path</div>
                                <div class="text-xs text-gray-500">v1.2</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">45%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sept 2, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Mar 2, 2026</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                    In Progress
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" x-data="" x-on:click="$dispatch('open-modal', 'view-progress-modal')">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-purple-600 hover:text-purple-900">
                                        <i class='bx bx-history'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-gray-600">JS</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                                        <div class="text-xs text-gray-500">Finance - Analyst</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Financial Analyst Career Path</div>
                                <div class="text-xs text-gray-500">v2.0</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 25%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">25%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 15, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 15, 2026</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                    In Progress
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-purple-600 hover:text-purple-900">
                                        <i class='bx bx-history'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-gray-600">RJ</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Robert Johnson</div>
                                        <div class="text-xs text-gray-500">IT - Security Engineer</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">IT Security Specialist Path</div>
                                <div class="text-xs text-gray-500">v1.0</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 10%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">10%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">July 20, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Jan 20, 2027</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                    In Progress
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-purple-600 hover:text-purple-900">
                                        <i class='bx bx-history'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-gray-600">EW</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Emily Wilson</div>
                                        <div class="text-xs text-gray-500">HR - Coordinator</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">HR Onboarding Specialist</div>
                                <div class="text-xs text-gray-500">v1.3</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">100%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">June 5, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Mar 5, 2026</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Completed
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-gray-400 cursor-not-allowed">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-purple-600 hover:text-purple-900">
                                        <i class='bx bx-history'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="mt-4 flex items-center justify-between">
                <div class="text-sm text-gray-600">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">16</span> learning paths
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-500">Previous</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-blue-600 font-medium">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">2</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">3</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">4</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">Next</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- View Progress Detail Modal -->
    <x-modal id="view-progress-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h2 class="text-lg font-medium text-gray-900">
                        Learning Progress Details
                    </h2>
                    <div class="mt-1 flex items-center text-sm text-gray-600">
                        <span class="font-medium text-gray-900 mr-1">John Doe</span>
                        <span class="text-gray-500 mx-1">|</span>
                        <span>Supervisor Development Path</span>
                        <span class="text-gray-500 mx-1">|</span>
                        <span>v1.2</span>
                    </div>
                </div>
                
                <div class="flex space-x-2">
                    <button class="inline-flex items-center px-3 py-1 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                        <i class='bx bx-download mr-1'></i> Export
                    </button>
                    <button class="inline-flex items-center px-3 py-1 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                        <i class='bx bx-printer mr-1'></i> Print
                    </button>
                </div>
            </div>
            
            <!-- Progress Overview -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Start Date</div>
                        <div class="text-lg font-semibold text-blue-700 mt-1">Sept 2, 2025</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Target Date</div>
                        <div class="text-lg font-semibold text-blue-700 mt-1">Mar 2, 2026</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Overall Progress</div>
                        <div class="text-lg font-semibold text-blue-700 mt-1">45%</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Status</div>
                        <div class="text-lg font-semibold text-blue-700 mt-1">On Track</div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="w-full bg-blue-200 rounded-full h-4">
                        <div class="bg-blue-600 h-4 rounded-full text-xs text-white text-center py-0.5" style="width: 45%">45%</div>
                    </div>
                </div>
            </div>
            
            <!-- Required Components Progress -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Required Components Progress</h3>
                
                <div class="space-y-4 mt-4">
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Leadership Fundamentals</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Workshop</span>
                                    <span>2 days</span>
                                </div>
                            </div>
                            <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Completed</div>
                        </div>
                        <div class="mt-2 text-sm text-gray-600">
                            <span class="font-medium">Completed on:</span> Sept 20, 2025
                        </div>
                        <div class="mt-2 text-xs text-gray-500">
                            <div class="flex items-center">
                                <i class='bx bx-badge-check text-green-600 mr-1'></i>
                                <span>Attendance confirmed</span>
                            </div>
                            <div class="flex items-center mt-1">
                                <i class='bx bx-badge-check text-green-600 mr-1'></i>
                                <span>Assessment completed with score: 92%</span>
                            </div>
                            <div class="flex items-center mt-1">
                                <i class='bx bx-badge-check text-green-600 mr-1'></i>
                                <span>Certificate issued</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Conflict Resolution Skills</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Online Course</span>
                                    <span>8 hours</span>
                                </div>
                            </div>
                            <div class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">In Progress</div>
                        </div>
                        <div class="mt-2 text-sm text-gray-600">
                            <div class="flex items-center mb-1">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 60%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-900">60%</span>
                            </div>
                            <span class="font-medium">Started on:</span> Oct 5, 2025
                        </div>
                        <div class="mt-2 text-xs text-gray-500">
                            <div class="flex items-center">
                                <i class='bx bx-badge-check text-green-600 mr-1'></i>
                                <span>Modules 1-3 completed</span>
                            </div>
                            <div class="flex items-center mt-1">
                                <i class='bx bx-time text-yellow-600 mr-1'></i>
                                <span>Module 4 in progress</span>
                            </div>
                            <div class="flex items-center mt-1">
                                <i class='bx bx-x text-gray-400 mr-1'></i>
                                <span>Module 5 not started</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Effective Team Management</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Seminar</span>
                                    <span>1 day</span>
                                </div>
                            </div>
                            <div class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Not Started</div>
                        </div>
                        <div class="mt-2 text-sm text-gray-600">
                            <span class="font-medium">Scheduled for:</span> Nov 15, 2025
                        </div>
                        <div class="mt-2 text-xs text-gray-500">
                            <div class="flex items-center">
                                <i class='bx bx-calendar text-blue-600 mr-1'></i>
                                <span>Registration confirmed</span>
                            </div>
                            <div class="flex items-center mt-1">
                                <i class='bx bx-book text-gray-600 mr-1'></i>
                                <span>Pre-reading materials available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recommended Resources Progress -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Recommended Resources Progress</h3>
                
                <div class="space-y-4 mt-4">
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Harvard Business Review: Leadership Articles</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Reading</span>
                                </div>
                            </div>
                            <div class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Recommended</div>
                        </div>
                        <div class="mt-2 text-sm text-gray-600">
                            <div class="flex items-center mb-1">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 25%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-900">25%</span>
                            </div>
                        </div>
                        <div class="mt-2 text-xs text-gray-500">
                            <div class="flex items-center">
                                <i class='bx bx-badge-check text-green-600 mr-1'></i>
                                <span>1 of 4 articles completed</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Leadership Podcast Series</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Audio</span>
                                </div>
                            </div>
                            <div class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Recommended</div>
                        </div>
                        <div class="mt-2 text-sm text-gray-600">
                            <div class="flex items-center mb-1">
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 40%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-900">40%</span>
                            </div>
                        </div>
                        <div class="mt-2 text-xs text-gray-500">
                            <div class="flex items-center">
                                <i class='bx bx-badge-check text-green-600 mr-1'></i>
                                <span>2 of 5 episodes completed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Learning History -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Learning Activity History</h3>
                
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Activity</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Component</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Details</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900">Oct 15, 2025</td>
                                <td class="px-4 py-3 text-sm text-gray-900">Module Completion</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Conflict Resolution Skills</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Completed Module 3 with score: 85%</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900">Oct 10, 2025</td>
                                <td class="px-4 py-3 text-sm text-gray-900">Resource Access</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Leadership Podcast Series</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Completed Episode 2: "Leading Through Change"</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900">Oct 5, 2025</td>
                                <td class="px-4 py-3 text-sm text-gray-900">Course Start</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Conflict Resolution Skills</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Started online course</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900">Sept 20, 2025</td>
                                <td class="px-4 py-3 text-sm text-gray-900">Training Completion</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Leadership Fundamentals</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Completed workshop with assessment score: 92%</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900">Sept 2, 2025</td>
                                <td class="px-4 py-3 text-sm text-gray-900">Learning Path Assignment</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Supervisor Development Path</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Learning path assigned</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-2 text-center">
                    <button class="text-sm font-medium text-blue-600 hover:text-blue-800">View Complete History</button>
                </div>
            </div>
            
            <div class="flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'view-progress-modal')">
                    Close
                </button>
                <button type="button" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Update Progress
                </button>
            </div>
        </div>
    </x-modal>
</x-app-layout>
