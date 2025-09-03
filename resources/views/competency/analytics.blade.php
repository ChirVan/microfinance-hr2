<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Competency Analytics') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Competency Dashboard</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Analyze organizational competency trends and gaps.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-export mr-2'></i>
                            Export Report
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-refresh mr-2'></i>
                            Refresh Data
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Dashboard Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-base p-4">
                <div class="flex flex-wrap gap-4 items-end">
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Department</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-48 text-gray-700">
                            <option value="">All Departments</option>
                            <option value="it" selected>Information Technology</option>
                            <option value="hr">Human Resources</option>
                            <option value="operations">Operations</option>
                            <option value="finance">Finance</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Competency Framework</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-48 text-gray-700">
                            <option value="">All Frameworks</option>
                            <option value="leadership" selected>Leadership Development</option>
                            <option value="technical">Technical Skills</option>
                            <option value="customer-service">Customer Service</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Assessment Period</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-48 text-gray-700">
                            <option value="current" selected>Current Quarter (Q3 2025)</option>
                            <option value="previous">Previous Quarter (Q2 2025)</option>
                            <option value="year">Year-to-Date 2025</option>
                            <option value="custom">Custom Range</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                            <i class='bx bx-filter-alt mr-2'></i> Apply Filters
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Top Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-sm text-gray-500">Assessed Employees</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">42 / 48</div>
                        </div>
                        <div class="h-12 w-12 bg-indigo-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-user text-2xl text-indigo-600'></i>
                        </div>
                    </div>
                    <div class="mt-2 text-xs text-gray-500">87.5% completion rate</div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-sm text-gray-500">Average Competency Score</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">2.8 / 4.0</div>
                        </div>
                        <div class="h-12 w-12 bg-green-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-bar-chart-alt text-2xl text-green-600'></i>
                        </div>
                    </div>
                    <div class="mt-2 text-xs text-green-500">↑ 0.3 from previous period</div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-sm text-gray-500">Competency Gaps</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">24</div>
                        </div>
                        <div class="h-12 w-12 bg-red-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-error-circle text-2xl text-red-600'></i>
                        </div>
                    </div>
                    <div class="mt-2 text-xs text-red-500">↓ 8 from previous period</div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-sm text-gray-500">Development Plans</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">18</div>
                        </div>
                        <div class="h-12 w-12 bg-amber-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-notepad text-2xl text-amber-600'></i>
                        </div>
                    </div>
                    <div class="mt-2 text-xs text-amber-500">75% of employees with gaps</div>
                </div>
            </div>
            
            <!-- Competency Gap Analysis Charts -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Competency Group Performance -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <h4 class="text-base font-medium text-gray-700 mb-4">Competency Group Performance</h4>
                    
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-sm font-medium text-gray-600">Leadership</span>
                                <div class="text-sm">
                                    <span class="font-medium text-gray-700">2.6</span>
                                    <span class="text-gray-500">/4.0</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-500 h-2.5 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-sm font-medium text-gray-600">Technical Skills</span>
                                <div class="text-sm">
                                    <span class="font-medium text-gray-700">3.2</span>
                                    <span class="text-gray-500">/4.0</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-green-500 h-2.5 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-sm font-medium text-gray-600">Communication</span>
                                <div class="text-sm">
                                    <span class="font-medium text-gray-700">2.9</span>
                                    <span class="text-gray-500">/4.0</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-blue-500 h-2.5 rounded-full" style="width: 72.5%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-sm font-medium text-gray-600">Problem Solving</span>
                                <div class="text-sm">
                                    <span class="font-medium text-gray-700">2.5</span>
                                    <span class="text-gray-500">/4.0</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-amber-500 h-2.5 rounded-full" style="width: 62.5%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-xs text-gray-500 mt-4">
                        Showing average scores across 42 assessed employees
                    </div>
                </div>
                
                <!-- Top Competency Gaps -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-gray-700">Top Competency Gaps</h4>
                        <select class="bg-white border border-gray-200 text-xs rounded-md px-2 py-1 text-gray-700">
                            <option selected>By Count</option>
                            <option>By Gap Size</option>
                            <option>By Criticality</option>
                        </select>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center mr-3 flex-shrink-0">
                                <span class="font-medium text-sm text-red-700">1</span>
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h5 class="text-sm font-medium text-gray-800">Strategic Planning</h5>
                                        <p class="text-xs text-gray-500">Leadership Group</p>
                                    </div>
                                    <div class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        9 Employees
                                    </div>
                                </div>
                                <div class="flex items-center text-xs mt-1">
                                    <span class="text-gray-500">Required: </span>
                                    <span class="font-medium text-gray-700 ml-1">Advanced</span>
                                    <span class="mx-2 text-gray-400">|</span>
                                    <span class="text-gray-500">Current Avg: </span>
                                    <span class="font-medium text-gray-700 ml-1">Basic/Intermediate</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center mr-3 flex-shrink-0">
                                <span class="font-medium text-sm text-red-700">2</span>
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h5 class="text-sm font-medium text-gray-800">Advanced Network Security</h5>
                                        <p class="text-xs text-gray-500">Technical Skills Group</p>
                                    </div>
                                    <div class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        7 Employees
                                    </div>
                                </div>
                                <div class="flex items-center text-xs mt-1">
                                    <span class="text-gray-500">Required: </span>
                                    <span class="font-medium text-gray-700 ml-1">Advanced</span>
                                    <span class="mx-2 text-gray-400">|</span>
                                    <span class="text-gray-500">Current Avg: </span>
                                    <span class="font-medium text-gray-700 ml-1">Intermediate</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center mr-3 flex-shrink-0">
                                <span class="font-medium text-sm text-red-700">3</span>
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h5 class="text-sm font-medium text-gray-800">Critical Thinking</h5>
                                        <p class="text-xs text-gray-500">Problem Solving Group</p>
                                    </div>
                                    <div class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                        5 Employees
                                    </div>
                                </div>
                                <div class="flex items-center text-xs mt-1">
                                    <span class="text-gray-500">Required: </span>
                                    <span class="font-medium text-gray-700 ml-1">Advanced</span>
                                    <span class="mx-2 text-gray-400">|</span>
                                    <span class="text-gray-500">Current Avg: </span>
                                    <span class="font-medium text-gray-700 ml-1">Intermediate</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center mr-3 flex-shrink-0">
                                <span class="font-medium text-sm text-red-700">4</span>
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h5 class="text-sm font-medium text-gray-800">Technical Documentation</h5>
                                        <p class="text-xs text-gray-500">Communication Group</p>
                                    </div>
                                    <div class="px-2 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-800">
                                        3 Employees
                                    </div>
                                </div>
                                <div class="flex items-center text-xs mt-1">
                                    <span class="text-gray-500">Required: </span>
                                    <span class="font-medium text-gray-700 ml-1">Advanced</span>
                                    <span class="mx-2 text-gray-400">|</span>
                                    <span class="text-gray-500">Current Avg: </span>
                                    <span class="font-medium text-gray-700 ml-1">Intermediate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Competency Development Progress -->
            <div class="mb-8">
                <h4 class="text-base font-medium text-gray-700 mb-4">Competency Development Progress</h4>
                
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Competency</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Group</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Initial Score (Q2)</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Current Score (Q3)</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Change</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Progress</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-3 text-sm">Strategic Planning</td>
                                    <td class="px-4 py-3 text-sm">Leadership</td>
                                    <td class="px-4 py-3 text-sm">1.8</td>
                                    <td class="px-4 py-3 text-sm">2.3</td>
                                    <td class="px-4 py-3 text-sm text-green-600">+0.5</td>
                                    <td class="px-4 py-3">
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm">Advanced Network Security</td>
                                    <td class="px-4 py-3 text-sm">Technical Skills</td>
                                    <td class="px-4 py-3 text-sm">2.1</td>
                                    <td class="px-4 py-3 text-sm">2.6</td>
                                    <td class="px-4 py-3 text-sm text-green-600">+0.5</td>
                                    <td class="px-4 py-3">
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 50%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm">Critical Thinking</td>
                                    <td class="px-4 py-3 text-sm">Problem Solving</td>
                                    <td class="px-4 py-3 text-sm">2.3</td>
                                    <td class="px-4 py-3 text-sm">2.5</td>
                                    <td class="px-4 py-3 text-sm text-green-600">+0.2</td>
                                    <td class="px-4 py-3">
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 25%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm">Technical Documentation</td>
                                    <td class="px-4 py-3 text-sm">Communication</td>
                                    <td class="px-4 py-3 text-sm">2.4</td>
                                    <td class="px-4 py-3 text-sm">2.8</td>
                                    <td class="px-4 py-3 text-sm text-green-600">+0.4</td>
                                    <td class="px-4 py-3">
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 65%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm">Team Collaboration</td>
                                    <td class="px-4 py-3 text-sm">Leadership</td>
                                    <td class="px-4 py-3 text-sm">2.7</td>
                                    <td class="px-4 py-3 text-sm">3.1</td>
                                    <td class="px-4 py-3 text-sm text-green-600">+0.4</td>
                                    <td class="px-4 py-3">
                                        <div class="w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 70%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Job Role Competency Analysis -->
            <div class="mb-6">
                <h4 class="text-base font-medium text-gray-700 mb-4">Job Role Competency Analysis</h4>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-2 h-6 bg-indigo-500 rounded-full mr-2"></div>
                            <h5 class="font-medium text-gray-800">IT Manager</h5>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500">Overall Competency Score</span>
                                <span class="font-medium text-sm text-gray-800">3.1 / 4.0</span>
                            </div>
                            
                            <div class="h-1 w-full bg-gray-200 rounded-full">
                                <div class="h-1 bg-indigo-500 rounded-full" style="width: 77.5%"></div>
                            </div>
                            
                            <div class="flex justify-between items-center mt-2 text-xs text-gray-500">
                                <span>Gap areas: Strategic Planning</span>
                                <span>2 employees</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-2 h-6 bg-blue-500 rounded-full mr-2"></div>
                            <h5 class="font-medium text-gray-800">Network Engineer</h5>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500">Overall Competency Score</span>
                                <span class="font-medium text-sm text-gray-800">2.7 / 4.0</span>
                            </div>
                            
                            <div class="h-1 w-full bg-gray-200 rounded-full">
                                <div class="h-1 bg-blue-500 rounded-full" style="width: 67.5%"></div>
                            </div>
                            
                            <div class="flex justify-between items-center mt-2 text-xs text-gray-500">
                                <span>Gap areas: Network Security, Documentation</span>
                                <span>7 employees</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                        <div class="flex items-center mb-4">
                            <div class="w-2 h-6 bg-green-500 rounded-full mr-2"></div>
                            <h5 class="font-medium text-gray-800">Systems Analyst</h5>
                        </div>
                        
                        <div class="space-y-3">
                            <div class="flex justify-between items-center">
                                <span class="text-xs text-gray-500">Overall Competency Score</span>
                                <span class="font-medium text-sm text-gray-800">2.9 / 4.0</span>
                            </div>
                            
                            <div class="h-1 w-full bg-gray-200 rounded-full">
                                <div class="h-1 bg-green-500 rounded-full" style="width: 72.5%"></div>
                            </div>
                            
                            <div class="flex justify-between items-center mt-2 text-xs text-gray-500">
                                <span>Gap areas: Critical Thinking</span>
                                <span>4 employees</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recommended Actions -->
            <div class="bg-blue-50 border border-blue-100 rounded-md p-4 mb-6">
                <h4 class="text-sm font-medium text-blue-800 mb-3">Recommended Actions</h4>
                
                <div class="space-y-2 text-sm text-blue-700">
                    <div class="flex">
                        <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center mr-2 flex-shrink-0">
                            <span class="font-medium text-xs text-blue-700">1</span>
                        </div>
                        <p>Implement structured mentoring program focused on Strategic Planning for IT Managers</p>
                    </div>
                    
                    <div class="flex">
                        <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center mr-2 flex-shrink-0">
                            <span class="font-medium text-xs text-blue-700">2</span>
                        </div>
                        <p>Schedule Advanced Network Security training workshops for Network Engineers</p>
                    </div>
                    
                    <div class="flex">
                        <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center mr-2 flex-shrink-0">
                            <span class="font-medium text-xs text-blue-700">3</span>
                        </div>
                        <p>Develop Critical Thinking case studies and workshops for Systems Analysts</p>
                    </div>
                    
                    <div class="flex">
                        <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center mr-2 flex-shrink-0">
                            <span class="font-medium text-xs text-blue-700">4</span>
                        </div>
                        <p>Create Technical Documentation templates and guidelines to improve communication competencies</p>
                    </div>
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
                    <i class='bx bx-check-circle mr-2'></i> Create Action Plan
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
