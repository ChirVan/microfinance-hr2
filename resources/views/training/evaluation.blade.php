<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Training Evaluation & Feedback') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Training Evaluation Management</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Collect and analyze feedback on training programs to continuously improve effectiveness.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-download mr-2'></i>
                            Export Results
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'create-evaluation-modal')">
                            <i class='bx bx-plus mr-2'></i>
                            Create Evaluation
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="flex flex-wrap gap-4 items-end">
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Training Program</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-64 text-gray-700">
                            <option value="">All Programs</option>
                            <option value="1">Leadership Fundamentals</option>
                            <option value="2" selected>Python Programming Basics</option>
                            <option value="3">Financial Compliance</option>
                            <option value="4">Customer Service Excellence</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Period</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-48 text-gray-700">
                            <option value="">All Time</option>
                            <option value="current-month">Current Month</option>
                            <option value="last-month">Last Month</option>
                            <option value="last-quarter" selected>Last Quarter</option>
                            <option value="last-year">Last Year</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Rating</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-48 text-gray-700">
                            <option value="">All Ratings</option>
                            <option value="5">5 Stars</option>
                            <option value="4">4+ Stars</option>
                            <option value="3" selected>3+ Stars</option>
                            <option value="2">2+ Stars</option>
                            <option value="1">1+ Star</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                            <i class='bx bx-filter-alt mr-2'></i> Apply Filters
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Evaluation Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm text-gray-500">Total Evaluations</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">126</div>
                        </div>
                        <div class="h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-file text-blue-600'></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm text-gray-500">Average Rating</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">4.2</div>
                        </div>
                        <div class="h-10 w-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-star text-yellow-600'></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm text-gray-500">Response Rate</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">78%</div>
                        </div>
                        <div class="h-10 w-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-trending-up text-green-600'></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm text-gray-500">Pending Evaluations</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">16</div>
                        </div>
                        <div class="h-10 w-10 bg-red-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-time text-red-600'></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Training Evaluations Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Training Program</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Trainer</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Date Completed</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Responses</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Rating</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Effectiveness</th>
                            <th class="px-4 py-3 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample Evaluation 1 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Python Programming Basics</div>
                                <div class="text-xs text-gray-500">E-learning</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Robert Johnson</div>
                                <div class="text-xs text-gray-500">IT Department</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sep 22, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">12/15</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <span class="text-sm text-gray-700 mr-2">4.5</span>
                                    <div class="flex text-yellow-400">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star-half'></i>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 85%"></div>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Very Effective (85%)</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-center">
                                <button class="text-blue-600 hover:text-blue-800" x-data="" x-on:click="$dispatch('open-modal', 'view-evaluation-modal')">
                                    View Details
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Evaluation 2 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Leadership Fundamentals</div>
                                <div class="text-xs text-gray-500">Workshop</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Sarah Miller</div>
                                <div class="text-xs text-gray-500">External</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 15, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">8/10</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <span class="text-sm text-gray-700 mr-2">3.8</span>
                                    <div class="flex text-yellow-400">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star-half'></i>
                                        <i class='bx bx-star text-gray-300'></i>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 70%"></div>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Moderately Effective (70%)</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-center">
                                <button class="text-blue-600 hover:text-blue-800" x-data="" x-on:click="$dispatch('open-modal', 'view-evaluation-modal')">
                                    View Details
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Evaluation 3 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Financial Compliance</div>
                                <div class="text-xs text-gray-500">Seminar</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Daniel Taylor</div>
                                <div class="text-xs text-gray-500">Finance Department</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 05, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">22/25</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <span class="text-sm text-gray-700 mr-2">4.8</span>
                                    <div class="flex text-yellow-400">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 95%"></div>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Highly Effective (95%)</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-center">
                                <button class="text-blue-600 hover:text-blue-800" x-data="" x-on:click="$dispatch('open-modal', 'view-evaluation-modal')">
                                    View Details
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Evaluation 4 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Customer Service Excellence</div>
                                <div class="text-xs text-gray-500">On-the-job</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Jessica Adams</div>
                                <div class="text-xs text-gray-500">Customer Service</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 05, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">6/15</td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <span class="text-sm text-gray-700 mr-2">3.2</span>
                                    <div class="flex text-yellow-400">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bx-star text-gray-300'></i>
                                        <i class='bx bx-star text-gray-300'></i>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 60%"></div>
                                </div>
                                <div class="text-xs text-gray-500 mt-1">Somewhat Effective (60%)</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-center">
                                <button class="text-blue-600 hover:text-blue-800" x-data="" x-on:click="$dispatch('open-modal', 'view-evaluation-modal')">
                                    View Details
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="flex items-center justify-between mt-4">
                <div class="text-sm text-gray-600">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">12</span> results
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-500">Previous</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-blue-600 font-medium">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">2</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">3</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">Next</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Create Evaluation Form Modal -->
    <x-modal id="create-evaluation-modal" :show="false" max-width="md" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Create Training Evaluation
            </h2>
            
            <form>
                <div class="mb-4">
                    <label for="training_program" class="block text-sm font-medium text-gray-700 mb-1">Training Program</label>
                    <select id="training_program" name="training_program" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="">Select Training Program</option>
                        <option value="1">Leadership Fundamentals</option>
                        <option value="2">Python Programming Basics</option>
                        <option value="3">Financial Compliance</option>
                        <option value="4">Customer Service Excellence</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="evaluation_title" class="block text-sm font-medium text-gray-700 mb-1">Evaluation Title</label>
                    <input type="text" id="evaluation_title" name="evaluation_title" placeholder="E.g., Post-Training Evaluation - Q3 2025" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                </div>
                
                <div class="mb-4">
                    <label for="target_employees" class="block text-sm font-medium text-gray-700 mb-1">Target Employees</label>
                    <select id="target_employees" name="target_employees" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="all">All Trained Employees</option>
                        <option value="completed">Only Completed Training</option>
                        <option value="in-progress">In Progress</option>
                        <option value="custom">Custom Selection</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Evaluation Questions</label>
                    <div class="space-y-3 border border-gray-200 rounded-md p-3">
                        <div class="bg-gray-50 p-3 rounded-md">
                            <div class="flex justify-between">
                                <p class="text-sm font-medium text-gray-700">How would you rate the overall training quality?</p>
                                <button type="button" class="text-gray-400 hover:text-gray-600">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </div>
                            <div class="mt-1 text-xs text-gray-500">5-star rating</div>
                        </div>
                        
                        <div class="bg-gray-50 p-3 rounded-md">
                            <div class="flex justify-between">
                                <p class="text-sm font-medium text-gray-700">Was the content relevant to your job responsibilities?</p>
                                <button type="button" class="text-gray-400 hover:text-gray-600">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </div>
                            <div class="mt-1 text-xs text-gray-500">5-point scale (Not at all - Extremely)</div>
                        </div>
                        
                        <div class="bg-gray-50 p-3 rounded-md">
                            <div class="flex justify-between">
                                <p class="text-sm font-medium text-gray-700">How would you rate the trainer's knowledge and delivery?</p>
                                <button type="button" class="text-gray-400 hover:text-gray-600">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </div>
                            <div class="mt-1 text-xs text-gray-500">5-star rating</div>
                        </div>
                        
                        <div class="bg-gray-50 p-3 rounded-md">
                            <div class="flex justify-between">
                                <p class="text-sm font-medium text-gray-700">What aspects of the training could be improved?</p>
                                <button type="button" class="text-gray-400 hover:text-gray-600">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </div>
                            <div class="mt-1 text-xs text-gray-500">Text response</div>
                        </div>
                    </div>
                    
                    <button type="button" class="mt-2 flex items-center text-sm text-primary hover:text-primary-dark">
                        <i class='bx bx-plus mr-1'></i> Add Question
                    </button>
                </div>
                
                <div class="mb-4">
                    <label for="due_date" class="block text-sm font-medium text-gray-700 mb-1">Response Due Date</label>
                    <input type="date" id="due_date" name="due_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                </div>
                
                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="send_reminders" name="send_reminders" class="rounded border-gray-300 text-primary focus:ring-primary">
                        <label for="send_reminders" class="ml-2 block text-sm text-gray-700">Send reminders to non-respondents</label>
                    </div>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'create-evaluation-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Create & Send Evaluation
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
    
    <!-- View Evaluation Details Modal -->
    <x-modal id="view-evaluation-modal" :show="false" max-width="xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-1">
                Python Programming Basics - Evaluation Results
            </h2>
            <p class="text-sm text-gray-600 mb-4">Completed on September 22, 2025 | 12 responses</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <h3 class="text-sm font-medium text-gray-700 mb-2">Overall Rating</h3>
                    <div class="flex items-center mb-2">
                        <span class="text-2xl font-bold text-gray-800 mr-2">4.5</span>
                        <div class="flex text-yellow-400">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex items-center">
                            <span class="text-xs text-gray-600 w-10">5 ★</span>
                            <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 60%"></div>
                            </div>
                            <span class="text-xs text-gray-600">7</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-xs text-gray-600 w-10">4 ★</span>
                            <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 30%"></div>
                            </div>
                            <span class="text-xs text-gray-600">4</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-xs text-gray-600 w-10">3 ★</span>
                            <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 8%"></div>
                            </div>
                            <span class="text-xs text-gray-600">1</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-xs text-gray-600 w-10">2 ★</span>
                            <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 0%"></div>
                            </div>
                            <span class="text-xs text-gray-600">0</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-xs text-gray-600 w-10">1 ★</span>
                            <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                <div class="bg-yellow-400 h-2 rounded-full" style="width: 0%"></div>
                            </div>
                            <span class="text-xs text-gray-600">0</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <h3 class="text-sm font-medium text-gray-700 mb-2">Effectiveness Metrics</h3>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Content Relevance</span>
                                <span>90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Trainer Effectiveness</span>
                                <span>88%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Learning Materials</span>
                                <span>82%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 82%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Practical Application</span>
                                <span>78%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-500 h-2 rounded-full" style="width: 78%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>Overall Satisfaction</span>
                                <span>85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="text-md font-medium text-gray-800 mb-3">Response Summary</h3>
            
            <div class="space-y-4 mb-6">
                <div class="border border-gray-200 rounded-md overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3">
                        <h4 class="text-sm font-medium text-gray-700">How would you rate the overall training quality?</h4>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center mb-1">
                            <div class="flex text-yellow-400 mr-2">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                            <span class="text-sm text-gray-700">Average: 4.5/5</span>
                        </div>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-md overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3">
                        <h4 class="text-sm font-medium text-gray-700">Was the content relevant to your job responsibilities?</h4>
                    </div>
                    <div class="p-4">
                        <div class="space-y-1">
                            <div class="flex items-center">
                                <span class="text-xs text-gray-600 w-32">Extremely</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 58%"></div>
                                </div>
                                <span class="text-xs text-gray-600">7 (58%)</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-xs text-gray-600 w-32">Very</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 33%"></div>
                                </div>
                                <span class="text-xs text-gray-600">4 (33%)</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-xs text-gray-600 w-32">Somewhat</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 8%"></div>
                                </div>
                                <span class="text-xs text-gray-600">1 (8%)</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-xs text-gray-600 w-32">Slightly</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 0%"></div>
                                </div>
                                <span class="text-xs text-gray-600">0 (0%)</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-xs text-gray-600 w-32">Not at all</span>
                                <div class="w-full bg-gray-200 rounded-full h-2 mx-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 0%"></div>
                                </div>
                                <span class="text-xs text-gray-600">0 (0%)</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-md overflow-hidden">
                    <div class="bg-gray-50 px-4 py-3">
                        <h4 class="text-sm font-medium text-gray-700">What aspects of the training could be improved?</h4>
                    </div>
                    <div class="p-4">
                        <div class="space-y-3">
                            <div class="bg-gray-50 p-3 rounded-md text-sm text-gray-700">
                                "More practical exercises would be helpful to reinforce the learning."
                            </div>
                            <div class="bg-gray-50 p-3 rounded-md text-sm text-gray-700">
                                "The pace was a bit fast for beginners. Would appreciate more time on basic concepts."
                            </div>
                            <div class="bg-gray-50 p-3 rounded-md text-sm text-gray-700">
                                "Additional resources for self-learning would be great as follow-up materials."
                            </div>
                            <div class="bg-gray-50 p-3 rounded-md text-sm text-gray-700">
                                "More real-world examples related to our daily tasks would make the content more applicable."
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="text-md font-medium text-gray-800 mb-3">Recommendations</h3>
            <div class="bg-blue-50 border border-blue-200 rounded-md p-4 mb-6">
                <ul class="list-disc list-inside space-y-1 text-sm text-gray-700">
                    <li>Include more hands-on exercises to reinforce learning</li>
                    <li>Adjust pace for varying skill levels, possibly offering pre-training preparation</li>
                    <li>Provide additional follow-up resources for self-paced learning</li>
                    <li>Incorporate more department-specific examples</li>
                    <li>Consider splitting into basic and advanced sessions</li>
                </ul>
            </div>
            
            <div class="flex justify-end space-x-3">
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    <i class='bx bx-download mr-1'></i> Export to PDF
                </button>
                <button class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'view-evaluation-modal')">
                    Close
                </button>
            </div>
        </div>
    </x-modal>
</x-app-layout>
