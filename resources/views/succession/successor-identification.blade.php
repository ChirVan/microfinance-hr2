<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Successor Identification') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Successor Identification & Matching</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Match potential successors to critical roles based on competencies, experience, and potential.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary" x-data="" x-on:click="$dispatch('open-modal', 'run-matching-modal')">
                            <i class='bx bx-refresh mr-2'></i>
                            Run Auto-Matching
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'assign-successor-modal')">
                            <i class='bx bx-link mr-2'></i>
                            Assign Successor
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Filters Section -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label for="role_filter" class="block text-sm font-medium text-gray-700 mb-1">Critical Role</label>
                        <select id="role_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Critical Roles</option>
                            <option value="branch_manager">Branch Manager</option>
                            <option value="finance_director">Finance Director</option>
                            <option value="it_manager">IT Manager</option>
                            <option value="hr_manager">HR Manager</option>
                        </select>
                    </div>
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
                        <label for="match_level" class="block text-sm font-medium text-gray-700 mb-1">Match Level</label>
                        <select id="match_level" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Levels</option>
                            <option value="excellent">Excellent (90%+)</option>
                            <option value="good">Good (75-89%)</option>
                            <option value="moderate">Moderate (60-74%)</option>
                            <option value="low">Low (Below 60%)</option>
                        </select>
                    </div>
                    <div>
                        <label for="readiness_filter" class="block text-sm font-medium text-gray-700 mb-1">Readiness</label>
                        <select id="readiness_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Readiness</option>
                            <option value="ready_now">Ready Now</option>
                            <option value="ready_soon">Ready in 1-2 Years</option>
                            <option value="future_potential">Future Potential</option>
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
            
            <!-- Match Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-blue-700">Total Matches</p>
                            <h4 class="mt-1 text-2xl font-bold text-blue-900">36</h4>
                        </div>
                        <div class="rounded-full bg-blue-200 p-3">
                            <i class='bx bx-link text-blue-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-blue-600">
                        <span class="font-medium">24</span> critical roles with matches
                    </p>
                </div>
                
                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-green-700">Excellent Matches</p>
                            <h4 class="mt-1 text-2xl font-bold text-green-900">14</h4>
                        </div>
                        <div class="rounded-full bg-green-200 p-3">
                            <i class='bx bx-check-shield text-green-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-green-600">
                        <span class="font-medium">39%</span> of total matches
                    </p>
                </div>
                
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-yellow-700">Ready Now Successors</p>
                            <h4 class="mt-1 text-2xl font-bold text-yellow-900">12</h4>
                        </div>
                        <div class="rounded-full bg-yellow-200 p-3">
                            <i class='bx bx-user-check text-yellow-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-yellow-600">
                        <span class="font-medium">33%</span> of total matches
                    </p>
                </div>
                
                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-red-700">Roles Without Matches</p>
                            <h4 class="mt-1 text-2xl font-bold text-red-900">3</h4>
                        </div>
                        <div class="rounded-full bg-red-200 p-3">
                            <i class='bx bx-error-circle text-red-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-red-600">
                        <span class="font-medium">12.5%</span> of critical roles
                    </p>
                </div>
            </div>
            
            <!-- Successor Matches Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Critical Role</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Current Incumbent</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Potential Successor</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Current Position</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Match Score</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Readiness</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Gap Areas</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Branch Manager</div>
                                <div class="text-xs text-gray-500">Operations</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-blue-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-blue-700">RM</span>
                                    </div>
                                    <div class="ml-2 text-sm text-gray-500">Robert Miller</div>
                                </div>
                            </td>
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
                            <td class="px-4 py-4 text-sm text-gray-500">Team Lead, Operations</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 92%"></div>
                                    </div>
                                    <span class="text-xs font-medium text-gray-900">92%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Ready Now
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Strategic planning, Financial forecasting</td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" x-data="" x-on:click="$dispatch('open-modal', 'view-match-modal')">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <a href="{{ route('succession.development-plans') }}" class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-file-blank'></i>
                                    </a>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-x-circle'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Branch Manager</div>
                                <div class="text-xs text-gray-500">Operations</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-blue-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-blue-700">RM</span>
                                    </div>
                                    <div class="ml-2 text-sm text-gray-500">Robert Miller</div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
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
                            <td class="px-4 py-4 text-sm text-gray-500">Assistant Branch Manager</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 90%"></div>
                                    </div>
                                    <span class="text-xs font-medium text-gray-900">90%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Ready Now
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Team leadership, Strategic planning</td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <a href="{{ route('succession.development-plans') }}" class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-file-blank'></i>
                                    </a>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-x-circle'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Finance Director</div>
                                <div class="text-xs text-gray-500">Finance</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-green-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-green-700">MW</span>
                                    </div>
                                    <div class="ml-2 text-sm text-gray-500">Michael Wong</div>
                                </div>
                            </td>
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
                            <td class="px-4 py-4 text-sm text-gray-500">Senior Financial Analyst</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                        <div class="bg-yellow-500 h-2 rounded-full" style="width: 78%"></div>
                                    </div>
                                    <span class="text-xs font-medium text-gray-900">78%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Ready in 1-2 Years
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Strategic leadership, Stakeholder management</td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <a href="{{ route('succession.development-plans') }}" class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-file-blank'></i>
                                    </a>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-x-circle'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">IT Manager</div>
                                <div class="text-xs text-gray-500">IT</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-6 w-6 rounded-full bg-purple-200 flex items-center justify-center">
                                        <span class="text-xs font-medium text-purple-700">SP</span>
                                    </div>
                                    <div class="ml-2 text-sm text-gray-500">Sarah Patel</div>
                                </div>
                            </td>
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
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                                    </div>
                                    <span class="text-xs font-medium text-gray-900">85%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Ready in 1-2 Years
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">Budget management, Team leadership</td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <a href="{{ route('succession.development-plans') }}" class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-file-blank'></i>
                                    </a>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-x-circle'></i>
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">36</span> matches
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
    
    <!-- Run Auto-Matching Modal -->
    <x-modal id="run-matching-modal" :show="false" max-width="md" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Run Automatic Successor Matching
            </h2>
            
            <div class="mb-4">
                <label for="match_criteria" class="block text-sm font-medium text-gray-700 mb-1">Matching Criteria Weights</label>
                
                <div class="space-y-3 mt-2">
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xs font-medium text-gray-800">Competency Match</p>
                            <p class="text-xs font-medium text-gray-800">40%</p>
                        </div>
                        <input type="range" min="0" max="100" value="40" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xs font-medium text-gray-800">Experience Match</p>
                            <p class="text-xs font-medium text-gray-800">30%</p>
                        </div>
                        <input type="range" min="0" max="100" value="30" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xs font-medium text-gray-800">Performance History</p>
                            <p class="text-xs font-medium text-gray-800">20%</p>
                        </div>
                        <input type="range" min="0" max="100" value="20" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-xs font-medium text-gray-800">Training Completion</p>
                            <p class="text-xs font-medium text-gray-800">10%</p>
                        </div>
                        <input type="range" min="0" max="100" value="10" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                    </div>
                </div>
            </div>
            
            <div class="mb-4">
                <label for="match_threshold" class="block text-sm font-medium text-gray-700 mb-1">Minimum Match Threshold</label>
                <select id="match_threshold" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <option value="50">50% (Show all potential matches)</option>
                    <option value="60">60% (Moderate fit and above)</option>
                    <option value="70" selected>70% (Good fit and above)</option>
                    <option value="80">80% (Strong fit and above)</option>
                    <option value="90">90% (Excellent fit only)</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-primary focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <span class="ml-2 text-sm text-gray-700">Include employees not in talent pool</span>
                </label>
            </div>
            
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-primary focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <span class="ml-2 text-sm text-gray-700">Clear existing matches before running</span>
                </label>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'run-matching-modal')">
                    Cancel
                </button>
                <button type="button" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Run Matching
                </button>
            </div>
        </div>
    </x-modal>
    
    <!-- Assign Successor Modal -->
    <x-modal id="assign-successor-modal" :show="false" max-width="2xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Manually Assign Successor
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="critical_role" class="block text-sm font-medium text-gray-700 mb-1">Critical Role</label>
                    <select id="critical_role" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="">Select Critical Role</option>
                        <option value="branch_manager">Branch Manager - Operations</option>
                        <option value="finance_director">Finance Director - Finance</option>
                        <option value="it_manager">IT Manager - IT</option>
                        <option value="hr_manager">HR Manager - Human Resources</option>
                    </select>
                </div>
                <div>
                    <label for="incumbent" class="block text-sm font-medium text-gray-700 mb-1">Current Incumbent</label>
                    <input type="text" id="incumbent" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Current role holder" readonly>
                </div>
            </div>
            
            <div class="mb-4">
                <label for="successor_search" class="block text-sm font-medium text-gray-700 mb-1">Search for Successor</label>
                <div class="relative">
                    <input type="text" id="successor_search" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 pl-10" placeholder="Search by name, ID, or position...">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class='bx bx-search text-gray-400'></i>
                    </div>
                </div>
            </div>
            
            <div class="mb-4 border border-gray-200 rounded-md overflow-hidden">
                <div class="px-4 py-2 bg-gray-50 border-b border-gray-200">
                    <h3 class="text-sm font-medium text-gray-700">Potential Successors</h3>
                </div>
                <ul class="divide-y divide-gray-200 max-h-60 overflow-y-auto">
                    <li class="px-4 py-3 hover:bg-blue-50 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-200 flex items-center justify-center">
                                    <span class="text-xs font-medium text-blue-700">JD</span>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">John Doe</div>
                                    <div class="text-xs text-gray-500">Team Lead, Operations</div>
                                </div>
                            </div>
                            <div class="text-xs font-medium text-green-700">92% match</div>
                        </div>
                    </li>
                    <li class="px-4 py-3 hover:bg-blue-50 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-8 w-8 rounded-full bg-purple-200 flex items-center justify-center">
                                    <span class="text-xs font-medium text-purple-700">AT</span>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">Alice Thompson</div>
                                    <div class="text-xs text-gray-500">Assistant Branch Manager</div>
                                </div>
                            </div>
                            <div class="text-xs font-medium text-green-700">90% match</div>
                        </div>
                    </li>
                    <li class="px-4 py-3 hover:bg-blue-50 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-8 w-8 rounded-full bg-green-200 flex items-center justify-center">
                                    <span class="text-xs font-medium text-green-700">MS</span>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">Mark Smith</div>
                                    <div class="text-xs text-gray-500">Senior Operations Supervisor</div>
                                </div>
                            </div>
                            <div class="text-xs font-medium text-yellow-700">75% match</div>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="mb-4">
                <label for="readiness_level" class="block text-sm font-medium text-gray-700 mb-1">Readiness Assessment</label>
                <select id="readiness_level" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    <option value="">Select Readiness Level</option>
                    <option value="ready_now">Ready Now</option>
                    <option value="ready_soon">Ready in 1-2 Years</option>
                    <option value="future_potential">Future Potential</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="gap_areas" class="block text-sm font-medium text-gray-700 mb-1">Gap Areas</label>
                <textarea id="gap_areas" rows="2" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Enter any competency or experience gaps..."></textarea>
            </div>
            
            <div class="mb-4">
                <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
                <textarea id="notes" rows="2" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Add any additional notes..."></textarea>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'assign-successor-modal')">
                    Cancel
                </button>
                <button type="button" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Assign Successor
                </button>
            </div>
        </div>
    </x-modal>
    
    <!-- View Match Modal -->
    <x-modal id="view-match-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-900">Successor Match Details</h2>
                    <div class="flex items-center mt-1 text-sm text-gray-500">
                        <span class="mr-2">Branch Manager - Operations</span>
                        <span class="w-1 h-1 bg-gray-500 rounded-full mx-2"></span>
                        <span>John Doe (Potential Successor)</span>
                    </div>
                    <div class="mt-2">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                            92% Match
                        </span>
                        <span class="ml-2 px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                            Ready Now
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
                    <button class="text-gray-400" x-on:click="$dispatch('close-modal', 'view-match-modal')">
                        <i class='bx bx-x text-xl'></i>
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 h-12 w-12 rounded-full bg-blue-200 flex items-center justify-center">
                                <span class="text-sm font-medium text-blue-700">JD</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">John Doe</h3>
                                <p class="text-sm text-gray-500">Team Lead, Operations</p>
                            </div>
                        </div>
                        
                        <div class="space-y-3">
                            <div>
                                <p class="text-xs text-gray-500">Current Position</p>
                                <p class="text-sm font-medium text-gray-800">Team Lead, Operations</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Years in Position</p>
                                <p class="text-sm font-medium text-gray-800">3 years, 2 months</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Total Tenure</p>
                                <p class="text-sm font-medium text-gray-800">5 years, 8 months</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Performance Rating</p>
                                <p class="text-sm font-medium text-gray-800">Exceeds Expectations (Last 3 years)</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex-shrink-0 h-12 w-12 rounded-full bg-blue-200 flex items-center justify-center">
                                <span class="text-sm font-medium text-blue-700">RM</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Branch Manager</h3>
                                <p class="text-sm text-gray-500">Operations Department</p>
                            </div>
                        </div>
                        
                        <div class="space-y-3">
                            <div>
                                <p class="text-xs text-gray-500">Current Incumbent</p>
                                <p class="text-sm font-medium text-gray-800">Robert Miller (5 years in role)</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Role Criticality</p>
                                <p class="text-sm font-medium text-gray-800">High</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Risk Level</p>
                                <p class="text-sm font-medium text-gray-800">High</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Time to Proficiency</p>
                                <p class="text-sm font-medium text-gray-800">6-9 months</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Competency Match -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Competency Match</h3>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Leadership</p>
                                <div>
                                    <span class="text-xs font-medium text-gray-800">Required: 90%</span>
                                    <span class="mx-2 text-xs text-gray-500">|</span>
                                    <span class="text-xs font-medium text-green-700">Current: 92%</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Financial Management</p>
                                <div>
                                    <span class="text-xs font-medium text-gray-800">Required: 85%</span>
                                    <span class="mx-2 text-xs text-gray-500">|</span>
                                    <span class="text-xs font-medium text-yellow-700">Current: 78%</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 78%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Operational Excellence</p>
                                <div>
                                    <span class="text-xs font-medium text-gray-800">Required: 90%</span>
                                    <span class="mx-2 text-xs text-gray-500">|</span>
                                    <span class="text-xs font-medium text-green-700">Current: 95%</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Client Relationship Management</p>
                                <div>
                                    <span class="text-xs font-medium text-gray-800">Required: 80%</span>
                                    <span class="mx-2 text-xs text-gray-500">|</span>
                                    <span class="text-xs font-medium text-green-700">Current: 90%</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-xs font-medium text-gray-800">Strategic Thinking</p>
                                <div>
                                    <span class="text-xs font-medium text-gray-800">Required: 80%</span>
                                    <span class="mx-2 text-xs text-gray-500">|</span>
                                    <span class="text-xs font-medium text-yellow-700">Current: 72%</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-1.5">
                                <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 72%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 p-3 bg-blue-50 border border-blue-200 rounded-md">
                        <div class="flex items-start">
                            <i class='bx bx-info-circle text-blue-500 mt-0.5 mr-2'></i>
                            <div>
                                <h4 class="text-sm font-medium text-blue-800">Competency Analysis</h4>
                                <p class="mt-1 text-xs text-blue-700">
                                    John exceeds in Leadership, Operational Excellence, and Client Relationship Management. Development needed in Financial Management (gap: 7%) and Strategic Thinking (gap: 8%). Overall competency match is strong at 90%.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Experience Match -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Experience & Qualification Match</h3>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="text-xs font-medium uppercase text-gray-500 mb-2">Required Experience</h4>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                                    <div>
                                        <p class="text-sm text-gray-800">5+ years in operations management</p>
                                        <p class="text-xs text-gray-500">John has 5 years, 8 months</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                                    <div>
                                        <p class="text-sm text-gray-800">Team leadership experience</p>
                                        <p class="text-xs text-gray-500">Currently leading team of 8 staff</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class='bx bx-x-circle text-red-500 mt-0.5 mr-2'></i>
                                    <div>
                                        <p class="text-sm text-gray-800">Budget management experience</p>
                                        <p class="text-xs text-gray-500">Limited exposure to full P&L responsibility</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                                    <div>
                                        <p class="text-sm text-gray-800">Client relationship management</p>
                                        <p class="text-xs text-gray-500">Strong experience with key clients</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="text-xs font-medium uppercase text-gray-500 mb-2">Qualifications & Training</h4>
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                                    <div>
                                        <p class="text-sm text-gray-800">Bachelor's degree in related field</p>
                                        <p class="text-xs text-gray-500">B.Sc. in Business Administration</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                                    <div>
                                        <p class="text-sm text-gray-800">Leadership certification</p>
                                        <p class="text-xs text-gray-500">Completed Advanced Leadership Program</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class='bx bx-x-circle text-red-500 mt-0.5 mr-2'></i>
                                    <div>
                                        <p class="text-sm text-gray-800">Financial management training</p>
                                        <p class="text-xs text-gray-500">Not completed yet</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class='bx bx-check-circle text-green-500 mt-0.5 mr-2'></i>
                                    <div>
                                        <p class="text-sm text-gray-800">Industry-specific training</p>
                                        <p class="text-xs text-gray-500">Completed all required courses</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="mt-4 p-3 bg-blue-50 border border-blue-200 rounded-md">
                        <div class="flex items-start">
                            <i class='bx bx-info-circle text-blue-500 mt-0.5 mr-2'></i>
                            <div>
                                <h4 class="text-sm font-medium text-blue-800">Experience Analysis</h4>
                                <p class="mt-1 text-xs text-blue-700">
                                    John meets 85% of the experience requirements for the Branch Manager role. Key gaps are in full P&L responsibility and financial management training. Recommended to provide exposure to budget management responsibilities and complete the Financial Management for Managers course.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Development Recommendations -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Development Recommendations</h3>
                
                <div class="bg-gray-50 p-4 rounded-lg">
                    <div class="prose prose-sm max-w-none text-gray-800">
                        <ol class="space-y-2">
                            <li class="flex items-start">
                                <span class="inline-flex items-center justify-center h-5 w-5 rounded-full bg-blue-100 text-blue-800 text-xs font-medium mr-2 mt-0.5">1</span>
                                <div>
                                    <p class="font-medium">Financial Management Training</p>
                                    <p class="text-sm text-gray-600">Complete the "Financial Management for Managers" certification within next 3 months</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-flex items-center justify-center h-5 w-5 rounded-full bg-blue-100 text-blue-800 text-xs font-medium mr-2 mt-0.5">2</span>
                                <div>
                                    <p class="font-medium">Budget Management Experience</p>
                                    <p class="text-sm text-gray-600">Shadow current Branch Manager for quarterly budget review and planning process</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-flex items-center justify-center h-5 w-5 rounded-full bg-blue-100 text-blue-800 text-xs font-medium mr-2 mt-0.5">3</span>
                                <div>
                                    <p class="font-medium">Strategic Thinking Development</p>
                                    <p class="text-sm text-gray-600">Participate in the Strategic Planning Workshop and branch strategy sessions</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <span class="inline-flex items-center justify-center h-5 w-5 rounded-full bg-blue-100 text-blue-800 text-xs font-medium mr-2 mt-0.5">4</span>
                                <div>
                                    <p class="font-medium">Cross-Branch Exposure</p>
                                    <p class="text-sm text-gray-600">Temporary assignment (2 weeks) to another branch to gain broader operational perspective</p>
                                </div>
                            </li>
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
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'view-match-modal')">
                    Close
                </button>
                <a href="{{ route('succession.development-plans') }}" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Create Development Plan
                </a>
            </div>
        </div>
    </x-modal>
</x-app-layout>
