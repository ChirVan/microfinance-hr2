<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Learning Paths Setup') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Learning Paths</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Create and manage structured learning paths for different roles and departments.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-export mr-2'></i>
                            Export Paths
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'create-learning-path-modal')">
                            <i class='bx bx-plus mr-2'></i>
                            Create New Path
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Learning Paths Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
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
                        <label for="role_filter" class="block text-sm font-medium text-gray-700 mb-1">Job Role</label>
                        <select id="role_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Roles</option>
                            <option value="manager">Manager</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="specialist">Specialist</option>
                            <option value="entry">Entry Level</option>
                        </select>
                    </div>
                    <div>
                        <label for="status_filter" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select id="status_filter" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Status</option>
                            <option value="active">Active</option>
                            <option value="draft">Draft</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                    <div>
                        <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Search</label>
                        <div class="relative rounded-md shadow-sm">
                            <input type="text" name="search" id="search" class="focus:ring-primary focus:border-primary block w-full pr-10 sm:text-sm border-gray-300 rounded-md" placeholder="Search learning paths...">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="bx bx-search text-gray-400"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Learning Paths Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Path Name</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Department/Role</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Content</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Duration</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Version</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Supervisor Development Path</div>
                                <div class="text-xs text-gray-500">Created: Sept 1, 2025</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Operations</div>
                                <div class="text-xs text-gray-500">Supervisor</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">3 Required, 2 Recommended</div>
                                <div class="text-xs text-blue-600 cursor-pointer hover:underline">View details</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">6 months</td>
                            <td class="px-4 py-4 text-sm text-gray-700">v1.2</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" x-data="" x-on:click="$dispatch('open-modal', 'view-learning-path-modal')">
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
                                <div class="text-sm font-medium text-gray-900">Financial Analyst Career Path</div>
                                <div class="text-xs text-gray-500">Created: Aug 15, 2025</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Finance</div>
                                <div class="text-xs text-gray-500">Specialist</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">5 Required, 3 Recommended</div>
                                <div class="text-xs text-blue-600 cursor-pointer hover:underline">View details</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">12 months</td>
                            <td class="px-4 py-4 text-sm text-gray-700">v2.0</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
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
                                <div class="text-sm font-medium text-gray-900">IT Security Specialist Path</div>
                                <div class="text-xs text-gray-500">Created: July 20, 2025</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">IT Department</div>
                                <div class="text-xs text-gray-500">Specialist</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">4 Required, 5 Recommended</div>
                                <div class="text-xs text-blue-600 cursor-pointer hover:underline">View details</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">18 months</td>
                            <td class="px-4 py-4 text-sm text-gray-700">v1.0</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Draft
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
                                <div class="text-sm font-medium text-gray-900">HR Onboarding Specialist</div>
                                <div class="text-xs text-gray-500">Created: June 5, 2025</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">Human Resources</div>
                                <div class="text-xs text-gray-500">Specialist</div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="text-sm text-gray-900">3 Required, 2 Recommended</div>
                                <div class="text-xs text-blue-600 cursor-pointer hover:underline">View details</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">9 months</td>
                            <td class="px-4 py-4 text-sm text-gray-700">v1.3</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Archived
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">12</span> learning paths
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
    
    <!-- Create Learning Path Modal -->
    <x-modal id="create-learning-path-modal" :show="false" max-width="3xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Create New Learning Path
            </h2>
            
            <form>
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Basic Information</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="path_name" class="block text-sm font-medium text-gray-700 mb-1">Path Name</label>
                            <input type="text" id="path_name" name="path_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="e.g., Supervisor Development Path">
                        </div>
                        <div>
                            <label for="path_code" class="block text-sm font-medium text-gray-700 mb-1">Path Code (Optional)</label>
                            <input type="text" id="path_code" name="path_code" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="e.g., SUP-DEV-001">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                            <select id="department" name="department" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">Select Department</option>
                                <option value="it">IT Department</option>
                                <option value="hr">Human Resources</option>
                                <option value="finance">Finance</option>
                                <option value="operations">Operations</option>
                            </select>
                        </div>
                        <div>
                            <label for="job_role" class="block text-sm font-medium text-gray-700 mb-1">Job Role</label>
                            <select id="job_role" name="job_role" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">Select Job Role</option>
                                <option value="manager">Manager</option>
                                <option value="supervisor">Supervisor</option>
                                <option value="specialist">Specialist</option>
                                <option value="entry">Entry Level</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Estimated Duration</label>
                            <div class="flex">
                                <input type="number" id="duration" name="duration" class="mt-1 block w-3/4 border-gray-300 rounded-l-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <select id="duration_unit" name="duration_unit" class="mt-1 block w-1/4 border-gray-300 rounded-r-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 border-l-0">
                                    <option value="weeks">Weeks</option>
                                    <option value="months" selected>Months</option>
                                    <option value="years">Years</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select id="status" name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="draft">Draft</option>
                                <option value="active">Active</option>
                                <option value="archived">Archived</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea id="description" name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Describe the purpose and outcomes of this learning path..."></textarea>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Required Training & Learning</h3>
                    
                    <div class="bg-gray-50 p-4 rounded-md mb-4">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-sm font-medium text-gray-700">Select from Training Catalog</span>
                            <button type="button" class="inline-flex items-center px-3 py-1 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                                <i class='bx bx-plus mr-1'></i> Add Training
                            </button>
                        </div>
                        
                        <div class="border border-gray-200 rounded-md overflow-hidden">
                            <div class="max-h-40 overflow-y-auto">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 sticky top-0">
                                        <tr>
                                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Select</th>
                                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Training</th>
                                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-2">
                                                <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-900">
                                                Leadership Fundamentals
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                Workshop
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                2 days
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">
                                                <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-900">
                                                Conflict Resolution Skills
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                Online Course
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                8 hours
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">
                                                <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-900">
                                                Effective Team Management
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                Seminar
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                1 day
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 p-4 rounded-md">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-sm font-medium text-gray-700">Additional Learning Resources</span>
                            <button type="button" class="inline-flex items-center px-3 py-1 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                                <i class='bx bx-plus mr-1'></i> Add Resource
                            </button>
                        </div>
                        
                        <div class="border border-gray-200 rounded-md overflow-hidden">
                            <div class="max-h-40 overflow-y-auto">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 sticky top-0">
                                        <tr>
                                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Select</th>
                                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Resource</th>
                                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Required</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 py-2">
                                                <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-900">
                                                Harvard Business Review: Leadership Articles
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                Reading
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                <select class="text-xs border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                                    <option value="required">Required</option>
                                                    <option value="recommended" selected>Recommended</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">
                                                <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-900">
                                                Mentorship Program
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                Mentorship
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                <select class="text-xs border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                                    <option value="required" selected>Required</option>
                                                    <option value="recommended">Recommended</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-4 py-2">
                                                <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-900">
                                                Leadership Podcast Series
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                Audio
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-500">
                                                <select class="text-xs border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                                    <option value="required">Required</option>
                                                    <option value="recommended" selected>Recommended</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Certification & Competency Mapping</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="certification" class="block text-sm font-medium text-gray-700 mb-1">Linked Certification (Optional)</label>
                            <select id="certification" name="certification" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="">None</option>
                                <option value="leadership_cert">Leadership Certification</option>
                                <option value="project_management">Project Management Professional</option>
                                <option value="financial_analyst">Financial Analyst Certification</option>
                            </select>
                            <p class="mt-1 text-xs text-gray-500">Certification data will be shared with HR1 Performance Management</p>
                        </div>
                        <div>
                            <label for="competency_areas" class="block text-sm font-medium text-gray-700 mb-1">Competency Areas Addressed</label>
                            <select id="competency_areas" name="competency_areas" multiple class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="leadership">Leadership</option>
                                <option value="communication">Communication</option>
                                <option value="teamwork">Teamwork</option>
                                <option value="problem_solving">Problem Solving</option>
                                <option value="technical">Technical Skills</option>
                            </select>
                            <p class="mt-1 text-xs text-gray-500">Hold Ctrl/Cmd to select multiple competencies</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'create-learning-path-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Create Learning Path
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
    
    <!-- View Learning Path Modal -->
    <x-modal id="view-learning-path-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h2 class="text-lg font-medium text-gray-900">
                        Supervisor Development Path
                    </h2>
                    <div class="mt-1 text-sm text-gray-600">
                        <span class="font-medium">Department:</span> Operations | <span class="font-medium">Role:</span> Supervisor | <span class="font-medium">Version:</span> v1.2
                    </div>
                </div>
                
                <div class="flex space-x-2">
                    <button class="inline-flex items-center px-3 py-1 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                        <i class='bx bx-download mr-1'></i> Export
                    </button>
                    <button class="inline-flex items-center px-3 py-1 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                        <i class='bx bx-printer mr-1'></i> Print
                    </button>
                </div>
            </div>
            
            <!-- Path Overview -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                <p class="text-sm text-blue-700">
                    A comprehensive development path designed for new supervisors in the Operations department. This path focuses on building essential leadership skills, operational knowledge, and team management capabilities needed to excel in a supervisory role.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Duration</div>
                        <div class="text-xl font-semibold text-blue-700 mt-1">6 Months</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Status</div>
                        <div class="text-xl font-semibold text-blue-700 mt-1">Active</div>
                    </div>
                    <div class="text-center p-3">
                        <div class="text-sm font-medium text-blue-600">Completion Rate</div>
                        <div class="text-xl font-semibold text-blue-700 mt-1">83%</div>
                    </div>
                </div>
            </div>
            
            <!-- Required Training & Learning -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Required Training & Learning</h3>
                
                <div class="space-y-4 mt-4">
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Leadership Fundamentals</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Workshop</span>
                                    <span>2 days</span>
                                </div>
                                <p class="mt-2 text-sm text-gray-600">
                                    Foundational workshop covering leadership principles, styles, and practical applications in a supervisory role.
                                </p>
                            </div>
                            <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Required</div>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Conflict Resolution Skills</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Online Course</span>
                                    <span>8 hours</span>
                                </div>
                                <p class="mt-2 text-sm text-gray-600">
                                    Learn effective techniques for managing workplace conflicts and facilitating productive resolutions.
                                </p>
                            </div>
                            <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Required</div>
                        </div>
                    </div>
                    
                    <div class="bg-white border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Effective Team Management</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Seminar</span>
                                    <span>1 day</span>
                                </div>
                                <p class="mt-2 text-sm text-gray-600">
                                    Comprehensive overview of team dynamics, motivation techniques, and performance management strategies.
                                </p>
                            </div>
                            <div class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Required</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recommended Resources -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Recommended Resources</h3>
                
                <div class="space-y-4 mt-4">
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Harvard Business Review: Leadership Articles</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Reading</span>
                                </div>
                                <p class="mt-2 text-sm text-gray-600">
                                    Selected articles on modern leadership practices and case studies.
                                </p>
                            </div>
                            <div class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Recommended</div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Leadership Podcast Series</h4>
                                <div class="mt-1 flex items-center text-xs text-gray-500">
                                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full mr-2">Audio</span>
                                </div>
                                <p class="mt-2 text-sm text-gray-600">
                                    Weekly podcast featuring interviews with successful leaders across various industries.
                                </p>
                            </div>
                            <div class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Recommended</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Competency & Certification -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Competency & Certification</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Competency Areas Addressed</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded-full">Leadership</span>
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded-full">Communication</span>
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded-full">Teamwork</span>
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 rounded-full">Problem Solving</span>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Linked Certification</h4>
                        <div class="flex items-center">
                            <i class='bx bx-badge-check text-green-600 mr-2 text-xl'></i>
                            <span class="text-sm text-gray-900">Leadership Certification</span>
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Completion of this path contributes to Leadership Certification requirements.</p>
                    </div>
                </div>
            </div>
            
            <!-- Version History -->
            <div class="mb-6">
                <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Version History</h3>
                
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Version</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Changes</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Updated By</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900">v1.2</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Sept 1, 2025</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Added new resource: Leadership Podcast Series</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Sarah Johnson</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900">v1.1</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Aug 15, 2025</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Updated Conflict Resolution course requirements</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Michael Brown</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-3 text-sm text-gray-900">v1.0</td>
                                <td class="px-4 py-3 text-sm text-gray-500">July 10, 2025</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Initial creation</td>
                                <td class="px-4 py-3 text-sm text-gray-500">Sarah Johnson</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="flex justify-end">
                <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'view-learning-path-modal')">
                    Close
                </button>
            </div>
        </div>
    </x-modal>
</x-app-layout>
