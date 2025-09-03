<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Competency Report Card') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Employee Competency Report Card</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Comprehensive summary of employee competencies and development progress.
                        </p>
                    </div>
                    <div class="flex space-x-3 mt-4 md:mt-0">
                        <button class="btn btn-secondary">
                            <i class='bx bx-download mr-2'></i>
                            Export PDF
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-share mr-2'></i>
                            Share
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Employee Information Section -->
            <div class="mb-6 bg-gray-50 rounded-md p-4 border border-gray-200">
                <div class="flex flex-col md:flex-row">
                    <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6 flex justify-center">
                        <div class="h-24 w-24 rounded-full bg-gray-200 flex items-center justify-center">
                            <span class="text-xl font-medium text-gray-600">JD</span>
                        </div>
                    </div>
                    
                    <div class="flex-grow grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div>
                            <h4 class="text-sm font-medium text-gray-500">Employee Information</h4>
                            <p class="text-base font-semibold text-gray-800 mt-1">John Doe</p>
                            <p class="text-sm text-gray-600">ID: EMP-2025-0042</p>
                            <p class="text-sm text-gray-600">john.doe@company.com</p>
                        </div>
                        
                        <div>
                            <h4 class="text-sm font-medium text-gray-500">Department & Position</h4>
                            <p class="text-base font-semibold text-gray-800 mt-1">IT Manager</p>
                            <p class="text-sm text-gray-600">Information Technology</p>
                            <p class="text-sm text-gray-600">Since: January 15, 2023</p>
                        </div>
                        
                        <div>
                            <h4 class="text-sm font-medium text-gray-500">Report Period</h4>
                            <p class="text-base font-semibold text-gray-800 mt-1">Q3 2025</p>
                            <p class="text-sm text-gray-600">July 1 - September 30, 2025</p>
                            <p class="text-sm text-gray-600">Last Updated: Sep 15, 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Report Card Summary -->
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="text-base font-medium text-gray-700">Competency Summary</h4>
                    <div class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                        Overall Score: 3.1 / 4.0
                    </div>
                </div>
                
                <!-- Competency Radar Chart (Placeholder) -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm mb-6">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-100 rounded flex items-center justify-center">
                        <div class="text-center p-6">
                            <i class='bx bx-radar text-5xl text-gray-400 mb-2'></i>
                            <p class="text-sm text-gray-500">Radar chart visualization showing competency levels across different groups.</p>
                            <p class="text-xs text-gray-400 mt-1">(Dynamic chart would be rendered here)</p>
                        </div>
                    </div>
                </div>
                
                <!-- Competency Score Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white border border-indigo-100 rounded-lg p-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm font-medium text-indigo-800">Leadership Skills</div>
                                <div class="text-2xl font-semibold text-gray-800 mt-1">3.2</div>
                            </div>
                            <div class="h-12 w-12 bg-indigo-100 rounded-full flex items-center justify-center">
                                <i class='bx bx-group text-2xl text-indigo-600'></i>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1.5 mt-3">
                            <div class="bg-indigo-500 h-1.5 rounded-full" style="width: 80%"></div>
                        </div>
                        <div class="mt-2 text-xs text-indigo-600">Advanced</div>
                    </div>
                    
                    <div class="bg-white border border-blue-100 rounded-lg p-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm font-medium text-blue-800">Technical Skills</div>
                                <div class="text-2xl font-semibold text-gray-800 mt-1">3.5</div>
                            </div>
                            <div class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class='bx bx-code-alt text-2xl text-blue-600'></i>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1.5 mt-3">
                            <div class="bg-blue-500 h-1.5 rounded-full" style="width: 87.5%"></div>
                        </div>
                        <div class="mt-2 text-xs text-blue-600">Advanced</div>
                    </div>
                    
                    <div class="bg-white border border-green-100 rounded-lg p-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm font-medium text-green-800">Communication</div>
                                <div class="text-2xl font-semibold text-gray-800 mt-1">2.7</div>
                            </div>
                            <div class="h-12 w-12 bg-green-100 rounded-full flex items-center justify-center">
                                <i class='bx bx-conversation text-2xl text-green-600'></i>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1.5 mt-3">
                            <div class="bg-green-500 h-1.5 rounded-full" style="width: 67.5%"></div>
                        </div>
                        <div class="mt-2 text-xs text-green-600">Intermediate</div>
                    </div>
                    
                    <div class="bg-white border border-amber-100 rounded-lg p-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm font-medium text-amber-800">Problem Solving</div>
                                <div class="text-2xl font-semibold text-gray-800 mt-1">3.0</div>
                            </div>
                            <div class="h-12 w-12 bg-amber-100 rounded-full flex items-center justify-center">
                                <i class='bx bx-bulb text-2xl text-amber-600'></i>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1.5 mt-3">
                            <div class="bg-amber-500 h-1.5 rounded-full" style="width: 75%"></div>
                        </div>
                        <div class="mt-2 text-xs text-amber-600">Advanced</div>
                    </div>
                </div>
            </div>
            
            <!-- Detailed Competency Report -->
            <div class="mb-8">
                <h4 class="text-base font-medium text-gray-700 mb-4">Detailed Competency Report</h4>
                
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Competency</th>
                                    <th class="px-4 py-3 border-b text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Score</th>
                                    <th class="px-4 py-3 border-b text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Level</th>
                                    <th class="px-4 py-3 border-b text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Required</th>
                                    <th class="px-4 py-3 border-b text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Gap</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Trend</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <!-- Leadership Group -->
                                <tr class="bg-indigo-50">
                                    <td colspan="6" class="px-4 py-2 text-sm font-medium text-indigo-800">Leadership Skills</td>
                                </tr>
                                
                                <!-- Strategic Planning -->
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-700">Strategic Planning</td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                            Advanced
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                            No Gap
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="w-16 h-6 bg-gray-100 rounded flex items-center">
                                                <div class="h-1 bg-green-500 rounded-full ml-1" style="width: 70%"></div>
                                            </div>
                                            <span class="text-xs text-green-600 ml-2">+0.5</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Team Leadership -->
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-700">Team Leadership</td>
                                    <td class="px-4 py-3 text-center text-sm">3.5</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                            Advanced
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                            +0.5
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="w-16 h-6 bg-gray-100 rounded flex items-center">
                                                <div class="h-1 bg-green-500 rounded-full ml-1" style="width: 80%"></div>
                                            </div>
                                            <span class="text-xs text-green-600 ml-2">+0.2</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Change Management -->
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-700">Change Management</td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                            Advanced
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">3.5</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                                            -0.5
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="w-16 h-6 bg-gray-100 rounded flex items-center">
                                                <div class="h-1 bg-green-500 rounded-full ml-1" style="width: 60%"></div>
                                            </div>
                                            <span class="text-xs text-green-600 ml-2">+0.5</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Technical Skills Group -->
                                <tr class="bg-blue-50">
                                    <td colspan="6" class="px-4 py-2 text-sm font-medium text-blue-800">Technical Skills</td>
                                </tr>
                                
                                <!-- IT Infrastructure Management -->
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-700">IT Infrastructure Management</td>
                                    <td class="px-4 py-3 text-center text-sm">3.5</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                            Advanced
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                            +0.5
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="w-16 h-6 bg-gray-100 rounded flex items-center">
                                                <div class="h-1 bg-green-500 rounded-full ml-1" style="width: 75%"></div>
                                            </div>
                                            <span class="text-xs text-green-600 ml-2">+0.3</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Cloud Technologies -->
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-700">Cloud Technologies</td>
                                    <td class="px-4 py-3 text-center text-sm">3.5</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                            Advanced
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                            +0.5
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="w-16 h-6 bg-gray-100 rounded flex items-center">
                                                <div class="h-1 bg-green-500 rounded-full ml-1" style="width: 90%"></div>
                                            </div>
                                            <span class="text-xs text-green-600 ml-2">+0.7</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Communication Group -->
                                <tr class="bg-green-50">
                                    <td colspan="6" class="px-4 py-2 text-sm font-medium text-green-800">Communication</td>
                                </tr>
                                
                                <!-- Interpersonal Communication -->
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-700">Interpersonal Communication</td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                            Advanced
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                            No Gap
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="w-16 h-6 bg-gray-100 rounded flex items-center">
                                                <div class="h-1 bg-green-500 rounded-full ml-1" style="width: 55%"></div>
                                            </div>
                                            <span class="text-xs text-green-600 ml-2">+0.2</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Written Communication -->
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-700">Written Communication</td>
                                    <td class="px-4 py-3 text-center text-sm">2.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                            Intermediate
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                                            -1.0
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="w-16 h-6 bg-gray-100 rounded flex items-center">
                                                <div class="h-1 bg-green-500 rounded-full ml-1" style="width: 40%"></div>
                                            </div>
                                            <span class="text-xs text-green-600 ml-2">+0.5</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Problem Solving Group -->
                                <tr class="bg-amber-50">
                                    <td colspan="6" class="px-4 py-2 text-sm font-medium text-amber-800">Problem Solving</td>
                                </tr>
                                
                                <!-- Critical Thinking -->
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-700">Critical Thinking</td>
                                    <td class="px-4 py-3 text-center text-sm">3.5</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                            Advanced
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                            +0.5
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="w-16 h-6 bg-gray-100 rounded flex items-center">
                                                <div class="h-1 bg-green-500 rounded-full ml-1" style="width: 85%"></div>
                                            </div>
                                            <span class="text-xs text-green-600 ml-2">+0.5</span>
                                        </div>
                                    </td>
                                </tr>
                                
                                <!-- Decision Making -->
                                <tr>
                                    <td class="px-4 py-3 text-sm font-medium text-gray-700">Decision Making</td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                            Advanced
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-center text-sm">3.0</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                            No Gap
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center">
                                            <div class="w-16 h-6 bg-gray-100 rounded flex items-center">
                                                <div class="h-1 bg-green-500 rounded-full ml-1" style="width: 60%"></div>
                                            </div>
                                            <span class="text-xs text-green-600 ml-2">+0.2</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Development Progress & Recommendations -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Development Progress -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <h4 class="text-base font-medium text-gray-700 mb-4">Development Progress</h4>
                    
                    <div class="space-y-5">
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-sm font-medium text-gray-700">Written Communication</span>
                                <div class="text-xs">
                                    <span class="text-gray-600">Progress: </span>
                                    <span class="font-medium text-blue-600">50%</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 50%"></div>
                            </div>
                            <div class="flex justify-between items-center mt-1 text-xs text-gray-500">
                                <span>Started: Aug 1, 2025</span>
                                <span>Est. completion: Nov 15, 2025</span>
                            </div>
                            <div class="mt-2 text-sm text-gray-600">
                                <i class='bx bx-calendar-check text-green-600 mr-1'></i>
                                Completed 2 of 4 training modules
                            </div>
                        </div>
                        
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-sm font-medium text-gray-700">Change Management</span>
                                <div class="text-xs">
                                    <span class="text-gray-600">Progress: </span>
                                    <span class="font-medium text-blue-600">75%</span>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                            <div class="flex justify-between items-center mt-1 text-xs text-gray-500">
                                <span>Started: Jul 15, 2025</span>
                                <span>Est. completion: Oct 15, 2025</span>
                            </div>
                            <div class="mt-2 text-sm text-gray-600">
                                <i class='bx bx-calendar-check text-green-600 mr-1'></i>
                                Completed workshop and mentoring sessions
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-gray-200">
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-700">Overall Development Progress</span>
                            <span class="text-sm font-medium text-blue-600">60%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Recommendations -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <h4 class="text-base font-medium text-gray-700 mb-4">Development Recommendations</h4>
                    
                    <div class="space-y-4">
                        <div class="flex items-start p-3 bg-red-50 rounded-md border border-red-100">
                            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-red-100 flex items-center justify-center mr-3">
                                <i class='bx bx-bell text-red-600'></i>
                            </div>
                            <div>
                                <h5 class="text-sm font-medium text-red-800">High Priority</h5>
                                <p class="mt-1 text-sm text-red-700">
                                    Improve Written Communication skills through structured business writing course.
                                </p>
                                <div class="mt-2 flex items-center">
                                    <span class="text-xs font-medium px-2 py-0.5 bg-white rounded-full text-red-700 mr-2">Gap: -1.0</span>
                                    <span class="text-xs text-red-600">Target Date: Dec 15, 2025</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-start p-3 bg-amber-50 rounded-md border border-amber-100">
                            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-amber-100 flex items-center justify-center mr-3">
                                <i class='bx bx-calendar-exclamation text-amber-600'></i>
                            </div>
                            <div>
                                <h5 class="text-sm font-medium text-amber-800">Medium Priority</h5>
                                <p class="mt-1 text-sm text-amber-700">
                                    Continue Change Management coaching sessions with senior leadership.
                                </p>
                                <div class="mt-2 flex items-center">
                                    <span class="text-xs font-medium px-2 py-0.5 bg-white rounded-full text-amber-700 mr-2">Gap: -0.5</span>
                                    <span class="text-xs text-amber-600">Target Date: Oct 31, 2025</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-start p-3 bg-green-50 rounded-md border border-green-100">
                            <div class="flex-shrink-0 h-8 w-8 rounded-full bg-green-100 flex items-center justify-center mr-3">
                                <i class='bx bx-chevron-up-circle text-green-600'></i>
                            </div>
                            <div>
                                <h5 class="text-sm font-medium text-green-800">Strengths to Leverage</h5>
                                <p class="mt-1 text-sm text-green-700">
                                    Utilize strong Technical Skills and Critical Thinking in cross-functional project leadership.
                                </p>
                                <div class="mt-2 flex items-center">
                                    <span class="text-xs font-medium px-2 py-0.5 bg-white rounded-full text-green-700 mr-2">Strength: +0.5</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Assessment History -->
            <div class="mb-6">
                <h4 class="text-base font-medium text-gray-700 mb-4">Assessment History</h4>
                
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Assessment Period</th>
                                    <th class="px-4 py-3 border-b text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Completion Date</th>
                                    <th class="px-4 py-3 border-b text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Overall Score</th>
                                    <th class="px-4 py-3 border-b text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Change</th>
                                    <th class="px-4 py-3 border-b text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Assessor</th>
                                    <th class="px-4 py-3 border-b text-center text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-3 text-sm">Q3 2025</td>
                                    <td class="px-4 py-3 text-sm text-center">Sep 15, 2025</td>
                                    <td class="px-4 py-3 text-sm text-center font-medium">3.1</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">+0.3</span>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-center">
                                        <div class="flex items-center justify-center">
                                            <div class="h-6 w-6 rounded-full bg-gray-200 flex items-center justify-center mr-1">
                                                <span class="text-xs font-medium text-gray-600">SM</span>
                                            </div>
                                            <span>S. Miller</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class='bx bx-show'></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm">Q2 2025</td>
                                    <td class="px-4 py-3 text-sm text-center">Jun 10, 2025</td>
                                    <td class="px-4 py-3 text-sm text-center font-medium">2.8</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">+0.2</span>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-center">
                                        <div class="flex items-center justify-center">
                                            <div class="h-6 w-6 rounded-full bg-gray-200 flex items-center justify-center mr-1">
                                                <span class="text-xs font-medium text-gray-600">SM</span>
                                            </div>
                                            <span>S. Miller</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class='bx bx-show'></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 text-sm">Q1 2025</td>
                                    <td class="px-4 py-3 text-sm text-center">Mar 22, 2025</td>
                                    <td class="px-4 py-3 text-sm text-center font-medium">2.6</td>
                                    <td class="px-4 py-3 text-center">
                                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800">Baseline</span>
                                    </td>
                                    <td class="px-4 py-3 text-sm text-center">
                                        <div class="flex items-center justify-center">
                                            <div class="h-6 w-6 rounded-full bg-gray-200 flex items-center justify-center mr-1">
                                                <span class="text-xs font-medium text-gray-600">SM</span>
                                            </div>
                                            <span>S. Miller</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class='bx bx-show'></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Manager Comments -->
            <div class="bg-gray-50 rounded-md p-4 border border-gray-200 mb-6">
                <h4 class="text-sm font-medium text-gray-700 mb-2">Manager Comments</h4>
                
                <div class="bg-white p-3 rounded border border-gray-200">
                    <p class="text-sm text-gray-700">
                        John has shown consistent improvement in his technical and leadership competencies over the past three quarters. 
                        His critical thinking skills are particularly strong and have been valuable in resolving complex infrastructure issues. 
                        The focus areas for continued development are written communication and change management. 
                        John is on track with his development plan and showing good progress.
                    </p>
                    <div class="mt-3 flex items-center text-xs text-gray-500">
                        <span>Sarah Miller, IT Director</span>
                        <span class="mx-2">•</span>
                        <span>September 15, 2025</span>
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex justify-end space-x-3">
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                    <i class='bx bx-download mr-2'></i> Export as PDF
                </button>
                <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50 text-gray-700 flex items-center text-sm">
                    <i class='bx bx-share mr-2'></i> Share Report
                </button>
                <button class="px-4 py-2 bg-primary hover:bg-primary-dark text-white rounded-md flex items-center text-sm">
                    <i class='bx bx-edit mr-2'></i> Update Development Plan
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
