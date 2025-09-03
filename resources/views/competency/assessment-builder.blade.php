<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Assessment Builder') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Create Competency Assessment</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Design customized assessment tools based on competency frameworks.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-list-ul mr-2'></i>
                            View All Assessments
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-save mr-2'></i>
                            Save Assessment
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Assessment Builder Form -->
            <div class="bg-gray-50 border border-gray-200 rounded-base p-6">
                <!-- Assessment Information -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Assessment Information</h4>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-500 mr-2">Status:</span>
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-800">Draft</span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Assessment Name</label>
                                <input type="text" value="IT Department Competency Assessment" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Description</label>
                                <textarea class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700 h-20">Assessment for technical and soft skills for IT department staff</textarea>
                            </div>
                        </div>
                        
                        <div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Based on Framework</label>
                                <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                    <option selected>Technical Skills Matrix</option>
                                    <option>Leadership Development Framework</option>
                                    <option>Project Management Framework</option>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Assessment Type</label>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="flex items-center">
                                        <input type="radio" id="self" name="assessmentType" class="h-4 w-4 text-primary" checked>
                                        <label for="self" class="ml-2 text-sm text-gray-700">Self Assessment</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="manager" name="assessmentType" class="h-4 w-4 text-primary">
                                        <label for="manager" class="ml-2 text-sm text-gray-700">Manager Assessment</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="peer" name="assessmentType" class="h-4 w-4 text-primary">
                                        <label for="peer" class="ml-2 text-sm text-gray-700">Peer Assessment</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="360" name="assessmentType" class="h-4 w-4 text-primary">
                                        <label for="360" class="ml-2 text-sm text-gray-700">360° Assessment</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Assessment Competencies -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Assessment Competencies</h4>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm">
                            <i class='bx bx-plus mr-1'></i> Add Competency
                        </button>
                    </div>
                    
                    <div class="space-y-5">
                        <!-- Competency 1 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h5 class="font-medium text-gray-800">Networking</h5>
                                    <p class="text-sm text-gray-600">Understanding of network protocols and security</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    <button class="text-gray-500 hover:text-red-500">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between mb-2">
                                        <h6 class="text-sm font-medium text-gray-700">Question 1</h6>
                                        <span class="text-xs text-gray-500">Rating Scale (1-5)</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">Ability to troubleshoot network connectivity issues</p>
                                    <div class="flex space-x-2">
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">Basic</label>
                                            <input type="radio" name="q1" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">2</label>
                                            <input type="radio" name="q1" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">3</label>
                                            <input type="radio" name="q1" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">4</label>
                                            <input type="radio" name="q1" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">Expert</label>
                                            <input type="radio" name="q1" class="h-4 w-4 text-primary">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between mb-2">
                                        <h6 class="text-sm font-medium text-gray-700">Question 2</h6>
                                        <span class="text-xs text-gray-500">Rating Scale (1-5)</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">Knowledge of network security principles</p>
                                    <div class="flex space-x-2">
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">Basic</label>
                                            <input type="radio" name="q2" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">2</label>
                                            <input type="radio" name="q2" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">3</label>
                                            <input type="radio" name="q2" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">4</label>
                                            <input type="radio" name="q2" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">Expert</label>
                                            <input type="radio" name="q2" class="h-4 w-4 text-primary">
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="w-full py-2 border border-dashed border-gray-300 rounded-md text-gray-500 text-sm hover:bg-gray-50">
                                    <i class='bx bx-plus mr-1'></i> Add Question
                                </button>
                            </div>
                        </div>
                        
                        <!-- Competency 2 -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h5 class="font-medium text-gray-800">Communication</h5>
                                    <p class="text-sm text-gray-600">Effective verbal and written communication</p>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class='bx bx-edit'></i>
                                    </button>
                                    <button class="text-gray-500 hover:text-red-500">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="space-y-3">
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between mb-2">
                                        <h6 class="text-sm font-medium text-gray-700">Question 1</h6>
                                        <span class="text-xs text-gray-500">Rating Scale (1-5)</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-2">Ability to explain technical concepts to non-technical stakeholders</p>
                                    <div class="flex space-x-2">
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">Basic</label>
                                            <input type="radio" name="q3" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">2</label>
                                            <input type="radio" name="q3" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">3</label>
                                            <input type="radio" name="q3" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">4</label>
                                            <input type="radio" name="q3" class="h-4 w-4 text-primary">
                                        </div>
                                        <div class="flex-1 text-center">
                                            <label class="text-xs text-gray-500 block mb-1">Expert</label>
                                            <input type="radio" name="q3" class="h-4 w-4 text-primary">
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="w-full py-2 border border-dashed border-gray-300 rounded-md text-gray-500 text-sm hover:bg-gray-50">
                                    <i class='bx bx-plus mr-1'></i> Add Question
                                </button>
                            </div>
                        </div>
                        
                        <!-- Add Competency Button -->
                        <button class="w-full py-3 border border-dashed border-gray-300 rounded-lg text-gray-500 hover:bg-gray-50">
                            <i class='bx bx-plus mr-1'></i> Add Another Competency
                        </button>
                    </div>
                </div>
                
                <!-- Assessment Settings -->
                <div class="mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Assessment Settings</h4>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Target Audience</label>
                            <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                <option selected>IT Department</option>
                                <option>Network Engineers</option>
                                <option>System Administrators</option>
                                <option>Custom Group</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Assessment Period</label>
                            <div class="flex space-x-2">
                                <input type="date" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700" value="2025-09-03">
                                <span class="flex items-center text-gray-500">to</span>
                                <input type="date" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700" value="2025-09-17">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Reminder Frequency</label>
                            <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                <option>None</option>
                                <option selected>Every 3 days</option>
                                <option>Weekly</option>
                                <option>Custom</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Process Information -->
                <div class="mb-6 bg-blue-50 border border-blue-100 rounded-md p-4">
                    <h4 class="text-sm font-medium text-blue-800 mb-2">Assessment Process</h4>
                    <div class="text-xs text-blue-700 space-y-1">
                        <p>1. Create assessment based on competency framework</p>
                        <p>2. Assign to employees based on roles or departments</p>
                        <p>3. Employees and/or managers complete the assessment</p>
                        <p>4. Results are analyzed to identify competency gaps</p>
                        <p>5. Development plans are generated based on gaps</p>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-end space-x-3">
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                        <i class='bx bx-x mr-2'></i> Cancel
                    </button>
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                        <i class='bx bx-save mr-2'></i> Save as Draft
                    </button>
                    <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                        <i class='bx bx-check mr-2'></i> Save and Publish
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
