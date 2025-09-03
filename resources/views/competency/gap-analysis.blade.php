<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Competency Gap Analysis') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Competency Gap Report</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Identify where employees fall short compared to job requirements.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-list-ul mr-2'></i>
                            View All Reports
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'new-gap-analysis-modal')">
                            <i class='bx bx-plus mr-2'></i>
                            New Gap Analysis
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Competency Gap Report -->
            <div class="bg-gray-50 border border-gray-200 rounded-base p-6">
                <!-- Employee Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Employee ID</label>
                            <div class="flex items-center">
                                <input type="text" value="EMP-10042" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600">
                                <button class="ml-2 px-3 py-2 bg-primary hover:bg-primary-dark text-white rounded-md text-sm">
                                    <i class='bx bx-search'></i>
                                </button>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Employee Name</label>
                            <input type="text" value="John Doe" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                        </div>
                    </div>
                    
                    <div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-600 mb-1">Job Role</label>
                            <input type="text" value="Network Engineer" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Department</label>
                            <input type="text" value="IT Department" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                        </div>
                    </div>
                </div>
                
                <!-- Gap Analysis Table -->
                <div class="mb-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200 rounded-md">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Competency Area</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Required Level</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Current Level</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Gap Exists</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Recommendation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm font-medium text-gray-700">Networking</div>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm text-gray-700">Advanced</div>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm text-gray-700">Intermediate</div>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">YES</span>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <div class="flex items-center">
                                            <span class="text-sm text-gray-700">Assign Networking Training</span>
                                            <button class="ml-2 text-primary hover:text-primary-dark">
                                                <i class='bx bx-link text-sm'></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm font-medium text-gray-700">Communication</div>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm text-gray-700">Advanced</div>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm text-gray-700">Advanced</div>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">NO</span>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm text-gray-500">-</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm font-medium text-gray-700">Leadership</div>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm text-gray-700">Basic</div>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm text-gray-700">Basic</div>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">NO</span>
                                    </td>
                                    <td class="px-4 py-4 border-b">
                                        <div class="text-sm text-gray-500">-</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Process Information -->
                <div class="mb-6 bg-blue-50 border border-blue-100 rounded-md p-4">
                    <h4 class="text-sm font-medium text-blue-800 mb-2">Process Information</h4>
                    <ul class="list-disc list-inside text-xs text-blue-700 space-y-1">
                        <li>System automatically compares required vs. current competency levels</li>
                        <li>Gap Report is generated when discrepancies are identified</li>
                        <li>HR can attach recommended training modules from the training catalog</li>
                        <li>Recommendations are stored and feed into Training Management module</li>
                        <li>Materials Used: Training catalog, e-learning courses, workshop schedules</li>
                    </ul>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <span class="text-sm text-gray-500">Generated on: <span class="font-medium">September 3, 2025</span></span>
                    </div>
                    
                    <div class="flex space-x-3">
                        <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                            <i class='bx bx-printer mr-2'></i> Print Report
                        </button>
                        <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                            <i class='bx bx-export mr-2'></i> Export PDF
                        </button>
                        <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm" x-data="" x-on:click="$dispatch('open-modal', 'assign-training-modal')">
                            <i class='bx bx-link mr-2'></i> Assign Training
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Recent Gap Analysis Section -->
            <div class="mt-8">
                <h4 class="text-lg font-medium text-text-dark mb-4">Recent Gap Analysis Reports</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-md">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Employee ID</th>
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Employee Name</th>
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Job Role</th>
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Date Generated</th>
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Gaps Found</th>
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-3 border-b text-sm">EMP-10042</td>
                                <td class="px-4 py-3 border-b text-sm">John Doe</td>
                                <td class="px-4 py-3 border-b text-sm">Network Engineer</td>
                                <td class="px-4 py-3 border-b text-sm">Sep 3, 2025</td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">1</span>
                                </td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <a href="#" class="text-primary hover:text-primary-dark">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 border-b text-sm">EMP-10036</td>
                                <td class="px-4 py-3 border-b text-sm">Jane Smith</td>
                                <td class="px-4 py-3 border-b text-sm">Project Manager</td>
                                <td class="px-4 py-3 border-b text-sm">Sep 1, 2025</td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">3</span>
                                </td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <a href="#" class="text-primary hover:text-primary-dark">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 border-b text-sm">EMP-10028</td>
                                <td class="px-4 py-3 border-b text-sm">Robert Johnson</td>
                                <td class="px-4 py-3 border-b text-sm">Software Developer</td>
                                <td class="px-4 py-3 border-b text-sm">Aug 28, 2025</td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">0</span>
                                </td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <a href="#" class="text-primary hover:text-primary-dark">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- New Gap Analysis Modal -->
    <x-modal id="new-gap-analysis-modal" :show="false" max-width="2xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                New Competency Gap Analysis
            </h2>
            
            <form>
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Employee Selection</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="employee" class="block text-sm font-medium text-gray-700 mb-1">Employee</label>
                            <select id="employee" name="employee" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">Select Employee</option>
                                <option value="1">John Doe (EMP-10042) - Network Engineer</option>
                                <option value="2">Jane Smith (EMP-10036) - Project Manager</option>
                                <option value="3">Robert Johnson (EMP-10028) - Software Developer</option>
                                <option value="4">Emily Wilson (EMP-10024) - HR Specialist</option>
                                <option value="5">Michael Brown (EMP-10018) - Financial Analyst</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="job_role" class="block text-sm font-medium text-gray-700 mb-1">Job Role</label>
                            <select id="job_role" name="job_role" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">Select Job Role</option>
                                <option value="1">Network Engineer</option>
                                <option value="2">Project Manager</option>
                                <option value="3">Software Developer</option>
                                <option value="4">HR Specialist</option>
                                <option value="5">Financial Analyst</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                        <select id="department" name="department" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">Select Department</option>
                            <option value="1">IT Department</option>
                            <option value="2">Project Management</option>
                            <option value="3">Human Resources</option>
                            <option value="4">Finance</option>
                            <option value="5">Operations</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Competency Framework</h3>
                    
                    <div class="mb-4">
                        <label for="framework" class="block text-sm font-medium text-gray-700 mb-1">Select Competency Framework</label>
                        <select id="framework" name="framework" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">Select Framework</option>
                            <option value="1">IT Technical Framework</option>
                            <option value="2">Project Management Framework</option>
                            <option value="3">Leadership Framework</option>
                            <option value="4">Financial Services Framework</option>
                            <option value="5">General Business Framework</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex items-center">
                            <input id="include_assessments" name="include_assessments" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="include_assessments" class="ml-2 block text-sm text-gray-700">
                                Include recent assessment results (if available)
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Analysis Options</h3>
                    
                    <div class="mb-4">
                        <label for="analysis_type" class="block text-sm font-medium text-gray-700 mb-1">Analysis Type</label>
                        <div class="mt-1 space-y-2">
                            <div class="flex items-center">
                                <input id="basic" name="analysis_type" type="radio" class="h-4 w-4 text-primary focus:ring-primary border-gray-300" checked>
                                <label for="basic" class="ml-2 block text-sm text-gray-700">
                                    Basic Gap Analysis (Required vs. Current)
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="detailed" name="analysis_type" type="radio" class="h-4 w-4 text-primary focus:ring-primary border-gray-300">
                                <label for="detailed" class="ml-2 block text-sm text-gray-700">
                                    Detailed Analysis (With Historical Trends)
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="predictive" name="analysis_type" type="radio" class="h-4 w-4 text-primary focus:ring-primary border-gray-300">
                                <label for="predictive" class="ml-2 block text-sm text-gray-700">
                                    Predictive Analysis (With Career Path Recommendations)
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="include_training" class="block text-sm font-medium text-gray-700 mb-1">Include Recommendations</label>
                        <div class="flex items-center">
                            <input id="include_training" name="include_training" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" checked>
                            <label for="include_training" class="ml-2 block text-sm text-gray-700">
                                Automatically suggest training for identified gaps
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes</label>
                    <textarea id="notes" name="notes" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'new-gap-analysis-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Generate Analysis
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
    
    <!-- Assign Training Modal -->
    <x-modal id="assign-training-modal" :show="false" max-width="3xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Assign Training for Competency Gaps
            </h2>
            
            <form>
                <!-- Employee Information Section -->
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Employee Information</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600">Employee ID</label>
                            <div class="mt-1 text-sm font-medium text-gray-900">EMP-10042</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600">Employee Name</label>
                            <div class="mt-1 text-sm font-medium text-gray-900">John Doe</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600">Job Role</label>
                            <div class="mt-1 text-sm font-medium text-gray-900">Network Engineer</div>
                        </div>
                    </div>
                </div>
                
                <!-- Gap Summary Section -->
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Competency Gaps</h3>
                    
                    <div class="bg-gray-50 border border-gray-200 rounded-md p-4 mb-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <span class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-red-100">
                                    <i class='bx bx-error text-red-600'></i>
                                </span>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-gray-900">Networking - Gap Detected</h3>
                                <div class="mt-1 text-sm text-gray-600">
                                    <p>Current Level: <span class="font-medium">Intermediate</span></p>
                                    <p>Required Level: <span class="font-medium">Advanced</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Training Selection Section -->
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Available Training Options</h3>
                    
                    <div class="space-y-4">
                        <div class="bg-white border border-gray-200 rounded-md overflow-hidden">
                            <div class="flex items-center px-4 py-3 border-b bg-gray-50">
                                <input id="training_1" name="training_options" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="training_1" class="ml-2 block text-sm font-medium text-gray-900">
                                    Advanced Networking Concepts
                                </label>
                            </div>
                            <div class="px-4 py-3">
                                <div class="text-sm text-gray-600 mb-2">
                                    <p class="mb-1"><span class="font-medium">Format:</span> Online Course</p>
                                    <p class="mb-1"><span class="font-medium">Duration:</span> 20 hours</p>
                                    <p><span class="font-medium">Effectiveness:</span> 
                                        <span class="inline-flex items-center">
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bx-star text-gray-300'></i>
                                            <span class="ml-1">(4.2/5)</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white border border-gray-200 rounded-md overflow-hidden">
                            <div class="flex items-center px-4 py-3 border-b bg-gray-50">
                                <input id="training_2" name="training_options" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="training_2" class="ml-2 block text-sm font-medium text-gray-900">
                                    Network Security Specialization
                                </label>
                            </div>
                            <div class="px-4 py-3">
                                <div class="text-sm text-gray-600 mb-2">
                                    <p class="mb-1"><span class="font-medium">Format:</span> Workshop</p>
                                    <p class="mb-1"><span class="font-medium">Duration:</span> 16 hours (2 days)</p>
                                    <p><span class="font-medium">Effectiveness:</span> 
                                        <span class="inline-flex items-center">
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star-half text-yellow-400'></i>
                                            <span class="ml-1">(4.5/5)</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white border border-gray-200 rounded-md overflow-hidden">
                            <div class="flex items-center px-4 py-3 border-b bg-gray-50">
                                <input id="training_3" name="training_options" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="training_3" class="ml-2 block text-sm font-medium text-gray-900">
                                    Cloud Networking Certification
                                </label>
                            </div>
                            <div class="px-4 py-3">
                                <div class="text-sm text-gray-600 mb-2">
                                    <p class="mb-1"><span class="font-medium">Format:</span> Self-paced + Exam</p>
                                    <p class="mb-1"><span class="font-medium">Duration:</span> 40 hours</p>
                                    <p><span class="font-medium">Effectiveness:</span> 
                                        <span class="inline-flex items-center">
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <i class='bx bxs-star text-yellow-400'></i>
                                            <span class="ml-1">(4.8/5)</span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Schedule Section -->
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Schedule</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">Start Date</label>
                            <input type="date" id="start_date" name="start_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="priority" class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                            <select id="priority" name="priority" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="high">High Priority</option>
                                <option value="medium" selected>Medium Priority</option>
                                <option value="low">Low Priority</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Notes Section -->
                <div class="mb-4">
                    <label for="assignment_notes" class="block text-sm font-medium text-gray-700 mb-1">Notes for Assignment</label>
                    <textarea id="assignment_notes" name="assignment_notes" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
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
