<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Competency Comparison') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Employee Competency Comparison</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Compare competency levels across employees or against benchmarks.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-export mr-2'></i>
                            Export
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-printer mr-2'></i>
                            Print Report
                        </button>
                    </div>
                </div>
            </div>

            <!-- Comparison Options -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-base p-4">
                <div 
                    x-data="{
                        compareType: 'employees', // 'employees', 'benchmark', 'jobRole'
                        comparisonMethod: 'sideBySide', // 'sideBySide', 'radar', 'bar'
                        selectedFramework: 'leadership',
                        selectedEmployees: ['employee1', 'employee2'],
                        selectedJobRoles: [],
                        benchmarks: [],
                        showAdvancedOptions: false
                    }"
                    class="space-y-4"
                >
                    <!-- Comparison Type Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Comparison Type</label>
                            <select 
                                x-model="compareType"
                                class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700"
                            >
                                <option value="employees">Compare Employees</option>
                                <option value="benchmark">Compare to Benchmark</option>
                                <option value="jobRole">Compare to Job Role Requirements</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Competency Framework</label>
                            <select 
                                x-model="selectedFramework"
                                class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700"
                            >
                                <option value="leadership">Leadership Development</option>
                                <option value="technical">Technical Skills</option>
                                <option value="customer-service">Customer Service</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Visualization Method</label>
                            <select 
                                x-model="comparisonMethod"
                                class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700"
                            >
                                <option value="sideBySide">Side by Side</option>
                                <option value="radar">Radar Chart</option>
                                <option value="bar">Bar Chart</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Employee Selection (shown when compareType is 'employees') -->
                    <div x-show="compareType === 'employees'" class="border-t border-gray-200 pt-4">
                        <label class="block text-sm font-medium text-gray-600 mb-2">Select Employees to Compare</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="employee1" value="employee1" x-model="selectedEmployees" class="rounded text-primary focus:ring-primary">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                                        <span class="text-xs font-medium text-gray-600">JD</span>
                                    </div>
                                    <label for="employee1" class="text-sm text-gray-700">John Doe - IT Manager</label>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="employee2" value="employee2" x-model="selectedEmployees" class="rounded text-primary focus:ring-primary">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                                        <span class="text-xs font-medium text-gray-600">AS</span>
                                    </div>
                                    <label for="employee2" class="text-sm text-gray-700">Alice Smith - Network Engineer</label>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="employee3" value="employee3" x-model="selectedEmployees" class="rounded text-primary focus:ring-primary">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                                        <span class="text-xs font-medium text-gray-600">RJ</span>
                                    </div>
                                    <label for="employee3" class="text-sm text-gray-700">Robert Johnson - Systems Analyst</label>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="employee4" value="employee4" x-model="selectedEmployees" class="rounded text-primary focus:ring-primary">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                                        <span class="text-xs font-medium text-gray-600">EW</span>
                                    </div>
                                    <label for="employee4" class="text-sm text-gray-700">Emily Wilson - IT Specialist</label>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="employee5" value="employee5" x-model="selectedEmployees" class="rounded text-primary focus:ring-primary">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                                        <span class="text-xs font-medium text-gray-600">MB</span>
                                    </div>
                                    <label for="employee5" class="text-sm text-gray-700">Michael Brown - Database Admin</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Benchmark Selection (shown when compareType is 'benchmark') -->
                    <div x-show="compareType === 'benchmark'" class="border-t border-gray-200 pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <label class="block text-sm font-medium text-gray-600">Select Employee and Benchmark</label>
                            <button class="text-xs text-primary hover:text-primary-dark">Select All</button>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">Employee</label>
                                <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                    <option>John Doe - IT Manager</option>
                                    <option>Alice Smith - Network Engineer</option>
                                    <option>Robert Johnson - Systems Analyst</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">Benchmark</label>
                                <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                    <option>Department Average</option>
                                    <option>Industry Average</option>
                                    <option>Top Performers</option>
                                    <option>Previous Assessment Period</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Job Role Selection (shown when compareType is 'jobRole') -->
                    <div x-show="compareType === 'jobRole'" class="border-t border-gray-200 pt-4">
                        <div class="flex justify-between items-center mb-2">
                            <label class="block text-sm font-medium text-gray-600">Select Employee and Job Role</label>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">Employee</label>
                                <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                    <option>John Doe - IT Manager</option>
                                    <option>Alice Smith - Network Engineer</option>
                                    <option>Robert Johnson - Systems Analyst</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-xs text-gray-500 mb-1">Compare To Job Role</label>
                                <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                    <option>Current Role (IT Manager)</option>
                                    <option>Senior IT Manager</option>
                                    <option>IT Director</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mt-3 flex items-center text-sm text-gray-600">
                            <i class='bx bx-info-circle mr-1 text-primary'></i>
                            <span>This comparison helps identify readiness for career advancement</span>
                        </div>
                    </div>
                    
                    <!-- Advanced Options Toggle -->
                    <div class="border-t border-gray-200 pt-4">
                        <button 
                            @click="showAdvancedOptions = !showAdvancedOptions"
                            class="flex items-center text-sm text-primary hover:text-primary-dark"
                        >
                            <i class='bx bx-slider-alt mr-1'></i>
                            <span x-text="showAdvancedOptions ? 'Hide Advanced Options' : 'Show Advanced Options'"></span>
                        </button>
                        
                        <!-- Advanced Options Panel -->
                        <div x-show="showAdvancedOptions" class="mt-3 p-3 bg-gray-100 rounded-md">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-medium text-gray-600 mb-1">Comparison Period</label>
                                    <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700 text-sm">
                                        <option>Current Assessment</option>
                                        <option>Previous Assessment</option>
                                        <option>Year-over-Year</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label class="block text-xs font-medium text-gray-600 mb-1">Competency Groups</label>
                                    <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700 text-sm">
                                        <option>All Competency Groups</option>
                                        <option>Leadership Skills Only</option>
                                        <option>Technical Skills Only</option>
                                        <option>Communication Skills Only</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mt-3">
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                    <span class="ml-2 text-xs text-gray-700">Show competency improvement opportunities</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Apply Button -->
                    <div class="flex justify-end">
                        <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                            <i class='bx bx-bar-chart-alt-2 mr-2'></i> Generate Comparison
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Side by Side Comparison Results (Employee to Employee) -->
            <div class="mb-8">
                <h4 class="text-base font-medium text-gray-700 mb-4">Side-by-Side Comparison: Leadership Framework</h4>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-3 bg-gray-50 text-left text-xs font-medium text-gray-600 uppercase tracking-wider w-1/4">Competency</th>
                                <th class="px-4 py-3 bg-gray-50 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    <div class="flex flex-col items-center">
                                        <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mb-1">
                                            <span class="text-xs font-medium text-gray-600">JD</span>
                                        </div>
                                        <span>John Doe</span>
                                    </div>
                                </th>
                                <th class="px-4 py-3 bg-gray-50 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    <div class="flex flex-col items-center">
                                        <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mb-1">
                                            <span class="text-xs font-medium text-gray-600">AS</span>
                                        </div>
                                        <span>Alice Smith</span>
                                    </div>
                                </th>
                                <th class="px-4 py-3 bg-gray-50 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">
                                    Difference
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Strategic Planning -->
                            <tr class="bg-indigo-50">
                                <td colspan="4" class="px-4 py-2 text-sm font-medium text-indigo-800">Leadership Group</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm font-medium text-gray-700">Strategic Planning</td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Advanced (3.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Intermediate (2.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        +1.0
                                    </span>
                                </td>
                            </tr>
                            
                            <!-- Team Leadership -->
                            <tr>
                                <td class="px-4 py-3 text-sm font-medium text-gray-700">Team Leadership</td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star-half text-amber-500'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Advanced (3.5)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Advanced (3.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        +0.5
                                    </span>
                                </td>
                            </tr>
                            
                            <!-- Change Management -->
                            <tr>
                                <td class="px-4 py-3 text-sm font-medium text-gray-700">Change Management</td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Advanced (3.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star-half text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Intermediate (2.5)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        +0.5
                                    </span>
                                </td>
                            </tr>
                            
                            <!-- Communication Group -->
                            <tr class="bg-blue-50">
                                <td colspan="4" class="px-4 py-2 text-sm font-medium text-blue-800">Communication Group</td>
                            </tr>
                            
                            <!-- Interpersonal Communication -->
                            <tr>
                                <td class="px-4 py-3 text-sm font-medium text-gray-700">Interpersonal Communication</td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Advanced (3.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Expert (4.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        -1.0
                                    </span>
                                </td>
                            </tr>
                            
                            <!-- Written Communication -->
                            <tr>
                                <td class="px-4 py-3 text-sm font-medium text-gray-700">Written Communication</td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Intermediate (2.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Advanced (3.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        -1.0
                                    </span>
                                </td>
                            </tr>
                            
                            <!-- Problem Solving Group -->
                            <tr class="bg-green-50">
                                <td colspan="4" class="px-4 py-2 text-sm font-medium text-green-800">Problem Solving Group</td>
                            </tr>
                            
                            <!-- Critical Thinking -->
                            <tr>
                                <td class="px-4 py-3 text-sm font-medium text-gray-700">Critical Thinking</td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star-half text-amber-500'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Advanced (3.5)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Intermediate (2.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        +1.5
                                    </span>
                                </td>
                            </tr>
                            
                            <!-- Decision Making -->
                            <tr>
                                <td class="px-4 py-3 text-sm font-medium text-gray-700">Decision Making</td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Advanced (3.0)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex flex-col items-center">
                                        <div class="flex items-center">
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star text-amber-500'></i>
                                            <i class='bx bxs-star-half text-amber-500'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                        </div>
                                        <span class="text-sm text-gray-700 mt-1">Intermediate (2.5)</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        +0.5
                                    </span>
                                </td>
                            </tr>
                            
                            <!-- Summary Row -->
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-sm font-medium text-gray-900">Overall Average</td>
                                <td class="px-4 py-3 text-center font-medium text-gray-900">3.0</td>
                                <td class="px-4 py-3 text-center font-medium text-gray-900">2.7</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        +0.3
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Comparison Summary -->
            <div class="bg-blue-50 border border-blue-100 rounded-md p-4 mb-6">
                <h4 class="text-sm font-medium text-blue-800 mb-3">Comparison Summary</h4>
                
                <div class="space-y-2 text-sm text-blue-700">
                    <p>
                        <span class="font-medium">John Doe</span> demonstrates stronger competencies in <span class="font-medium">Leadership</span> and <span class="font-medium">Problem Solving</span> groups, with notable strengths in Strategic Planning (+1.0) and Critical Thinking (+1.5).
                    </p>
                    
                    <p>
                        <span class="font-medium">Alice Smith</span> excels in the <span class="font-medium">Communication</span> group, particularly in Interpersonal Communication (+1.0) and Written Communication (+1.0).
                    </p>
                    
                    <p>
                        <span class="font-medium">Development opportunities:</span> John could benefit from communication skills training, while Alice could focus on enhancing strategic planning and critical thinking capabilities.
                    </p>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex justify-end space-x-3">
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                    <i class='bx bx-download mr-2'></i> Export as PDF
                </button>
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                    <i class='bx bx-share mr-2'></i> Share Report
                </button>
                <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                    <i class='bx bx-notepad mr-2'></i> Create Development Plan
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
