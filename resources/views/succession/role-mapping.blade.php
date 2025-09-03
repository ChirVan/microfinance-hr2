<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Role Mapping') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Critical Role Mapping</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Map critical roles to required competencies and identify risks.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary" x-data="" x-on:click="$dispatch('open-modal', 'import-roles-modal')">
                            <i class='bx bx-import mr-2'></i>
                            Import Roles
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'add-critical-role-modal')">
                            <i class='bx bx-plus-circle mr-2'></i>
                            Add Critical Role
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Filters Section -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
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
                        <label for="criticality_filter" class="block text-sm font-medium text-gray-700 mb-1">Criticality Level</label>
                        <select id="criticality_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Levels</option>
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                        </select>
                    </div>
                    <div>
                        <label for="risk_level" class="block text-sm font-medium text-gray-700 mb-1">Risk Level</label>
                        <select id="risk_level" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Levels</option>
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                        </select>
                    </div>
                    <div>
                        <label for="status_filter" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select id="status_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Statuses</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
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
            
            <!-- Role Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-blue-700">Total Critical Roles</p>
                            <h4 class="mt-1 text-2xl font-bold text-blue-900">24</h4>
                        </div>
                        <div class="rounded-full bg-blue-200 p-3">
                            <i class='bx bx-briefcase text-blue-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-blue-600">
                        <span class="font-medium">8%</span> of total positions
                    </p>
                </div>
                
                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-red-700">High Risk Roles</p>
                            <h4 class="mt-1 text-2xl font-bold text-red-900">7</h4>
                        </div>
                        <div class="rounded-full bg-red-200 p-3">
                            <i class='bx bx-error-circle text-red-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-red-600">
                        <span class="font-medium">29%</span> of critical roles
                    </p>
                </div>
                
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-yellow-700">Medium Risk Roles</p>
                            <h4 class="mt-1 text-2xl font-bold text-yellow-900">11</h4>
                        </div>
                        <div class="rounded-full bg-yellow-200 p-3">
                            <i class='bx bx-error text-yellow-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-yellow-600">
                        <span class="font-medium">46%</span> of critical roles
                    </p>
                </div>
                
                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-green-700">Low Risk Roles</p>
                            <h4 class="mt-1 text-2xl font-bold text-green-900">6</h4>
                        </div>
                        <div class="rounded-full bg-green-200 p-3">
                            <i class='bx bx-check-circle text-green-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-green-600">
                        <span class="font-medium">25%</span> of critical roles
                    </p>
                </div>
            </div>
            
            <!-- Critical Roles Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Role Title</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Department</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Criticality</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Risk Level</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Potential Impact</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Current Incumbent</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Succession Status</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Branch Manager</div>
                                <div class="text-xs text-gray-500">Main Branch</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Operations</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Financial loss, operational disruption, customer dissatisfaction</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-blue-700">RM</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Robert Miller</div>
                                        <div class="text-xs text-gray-500">5 years in role</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    2 Successors Ready
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" x-data="" x-on:click="$dispatch('open-modal', 'view-role-modal')">
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
                                <div class="text-sm font-medium text-gray-900">Finance Director</div>
                                <div class="text-xs text-gray-500">Head Office</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Finance</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Financial mismanagement, regulatory non-compliance, strategic planning</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-green-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-green-700">MW</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Michael Wong</div>
                                        <div class="text-xs text-gray-500">7 years in role</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    1 Successor in Development
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
                                <div class="text-sm font-medium text-gray-900">IT Manager</div>
                                <div class="text-xs text-gray-500">Head Office</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">IT</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Medium
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">System downtime, data security, technological adaptation</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-purple-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-purple-700">SP</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Sarah Patel</div>
                                        <div class="text-xs text-gray-500">3 years in role</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    2 Successors Ready
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
                                <div class="text-sm font-medium text-gray-900">HR Manager</div>
                                <div class="text-xs text-gray-500">Head Office</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Human Resources</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Medium
                                </span>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    High
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Talent management disruption, compliance issues, employee relations</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-8 w-8 rounded-full bg-red-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-red-700">LK</span>
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-sm font-medium text-gray-900">Lisa Kim</div>
                                        <div class="text-xs text-gray-500">2 years in role</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    No Successors Identified
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
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="mt-4 flex items-center justify-between">
                <div class="text-sm text-gray-600">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">24</span> critical roles
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
    
    <!-- Add Critical Role Modal -->
    <x-modal id="add-critical-role-modal" :show="false" max-width="2xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Add Critical Role
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="role_title" class="block text-sm font-medium text-gray-700 mb-1">Role Title</label>
                    <input type="text" id="role_title" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="e.g. Branch Manager">
                </div>
                <div>
                    <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                    <select id="department" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="">Select Department</option>
                        <option value="operations">Operations</option>
                        <option value="finance">Finance</option>
                        <option value="it">IT</option>
                        <option value="hr">Human Resources</option>
                    </select>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="criticality_level" class="block text-sm font-medium text-gray-700 mb-1">Criticality Level</label>
                    <select id="criticality_level" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="">Select Level</option>
                        <option value="high">High</option>
                        <option value="medium">Medium</option>
                        <option value="low">Low</option>
                    </select>
                </div>
                <div>
                    <label for="current_incumbent" class="block text-sm font-medium text-gray-700 mb-1">Current Incumbent</label>
                    <select id="current_incumbent" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="">Select Employee</option>
                        <option value="robert_miller">Robert Miller</option>
                        <option value="michael_wong">Michael Wong</option>
                        <option value="sarah_patel">Sarah Patel</option>
                        <option value="lisa_kim">Lisa Kim</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-4">
                <label for="key_responsibilities" class="block text-sm font-medium text-gray-700 mb-1">Key Responsibilities</label>
                <textarea id="key_responsibilities" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="List the key responsibilities for this role..."></textarea>
            </div>
            
            <div class="mb-4">
                <label for="required_competencies" class="block text-sm font-medium text-gray-700 mb-1">Required Competencies</label>
                <select id="required_competencies" multiple class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <option value="leadership">Leadership</option>
                    <option value="communication">Communication</option>
                    <option value="problem_solving">Problem Solving</option>
                    <option value="strategic_thinking">Strategic Thinking</option>
                    <option value="financial_management">Financial Management</option>
                    <option value="operational_excellence">Operational Excellence</option>
                    <option value="technical_expertise">Technical Expertise</option>
                </select>
                <p class="mt-1 text-xs text-gray-500">Select multiple competencies required for this role</p>
            </div>
            
            <div class="mb-4">
                <label for="business_impact" class="block text-sm font-medium text-gray-700 mb-1">Business Impact Assessment</label>
                <textarea id="business_impact" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Describe the potential business impact if this role becomes vacant..."></textarea>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="risk_level" class="block text-sm font-medium text-gray-700 mb-1">Risk Level</label>
                    <select id="risk_level" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="">Select Level</option>
                        <option value="high">High</option>
                        <option value="medium">Medium</option>
                        <option value="low">Low</option>
                    </select>
                </div>
                <div>
                    <label for="vacancy_risk" class="block text-sm font-medium text-gray-700 mb-1">Vacancy Risk</label>
                    <select id="vacancy_risk" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="">Select Level</option>
                        <option value="high">High (Retirement/Exit Likely)</option>
                        <option value="medium">Medium (Potential Exit)</option>
                        <option value="low">Low (Stable)</option>
                    </select>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'add-critical-role-modal')">
                    Cancel
                </button>
                <button type="button" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Add Role
                </button>
            </div>
        </div>
    </x-modal>
    
    <!-- Import Roles Modal -->
    <x-modal id="import-roles-modal" :show="false" max-width="md" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Import Roles from Organization Structure
            </h2>
            
            <div class="mb-4">
                <label for="import_criteria" class="block text-sm font-medium text-gray-700 mb-1">Import Criteria</label>
                <select id="import_criteria" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <option value="management">Management Roles</option>
                    <option value="specialized">Specialized Roles</option>
                    <option value="technical">Technical Roles</option>
                    <option value="custom">Custom Selection</option>
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
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'import-roles-modal')">
                    Cancel
                </button>
                <button type="button" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Import Roles
                </button>
            </div>
        </div>
    </x-modal>
    
    <!-- View Role Modal -->
    <x-modal id="view-role-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-900">Branch Manager</h2>
                    <div class="flex items-center mt-1 text-sm text-gray-500">
                        <span class="mr-2">Operations Department</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full mx-2"></span>
                        <span>Main Branch</span>
                    </div>
                    <div class="mt-2 flex space-x-2">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                            High Criticality
                        </span>
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                            High Risk
                        </span>
                    </div>
                </div>
                
                <div class="flex space-x-2">
                    <button class="text-blue-600 hover:text-blue-900">
                        <i class='bx bx-printer text-xl'></i>
                    </button>
                    <button class="text-green-600 hover:text-green-900">
                        <i class='bx bx-edit-alt text-xl'></i>
                    </button>
                    <button class="text-gray-400" x-on:click="$dispatch('close-modal', 'view-role-modal')">
                        <i class='bx bx-x text-xl'></i>
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Role Information -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-sm font-medium text-gray-700 mb-3">Role Information</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <p class="text-xs text-gray-500">Current Incumbent</p>
                            <div class="flex items-center mt-1">
                                <div class="flex-shrink-0 h-6 w-6 rounded-full bg-blue-200 flex items-center justify-center">
                                    <span class="text-xs font-medium text-blue-700">RM</span>
                                </div>
                                <p class="ml-2 text-sm font-medium text-gray-800">Robert Miller (5 years in role)</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Reporting To</p>
                            <p class="text-sm font-medium text-gray-800">Regional Manager</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Direct Reports</p>
                            <p class="text-sm font-medium text-gray-800">5 (Supervisors, Team Leads)</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Time to Proficiency</p>
                            <p class="text-sm font-medium text-gray-800">6-9 months</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Replacement Cost</p>
                            <p class="text-sm font-medium text-gray-800">$85,000 - $120,000</p>
                        </div>
                    </div>
                </div>
                
                <!-- Key Responsibilities -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-sm font-medium text-gray-700 mb-3">Key Responsibilities</h3>
                    
                    <div class="space-y-2">
                        <div class="flex items-start">
                            <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                            <p class="text-sm text-gray-800">Overall branch operations management and performance</p>
                        </div>
                        <div class="flex items-start">
                            <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                            <p class="text-sm text-gray-800">Financial oversight including budgeting and forecasting</p>
                        </div>
                        <div class="flex items-start">
                            <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                            <p class="text-sm text-gray-800">Team leadership and staff development</p>
                        </div>
                        <div class="flex items-start">
                            <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                            <p class="text-sm text-gray-800">Client relationship management and business development</p>
                        </div>
                        <div class="flex items-start">
                            <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                            <p class="text-sm text-gray-800">Ensuring compliance with regulatory requirements</p>
                        </div>
                        <div class="flex items-start">
                            <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                            <p class="text-sm text-gray-800">Risk management and security protocols implementation</p>
                        </div>
                    </div>
                </div>
                
                <!-- Required Competencies -->
                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-sm font-medium text-gray-700 mb-3">Required Competencies</h3>
                    
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Leadership</p>
                                <p class="text-xs font-medium text-gray-800">Essential</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-blue-500 h-1.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Financial Management</p>
                                <p class="text-xs font-medium text-gray-800">Essential</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-blue-500 h-1.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Operational Excellence</p>
                                <p class="text-xs font-medium text-gray-800">Essential</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-blue-500 h-1.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Client Relationship Management</p>
                                <p class="text-xs font-medium text-gray-800">Important</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-blue-500 h-1.5 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Strategic Thinking</p>
                                <p class="text-xs font-medium text-gray-800">Important</p>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-blue-500 h-1.5 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Risk Assessment -->
            <div class="mt-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Risk Assessment</h3>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <h4 class="text-xs font-medium text-gray-500">Vacancy Risk</h4>
                            <div class="mt-2 flex items-center">
                                <div class="w-full bg-gray-200 rounded-full h-2 mr-2">
                                    <div class="bg-yellow-500 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                                <span class="text-xs font-medium text-yellow-700">Medium</span>
                            </div>
                            <p class="mt-1 text-xs text-gray-600">Incumbent is mid-career, but potential retirement in 4-5 years</p>
                        </div>
                        <div>
                            <h4 class="text-xs font-medium text-gray-500">Business Impact</h4>
                            <div class="mt-2 flex items-center">
                                <div class="w-full bg-gray-200 rounded-full h-2 mr-2">
                                    <div class="bg-red-500 h-2 rounded-full" style="width: 90%"></div>
                                </div>
                                <span class="text-xs font-medium text-red-700">High</span>
                            </div>
                            <p class="mt-1 text-xs text-gray-600">Critical to operations, client relationships, and financial performance</p>
                        </div>
                        <div>
                            <h4 class="text-xs font-medium text-gray-500">Talent Availability</h4>
                            <div class="mt-2 flex items-center">
                                <div class="w-full bg-gray-200 rounded-full h-2 mr-2">
                                    <div class="bg-green-500 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                                <span class="text-xs font-medium text-green-700">Good</span>
                            </div>
                            <p class="mt-1 text-xs text-gray-600">2 internal candidates identified as ready successors</p>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h4 class="text-xs font-medium text-gray-500">Impact Assessment</h4>
                        <p class="mt-1 text-sm text-gray-700">
                            Vacancy in this role could lead to operational disruptions, potential financial losses, and negative impact on client relationships. Branch performance metrics could decline by an estimated 15-20% during transition period without a prepared successor. Regulatory compliance might also be at risk.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Potential Successors -->
            <div class="mt-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Potential Successors</h3>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-200 rounded-lg">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Employee</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Current Role</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Competency Match</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Experience Match</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Readiness</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3">
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
                                <td class="px-4 py-3 text-sm text-gray-500">Team Lead, Operations</td>
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
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">85%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Ready Now
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('succession.development-plans') }}" class="text-blue-600 hover:text-blue-900">
                                        View Development Plan
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 rounded-full bg-purple-200 flex items-center justify-center">
                                            <span class="text-xs font-medium text-purple-700">AT</span>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">Alice Thompson</div>
                                            <div class="text-xs text-gray-500">alice.thompson@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">Assistant Branch Manager</td>
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
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">92%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        Ready Now
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('succession.development-plans') }}" class="text-blue-600 hover:text-blue-900">
                                        View Development Plan
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 rounded-full bg-green-200 flex items-center justify-center">
                                            <span class="text-xs font-medium text-green-700">MS</span>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">Mark Smith</div>
                                            <div class="text-xs text-gray-500">mark.smith@example.com</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">Senior Operations Supervisor</td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 75%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-gray-900">75%</span>
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
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Ready in 1-2 Years
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{ route('succession.development-plans') }}" class="text-blue-600 hover:text-blue-900">
                                        Create Development Plan
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'view-role-modal')">
                    Close
                </button>
                <a href="{{ route('succession.successor-identification') }}" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Find Successors
                </a>
            </div>
        </div>
    </x-modal>
</x-app-layout>
