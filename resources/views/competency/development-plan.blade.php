<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Development Planning') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Employee Development Plan</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Create targeted development plans to address competency gaps.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-list-ul mr-2'></i>
                            All Development Plans
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-save mr-2'></i>
                            Save Plan
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Development Plan Form -->
            <div class="bg-gray-50 border border-gray-200 rounded-base p-6">
                <!-- Employee Information -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Employee Information</h4>
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">In Progress</span>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Employee</label>
                                <div class="flex items-center">
                                    <input type="text" value="John Doe (EMP-10042)" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                                    <button class="ml-2 px-3 py-2 bg-primary hover:bg-primary-dark text-white rounded-md text-sm">
                                        <i class='bx bx-search'></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Position</label>
                                <input type="text" value="Network Engineer" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Department</label>
                                <input type="text" value="IT Department" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                            </div>
                        </div>
                        
                        <div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Plan Period</label>
                                <div class="flex space-x-2">
                                    <input type="date" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700" value="2025-09-03">
                                    <span class="flex items-center text-gray-500">to</span>
                                    <input type="date" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700" value="2026-03-03">
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Plan Name</label>
                                <input type="text" value="Networking Skills Development Q3-Q4 2025" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Based on Assessment</label>
                                <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                    <option selected>IT Department Competency Assessment (Sep 2025)</option>
                                    <option>Annual Performance Review (Jul 2025)</option>
                                    <option>Custom Plan (No Assessment)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Development Goals -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Development Goals</h4>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm" 
                                onclick="document.getElementById('addGoalModal').classList.remove('hidden')">
                            <i class='bx bx-plus mr-1'></i> Add Goal
                        </button>
                    </div>
                    
                    <div class="space-y-6">
                        <!-- Goal 1: Network Security -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h5 class="font-medium text-gray-800">Goal 1: Advanced Network Security</h5>
                                    <p class="text-sm text-gray-600">Improve knowledge and skills in network security principles and implementation</p>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="px-2 py-1 text-xs font-semibold rounded-full bg-indigo-100 text-indigo-800">High Priority</div>
                                    <div class="dropdown">
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class='bx bx-dots-vertical-rounded'></i>
                                        </button>
                                        <div class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 p-1">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Edit Goal</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Change Priority</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 rounded-md">Remove Goal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="flex justify-between items-center mb-2">
                                    <h6 class="text-sm font-medium text-gray-700">Development Activities</h6>
                                    <button class="text-primary hover:text-primary-dark text-xs"
                                            onclick="document.getElementById('addActivityModal').classList.remove('hidden')">
                                        <i class='bx bx-plus mr-1'></i> Add Activity
                                    </button>
                                </div>
                                
                                <div class="space-y-3">
                                    <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <div class="font-medium text-gray-800 text-sm">Complete CISSP Certification</div>
                                                <p class="text-xs text-gray-600 mt-1">Attend training and obtain CISSP certification to enhance network security knowledge</p>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Training</span>
                                                <button class="text-gray-400 hover:text-gray-600">
                                                    <i class='bx bx-pencil'></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mt-3 pt-3 border-t border-gray-200 flex justify-between items-center">
                                            <div class="text-xs text-gray-500">Target Completion: Oct 30, 2025</div>
                                            <select class="bg-white border border-gray-200 rounded-md px-2 py-1 text-xs text-gray-700">
                                                <option>Not Started</option>
                                                <option selected>In Progress</option>
                                                <option>Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <div class="font-medium text-gray-800 text-sm">Shadow Senior Security Engineer</div>
                                                <p class="text-xs text-gray-600 mt-1">Spend 4 hours per week working with Senior Security Engineer on live projects</p>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Mentoring</span>
                                                <button class="text-gray-400 hover:text-gray-600">
                                                    <i class='bx bx-pencil'></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mt-3 pt-3 border-t border-gray-200 flex justify-between items-center">
                                            <div class="text-xs text-gray-500">Target Completion: Ongoing (weekly)</div>
                                            <select class="bg-white border border-gray-200 rounded-md px-2 py-1 text-xs text-gray-700">
                                                <option>Not Started</option>
                                                <option selected>In Progress</option>
                                                <option>Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <h6 class="text-sm font-medium text-gray-700">Success Measures</h6>
                                    <button class="text-primary hover:text-primary-dark text-xs">
                                        <i class='bx bx-plus mr-1'></i> Add Measure
                                    </button>
                                </div>
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                        <li>Obtain CISSP certification by December 2025</li>
                                        <li>Successfully implement new security measures on at least 2 network projects</li>
                                        <li>Reduce security incident response time by 20%</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Goal 2: Advanced Networking -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h5 class="font-medium text-gray-800">Goal 2: Advanced Routing and Switching</h5>
                                    <p class="text-sm text-gray-600">Enhance knowledge of enterprise routing and switching technologies</p>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Medium Priority</div>
                                    <div class="dropdown">
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class='bx bx-dots-vertical-rounded'></i>
                                        </button>
                                        <div class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 p-1">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Edit Goal</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Change Priority</a>
                                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50 rounded-md">Remove Goal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="flex justify-between items-center mb-2">
                                    <h6 class="text-sm font-medium text-gray-700">Development Activities</h6>
                                    <button class="text-primary hover:text-primary-dark text-xs">
                                        <i class='bx bx-plus mr-1'></i> Add Activity
                                    </button>
                                </div>
                                
                                <div class="space-y-3">
                                    <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <div class="font-medium text-gray-800 text-sm">Advanced Networking Online Course</div>
                                                <p class="text-xs text-gray-600 mt-1">Complete the "Enterprise Network Solutions" e-learning course</p>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">E-Learning</span>
                                                <button class="text-gray-400 hover:text-gray-600">
                                                    <i class='bx bx-pencil'></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mt-3 pt-3 border-t border-gray-200 flex justify-between items-center">
                                            <div class="text-xs text-gray-500">Target Completion: Nov 15, 2025</div>
                                            <select class="bg-white border border-gray-200 rounded-md px-2 py-1 text-xs text-gray-700">
                                                <option selected>Not Started</option>
                                                <option>In Progress</option>
                                                <option>Completed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <h6 class="text-sm font-medium text-gray-700">Success Measures</h6>
                                    <button class="text-primary hover:text-primary-dark text-xs">
                                        <i class='bx bx-plus mr-1'></i> Add Measure
                                    </button>
                                </div>
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                        <li>Complete course with at least 85% score</li>
                                        <li>Successfully design and implement at least one complex routing solution</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Add Goal Button -->
                        <button class="w-full py-3 border border-dashed border-gray-300 rounded-lg text-gray-500 hover:bg-gray-50"
                                onclick="document.getElementById('addGoalModal').classList.remove('hidden')">
                            <i class='bx bx-plus mr-1'></i> Add Another Development Goal
                        </button>
                    </div>
                </div>
                
                <!-- Support and Resources -->
                <div class="mb-6">
                    <h4 class="text-base font-medium text-text-dark mb-4">Support and Resources</h4>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h6 class="text-sm font-medium text-gray-700 mb-2">Manager Support</h6>
                                <textarea class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700 h-24">Weekly check-ins to review progress. Budget approved for CISSP certification. Time allocation of 4 hours per week for mentoring sessions approved.</textarea>
                            </div>
                            
                            <div>
                                <h6 class="text-sm font-medium text-gray-700 mb-2">Additional Resources</h6>
                                <textarea class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700 h-24">Access to enterprise network lab environment. Subscription to online learning platform. Budget for reference materials and certification exam.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Development Plan Timeline -->
                <div class="mb-6">
                    <h4 class="text-base font-medium text-text-dark mb-4">Development Timeline</h4>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4 overflow-x-auto">
                        <div class="min-w-max">
                            <!-- Timeline visualization would go here - simplified version -->
                            <div class="relative pt-10 pb-4">
                                <!-- Timeline header months -->
                                <div class="flex">
                                    <div class="w-32 flex-shrink-0"></div>
                                    <div class="flex flex-grow">
                                        <div class="w-1/6 text-xs font-medium text-gray-500 text-center">Sep '25</div>
                                        <div class="w-1/6 text-xs font-medium text-gray-500 text-center">Oct '25</div>
                                        <div class="w-1/6 text-xs font-medium text-gray-500 text-center">Nov '25</div>
                                        <div class="w-1/6 text-xs font-medium text-gray-500 text-center">Dec '25</div>
                                        <div class="w-1/6 text-xs font-medium text-gray-500 text-center">Jan '26</div>
                                        <div class="w-1/6 text-xs font-medium text-gray-500 text-center">Feb '26</div>
                                    </div>
                                </div>
                                
                                <!-- Timeline line -->
                                <div class="absolute left-32 right-0 top-16 h-0.5 bg-gray-200"></div>
                                
                                <!-- Goal 1 activities -->
                                <div class="flex mt-4 items-center">
                                    <div class="w-32 flex-shrink-0">
                                        <div class="text-xs font-medium text-gray-700">CISSP Certification</div>
                                    </div>
                                    <div class="flex flex-grow h-6">
                                        <div class="w-1/6"></div>
                                        <div class="w-2/6 bg-blue-100 border border-blue-300 rounded-md text-xs flex items-center justify-center text-blue-800">In Progress</div>
                                        <div class="w-3/6"></div>
                                    </div>
                                </div>
                                
                                <div class="flex mt-2 items-center">
                                    <div class="w-32 flex-shrink-0">
                                        <div class="text-xs font-medium text-gray-700">Security Mentoring</div>
                                    </div>
                                    <div class="flex flex-grow h-6">
                                        <div class="w-full bg-green-100 border border-green-300 rounded-md text-xs flex items-center justify-center text-green-800">Ongoing Weekly</div>
                                    </div>
                                </div>
                                
                                <!-- Goal 2 activities -->
                                <div class="flex mt-2 items-center">
                                    <div class="w-32 flex-shrink-0">
                                        <div class="text-xs font-medium text-gray-700">Network Course</div>
                                    </div>
                                    <div class="flex flex-grow h-6">
                                        <div class="w-2/6"></div>
                                        <div class="w-1/6 bg-purple-100 border border-purple-300 rounded-md text-xs flex items-center justify-center text-purple-800">Planned</div>
                                        <div class="w-3/6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Process Information -->
                <div class="mb-6 bg-blue-50 border border-blue-100 rounded-md p-4">
                    <h4 class="text-sm font-medium text-blue-800 mb-2">Development Planning Process</h4>
                    <div class="text-xs text-blue-700 space-y-1">
                        <p>1. Identify competency gaps from assessments</p>
                        <p>2. Set specific, measurable development goals to address gaps</p>
                        <p>3. Select appropriate development activities (training, mentoring, projects)</p>
                        <p>4. Define success measures for each goal</p>
                        <p>5. Regular check-ins to monitor progress and adjust as needed</p>
                        <p>6. Reassess competencies after development plan completion</p>
                    </div>
                </div>
                
                <!-- Approvals Section -->
                <div class="mb-6">
                    <h4 class="text-base font-medium text-text-dark mb-4">Approvals</h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <h6 class="text-sm font-medium text-gray-700 mb-3">Employee Acknowledgment</h6>
                            <div class="flex items-center mb-3">
                                <span class="text-sm text-gray-500 mr-3">Status:</span>
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-800">Pending</span>
                            </div>
                            <div class="text-xs text-gray-500">
                                Employee will receive notification to review and acknowledge this development plan.
                            </div>
                        </div>
                        
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <h6 class="text-sm font-medium text-gray-700 mb-3">Manager Approval</h6>
                            <div class="flex items-center mb-3">
                                <span class="text-sm text-gray-500 mr-3">Status:</span>
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Approved</span>
                            </div>
                            <div class="text-xs text-gray-500">
                                Approved by: Mark Johnson (IT Manager) on Sep 3, 2025
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Progress Tracking Section -->
                <div class="mb-6">
                    <h4 class="text-base font-medium text-text-dark mb-4">Progress Tracking</h4>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-center mb-4">
                            <h6 class="text-sm font-medium text-gray-700">Overall Progress</h6>
                            <div class="text-sm font-medium text-gray-700">35% Complete</div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-primary h-3 rounded-full" style="width: 35%"></div>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="bg-gray-50 border border-gray-200 rounded-md p-3 text-center">
                                <div class="text-sm font-medium text-gray-700 mb-1">Goal 1 Progress</div>
                                <div class="flex items-center justify-center">
                                    <div class="h-14 w-14 rounded-full border-4 border-blue-200 flex items-center justify-center">
                                        <span class="text-blue-600 font-bold text-sm">50%</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-gray-50 border border-gray-200 rounded-md p-3 text-center">
                                <div class="text-sm font-medium text-gray-700 mb-1">Goal 2 Progress</div>
                                <div class="flex items-center justify-center">
                                    <div class="h-14 w-14 rounded-full border-4 border-blue-200 flex items-center justify-center">
                                        <span class="text-blue-600 font-bold text-sm">20%</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-gray-50 border border-gray-200 rounded-md p-3 text-center">
                                <div class="text-sm font-medium text-gray-700 mb-1">Next Check-in</div>
                                <div class="text-sm font-bold text-gray-800">Sep 18, 2025</div>
                                <div class="text-xs text-gray-500">in 14 days</div>
                            </div>
                        </div>
                        
                        <div>
                            <h6 class="text-sm font-medium text-gray-700 mb-2">Recent Check-in Notes</h6>
                            <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                <div class="text-xs text-gray-700 mb-2 font-medium">September 3, 2025 - Initial Planning</div>
                                <p class="text-xs text-gray-600">Development plan created and approved. Employee has begun CISSP certification preparation and scheduled first mentoring session with Senior Security Engineer.</p>
                            </div>
                        </div>
                        
                        <div class="mt-3 text-right">
                            <button class="text-sm font-medium text-primary hover:text-primary-dark transition">
                                <i class='bx bx-plus-circle mr-1'></i> Add Check-in Note
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Feedback and Comments Section -->
                <div class="mb-6">
                    <h4 class="text-base font-medium text-text-dark mb-4">Feedback and Comments</h4>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="space-y-4">
                            <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                <div class="flex justify-between items-start mb-2">
                                    <div class="font-medium text-gray-800 text-sm">Mark Johnson (Manager)</div>
                                    <div class="text-xs text-gray-500">Sep 3, 2025</div>
                                </div>
                                <p class="text-xs text-gray-600">John has shown great interest in expanding his network security knowledge. The selected training and mentoring activities align well with both his career aspirations and our department needs.</p>
                            </div>
                            
                            <div class="border-t border-gray-200 pt-4">
                                <h6 class="text-sm font-medium text-gray-700 mb-2">Add Comment</h6>
                                <textarea class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700 h-20" placeholder="Enter your comment or feedback..."></textarea>
                                <div class="mt-2 text-right">
                                    <button class="px-3 py-1 bg-primary hover:bg-primary-dark text-white text-sm rounded-md">
                                        Post Comment
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-end space-x-3">
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                        <i class='bx bx-download mr-2'></i> Export PDF
                    </button>
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                        <i class='bx bx-envelope mr-2'></i> Send to Employee
                    </button>
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                        <i class='bx bx-revision mr-2'></i> Request Review
                    </button>
                    <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                        <i class='bx bx-save mr-2'></i> Save Plan
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Add Goal Modal -->
    <div id="addGoalModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-xl p-6 mx-3">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium text-gray-900">Add Development Goal</h3>
                <button class="text-gray-400 hover:text-gray-600" onclick="document.getElementById('addGoalModal').classList.add('hidden')">
                    <i class='bx bx-x text-2xl'></i>
                </button>
            </div>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Goal Title</label>
                    <input type="text" class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700" 
                           placeholder="e.g. Advanced Project Management Skills">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700 h-20" 
                              placeholder="Describe the goal and why it's important..."></textarea>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                    <select class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                        <option>High Priority</option>
                        <option selected>Medium Priority</option>
                        <option>Low Priority</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Related Competency</label>
                    <select class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                        <option>Network Security</option>
                        <option>Data Analysis</option>
                        <option>Cloud Infrastructure</option>
                        <option>Project Management</option>
                        <option>Leadership</option>
                        <option>Communication</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Target Completion Date</label>
                    <input type="date" class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700" 
                        onclick="document.getElementById('addGoalModal').classList.add('hidden')">Cancel</button>
                <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md">Add Goal</button>
            </div>
        </div>
    </div>
    
    <!-- Add Activity Modal -->
    <div id="addActivityModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-xl p-6 mx-3">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium text-gray-900">Add Development Activity</h3>
                <button class="text-gray-400 hover:text-gray-600" onclick="document.getElementById('addActivityModal').classList.add('hidden')">
                    <i class='bx bx-x text-2xl'></i>
                </button>
            </div>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Activity Title</label>
                    <input type="text" class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700" 
                           placeholder="e.g. Complete Advanced Security Course">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700 h-20" 
                              placeholder="Describe the activity in detail..."></textarea>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Activity Type</label>
                    <select class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                        <option>Training</option>
                        <option>E-Learning</option>
                        <option>Mentoring</option>
                        <option>Project Assignment</option>
                        <option>Job Shadowing</option>
                        <option>Self-study</option>
                        <option>Workshop</option>
                        <option>Certification</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Target Completion Date</label>
                    <input type="date" class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Resources Needed</label>
                    <textarea class="bg-white border border-gray-300 rounded-md px-3 py-2 w-full text-gray-700 h-20" 
                              placeholder="List any resources, budget, materials, or support needed..."></textarea>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700" 
                        onclick="document.getElementById('addActivityModal').classList.add('hidden')">Cancel</button>
                <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md">Add Activity</button>
            </div>
        </div>
    </div>
    
    <!-- Add this at the end of the file for basic dropdown functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle dropdowns
            const dropdownButtons = document.querySelectorAll('.dropdown button');
            
            dropdownButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const menu = this.nextElementSibling;
                    menu.classList.toggle('hidden');
                });
            });
            
            // Close dropdowns when clicking elsewhere
            document.addEventListener('click', function() {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.classList.add('hidden');
                });
            });
        });
    </script>
</x-app-layout>