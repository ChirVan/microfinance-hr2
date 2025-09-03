<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Assign Questionnaires') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Questionnaire Assignments</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Assign competency questionnaires to employees for assessment.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-export mr-2'></i>
                            Export Assignments
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'new-assignment-modal')">
                            <i class='bx bx-plus mr-2'></i>
                            New Assignment
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Assignment Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
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
                        <label for="status_filter" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select id="status_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Status</option>
                            <option value="assigned">Assigned</option>
                            <option value="in_progress">In Progress</option>
                            <option value="completed">Completed</option>
                            <option value="overdue">Overdue</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Assignments Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Employee</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Questionnaire</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Period</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Due Date</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Assessor</th>
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
                                        <div class="text-xs text-gray-500">IT Department</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Leadership Skills Assessment</div>
                                <div class="text-xs text-gray-500">12 questions</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Q3 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sept 30, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Manager</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    In Progress
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-show'></i>
                                    </button>
                                    <button class="text-green-600 hover:text-green-900" x-data="" x-on:click="$dispatch('open-modal', 'capture-results-modal')">
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
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Completed
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
                                        <div class="text-xs text-gray-500">Operations</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Technical Proficiency - Networking</div>
                                <div class="text-xs text-gray-500">15 questions</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Q4 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Oct 15, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Manager</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Assigned
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
                                        <div class="text-xs text-gray-500">Human Resources</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Leadership Skills Assessment</div>
                                <div class="text-xs text-gray-500">12 questions</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Q3 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 30, 2025</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Peer</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                    Overdue
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">4</span> assignments
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-500">Previous</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-blue-600 font-medium">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">Next</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- New Assignment Modal -->
    <x-modal id="new-assignment-modal" :show="false" max-width="3xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                New Questionnaire Assignment
            </h2>
            
            <form>
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Questionnaire Selection</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="questionnaire" class="block text-sm font-medium text-gray-700 mb-1">Questionnaire</label>
                            <select id="questionnaire" name="questionnaire" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">Select Questionnaire</option>
                                <option value="1">Leadership Skills Assessment</option>
                                <option value="2">Technical Proficiency - Networking</option>
                                <option value="3">Communication Skills Evaluation</option>
                                <option value="4">Problem-Solving Assessment</option>
                            </select>
                        </div>
                        <div>
                            <label for="assessment_period" class="block text-sm font-medium text-gray-700 mb-1">Assessment Period</label>
                            <select id="assessment_period" name="assessment_period" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="q3_2025">Q3 2025 (Jul-Sep)</option>
                                <option value="q4_2025">Q4 2025 (Oct-Dec)</option>
                                <option value="q1_2026">Q1 2026 (Jan-Mar)</option>
                                <option value="q2_2026">Q2 2026 (Apr-Jun)</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="assessor_type" class="block text-sm font-medium text-gray-700 mb-1">Assessor Type</label>
                            <select id="assessor_type" name="assessor_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="manager">Manager</option>
                                <option value="hr">HR Staff</option>
                                <option value="peer">Peer Assessment</option>
                                <option value="self">Self-Assessment</option>
                            </select>
                        </div>
                        <div>
                            <label for="due_date" class="block text-sm font-medium text-gray-700 mb-1">Due Date</label>
                            <input type="date" id="due_date" name="due_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
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
                                            IT Manager
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
                                            Jane Smith
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Team Lead
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
                                            Project Manager
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
                                            Emily Wilson
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            HR Manager
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
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'new-assignment-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Assign Questionnaire
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
    
    <!-- Capture Results Modal -->
    <x-modal id="capture-results-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-1">
                Complete Assessment: Leadership Skills Assessment
            </h2>
            <p class="text-sm text-gray-600 mb-4">For: John Doe | Assessor: Manager | Due: Sept 30, 2025</p>
            
            <form>
                <div class="space-y-6">
                    <!-- Question 1 -->
                    <div class="bg-gray-50 border border-gray-200 rounded-md p-4">
                        <div class="mb-3">
                            <h3 class="text-sm font-medium text-gray-900">Question 1 of 12</h3>
                            <p class="mt-1 text-sm text-gray-700">Explain the process of effective task delegation and describe how you implement it in your role:</p>
                        </div>
                        
                        <div class="mt-4">
                            <textarea id="q1_answer" name="q1_answer" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Enter your answer here..."></textarea>
                            <p class="mt-1 text-xs text-gray-500">Include specific examples of how you match tasks to team members' strengths and how you communicate expectations.</p>
                        </div>
                    </div>
                    
                    <!-- Question 2 -->
                    <div class="bg-gray-50 border border-gray-200 rounded-md p-4">
                        <div class="mb-3">
                            <h3 class="text-sm font-medium text-gray-900">Question 2 of 12</h3>
                            <p class="mt-1 text-sm text-gray-700">Identify three effective conflict resolution strategies and provide an example of how you've successfully applied one in a workplace situation:</p>
                        </div>
                        
                        <div class="mt-4">
                            <textarea id="q2_answer" name="q2_answer" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Enter your answer here..."></textarea>
                            <p class="mt-1 text-xs text-gray-500">Your answer should demonstrate knowledge of conflict resolution techniques and include a specific workplace example.</p>
                        </div>
                    </div>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="q2_rating" value="4" class="h-4 w-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">4 - Good</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="q2_rating" value="5" class="h-4 w-4 text-primary focus:ring-primary border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">5 - Excellent</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <label for="q2_comment" class="block text-sm font-medium text-gray-700 mb-1">Comments (Optional)</label>
                            <textarea id="q2_comment" name="q2_comment" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
                        </div>
                    </div>
                    
                    <!-- Question 3 (Identification question) -->
                    <div class="bg-gray-50 border border-gray-200 rounded-md p-4">
                        <div class="mb-3">
                            <h3 class="text-sm font-medium text-gray-900">Question 3 of 12</h3>
                            <p class="mt-1 text-sm text-gray-700">Describe the key characteristics of transformational leadership and provide an example of when you applied this approach:</p>
                        </div>
                        
                        <div class="mt-4">
                            <textarea id="q3_answer" name="q3_answer" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Enter your answer here..."></textarea>
                            <p class="mt-1 text-xs text-gray-500">Your answer should demonstrate understanding of transformational leadership principles and include a specific example from your experience.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between bg-blue-50 p-4 border border-blue-200 rounded-md">
                        <div class="text-sm text-blue-700">
                            <span class="font-medium">Showing 3 of 12 questions.</span> Complete all questions to submit the assessment.
                        </div>
                        <div class="flex space-x-2">
                            <button type="button" class="px-3 py-1 bg-white border border-gray-300 rounded-md text-sm text-gray-700">Previous</button>
                            <button type="button" class="px-3 py-1 bg-white border border-gray-300 rounded-md text-sm text-gray-700">Next</button>
                        </div>
                    </div>
                </div>
                
                <div class="mt-6 flex justify-between">
                    <div class="flex items-center">
                        <input id="save_draft" name="save_draft" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="save_draft" class="ml-2 block text-sm text-gray-700">
                            Save as draft
                        </label>
                    </div>
                    <div class="flex space-x-3">
                        <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'capture-results-modal')">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Save Responses
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </x-modal>
</x-app-layout>
