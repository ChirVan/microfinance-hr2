<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Training Catalog Setup') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Training Catalog</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Create and manage the list of available training programs.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-import mr-2'></i>
                            Import Catalog
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'add-training-modal')">
                            <i class='bx bx-plus mr-2'></i>
                            Add New Training
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="flex flex-wrap gap-4 items-end">
                    <div class="w-full md:w-auto">
                        <label class="block text-sm font-medium text-gray-600 mb-1">Training Type</label>
                        <select class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-48 text-gray-700">
                            <option value="">All Types</option>
                            <option value="elearning">E-learning</option>
                            <option value="workshop">Workshop</option>
                            <option value="seminar">Seminar</option>
                            <option value="onthejob">On-the-job</option>
                        </select>
                    </div>
                    
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
                        <label class="block text-sm font-medium text-gray-600 mb-1">Search</label>
                        <input type="text" placeholder="Search training..." class="bg-white border border-gray-200 rounded-md px-3 py-2 w-full md:w-64 text-gray-700">
                    </div>
                    
                    <div class="w-full md:w-auto">
                        <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                            <i class='bx bx-filter-alt mr-2'></i> Apply Filters
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Training Catalog Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-200">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Training ID</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Training Title</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Type</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Duration</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Facilitator</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Cost</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Department/Role</th>
                            <th class="px-4 py-3 text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <!-- Sample Training 1 -->
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-700">TRN-001</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Leadership Fundamentals</div>
                                <div class="text-xs text-gray-500">Core management skills for new leaders</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Workshop</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">2 days</td>
                            <td class="px-4 py-4 text-sm text-gray-700">John Smith, Leadership Coach</td>
                            <td class="px-4 py-4 text-sm text-gray-700">$1,200</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">All Departments</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800" title="View Details">
                                    <i class='bx bx-show'></i>
                                </button>
                                <button class="text-green-600 hover:text-green-800" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800" title="Delete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Training 2 -->
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-700">TRN-002</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Python Programming Basics</div>
                                <div class="text-xs text-gray-500">Introduction to Python for beginners</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-indigo-100 text-indigo-800">E-learning</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">8 hours</td>
                            <td class="px-4 py-4 text-sm text-gray-700">CodeCamp Online</td>
                            <td class="px-4 py-4 text-sm text-gray-700">$299</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">IT Department</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800" title="View Details">
                                    <i class='bx bx-show'></i>
                                </button>
                                <button class="text-green-600 hover:text-green-800" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800" title="Delete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Training 3 -->
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-700">TRN-003</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Financial Compliance</div>
                                <div class="text-xs text-gray-500">Regulatory updates for finance professionals</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-amber-100 text-amber-800">Seminar</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">1 day</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Finance Academy</td>
                            <td class="px-4 py-4 text-sm text-gray-700">$850</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">Finance Department</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800" title="View Details">
                                    <i class='bx bx-show'></i>
                                </button>
                                <button class="text-green-600 hover:text-green-800" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800" title="Delete">
                                    <i class='bx bx-trash'></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Sample Training 4 -->
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-700">TRN-004</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Customer Service Excellence</div>
                                <div class="text-xs text-gray-500">Advanced techniques for customer satisfaction</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">On-the-job</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">5 days</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Customer Relations Team</td>
                            <td class="px-4 py-4 text-sm text-gray-700">$0 (Internal)</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-800">Operations Department</span>
                            </td>
                            <td class="px-4 py-4 text-sm text-center space-x-2">
                                <button class="text-blue-600 hover:text-blue-800" title="View Details">
                                    <i class='bx bx-show'></i>
                                </button>
                                <button class="text-green-600 hover:text-green-800" title="Edit">
                                    <i class='bx bx-edit'></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800" title="Delete">
                                    <i class='bx bx-trash'></i>
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
    
    <!-- Add Training Modal -->
    <x-modal id="add-training-modal" :show="false" max-width="2xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Add New Training
            </h2>
            
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="training_title" class="block text-sm font-medium text-gray-700 mb-1">Training Title</label>
                        <input type="text" id="training_title" name="training_title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    </div>
                    
                    <div>
                        <label for="training_type" class="block text-sm font-medium text-gray-700 mb-1">Training Type</label>
                        <select id="training_type" name="training_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="elearning">E-learning</option>
                            <option value="workshop">Workshop</option>
                            <option value="seminar">Seminar</option>
                            <option value="onthejob">On-the-job</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Duration</label>
                        <div class="flex space-x-2">
                            <input type="number" id="duration" name="duration" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <select id="duration_unit" name="duration_unit" class="mt-1 block w-1/3 border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="hours">Hours</option>
                                <option value="days">Days</option>
                                <option value="weeks">Weeks</option>
                            </select>
                        </div>
                    </div>
                    
                    <div>
                        <label for="facilitator" class="block text-sm font-medium text-gray-700 mb-1">Trainer/Facilitator</label>
                        <input type="text" id="facilitator" name="facilitator" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    </div>
                    
                    <div>
                        <label for="cost" class="block text-sm font-medium text-gray-700 mb-1">Cost</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="number" id="cost" name="cost" class="mt-1 block w-full pl-7 border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        </div>
                    </div>
                    
                    <div>
                        <label for="department" class="block text-sm font-medium text-gray-700 mb-1">Department/Role</label>
                        <select id="department" name="department" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="all">All Departments</option>
                            <option value="it">Information Technology</option>
                            <option value="hr">Human Resources</option>
                            <option value="finance">Finance</option>
                            <option value="operations">Operations</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
                </div>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Materials</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <i class='bx bx-cloud-upload text-gray-400 text-3xl'></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-primary hover:text-primary-dark focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary">
                                    <span>Upload files</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only" multiple>
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">
                                PDF, Videos, Slides up to 10MB
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'add-training-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Save Training
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
</x-app-layout>
