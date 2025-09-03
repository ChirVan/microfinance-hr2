<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Learning Analytics & Reports') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Learning Management Insights</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Analytics and reporting dashboard for learning activities across the organization.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-export mr-2'></i>
                            Export Data
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-cog mr-2'></i>
                            Configure Reports
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Filter Controls -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div>
                        <label for="report_type" class="block text-sm font-medium text-gray-700 mb-1">Report Type</label>
                        <select id="report_type" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="overview">Overview Dashboard</option>
                            <option value="completion">Completion Rates</option>
                            <option value="participation">Participation Analysis</option>
                            <option value="department">Department Comparison</option>
                            <option value="learning_path">Learning Path Analysis</option>
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
                        <label for="time_period" class="block text-sm font-medium text-gray-700 mb-1">Time Period</label>
                        <select id="time_period" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="this_month">This Month</option>
                            <option value="last_month">Last Month</option>
                            <option value="last_quarter">Last Quarter</option>
                            <option value="last_year">Last Year</option>
                            <option value="ytd">Year to Date</option>
                            <option value="custom">Custom Range</option>
                        </select>
                    </div>
                    <div>
                        <label for="chart_type" class="block text-sm font-medium text-gray-700 mb-1">Chart Type</label>
                        <select id="chart_type" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="bar">Bar Chart</option>
                            <option value="line">Line Chart</option>
                            <option value="pie">Pie Chart</option>
                            <option value="radar">Radar Chart</option>
                            <option value="table">Data Table</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <button class="px-4 py-2 bg-primary text-white rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Generate Report
                    </button>
                </div>
            </div>
            
            <!-- KPI Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Employees</p>
                            <h4 class="mt-1 text-2xl font-bold text-gray-900">246</h4>
                        </div>
                        <div class="rounded-full bg-blue-100 p-3">
                            <i class='bx bx-user text-blue-600 text-xl'></i>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center text-xs">
                        <span class="text-green-600 font-medium flex items-center">
                            <i class='bx bx-up-arrow-alt'></i> 12%
                        </span>
                        <span class="text-gray-500 ml-2">vs last quarter</span>
                    </div>
                </div>
                
                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Active Learners</p>
                            <h4 class="mt-1 text-2xl font-bold text-gray-900">182</h4>
                        </div>
                        <div class="rounded-full bg-green-100 p-3">
                            <i class='bx bx-book-reader text-green-600 text-xl'></i>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center text-xs">
                        <span class="text-green-600 font-medium flex items-center">
                            <i class='bx bx-up-arrow-alt'></i> 8%
                        </span>
                        <span class="text-gray-500 ml-2">vs last quarter</span>
                    </div>
                </div>
                
                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Avg. Completion Rate</p>
                            <h4 class="mt-1 text-2xl font-bold text-gray-900">67%</h4>
                        </div>
                        <div class="rounded-full bg-yellow-100 p-3">
                            <i class='bx bx-check-circle text-yellow-600 text-xl'></i>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center text-xs">
                        <span class="text-red-600 font-medium flex items-center">
                            <i class='bx bx-down-arrow-alt'></i> 3%
                        </span>
                        <span class="text-gray-500 ml-2">vs last quarter</span>
                    </div>
                </div>
                
                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Avg. Learning Hours</p>
                            <h4 class="mt-1 text-2xl font-bold text-gray-900">12.5</h4>
                        </div>
                        <div class="rounded-full bg-purple-100 p-3">
                            <i class='bx bx-time text-purple-600 text-xl'></i>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center text-xs">
                        <span class="text-green-600 font-medium flex items-center">
                            <i class='bx bx-up-arrow-alt'></i> 15%
                        </span>
                        <span class="text-gray-500 ml-2">vs last quarter</span>
                    </div>
                </div>
            </div>
            
            <!-- Chart Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Completion Rate by Department -->
                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <h4 class="text-sm font-medium text-gray-700 mb-4">Completion Rate by Department</h4>
                    <div class="h-64 flex items-center justify-center">
                        <!-- Chart Placeholder -->
                        <div class="w-full h-full bg-gray-50 rounded-lg border border-gray-200 flex items-center justify-center">
                            <div class="text-center">
                                <i class='bx bx-bar-chart text-gray-400 text-5xl'></i>
                                <p class="mt-2 text-sm text-gray-500">Bar Chart: Department Completion Rates</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-blue-500 rounded-sm mr-1"></div>
                                        <span class="text-xs text-gray-600">IT (82%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-green-500 rounded-sm mr-1"></div>
                                        <span class="text-xs text-gray-600">HR (75%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-yellow-500 rounded-sm mr-1"></div>
                                        <span class="text-xs text-gray-600">Finance (68%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-purple-500 rounded-sm mr-1"></div>
                                        <span class="text-xs text-gray-600">Operations (58%)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Learning Path Popularity -->
                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <h4 class="text-sm font-medium text-gray-700 mb-4">Learning Path Enrollment</h4>
                    <div class="h-64 flex items-center justify-center">
                        <!-- Chart Placeholder -->
                        <div class="w-full h-full bg-gray-50 rounded-lg border border-gray-200 flex items-center justify-center">
                            <div class="text-center">
                                <i class='bx bx-pie-chart-alt-2 text-gray-400 text-5xl'></i>
                                <p class="mt-2 text-sm text-gray-500">Pie Chart: Learning Path Distribution</p>
                                <div class="mt-4 flex justify-center space-x-4">
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-blue-500 rounded-sm mr-1"></div>
                                        <span class="text-xs text-gray-600">Supervisor Dev (35%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-green-500 rounded-sm mr-1"></div>
                                        <span class="text-xs text-gray-600">Financial Analyst (28%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-yellow-500 rounded-sm mr-1"></div>
                                        <span class="text-xs text-gray-600">IT Security (22%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-purple-500 rounded-sm mr-1"></div>
                                        <span class="text-xs text-gray-600">HR Onboarding (15%)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Monthly Learning Activity -->
                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <h4 class="text-sm font-medium text-gray-700 mb-4">Monthly Learning Activity</h4>
                    <div class="h-64 flex items-center justify-center">
                        <!-- Chart Placeholder -->
                        <div class="w-full h-full bg-gray-50 rounded-lg border border-gray-200 flex items-center justify-center">
                            <div class="text-center">
                                <i class='bx bx-line-chart text-gray-400 text-5xl'></i>
                                <p class="mt-2 text-sm text-gray-500">Line Chart: Monthly Learning Hours</p>
                                <div class="mt-4 text-xs text-gray-600">
                                    <p>Last 6 months trend showing increasing participation</p>
                                    <p class="mt-1">Peak activity in September (15.2 hrs/employee)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Skills Coverage -->
                <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                    <h4 class="text-sm font-medium text-gray-700 mb-4">Skills Coverage Analysis</h4>
                    <div class="h-64 flex items-center justify-center">
                        <!-- Chart Placeholder -->
                        <div class="w-full h-full bg-gray-50 rounded-lg border border-gray-200 flex items-center justify-center">
                            <div class="text-center">
                                <i class='bx bx-radar text-gray-400 text-5xl'></i>
                                <p class="mt-2 text-sm text-gray-500">Radar Chart: Skills Coverage</p>
                                <div class="mt-4 grid grid-cols-2 gap-1 text-xs text-gray-600">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-1"></div>
                                        <span>Leadership (85%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-1"></div>
                                        <span>Technical (78%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-1"></div>
                                        <span>Communication (72%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-1"></div>
                                        <span>Project Mgmt (68%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-red-500 rounded-full mr-1"></div>
                                        <span>Innovation (54%)</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-indigo-500 rounded-full mr-1"></div>
                                        <span>Compliance (92%)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Top Performing Employees -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Top Performing Employees</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Department</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Completed Paths</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Learning Hours</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Avg Assessment Score</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Learning Badges</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center">
                                            <span class="text-xs font-medium text-gray-600">EW</span>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">Emily Wilson</div>
                                            <div class="text-xs text-gray-500">HR Coordinator</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">Human Resources</td>
                                <td class="px-4 py-3 text-sm text-gray-500">4</td>
                                <td class="px-4 py-3 text-sm text-gray-500">45.5</td>
                                <td class="px-4 py-3 text-sm text-gray-500">94%</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex space-x-1">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                            Excellence
                                        </span>
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                            Innovation
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center">
                                            <span class="text-xs font-medium text-gray-600">RJ</span>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">Robert Johnson</div>
                                            <div class="text-xs text-gray-500">IT Security Engineer</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">IT Department</td>
                                <td class="px-4 py-3 text-sm text-gray-500">3</td>
                                <td class="px-4 py-3 text-sm text-gray-500">38.5</td>
                                <td class="px-4 py-3 text-sm text-gray-500">91%</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex space-x-1">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-purple-100 text-purple-800">
                                            Technical
                                        </span>
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Security
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center">
                                            <span class="text-xs font-medium text-gray-600">AM</span>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">Amanda Miller</div>
                                            <div class="text-xs text-gray-500">Operations Manager</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">Operations</td>
                                <td class="px-4 py-3 text-sm text-gray-500">3</td>
                                <td class="px-4 py-3 text-sm text-gray-500">36.0</td>
                                <td class="px-4 py-3 text-sm text-gray-500">89%</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex space-x-1">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800">
                                            Leadership
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Learning Path Effectiveness -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Learning Path Effectiveness</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Learning Path</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Enrollments</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Completion Rate</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Avg. Duration</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Avg. Assessment Score</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Feedback Rating</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="text-sm font-medium text-gray-900">Supervisor Development Path</div>
                                    <div class="text-xs text-gray-500">v1.2</div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">42</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 72%"></div>
                                        </div>
                                        <span>72%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">4.2 months</td>
                                <td class="px-4 py-3 text-sm text-gray-500">85%</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="flex text-yellow-400">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <span class="ml-1">4.2/5</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="text-sm font-medium text-gray-900">Financial Analyst Career Path</div>
                                    <div class="text-xs text-gray-500">v2.0</div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">28</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 68%"></div>
                                        </div>
                                        <span>68%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">5.1 months</td>
                                <td class="px-4 py-3 text-sm text-gray-500">82%</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="flex text-yellow-400">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star-half'></i>
                                        </div>
                                        <span class="ml-1">4.5/5</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="text-sm font-medium text-gray-900">IT Security Specialist Path</div>
                                    <div class="text-xs text-gray-500">v1.0</div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">22</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 55%"></div>
                                        </div>
                                        <span>55%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">6.5 months</td>
                                <td class="px-4 py-3 text-sm text-gray-500">88%</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="flex text-yellow-400">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <span class="ml-1">3.8/5</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3">
                                    <div class="text-sm font-medium text-gray-900">HR Onboarding Specialist</div>
                                    <div class="text-xs text-gray-500">v1.3</div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">15</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                        <span>85%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm text-gray-500">3.8 months</td>
                                <td class="px-4 py-3 text-sm text-gray-500">90%</td>
                                <td class="px-4 py-3 text-sm text-gray-500">
                                    <div class="flex items-center">
                                        <div class="flex text-yellow-400">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <span class="ml-1">4.7/5</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Skill Gap Analysis -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3">Skill Gap Analysis</h3>
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-4">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <i class='bx bx-info-circle text-yellow-500 text-xl'></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-yellow-800">Skills Gap Alert</h3>
                            <div class="mt-2 text-sm text-yellow-700">
                                <p>The analysis has identified significant skill gaps in the following areas:</p>
                                <ul class="list-disc pl-5 mt-1 space-y-1">
                                    <li>Data Analysis skills in the Finance department (68% proficiency vs 85% target)</li>
                                    <li>Cloud Security expertise in the IT department (54% proficiency vs 80% target)</li>
                                    <li>Change Management skills across all departments (62% proficiency vs 75% target)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Top Skills Gaps by Department</h4>
                        <div class="space-y-3 mt-3">
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-medium text-gray-700">IT: Cloud Security</span>
                                    <span class="text-xs font-medium text-gray-700">54%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-red-500 h-1.5 rounded-full" style="width: 54%"></div>
                                </div>
                                <div class="flex justify-end mt-0.5">
                                    <span class="text-xs text-gray-500">Target: 80%</span>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-medium text-gray-700">Finance: Data Analysis</span>
                                    <span class="text-xs font-medium text-gray-700">68%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 68%"></div>
                                </div>
                                <div class="flex justify-end mt-0.5">
                                    <span class="text-xs text-gray-500">Target: 85%</span>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-medium text-gray-700">All: Change Management</span>
                                    <span class="text-xs font-medium text-gray-700">62%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-yellow-500 h-1.5 rounded-full" style="width: 62%"></div>
                                </div>
                                <div class="flex justify-end mt-0.5">
                                    <span class="text-xs text-gray-500">Target: 75%</span>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-xs font-medium text-gray-700">Operations: Process Optimization</span>
                                    <span class="text-xs font-medium text-gray-700">71%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5">
                                    <div class="bg-green-500 h-1.5 rounded-full" style="width: 71%"></div>
                                </div>
                                <div class="flex justify-end mt-0.5">
                                    <span class="text-xs text-gray-500">Target: 75%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Recommended Learning Paths</h4>
                        <div class="space-y-3 mt-3">
                            <div class="border-b border-gray-100 pb-2">
                                <div class="flex justify-between">
                                    <h5 class="text-xs font-medium text-gray-900">Advanced Cloud Security Certification</h5>
                                    <span class="text-xs text-blue-600 font-medium">16 Employees</span>
                                </div>
                                <p class="text-xs text-gray-600 mt-1">
                                    Specialized path for IT staff to develop cloud security expertise.
                                </p>
                            </div>
                            <div class="border-b border-gray-100 pb-2">
                                <div class="flex justify-between">
                                    <h5 class="text-xs font-medium text-gray-900">Data Analysis & Visualization</h5>
                                    <span class="text-xs text-blue-600 font-medium">12 Employees</span>
                                </div>
                                <p class="text-xs text-gray-600 mt-1">
                                    Comprehensive course for finance professionals to enhance analytical capabilities.
                                </p>
                            </div>
                            <div class="border-b border-gray-100 pb-2">
                                <div class="flex justify-between">
                                    <h5 class="text-xs font-medium text-gray-900">Change Management Fundamentals</h5>
                                    <span class="text-xs text-blue-600 font-medium">24 Employees</span>
                                </div>
                                <p class="text-xs text-gray-600 mt-1">
                                    Organization-wide program to develop change management skills across departments.
                                </p>
                            </div>
                            <div>
                                <div class="flex justify-between">
                                    <h5 class="text-xs font-medium text-gray-900">Process Optimization & Lean Principles</h5>
                                    <span class="text-xs text-blue-600 font-medium">8 Employees</span>
                                </div>
                                <p class="text-xs text-gray-600 mt-1">
                                    Specialized training for operations team to enhance process efficiency.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Saved Reports -->
            <div>
                <h3 class="text-sm font-medium text-gray-700 mb-3">Saved Reports</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <h4 class="text-sm font-medium text-gray-900">Quarterly Learning Summary</h4>
                            <div class="text-xs text-gray-500">Last run: Oct 1, 2025</div>
                        </div>
                        <p class="mt-2 text-xs text-gray-600">
                            Comprehensive quarterly overview of all learning activities and completion rates.
                        </p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex space-x-2">
                                <button class="text-xs text-blue-600 hover:text-blue-800">
                                    <i class='bx bx-show'></i> View
                                </button>
                                <button class="text-xs text-blue-600 hover:text-blue-800">
                                    <i class='bx bx-download'></i> Download
                                </button>
                            </div>
                            <div class="text-xs text-gray-500">PDF Report</div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <h4 class="text-sm font-medium text-gray-900">Department Progress Comparison</h4>
                            <div class="text-xs text-gray-500">Last run: Sept 15, 2025</div>
                        </div>
                        <p class="mt-2 text-xs text-gray-600">
                            Comparative analysis of learning progress and completion rates across departments.
                        </p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex space-x-2">
                                <button class="text-xs text-blue-600 hover:text-blue-800">
                                    <i class='bx bx-show'></i> View
                                </button>
                                <button class="text-xs text-blue-600 hover:text-blue-800">
                                    <i class='bx bx-download'></i> Download
                                </button>
                            </div>
                            <div class="text-xs text-gray-500">Excel Report</div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start">
                            <h4 class="text-sm font-medium text-gray-900">Skills Gap Analysis</h4>
                            <div class="text-xs text-gray-500">Last run: Sept 30, 2025</div>
                        </div>
                        <p class="mt-2 text-xs text-gray-600">
                            Detailed analysis of skill gaps and recommended training interventions.
                        </p>
                        <div class="mt-4 flex justify-between items-center">
                            <div class="flex space-x-2">
                                <button class="text-xs text-blue-600 hover:text-blue-800">
                                    <i class='bx bx-show'></i> View
                                </button>
                                <button class="text-xs text-blue-600 hover:text-blue-800">
                                    <i class='bx bx-download'></i> Download
                                </button>
                            </div>
                            <div class="text-xs text-gray-500">Interactive Dashboard</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Export Report Modal would go here -->
    
    <!-- Configure Reports Modal would go here -->
</x-app-layout>
