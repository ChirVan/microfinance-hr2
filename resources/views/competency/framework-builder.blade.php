<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Competency Framework Builder') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Create Competency Framework</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Define the structure, competencies, and proficiency levels for organizational roles.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-list-ul mr-2'></i>
                            View All Frameworks
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-save mr-2'></i>
                            Save Framework
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Framework Builder Form -->
            <div class="bg-gray-50 border border-gray-200 rounded-base p-6">
                <!-- Framework Information -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Framework Information</h4>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-500 mr-2">Status:</span>
                            <select class="bg-white border border-gray-200 rounded-md px-2 py-1 text-sm text-gray-700">
                                <option>Draft</option>
                                <option selected>Active</option>
                                <option>Under Review</option>
                                <option>Archived</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Framework Name <span class="text-red-500">*</span></label>
                                <input type="text" value="Leadership Development Framework" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Description <span class="text-red-500">*</span></label>
                                <textarea class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700 h-20">Core leadership skills for all management positions</textarea>
                            </div>
                        </div>
                        
                        <div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Effective Date <span class="text-red-500">*</span></label>
                                <input type="date" value="2023-01-01" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Organization Level</label>
                                <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                    <option>Company-Wide</option>
                                    <option selected>Department-Specific</option>
                                    <option>Job Family</option>
                                    <option>Custom</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">Owner Department</label>
                                <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                    <option selected>Human Resources</option>
                                    <option>Executive Leadership</option>
                                    <option>IT Department</option>
                                    <option>Operations</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Proficiency Scale Definition -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Proficiency Scale</h4>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm">
                            <i class='bx bx-edit mr-1'></i> Edit Scale
                        </button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200 rounded-md">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Level</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Name</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Description</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Numerical Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-3 border-b text-sm">1</td>
                                    <td class="px-4 py-3 border-b text-sm">Basic</td>
                                    <td class="px-4 py-3 border-b text-sm">Foundational knowledge and limited experience. May require guidance.</td>
                                    <td class="px-4 py-3 border-b text-sm">1</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 border-b text-sm">2</td>
                                    <td class="px-4 py-3 border-b text-sm">Intermediate</td>
                                    <td class="px-4 py-3 border-b text-sm">Applied knowledge and moderate experience. Works independently in most situations.</td>
                                    <td class="px-4 py-3 border-b text-sm">2</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 border-b text-sm">3</td>
                                    <td class="px-4 py-3 border-b text-sm">Advanced</td>
                                    <td class="px-4 py-3 border-b text-sm">Comprehensive knowledge and significant experience. Can guide others.</td>
                                    <td class="px-4 py-3 border-b text-sm">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 border-b text-sm">4</td>
                                    <td class="px-4 py-3 border-b text-sm">Expert</td>
                                    <td class="px-4 py-3 border-b text-sm">Exceptional knowledge and extensive experience. Strategic thinker and organizational resource.</td>
                                    <td class="px-4 py-3 border-b text-sm">4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Competency Groups -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Competency Groups</h4>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm">
                            <i class='bx bx-plus mr-1'></i> Add Group
                        </button>
                    </div>
                    
                    <div class="space-y-4">
                        <!-- Group 1: Leadership -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start">
                                <div class="flex items-center">
                                    <div class="w-1 h-10 bg-indigo-500 rounded-full mr-3"></div>
                                    <div>
                                        <div class="flex items-center">
                                            <h5 class="font-medium text-gray-800 mr-3">Leadership</h5>
                                            <span class="text-sm text-gray-500">Weight: 30%</span>
                                        </div>
                                        <p class="text-sm text-gray-600">Core leadership abilities and people management skills</p>
                                    </div>
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
                        </div>
                        
                        <!-- Group 2: Technical Skills -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start">
                                <div class="flex items-center">
                                    <div class="w-1 h-10 bg-green-500 rounded-full mr-3"></div>
                                    <div>
                                        <div class="flex items-center">
                                            <h5 class="font-medium text-gray-800 mr-3">Technical Skills</h5>
                                            <span class="text-sm text-gray-500">Weight: 25%</span>
                                        </div>
                                        <p class="text-sm text-gray-600">Job-specific technical expertise and knowledge</p>
                                    </div>
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
                        </div>
                        
                        <!-- Group 3: Communication -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start">
                                <div class="flex items-center">
                                    <div class="w-1 h-10 bg-blue-500 rounded-full mr-3"></div>
                                    <div>
                                        <div class="flex items-center">
                                            <h5 class="font-medium text-gray-800 mr-3">Communication</h5>
                                            <span class="text-sm text-gray-500">Weight: 25%</span>
                                        </div>
                                        <p class="text-sm text-gray-600">Verbal, written, and interpersonal communication skills</p>
                                    </div>
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
                        </div>
                        
                        <!-- Group 4: Problem Solving -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <div class="flex justify-between items-start">
                                <div class="flex items-center">
                                    <div class="w-1 h-10 bg-amber-500 rounded-full mr-3"></div>
                                    <div>
                                        <div class="flex items-center">
                                            <h5 class="font-medium text-gray-800 mr-3">Problem Solving</h5>
                                            <span class="text-sm text-gray-500">Weight: 20%</span>
                                        </div>
                                        <p class="text-sm text-gray-600">Analytical thinking and solution development</p>
                                    </div>
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
                        </div>
                    </div>
                </div>
                
                <!-- Competency Details -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Competencies</h4>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm">
                            <i class='bx bx-plus mr-1'></i> Add Competency
                        </button>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-6">
                        <div class="flex justify-between items-center mb-5">
                            <div>
                                <div class="flex items-center">
                                    <div class="w-1 h-4 bg-indigo-500 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-500">Leadership Group</span>
                                </div>
                                <h5 class="text-lg font-medium text-gray-800 mt-1">Team Leadership</h5>
                            </div>
                            <div class="flex space-x-2">
                                <button class="text-gray-500 hover:text-gray-700">
                                    <i class='bx bx-edit'></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-600 mb-2">Description</label>
                            <textarea class="bg-gray-50 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700 h-20">Ability to guide and motivate teams to achieve objectives while developing team members' skills and fostering a positive work environment.</textarea>
                        </div>
                        
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <label class="text-sm font-medium text-gray-600">Behavioral Indicators by Proficiency Level</label>
                                <button class="text-primary hover:text-primary-dark text-xs flex items-center">
                                    <i class='bx bx-edit mr-1'></i> Edit Indicators
                                </button>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="font-medium text-gray-800">Level 1 (Basic)</div>
                                        <div class="bg-gray-200 text-gray-800 px-2 py-0.5 rounded-full text-xs">
                                            Entry Level
                                        </div>
                                    </div>
                                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                        <li>Leads small team meetings</li>
                                        <li>Assigns tasks to team members</li>
                                        <li>Provides basic feedback on work performed</li>
                                    </ul>
                                </div>
                                
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="font-medium text-gray-800">Level 2 (Intermediate)</div>
                                        <div class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full text-xs">
                                            Mid Level
                                        </div>
                                    </div>
                                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                        <li>Manages team projects independently</li>
                                        <li>Provides constructive feedback and coaching</li>
                                        <li>Resolves basic team conflicts</li>
                                        <li>Develops short-term team goals</li>
                                    </ul>
                                </div>
                                
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="font-medium text-gray-800">Level 3 (Advanced)</div>
                                        <div class="bg-purple-100 text-purple-800 px-2 py-0.5 rounded-full text-xs">
                                            Senior Level
                                        </div>
                                    </div>
                                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                        <li>Develops strategies for multiple teams</li>
                                        <li>Builds high-performing teams</li>
                                        <li>Manages complex team dynamics</li>
                                        <li>Develops talent and succession plans</li>
                                    </ul>
                                </div>
                                
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="font-medium text-gray-800">Level 4 (Expert)</div>
                                        <div class="bg-amber-100 text-amber-800 px-2 py-0.5 rounded-full text-xs">
                                            Executive Level
                                        </div>
                                    </div>
                                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                        <li>Influences organizational direction</li>
                                        <li>Builds organizational leadership capability</li>
                                        <li>Drives cultural transformation</li>
                                        <li>Mentors other leaders and develops leadership frameworks</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <div class="flex justify-between items-center">
                                <div class="text-gray-500 text-sm">
                                    <span class="font-medium">Required For:</span> Department Managers, Team Leaders, Project Managers
                                </div>
                                <div>
                                    <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm">
                                        <i class='bx bx-link mr-1'></i> Assign to Roles
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Job Role Requirements -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Job Role Requirements</h4>
                        <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm">
                            <i class='bx bx-plus mr-1'></i> Add Job Role
                        </button>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200 rounded-md">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Job Role</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Department</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Team Leadership</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Communication</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Problem Solving</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-3 border-b text-sm">IT Manager</td>
                                    <td class="px-4 py-3 border-b text-sm">Information Technology</td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Advanced</span>
                                    </td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Advanced</span>
                                    </td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Advanced</span>
                                    </td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 border-b text-sm">Team Lead</td>
                                    <td class="px-4 py-3 border-b text-sm">Information Technology</td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Intermediate</span>
                                    </td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Advanced</span>
                                    </td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Advanced</span>
                                    </td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 border-b text-sm">Network Engineer</td>
                                    <td class="px-4 py-3 border-b text-sm">Information Technology</td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Basic</span>
                                    </td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Advanced</span>
                                    </td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Intermediate</span>
                                    </td>
                                    <td class="px-4 py-3 border-b text-sm">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Process Information -->
                <div class="mb-6 bg-blue-50 border border-blue-100 rounded-md p-4">
                    <h4 class="text-sm font-medium text-blue-800 mb-2">Framework Creation Process</h4>
                    <div class="text-xs text-blue-700 space-y-3">
                        <p><strong>Framework Definition:</strong> HR defines competency frameworks aligned with business strategy.</p>
                        <p><strong>Competency Structure:</strong> Each competency includes levels with detailed behavior descriptors.</p>
                        <p><strong>Role Mapping:</strong> Frameworks linked to job positions with required proficiency levels.</p>
                        <p><strong>Assessment Design:</strong> Assessment tools created based on framework competencies.</p>
                        <p><strong>Gap Analysis:</strong> Employee assessments compared against role requirements.</p>
                        <p><strong>Development Planning:</strong> Training and development plans to address competency gaps.</p>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-end space-x-3">
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                        <i class='bx bx-copy mr-2'></i> Clone Framework
                    </button>
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                        <i class='bx bx-export mr-2'></i> Export Framework
                    </button>
                    <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                        <i class='bx bx-save mr-2'></i> Save Framework
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
