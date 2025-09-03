<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Learning Assignment') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Assign Learning Paths</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Assign structured learning paths to employees for their ongoing development.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-export mr-2'></i>
                            Export Assignments
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'create-assignment-modal')">
                            <i class='bx bx-plus mr-2'></i>
                            New Assignment
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Assignments Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
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
                            <option value="assigned">Assigned</option>
                            <option value="in_progress">In Progress</option>
                            <option value="completed">Completed</option>
                            <option value="overdue">Overdue</option>
                        </select>
                    </div>
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Search</label>
                        <div class="relative rounded-md shadow-sm">
                            <input type="text" name="search" id="search" class="focus:ring-primary focus:border-primary block w-full pr-10 sm:text-sm border-gray-300 rounded-md" placeholder="Search by employee...">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="bx bx-search text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Assignments Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Employee</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Learning Path</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Assigned Date</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Target Completion</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Progress</th>
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
                            <td class="px-4 py-4 text-sm text-gray-700">Sept 2, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Mar 2, 2026</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">45%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                    In Progress
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" x-data="" x-on:click="$dispatch('open-modal', 'view-assignment-modal')">
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
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 15, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 15, 2026</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 25%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">25%</span>
                                </div>
                            </td>
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
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-trash'></i>
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
                            <td class="px-4 py-4 text-sm text-gray-700">July 20, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Jan 20, 2027</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 10%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">10%</span>
                                </div>
                            </td>
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
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-trash'></i>
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
                            <td class="px-4 py-4 text-sm text-gray-700">June 5, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Mar 5, 2026</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">100%</span>
                                </div>
                            </td>
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
                                    <button class="text-gray-400 cursor-not-allowed">
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">16</span> assignments
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
    
    <!-- Create Assignment Modal -->
    <x-modal id="create-assignment-modal" :show="false" max-width="3xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Assign Learning Path
            </h2>
            
            <form>
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Learning Path Selection</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="learning_path" class="block text-sm font-medium text-gray-700 mb-1">Learning Path</label>
                            <select id="learning_path" name="learning_path" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">Select Learning Path</option>
                                <option value="supervisor_dev">Supervisor Development Path (v1.2)</option>
                                <option value="financial_analyst">Financial Analyst Career Path (v2.0)</option>
                                <option value="it_security">IT Security Specialist Path (v1.0)</option>
                                <option value="hr_onboarding">HR Onboarding Specialist (v1.3)</option>
                            </select>
                        </div>
                        <div>
                            <label for="targeted_competency" class="block text-sm font-medium text-gray-700 mb-1">Targeted Competency</label>
                            <select id="targeted_competency" name="targeted_competency" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">All Competencies</option>
                                <option value="leadership">Leadership</option>
                                <option value="communication">Communication</option>
                                <option value="technical">Technical Skills</option>
                                <option value="teamwork">Teamwork</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                            <input type="date" id="start_date" name="start_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="target_completion" class="block text-sm font-medium text-gray-700 mb-1">Target Completion Date</label>
                            <input type="date" id="target_completion" name="target_completion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="learning_notes" class="block text-sm font-medium text-gray-700 mb-1">Assignment Notes</label>
                        <textarea id="learning_notes" name="learning_notes" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Optional notes about this learning assignment..."></textarea>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Employee Selection</h3>
                    
                    <div class="mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <label for="department_filter" class="block text-sm font-medium text-gray-700">Filter by Department</label>
                            <div class="flex items-center">
                                <input id="select_all" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="select_all" class="ml-2 block text-xs text-gray-700">
                                    Select All
                                </label>
                            </div>
                        </div>
                        <select id="department_filter" name="department_filter" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Departments</option>
                            <option value="it">IT Department</option>
                            <option value="hr">Human Resources</option>
                            <option value="finance">Finance</option>
                            <option value="operations">Operations</option>
                        </select>
                    </div>
                    
                    <div class="border border-gray-200 rounded-md overflow-hidden">
                        <div class="max-h-60 overflow-y-auto">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 sticky top-0">
                                    <tr>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Select</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Employee</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Department</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2">
                                            <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            John Doe
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Team Lead
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Operations
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2">
                                            <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            Jane Smith
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Analyst
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Finance
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2">
                                            <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            Robert Johnson
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Security Engineer
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            IT Department
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2">
                                            <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            Emily Wilson
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            HR Coordinator
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Human Resources
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-xs text-gray-500">
                            4 employees selected
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="notification_message" class="block text-sm font-medium text-gray-700 mb-1">Notification Message</label>
                    <textarea id="notification_message" name="notification_message" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Optional message to include with the assignment notification..."></textarea>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'create-assignment-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Assign Learning Path
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
    
    <!-- View Assignment Modal -->
    <x-modal id="view-assignment-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h2 class="text-lg font-medium text-gray-900">
                        Learning Path Assignment Details
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
            
            <!-- Assignment Overview -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Assigned Date</div>
                        <div class="text-lg font-semibold text-blue-700 mt-1">Sept 2, 2025</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Target Completion</div>
                        <div class="text-lg font-semibold text-blue-700 mt-1">Mar 2, 2026</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Progress</div>
                        <div class="text-lg font-semibold text-blue-700 mt-1">45%</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Status</div>
                        <div class="text-lg font-semibold text-blue-700 mt-1">In Progress</div>
                    </div>
                </div>
                <div class="mt-3 text-sm text-blue-700">
                    <div><span class="font-medium">Notes:</span> This learning path is designed to prepare John for a supervisory role in the Operations department. Focus on team management skills.</div>
                </div>
            </div>
            
            <!-- Learning Progress -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Learning Progress</h3>
                
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
                    </div>
                </div>
            </div>
            
            <!-- Certification & Competency Progress -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Certification & Competency Progress</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Competency Development</h4>
                        <div class="space-y-2">
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-medium text-gray-700">Leadership</span>
                                    <span class="text-xs font-medium text-gray-700">65%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-green-500 h-1.5 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-medium text-gray-700">Communication</span>
                                    <span class="text-xs font-medium text-gray-700">40%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-blue-500 h-1.5 rounded-full" style="width: 40%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-medium text-gray-700">Teamwork</span>
                                    <span class="text-xs font-medium text-gray-700">55%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 55%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-medium text-gray-700">Problem Solving</span>
                                    <span class="text-xs font-medium text-gray-700">30%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-red-500 h-1.5 rounded-full" style="width: 30%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Linked Certification</h4>
                        <div class="flex items-center">
                            <i class='bx bx-badge-check text-blue-600 mr-2 text-xl'></i>
                            <span class="text-sm text-gray-900">Leadership Certification</span>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Progress: 45% - On track for completion by target date.</p>
                        <div class="mt-2 flex items-center">
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                            </div>
                            <span class="text-sm font-medium text-gray-900">45%</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'view-assignment-modal')">
                    Close
                </button>
                <button type="button" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Update Progress
                </button>
            </div>
        </div>
    </x-modal>
</x-app-layout>
