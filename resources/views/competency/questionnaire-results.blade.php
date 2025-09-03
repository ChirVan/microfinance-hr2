<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Questionnaire Results') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Competency Assessment Results</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            View and analyze competency assessment results across the organization.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-export mr-2'></i>
                            Export Results
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-pie-chart-alt-2 mr-2'></i>
                            Generate Report
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Results Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div>
                        <label for="questionnaire_filter" class="block text-sm font-medium text-gray-700 mb-1">Questionnaire</label>
                        <select id="questionnaire_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Questionnaires</option>
                            <option value="leadership">Leadership Skills Assessment</option>
                            <option value="technical">Technical Proficiency - Networking</option>
                            <option value="communication">Communication Skills Evaluation</option>
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
                        <label for="assessment_period_filter" class="block text-sm font-medium text-gray-700 mb-1">Assessment Period</label>
                        <select id="assessment_period_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Periods</option>
                            <option value="q3_2025">Q3 2025 (Jul-Sep)</option>
                            <option value="q4_2025">Q4 2025 (Oct-Dec)</option>
                            <option value="q1_2026">Q1 2026 (Jan-Mar)</option>
                        </select>
                    </div>
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
                        <label for="score_range_filter" class="block text-sm font-medium text-gray-700 mb-1">Score Range</label>
                        <select id="score_range_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Scores</option>
                            <option value="90_100">Excellent (90-100%)</option>
                            <option value="75_89">Good (75-89%)</option>
                            <option value="60_74">Average (60-74%)</option>
                            <option value="below_60">Needs Improvement (Below 60%)</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Dashboard Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-lg border border-blue-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-blue-800">Total Assessments</p>
                            <h4 class="mt-1 text-2xl font-bold text-blue-900">78</h4>
                        </div>
                        <div class="rounded-full bg-blue-200 p-3">
                            <i class='bx bx-clipboard text-blue-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-blue-700">
                        <span class="font-medium">+12%</span> from previous period
                    </p>
                </div>
                
                <div class="bg-gradient-to-r from-green-50 to-green-100 p-4 rounded-lg border border-green-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-green-800">Average Score</p>
                            <h4 class="mt-1 text-2xl font-bold text-green-900">76.5%</h4>
                        </div>
                        <div class="rounded-full bg-green-200 p-3">
                            <i class='bx bx-bar-chart-alt-2 text-green-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-green-700">
                        <span class="font-medium">+2.3%</span> from previous period
                    </p>
                </div>
                
                <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 p-4 rounded-lg border border-yellow-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-yellow-800">Completion Rate</p>
                            <h4 class="mt-1 text-2xl font-bold text-yellow-900">82%</h4>
                        </div>
                        <div class="rounded-full bg-yellow-200 p-3">
                            <i class='bx bx-check-circle text-yellow-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-yellow-700">
                        <span class="font-medium">+5%</span> from previous period
                    </p>
                </div>
                
                <div class="bg-gradient-to-r from-purple-50 to-purple-100 p-4 rounded-lg border border-purple-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-purple-800">Top Competency</p>
                            <h4 class="mt-1 text-lg font-bold text-purple-900 truncate">Communication</h4>
                        </div>
                        <div class="rounded-full bg-purple-200 p-3">
                            <i class='bx bx-medal text-purple-600 text-xl'></i>
                        </div>
                    </div>
                    <p class="mt-2 text-xs text-purple-700">
                        <span class="font-medium">85.2%</span> average score
                    </p>
                </div>
            </div>
            
            <!-- Visualization Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Competency Distribution Chart -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-4">Competency Score Distribution</h4>
                    <div class="h-64 flex items-center justify-center bg-gray-50 rounded-md">
                        <!-- Placeholder for chart - would be implemented with a JS library like Chart.js -->
                        <div class="text-center px-4">
                            <i class='bx bx-bar-chart text-4xl text-gray-400 mb-2'></i>
                            <p class="text-sm text-gray-500">Bar chart showing distribution of scores across different competency areas</p>
                        </div>
                    </div>
                </div>
                
                <!-- Department Comparison Chart -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-4">Department Performance Comparison</h4>
                    <div class="h-64 flex items-center justify-center bg-gray-50 rounded-md">
                        <!-- Placeholder for chart - would be implemented with a JS library like Chart.js -->
                        <div class="text-center px-4">
                            <i class='bx bx-pie-chart text-4xl text-gray-400 mb-2'></i>
                            <p class="text-sm text-gray-500">Radar chart comparing average scores across departments</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Results Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Employee</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Questionnaire</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Period</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Completion Date</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Assessor</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Score</th>
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
                                        <div class="text-xs text-gray-500">IT Department</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Leadership Skills Assessment</div>
                                <div class="text-xs text-gray-500">12 questions</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Q3 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sept 28, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Manager</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 88%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">88%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" x-data="" x-on:click="$dispatch('open-modal', 'view-result-modal')">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-download'></i>
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
                                        <div class="text-xs text-gray-500">Finance</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Communication Skills Evaluation</div>
                                <div class="text-xs text-gray-500">10 questions</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Q3 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sept 15, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Self</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 92%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">92%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-download'></i>
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
                                        <div class="text-xs text-gray-500">Operations</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Technical Proficiency - Networking</div>
                                <div class="text-xs text-gray-500">15 questions</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Q3 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sept 20, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Manager</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 68%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">68%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-download'></i>
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
                                        <div class="text-xs text-gray-500">Human Resources</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Leadership Skills Assessment</div>
                                <div class="text-xs text-gray-500">12 questions</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Q3 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 25, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Peer</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-red-500 h-2.5 rounded-full" style="width: 55%"></div>
                                    </div>
                                    <span class="text-sm font-medium text-gray-900">55%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900">
                                        <i class='bx bx-download'></i>
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">78</span> results
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-500">Previous</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-blue-600 font-medium">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">2</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">3</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">...</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">8</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">Next</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- View Result Detail Modal -->
    <x-modal id="view-result-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h2 class="text-lg font-medium text-gray-900">
                        Assessment Result Details
                    </h2>
                    <div class="mt-1 flex items-center text-sm text-gray-600">
                        <span class="font-medium text-gray-900 mr-1">John Doe</span>
                        <span class="text-gray-500 mx-1">|</span>
                        <span>Leadership Skills Assessment</span>
                        <span class="text-gray-500 mx-1">|</span>
                        <span>Q3 2025</span>
                    </div>
                </div>
                
                <div class="flex space-x-2">
                    <button class="inline-flex items-center px-3 py-1 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                        <i class='bx bx-download mr-1'></i> Download PDF
                    </button>
                    <button class="inline-flex items-center px-3 py-1 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                        <i class='bx bx-printer mr-1'></i> Print
                    </button>
                </div>
            </div>
            
            <!-- Summary Score Card -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="text-center p-3">
                        <div class="text-3xl font-bold text-blue-700">88%</div>
                        <div class="text-sm text-blue-600 mt-1">Overall Score</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-xl font-semibold text-green-700">92%</div>
                        <div class="text-sm text-green-600 mt-1">Highest: Team Building</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-xl font-semibold text-red-700">72%</div>
                        <div class="text-sm text-red-600 mt-1">Lowest: Conflict Resolution</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-xl font-semibold text-gray-700">+5%</div>
                        <div class="text-sm text-gray-600 mt-1">Improvement from Last</div>
                    </div>
                </div>
            </div>
            
            <!-- Radar Chart Visualization -->
            <div class="mb-6 bg-white border border-gray-200 rounded-lg p-4">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Competency Areas Performance</h3>
                <div class="h-64 flex items-center justify-center bg-gray-50 rounded-md">
                    <!-- Placeholder for radar chart - would be implemented with a JS library like Chart.js -->
                    <div class="text-center px-4">
                        <i class='bx bx-radar text-4xl text-gray-400 mb-2'></i>
                        <p class="text-sm text-gray-500">Radar chart showing scores across different leadership competency dimensions</p>
                    </div>
                </div>
            </div>
            
            <!-- Detailed Responses -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Detailed Responses</h3>
                
                <div class="space-y-4 mt-4">
                    <!-- Question 1 -->
                    <div class="bg-gray-50 p-4 rounded-md">
                        <div class="flex justify-between">
                            <div class="font-medium text-gray-900">1. Explain the process of effective task delegation and describe how you implement it in your role:</div>
                            <div class="flex items-center">
                                <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Score: 4/5</div>
                            </div>
                        </div>
                        <div class="mt-2 text-sm text-gray-700">
                            <div class="flex items-start">
                                <div class="w-20 text-gray-500">Answer:</div>
                                <div class="text-gray-700 bg-white p-2 border border-gray-200 rounded-md">
                                    Effective delegation involves assessing team members' skills, matching tasks to capabilities, providing clear instructions, setting expectations, and monitoring progress without micromanaging. In my role, I maintain a skills matrix for my team and use it to assign tasks based on strengths. For example, when delegating components of our recent database migration, I assigned schema design to Sarah who excels in data architecture, while giving query optimization to Michael who has strong performance tuning skills. I provided written requirements and held kickoff meetings to ensure clarity.
                                </div>
                            </div>
                            <div class="flex items-start mt-2">
                                <div class="w-20 text-gray-500">Evaluation:</div>
                                <div class="text-gray-700">Demonstrates good understanding of delegation principles with specific examples. Could improve by explaining how feedback is incorporated in the delegation process.</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 2 -->
                    <div class="bg-gray-50 p-4 rounded-md">
                        <div class="flex justify-between">
                            <div class="font-medium text-gray-900">2. Identify three effective conflict resolution strategies and provide an example of how you've successfully applied one in a workplace situation:</div>
                            <div class="flex items-center">
                                <div class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Score: 3/5</div>
                            </div>
                        </div>
                        <div class="mt-2 text-sm text-gray-700">
                            <div class="flex items-start">
                                <div class="w-20 text-gray-500">Answer:</div>
                                <div class="text-gray-700 bg-white p-2 border border-gray-200 rounded-md">
                                    Three effective conflict resolution strategies are: 1) Active listening to understand all perspectives, 2) Collaborative problem-solving to find win-win solutions, and 3) Mediation by a neutral third party. I applied the collaborative approach when two team members disagreed on the technical approach for a client project. I facilitated a meeting where each person explained their proposal's benefits, then guided them to identify the strengths of each approach and create a hybrid solution that incorporated the best elements of both.
                                </div>
                            </div>
                            <div class="flex items-start mt-2">
                                <div class="w-20 text-gray-500">Evaluation:</div>
                                <div class="text-gray-700">Identifies appropriate strategies with a relevant example. Response could be strengthened by discussing the outcomes in more detail and reflecting on lessons learned.</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Question 3 -->
                    <div class="bg-gray-50 p-4 rounded-md">
                        <div class="flex justify-between">
                            <div class="font-medium text-gray-900">3. Describe the key characteristics of transformational leadership and provide an example of when you applied this approach:</div>
                            <div class="flex items-center">
                                <div class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Score: 4/5</div>
                            </div>
                        </div>
                        <div class="mt-2 text-sm text-gray-700">
                            <div class="flex items-start">
                                <div class="w-20 text-gray-500">Answer:</div>
                                <div class="text-gray-700 bg-white p-2 border border-gray-200 rounded-md">
                                    Transformational leadership involves inspiring team members through vision, intellectual stimulation, and individualized consideration. As project lead, I implemented this approach during our system migration by creating a compelling vision for how the new system would improve workflows, encouraging innovative problem-solving, and tailoring tasks to individual strengths. This resulted in high team engagement and successful completion ahead of schedule.
                                </div>
                            </div>
                            <div class="flex items-start mt-2">
                                <div class="w-20 text-gray-500">Evaluation:</div>
                                <div class="text-gray-700">Strong understanding of transformational leadership principles with a clear, specific example demonstrating practical application. Could further improve by quantifying results.</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 text-center text-sm text-blue-600">
                    <button class="font-medium">Show All 12 Responses</button>
                </div>
            </div>
            
            <!-- Recommendations Section -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Development Recommendations</h3>
                
                <div class="space-y-4 mt-4">
                    <div class="bg-yellow-50 p-4 rounded-md border-l-4 border-yellow-400">
                        <h4 class="font-medium text-yellow-800">Conflict Resolution</h4>
                        <p class="mt-1 text-sm text-yellow-700">Recommend training on conflict resolution strategies and practice in handling difficult conversations.</p>
                    </div>
                    
                    <div class="bg-blue-50 p-4 rounded-md border-l-4 border-blue-400">
                        <h4 class="font-medium text-blue-800">Communication Skills</h4>
                        <p class="mt-1 text-sm text-blue-700">Continue to develop clear communication of expectations and instructions, especially for complex projects.</p>
                    </div>
                    
                    <div class="bg-green-50 p-4 rounded-md border-l-4 border-green-400">
                        <h4 class="font-medium text-green-800">Team Building</h4>
                        <p class="mt-1 text-sm text-green-700">Strong performance in this area. Consider mentoring others in effective team building strategies.</p>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-end">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'view-result-modal')">
                    Close
                </button>
            </div>
        </div>
    </x-modal>
</x-app-layout>
