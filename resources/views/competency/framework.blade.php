<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Competency Framework') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Competency Framework</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Define core skills and knowledge needed for each role.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-list-ul mr-2'></i>
                            View All Frameworks
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-plus mr-2'></i>
                            New Framework
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Framework Details -->
            <div class="bg-gray-50 border border-gray-200 rounded-base p-6">
                <!-- Framework Information -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Framework Information</h4>
                        <button class="text-primary hover:text-primary-dark text-sm flex items-center">
                            <i class='bx bx-edit mr-1'></i> Edit
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Framework Name</label>
                                <input type="text" value="Leadership Development Framework" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Description</label>
                                <textarea class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700 h-20">Core leadership skills for all management positions</textarea>
                            </div>
                        </div>
                        
                        <div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Effective Date</label>
                                <input type="date" value="2023-01-01" class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 mb-1">Status</label>
                                <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full text-gray-700">
                                    <option selected>Active</option>
                                    <option>Draft</option>
                                    <option>Archived</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Competency Groups -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Competency Groups</h4>
                        <button class="text-primary hover:text-primary-dark text-sm flex items-center">
                            <i class='bx bx-edit mr-1'></i> Edit Groups
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Pie Chart Visualization -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4 flex items-center justify-center">
                            <div class="relative h-64 w-64">
                                <!-- This would be a real chart in production, using static HTML/CSS for demo -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="h-full w-full rounded-full overflow-hidden" style="background: conic-gradient(#4F46E5 0% 30%, #10B981 30% 55%, #3B82F6 55% 80%, #F59E0B 80% 100%);">
                                    </div>
                                    <div class="absolute inset-3 bg-white rounded-full flex items-center justify-center">
                                        <span class="text-sm font-medium text-gray-700">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Group List -->
                        <div class="bg-white border border-gray-200 rounded-lg p-4">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-3 border-l-4 border-indigo-500 bg-indigo-50 rounded-r-lg">
                                    <div>
                                        <h5 class="font-medium text-gray-800">Leadership</h5>
                                        <p class="text-xs text-gray-500">Core leadership abilities</p>
                                    </div>
                                    <div class="text-xl font-semibold text-indigo-600">30%</div>
                                </div>
                                
                                <div class="flex items-center justify-between p-3 border-l-4 border-green-500 bg-green-50 rounded-r-lg">
                                    <div>
                                        <h5 class="font-medium text-gray-800">Technical Skills</h5>
                                        <p class="text-xs text-gray-500">Job-specific expertise</p>
                                    </div>
                                    <div class="text-xl font-semibold text-green-600">25%</div>
                                </div>
                                
                                <div class="flex items-center justify-between p-3 border-l-4 border-blue-500 bg-blue-50 rounded-r-lg">
                                    <div>
                                        <h5 class="font-medium text-gray-800">Communication</h5>
                                        <p class="text-xs text-gray-500">Verbal and written skills</p>
                                    </div>
                                    <div class="text-xl font-semibold text-blue-600">25%</div>
                                </div>
                                
                                <div class="flex items-center justify-between p-3 border-l-4 border-amber-500 bg-amber-50 rounded-r-lg">
                                    <div>
                                        <h5 class="font-medium text-gray-800">Problem Solving</h5>
                                        <p class="text-xs text-gray-500">Analytical thinking</p>
                                    </div>
                                    <div class="text-xl font-semibold text-amber-600">20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Competency Details -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="text-base font-medium text-text-dark">Competency Details</h4>
                        <div class="flex space-x-2">
                            <button class="px-3 py-1 bg-white border border-gray-300 rounded-md text-gray-700 text-sm">
                                Add Competency
                            </button>
                            <button class="text-primary hover:text-primary-dark text-sm flex items-center">
                                <i class='bx bx-edit mr-1'></i> Edit
                            </button>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg">
                        <!-- Competency Header -->
                        <div class="border-b border-gray-200 p-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h5 class="font-medium text-gray-800 mb-1">Leadership</h5>
                                    <p class="text-sm text-gray-600">Ability to guide and motivate teams</p>
                                </div>
                                <div class="bg-indigo-100 text-indigo-800 font-medium px-3 py-1 rounded-full text-sm">
                                    Weight: 30%
                                </div>
                            </div>
                        </div>
                        
                        <!-- Proficiency Levels -->
                        <div class="p-4">
                            <h6 class="text-sm font-medium text-gray-700 mb-3">Proficiency Levels:</h6>
                            
                            <div class="space-y-4">
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="font-medium text-gray-800">Level 1 (Basic)</div>
                                        <div class="bg-gray-200 text-gray-800 px-2 py-0.5 rounded-full text-xs">
                                            Entry Level
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600">Leads small team meetings</p>
                                </div>
                                
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="font-medium text-gray-800">Level 2 (Intermediate)</div>
                                        <div class="bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full text-xs">
                                            Mid Level
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600">Manages team projects independently</p>
                                </div>
                                
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="font-medium text-gray-800">Level 3 (Advanced)</div>
                                        <div class="bg-purple-100 text-purple-800 px-2 py-0.5 rounded-full text-xs">
                                            Senior Level
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600">Develops strategies for multiple teams</p>
                                </div>
                                
                                <div class="bg-gray-50 border border-gray-200 rounded-md p-3">
                                    <div class="flex justify-between items-start mb-2">
                                        <div class="font-medium text-gray-800">Level 4 (Expert)</div>
                                        <div class="bg-amber-100 text-amber-800 px-2 py-0.5 rounded-full text-xs">
                                            Executive Level
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600">Influences organizational direction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Process Information -->
                <div class="mb-6 bg-blue-50 border border-blue-100 rounded-md p-4">
                    <h4 class="text-sm font-medium text-blue-800 mb-2">Process Information</h4>
                    <div class="text-xs text-blue-700 space-y-3">
                        <p><strong>Framework Creation:</strong> HR defines competency frameworks aligned with business strategy.</p>
                        <p><strong>Competency Structure:</strong> Each competency includes levels with detailed behavior descriptors.</p>
                        <p><strong>System Integration:</strong> Frameworks linked to job positions in Core HCM system.</p>
                        <p><strong>Employee Flow:</strong> HR creates framework → assigned to relevant positions → used in assessments.</p>
                        <p><strong>Materials Used:</strong> Industry standards, company values, job descriptions.</p>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-wrap justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <span class="text-sm text-gray-500">Last Updated: <span class="font-medium">January 3, 2023</span></span>
                    </div>
                    
                    <div class="flex space-x-3">
                        <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                            <i class='bx bx-clone mr-2'></i> Clone Framework
                        </button>
                        <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                            <i class='bx bx-link mr-2'></i> Assign to Positions
                        </button>
                        <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                            <i class='bx bx-save mr-2'></i> Save Framework
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Other Frameworks -->
            <div class="mt-8">
                <h4 class="text-lg font-medium text-text-dark mb-4">Other Active Frameworks</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-md">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Framework Name</th>
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Description</th>
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Created Date</th>
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                                <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-3 border-b text-sm">Technical Skills Matrix</td>
                                <td class="px-4 py-3 border-b text-sm">Core technical competencies for IT roles</td>
                                <td class="px-4 py-3 border-b text-sm">Dec 12, 2022</td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                </td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <a href="#" class="text-primary hover:text-primary-dark">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 border-b text-sm">Customer Service Excellence</td>
                                <td class="px-4 py-3 border-b text-sm">Service skills for front-facing roles</td>
                                <td class="px-4 py-3 border-b text-sm">Nov 5, 2022</td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                                </td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <a href="#" class="text-primary hover:text-primary-dark">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 border-b text-sm">Project Management Framework</td>
                                <td class="px-4 py-3 border-b text-sm">Skills for managing projects and initiatives</td>
                                <td class="px-4 py-3 border-b text-sm">Oct 18, 2022</td>
                                <td class="px-4 py-3 border-b text-sm">
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Draft</span>
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
</x-app-layout>
