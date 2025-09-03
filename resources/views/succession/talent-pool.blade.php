<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Talent Pool Management') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Succession Talent Pool</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Identify and manage potential candidates for succession planning.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary" x-data="" x-on:click="$dispatch('open-modal', 'import-employees-modal')">
                            <i class='bx bx-import mr-2'></i>
                            Import Employees
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'add-to-talent-pool-modal')">
                            <i class='bx bx-plus-circle mr-2'></i>
                            Add to Talent Pool
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Filters Section -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div>
                        <label for="department_filter" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                        <select id="department_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Departments</option>
                            <option value="operations">Operations</option>
                            <option value="finance">Finance</option>
                            <option value="it">IT</option>
                            <option value="hr">Human Resources</option>
                        </select>
                    </div>
                    <div>
                        <label for="position_filter" class="block text-sm font-medium text-gray-700 mb-1">Current Position</label>
                        <select id="position_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Positions</option>
                            <option value="manager">Manager</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="specialist">Specialist</option>
                            <option value="analyst">Analyst</option>
                        </select>
                    </div>
                    <div>
                        <label for="competency_level" class="block text-sm font-medium text-gray-700 mb-1">Competency Level</label>
                        <select id="competency_level" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Levels</option>
                            <option value="expert">Expert (90%+)</option>
                            <option value="advanced">Advanced (75-89%)</option>
                            <option value="intermediate">Intermediate (60-74%)</option>
                            <option value="basic">Basic (Below 60%)</option>
                        </select>
                    </div>
                    <div>
                        <label for="training_status" class="block text-sm font-medium text-gray-700 mb-1">Training Status</label>
                        <select id="training_status" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Statuses</option>
                            <option value="completed">Completed All Required</option>
                            <option value="in_progress">In Progress</option>
                            <option value="not_started">Not Started</option>
                        </select>
                    </div>
                    <div>
                        <label for="readiness_status" class="block text-sm font-medium text-gray-700 mb-1">Readiness Status</label>
                        <select id="readiness_status" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Statuses</option>
                            <option value="ready_now">Ready Now</option>
                            <option value="ready_soon">Ready in 1-2 Years</option>
                            <option value="future_potential">Future Potential</option>
                            <option value="not_assessed">Not Assessed</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 flex justify-end">
                    <button class="btn btn-primary">
                        <i class='bx bx-filter-alt mr-2'></i>
                        Apply Filters
                    </button>
                </div>
            </div>
            
            <!-- Talent Pool Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-blue-700">Total in Pool</p>
                            <h4 class="mt-1 text-2xl font-bold text-blue-900">42</h4>
                        </div>
                        <div class="rounded-full bg-blue-200 p-3">
                            <i class='bx bx-group text-blue-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-blue-600">
                        <span class="font-medium">17%</span> of total employees
                    </p>
                </div>
                
                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-green-700">Ready Now</p>
                            <h4 class="mt-1 text-2xl font-bold text-green-900">12</h4>
                        </div>
                        <div class="rounded-full bg-green-200 p-3">
                            <i class='bx bx-check-shield text-green-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-green-600">
                        <span class="font-medium">29%</span> of talent pool
                    </p>
                </div>
                
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-yellow-700">Ready in 1-2 Years</p>
                            <h4 class="mt-1 text-2xl font-bold text-yellow-900">18</h4>
                        </div>
                        <div class="rounded-full bg-yellow-200 p-3">
                            <i class='bx bx-time-five text-yellow-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-yellow-600">
                        <span class="font-medium">43%</span> of talent pool
                    </p>
                </div>
                
                <div class="bg-purple-50 border border-purple-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-purple-700">Future Potential</p>
                            <h4 class="mt-1 text-2xl font-bold text-purple-900">12</h4>
                        </div>
                        <div class="rounded-full bg-purple-200 p-3">
                            <i class='bx bx-bulb text-purple-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-purple-600">
                        <span class="font-medium">28%</span> of talent pool
                    </p>
                </div>
            </div>
            
            <!-- Talent Pool Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Employee</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Current Position</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Department</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Competency Level</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Training Status</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Readiness</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Target Roles</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-blue-700">JD</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">John Doe</div>
                                        <div class="text-xs text-gray-500">john.doe@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Team Lead</td>
                            <td class="px-4 py-4 text-sm text-gray-500">Operations</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2 w-24">
                                        <div class="bg-green-500 h-2.5 rounded-full" style="width: 85%"></div>
                                    </div>
                                    <span class="text-xs font-medium text-gray-900">85%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Completed
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Ready Now
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Branch Manager, Operations Manager</td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" x-data="" x-on:click="$dispatch('open-modal', 'view-employee-modal')">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-green-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-green-700">JS</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Jane Smith</div>
                                        <div class="text-xs text-gray-500">jane.smith@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Senior Analyst</td>
                            <td class="px-4 py-4 text-sm text-gray-500">Finance</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2 w-24">
                                        <div class="bg-green-500 h-2.5 rounded-full" style="width: 92%"></div>
                                    </div>
                                    <span class="text-xs font-medium text-gray-900">92%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Completed
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Ready Now
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Finance Manager, Controller</td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-purple-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-purple-700">RJ</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Robert Johnson</div>
                                        <div class="text-xs text-gray-500">robert.johnson@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">IT Specialist</td>
                            <td class="px-4 py-4 text-sm text-gray-500">IT</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2 w-24">
                                        <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 78%"></div>
                                    </div>
                                    <span class="text-xs font-medium text-gray-900">78%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    In Progress
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Ready in 1-2 Years
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">IT Manager, Security Lead</td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-red-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-red-700">EW</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Emily Wilson</div>
                                        <div class="text-xs text-gray-500">emily.wilson@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">HR Coordinator</td>
                            <td class="px-4 py-4 text-sm text-gray-500">Human Resources</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2 w-24">
                                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 65%"></div>
                                    </div>
                                    <span class="text-xs font-medium text-gray-900">65%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    In Progress
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">
                                    Future Potential
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">HR Manager</td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-trash'></i>
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">42</span> employees
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
    
    <!-- Add to Talent Pool Modal -->
    <x-modal id="add-to-talent-pool-modal" :show="false" max-width="2xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Add Employee to Talent Pool
            </h2>
            
            <div class="mb-4">
                <label for="employee_search" class="block text-sm font-medium text-gray-700 mb-1">Search Employee</label>
                <div class="relative">
                    <input type="text" id="employee_search" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 pl-10" placeholder="Search by name, ID, or email...">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class='bx bx-search text-gray-400'></i>
                    </div>
                </div>
            </div>
            
            <div class="mb-4">
                <label for="target_roles" class="block text-sm font-medium text-gray-700 mb-1">Target Roles</label>
                <select id="target_roles" multiple class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <option value="branch_manager">Branch Manager</option>
                    <option value="operations_manager">Operations Manager</option>
                    <option value="finance_manager">Finance Manager</option>
                    <option value="controller">Controller</option>
                    <option value="it_manager">IT Manager</option>
                    <option value="security_lead">Security Lead</option>
                    <option value="hr_manager">HR Manager</option>
                </select>
                <p class="mt-1 text-xs text-gray-500">Select one or more target roles for this employee</p>
            </div>
            
            <div class="mb-4">
                <label for="readiness_level" class="block text-sm font-medium text-gray-700 mb-1">Initial Readiness Assessment</label>
                <select id="readiness_level" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <option value="">Select Readiness Level</option>
                    <option value="ready_now">Ready Now</option>
                    <option value="ready_soon">Ready in 1-2 Years</option>
                    <option value="future_potential">Future Potential</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
                <textarea id="notes" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Add any relevant notes about this employee's potential..."></textarea>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'add-to-talent-pool-modal')">
                    Cancel
                </button>
                <button type="button" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Add to Talent Pool
                </button>
            </div>
        </div>
    </x-modal>
    
    <!-- Import Employees Modal -->
    <x-modal id="import-employees-modal" :show="false" max-width="md" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Import Employees from Core HCM
            </h2>
            
            <div class="mb-4">
                <label for="import_criteria" class="block text-sm font-medium text-gray-700 mb-1">Import Criteria</label>
                <select id="import_criteria" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <option value="performance">High Performers (Top 10%)</option>
                    <option value="tenure">Tenure (3+ years)</option>
                    <option value="competency">Competency Level (Advanced+)</option>
                    <option value="training">Training Completion (90%+)</option>
                    <option value="custom">Custom Criteria</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="department_filter_import" class="block text-sm font-medium text-gray-700 mb-1">Department Filter</label>
                <select id="department_filter_import" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <option value="">All Departments</option>
                    <option value="operations">Operations</option>
                    <option value="finance">Finance</option>
                    <option value="it">IT</option>
                    <option value="hr">Human Resources</option>
                </select>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'import-employees-modal')">
                    Cancel
                </button>
                <button type="button" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Import Employees
                </button>
            </div>
        </div>
    </x-modal>
    
    <!-- View Employee Modal -->
    <x-modal id="view-employee-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <div class="flex justify-between items-start mb-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-16 w-16 rounded-full bg-blue-200 flex items-center justify-center">
                        <span class="text-xl font-medium text-blue-700">JD</span>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-xl font-bold text-gray-900">John Doe</h2>
                        <div class="flex items-center mt-1 text-sm text-gray-500">
                            <span class="mr-2">Team Lead, Operations</span>
                            <span class="w-1 h-1 bg-gray-500 rounded-full mx-2"></span>
                            <span>ID: EMP-2025-042</span>
                        </div>
                        <div class="mt-2">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                Ready Now
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="flex space-x-2">
                    <button class="text-blue-600 hover:text-blue-900">
                        <i class='bx bx-printer text-xl'></i>
                    </button>
                    <button class="text-green-600 hover:text-green-900">
                        <i class='bx bx-edit-alt text-xl'></i>
                    </button>
                    <button class="text-gray-400" x-on:click="$dispatch('close-modal', 'view-employee-modal')">
                        <i class='bx bx-x text-xl'></i>
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Profile Information -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-sm font-medium text-gray-700 mb-3">Profile Information</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <p class="text-xs text-gray-500">Email</p>
                            <p class="text-sm font-medium text-gray-800">john.doe@example.com</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Phone</p>
                            <p class="text-sm font-medium text-gray-800">+1 (555) 123-4567</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Department</p>
                            <p class="text-sm font-medium text-gray-800">Operations</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Current Position</p>
                            <p class="text-sm font-medium text-gray-800">Team Lead</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Years in Position</p>
                            <p class="text-sm font-medium text-gray-800">3 years, 2 months</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Total Tenure</p>
                            <p class="text-sm font-medium text-gray-800">5 years, 8 months</p>
                        </div>
                    </div>
                </div>
                
                <!-- Competency Summary -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-sm font-medium text-gray-700 mb-3">Competency Summary</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Leadership</p>
                                <p class="text-xs font-medium text-gray-800">92%</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Operations Management</p>
                                <p class="text-xs font-medium text-gray-800">88%</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Communication</p>
                                <p class="text-xs font-medium text-gray-800">85%</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Problem Solving</p>
                                <p class="text-xs font-medium text-gray-800">90%</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Strategic Thinking</p>
                                <p class="text-xs font-medium text-gray-800">78%</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 78%"></div>
                            </div>
                        </div>
                        
                        <div class="pt-2">
                            <a href="#" class="text-xs font-medium text-blue-600 hover:text-blue-800">
                                View Full Competency Profile
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Training & Learning Summary -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-sm font-medium text-gray-700 mb-3">Training & Learning</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <p class="text-xs text-gray-500">Completed Training Programs</p>
                            <p class="text-sm font-medium text-gray-800">8 of 8 required</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Learning Paths Completed</p>
                            <p class="text-sm font-medium text-gray-800">2 of 2 assigned</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Certifications</p>
                            <p class="text-sm font-medium text-gray-800">3 active certifications</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Latest Completion</p>
                            <p class="text-sm font-medium text-gray-800">Leadership Excellence Program (Aug 2025)</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Average Assessment Score</p>
                            <p class="text-sm font-medium text-gray-800">92%</p>
                        </div>
                        
                        <div class="pt-2">
                            <a href="#" class="text-xs font-medium text-blue-600 hover:text-blue-800">
                                View Training & Learning History
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Target Roles & Readiness -->
            <div class="mt-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Target Roles & Readiness Assessment</h3>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-200 rounded-lg">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Target Role</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role Fit</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Skills Match</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Training Match</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Experience Match</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Overall Readiness</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="text-sm font-medium text-gray-900">Branch Manager</div>
                                    <div class="text-xs text-gray-500">Operations Department</div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 95%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">95%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">90%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">100%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 75%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">75%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Ready Now (90%)
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="text-sm font-medium text-gray-900">Operations Manager</div>
                                    <div class="text-xs text-gray-500">Corporate Office</div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">85%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 88%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">88%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">100%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 70%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">70%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Ready Now (85%)
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Development Notes -->
            <div class="mt-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Development Notes & Recommendations</h3>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="prose prose-sm max-w-none text-gray-800">
                        <p>John has demonstrated exceptional leadership skills and operational knowledge. His proactive approach to problem-solving and team management makes him an ideal candidate for the Branch Manager position.</p>
                        <p class="mt-2">Areas for development:</p>
                        <ul class="mt-1 list-disc list-inside">
                            <li>Additional exposure to financial management aspects of branch operations</li>
                            <li>Strategic planning for multi-unit operations</li>
                            <li>Advanced change management techniques</li>
                        </ul>
                        <p class="mt-2">Recommended development actions:</p>
                        <ol class="mt-1 list-decimal list-inside">
                            <li>Shadow current Branch Manager for 2 weeks in Q4 2025</li>
                            <li>Complete "Strategic Planning for Managers" course by December 2025</li>
                            <li>Participate in the next regional operations planning session</li>
                        </ol>
                    </div>
                    
                    <div class="mt-4 flex justify-end">
                        <a href="{{ route('succession.development-plans') }}" class="text-sm font-medium text-primary hover:text-primary-dark">
                            Create Development Plan →
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'view-employee-modal')">
                    Close
                </button>
                <button type="button" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Update Profile
                </button>
            </div>
        </div>
    </x-modal>
</x-app-layout>
