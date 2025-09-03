<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Assign Training') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Assign Training Sessions</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Assign training sessions to employees based on competency gaps.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-download mr-2'></i>
                            Export Assignments
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'assign-training-modal')">
                            <i class='bx bx-plus mr-2'></i>
                            New Assignment
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
                            <option value="it">Information Technology</option>
                            <option value="hr">Human Resources</option>
                            <option value="finance">Finance</option>
                            <option value="operations">Operations</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Training Status</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-48 text-gray-700">
                            <option value="">All Status</option>
                            <option value="assigned">Assigned</option>
                            <option value="in-progress">In Progress</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Date Range</label>
                        <div class="flex space-x-2">
                            <input type="date" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-40 text-gray-700">
                            <span class="flex items-center text-gray-500">to</span>
                            <input type="date" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-40 text-gray-700">
                        </div>
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                            <i class='bx bx-filter-alt mr-2'></i> Apply Filters
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Assign Training Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Employee</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Job Title</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Training</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Delivery Method</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Start Date</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">End Date</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                            <th class="px-4 py-3 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample Assignment 1 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <span class="text-xs font-medium text-gray-600">JD</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">John Doe</div>
                                        <div class="text-xs text-gray-500">EMP-001</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">IT Manager</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Leadership Fundamentals</div>
                                <div class="text-xs text-gray-500">Based on Strategic Planning gap</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Face-to-Face</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 12, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 13, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Assigned</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800" title="View Details">
                                    <i class='bx bx-show'></i>
                                </button>
                                <button class="text-green-600 hover:text-green-800" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800" title="Cancel">
                                    <i class='bx bx-x-circle'></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Assignment 2 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <span class="text-xs font-medium text-gray-600">AS</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Alice Smith</div>
                                        <div class="text-xs text-gray-500">EMP-002</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Software Developer</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Python Programming Basics</div>
                                <div class="text-xs text-gray-500">Based on Technical Skills gap</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-indigo-100 text-indigo-800">Online</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sep 15, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sep 22, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">In Progress</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800" title="View Details">
                                    <i class='bx bx-show'></i>
                                </button>
                                <button class="text-green-600 hover:text-green-800" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800" title="Cancel">
                                    <i class='bx bx-x-circle'></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Assignment 3 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <span class="text-xs font-medium text-gray-600">MB</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                        <div class="text-xs text-gray-500">EMP-003</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Financial Analyst</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Financial Compliance</div>
                                <div class="text-xs text-gray-500">Based on Regulatory Knowledge gap</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">Hybrid</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 05, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 05, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800" title="View Details">
                                    <i class='bx bx-show'></i>
                                </button>
                                <button class="text-green-600 hover:text-green-800" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button class="text-gray-400 cursor-not-allowed" title="Cannot Cancel Completed Training">
                                    <i class='bx bx-x-circle'></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Assignment 4 -->
                        <tr>
                            <td class="px-4 py-4">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-3">
                                        <span class="text-xs font-medium text-gray-600">EW</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Emily Wilson</div>
                                        <div class="text-xs text-gray-500">EMP-004</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Customer Service Rep</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Customer Service Excellence</div>
                                <div class="text-xs text-gray-500">Based on Communication Skills gap</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">On-the-job</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 01, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 05, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Assigned</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800" title="View Details">
                                    <i class='bx bx-show'></i>
                                </button>
                                <button class="text-green-600 hover:text-green-800" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800" title="Cancel">
                                    <i class='bx bx-x-circle'></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="flex items-center justify-between mt-4">
                <div class="text-sm text-gray-600">
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">15</span> results
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
    
    <!-- Assign Training Modal -->
    <x-modal id="assign-training-modal" :show="false" max-width="3xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Assign New Training
            </h2>
            
            <form>
                <!-- Employee Selection Section -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Employee Information</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="employee_id" class="block text-sm font-medium text-gray-700 mb-1">Employee</label>
                            <select id="employee_id" name="employee_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">Select Employee</option>
                                <option value="1">John Doe (EMP-001) - IT Manager</option>
                                <option value="2">Alice Smith (EMP-002) - Software Developer</option>
                                <option value="3">Michael Brown (EMP-003) - Financial Analyst</option>
                                <option value="4">Emily Wilson (EMP-004) - Customer Service Rep</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                            <input type="text" id="department" name="department" value="Information Technology" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" readonly>
                        </div>
                    </div>
                </div>
                
                <!-- Competency Gaps Section -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Competency Gaps</h3>
                    
                    <div class="bg-gray-50 p-3 rounded-md mb-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-sm font-medium text-gray-700">Strategic Planning</span>
                                <div class="text-xs text-gray-500">Leadership competency group</div>
                            </div>
                            <div>
                                <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">-1.0 Gap</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 p-3 rounded-md mb-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-sm font-medium text-gray-700">Cloud Technologies</span>
                                <div class="text-xs text-gray-500">Technical Skills competency group</div>
                            </div>
                            <div>
                                <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">-0.5 Gap</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Training Selection Section -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Training Selection</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="training_id" class="block text-sm font-medium text-gray-700 mb-1">Training Program</label>
                            <select id="training_id" name="training_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">Select Training Program</option>
                                <option value="1">Leadership Fundamentals (addresses Strategic Planning)</option>
                                <option value="2">Cloud Computing Essentials (addresses Cloud Technologies)</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="delivery_method" class="block text-sm font-medium text-gray-700 mb-1">Delivery Method</label>
                            <select id="delivery_method" name="delivery_method" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="online">Online</option>
                                <option value="face-to-face">Face-to-Face</option>
                                <option value="hybrid">Hybrid</option>
                                <option value="on-the-job">On-the-job</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Schedule Section -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Schedule</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                            <input type="date" id="start_date" name="start_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        </div>
                        
                        <div>
                            <label for="end_date" class="block text-sm font-medium text-gray-700 mb-1">End Date</label>
                            <input type="date" id="end_date" name="end_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <div class="flex items-center">
                            <input id="schedule_check" name="schedule_check" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="schedule_check" class="ml-2 block text-sm text-gray-700">
                                Check for schedule conflicts with HR3 (Workforce Operations)
                            </label>
                        </div>
                    </div>
                </div>
                
                <!-- Additional Notes Section -->
                <div class="mb-6">
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes</label>
                    <textarea id="notes" name="notes" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'assign-training-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Assign Training
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
</x-app-layout>
