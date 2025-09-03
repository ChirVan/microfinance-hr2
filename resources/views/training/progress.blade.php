<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Training Progress Tracker') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Employee Training Progress</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Track the progress and status of training for each employee.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-download mr-2'></i>
                            Export Report
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-refresh mr-2'></i>
                            Refresh Data
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="flex flex-wrap gap-4 items-end">
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Department</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-48 text-gray-700">
                            <option value="">All Departments</option>
                            <option value="it" selected>Information Technology</option>
                            <option value="hr">Human Resources</option>
                            <option value="finance">Finance</option>
                            <option value="operations">Operations</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Status</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-48 text-gray-700">
                            <option value="">All Status</option>
                            <option value="assigned">Assigned</option>
                            <option value="in-progress" selected>In Progress</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Employee</label>
                        <input type="text" placeholder="Search employee..." class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-64 text-gray-700">
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                            <i class='bx bx-filter-alt mr-2'></i> Apply Filters
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Progress Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm text-gray-500">Total Trainings</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">42</div>
                        </div>
                        <div class="h-10 w-10 bg-blue-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-book text-blue-600'></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm text-gray-500">In Progress</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">18</div>
                        </div>
                        <div class="h-10 w-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-time text-yellow-600'></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm text-gray-500">Completed</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">22</div>
                        </div>
                        <div class="h-10 w-10 bg-green-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-check-circle text-green-600'></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-md p-4 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="text-sm text-gray-500">Completion Rate</div>
                            <div class="text-2xl font-semibold text-gray-800 mt-1">52%</div>
                        </div>
                        <div class="h-10 w-10 bg-indigo-100 rounded-full flex items-center justify-center">
                            <i class='bx bx-trending-up text-indigo-600'></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Training Progress Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Employee</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Training</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Start Date</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Due Date</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Progress</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Score</th>
                            <th class="px-4 py-3 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample Progress 1 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <span class="text-xs font-medium text-gray-600">JD</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">John Doe</div>
                                        <div class="text-xs text-gray-500">IT Manager</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Leadership Fundamentals</div>
                                <div class="text-xs text-gray-500">Workshop</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 12, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 13, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Assigned</span>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <span class="text-xs text-gray-500">0%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">-</td>
                            <td class="px-4 py-4 text-sm text-center">
                                <button class="text-blue-600 hover:text-blue-800" x-data="" x-on:click="$dispatch('open-modal', 'update-progress-modal')">
                                    Update Progress
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Progress 2 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <span class="text-xs font-medium text-gray-600">AS</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Alice Smith</div>
                                        <div class="text-xs text-gray-500">Software Developer</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Python Programming Basics</div>
                                <div class="text-xs text-gray-500">E-learning</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sep 15, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sep 22, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">In Progress</span>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 65%"></div>
                                    </div>
                                    <span class="text-xs text-gray-500">65%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">-</td>
                            <td class="px-4 py-4 text-sm text-center">
                                <button class="text-blue-600 hover:text-blue-800" x-data="" x-on:click="$dispatch('open-modal', 'update-progress-modal')">
                                    Update Progress
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Progress 3 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <span class="text-xs font-medium text-gray-600">MB</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                        <div class="text-xs text-gray-500">Financial Analyst</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Financial Compliance</div>
                                <div class="text-xs text-gray-500">Seminar</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 05, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 05, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-green-500 h-2.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                    <span class="text-xs text-gray-500">100%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">92%</td>
                            <td class="px-4 py-4 text-sm text-center">
                                <button class="text-blue-600 hover:text-blue-800">
                                    View Certificate
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Progress 4 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <span class="text-xs font-medium text-gray-600">EW</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Emily Wilson</div>
                                        <div class="text-xs text-gray-500">Customer Service Rep</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Customer Service Excellence</div>
                                <div class="text-xs text-gray-500">On-the-job</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 01, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 05, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">In Progress</span>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 40%"></div>
                                    </div>
                                    <span class="text-xs text-gray-500">40%</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">-</td>
                            <td class="px-4 py-4 text-sm text-center">
                                <button class="text-blue-600 hover:text-blue-800" x-data="" x-on:click="$dispatch('open-modal', 'update-progress-modal')">
                                    Update Progress
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="flex items-center justify-between mt-4">
                <div class="text-sm text-gray-600">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">18</span> results
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-500">Previous</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-blue-600 font-medium">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">2</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">3</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">4</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">5</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">Next</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Update Progress Modal -->
    <x-modal id="update-progress-modal" :show="false" max-width="md" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Update Training Progress
            </h2>
            
            <form>
                <div class="mb-4">
                    <div class="flex items-center mb-2">
                        <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-2">
                            <span class="text-xs font-medium text-gray-600">AS</span>
                        </div>
                        <div>
                            <div class="text-sm font-medium text-gray-900">Alice Smith</div>
                            <div class="text-xs text-gray-500">Python Programming Basics</div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="assigned">Assigned</option>
                        <option value="in-progress" selected>In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="progress" class="block text-sm font-medium text-gray-700 mb-1">Progress (%)</label>
                    <div class="flex items-center space-x-2">
                        <input type="range" id="progress" name="progress" min="0" max="100" value="65" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                        <span class="text-sm font-medium text-gray-700" x-data="{ value: 65 }" x-init="$watch('value', val => { document.getElementById('progress').value = val })" x-text="document.getElementById('progress').value + '%'">65%</span>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="completion_date" class="block text-sm font-medium text-gray-700 mb-1">Completion Date</label>
                    <input type="date" id="completion_date" name="completion_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                </div>
                
                <div class="mb-4" x-data="{ showScore: false }" x-init="showScore = document.getElementById('status').value === 'completed'" @change="showScore = document.getElementById('status').value === 'completed'">
                    <label for="score" class="block text-sm font-medium text-gray-700 mb-1">Score/Grade</label>
                    <input type="number" id="score" name="score" min="0" max="100" placeholder="Score (0-100)" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" x-bind:disabled="!showScore">
                    <p class="mt-1 text-xs text-gray-500">Only required when training is completed</p>
                </div>
                
                <div class="mb-4">
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
                    <textarea id="notes" name="notes" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'update-progress-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Update Progress
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
</x-app-layout>
