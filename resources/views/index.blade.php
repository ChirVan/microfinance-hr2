<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('HR Dashboard') }}
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <!-- Training Management Summary -->
        <div class="bg-white rounded-base shadow-card overflow-hidden">
            <div class="bg-primary px-4 py-3">
                <h3 class="text-lg font-medium text-white flex items-center">
                    <i class='bx bx-book-content text-xl mr-2'></i>
                    Training Management
                </h3>
            </div>
            <div class="p-4">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-blue-50 border border-blue-100 rounded-md p-3">
                        <p class="text-xs text-blue-500 font-medium">Active Trainings</p>
                        <p class="text-xl font-bold text-blue-700">12</p>
                    </div>
                    <div class="bg-green-50 border border-green-100 rounded-md p-3">
                        <p class="text-xs text-green-500 font-medium">Completion Rate</p>
                        <p class="text-xl font-bold text-green-700">78%</p>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Training ROI</span>
                        <span class="font-medium text-gray-800">128%</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Pending Evaluations</span>
                        <span class="font-medium text-gray-800">8</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Certifications Issued</span>
                        <span class="font-medium text-gray-800">45</span>
                    </div>
                </div>
                <div class="mt-4 grid grid-cols-2 gap-3">
                    <a href="{{ route('training.catalog') }}" class="btn btn-sm btn-outline-primary text-center">View Catalog</a>
                    <a href="{{ route('training.assign') }}" class="btn btn-sm btn-outline-primary text-center">Assign Training</a>
                </div>
            </div>
        </div>
        
        <!-- Competency Management Summary -->
        <div class="bg-white rounded-base shadow-card overflow-hidden">
            <div class="bg-accent px-4 py-3">
                <h3 class="text-lg font-medium text-white flex items-center">
                    <i class='bx bx-medal text-xl mr-2'></i>
                    Competency Management
                </h3>
            </div>
            <div class="p-4">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-purple-50 border border-purple-100 rounded-md p-3">
                        <p class="text-xs text-purple-500 font-medium">Active Frameworks</p>
                        <p class="text-xl font-bold text-purple-700">4</p>
                    </div>
                    <div class="bg-yellow-50 border border-yellow-100 rounded-md p-3">
                        <p class="text-xs text-yellow-500 font-medium">Avg. Proficiency</p>
                        <p class="text-xl font-bold text-yellow-700">72%</p>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Assessment Completion</span>
                        <span class="font-medium text-gray-800">84%</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Skill Gaps Identified</span>
                        <span class="font-medium text-gray-800">24</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Development Plans</span>
                        <span class="font-medium text-gray-800">18</span>
                    </div>
                </div>
                <div class="mt-4 grid grid-cols-2 gap-3">
                    <a href="{{ route('competency.framework') }}" class="btn btn-sm btn-outline-accent text-center">Frameworks</a>
                    <a href="{{ route('competency.questionnaire-assign') }}" class="btn btn-sm btn-outline-accent text-center">Questionnaires</a>
                </div>
            </div>
        </div>
        
        <!-- Learning Management Summary -->
        <div class="bg-white rounded-base shadow-card overflow-hidden">
            <div class="bg-indigo-600 px-4 py-3">
                <h3 class="text-lg font-medium text-white flex items-center">
                    <i class='bx bx-bulb text-xl mr-2'></i>
                    Learning Management
                </h3>
            </div>
            <div class="p-4">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-indigo-50 border border-indigo-100 rounded-md p-3">
                        <p class="text-xs text-indigo-500 font-medium">Learning Paths</p>
                        <p class="text-xl font-bold text-indigo-700">16</p>
                    </div>
                    <div class="bg-teal-50 border border-teal-100 rounded-md p-3">
                        <p class="text-xs text-teal-500 font-medium">Avg. Completion</p>
                        <p class="text-xl font-bold text-teal-700">67%</p>
                    </div>
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Employee Engagement</span>
                        <span class="font-medium text-gray-800">76%</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Path Completion Rate</span>
                        <span class="font-medium text-gray-800">67%</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Knowledge Retention</span>
                        <span class="font-medium text-gray-800">82%</span>
                    </div>
                </div>
                <div class="mt-4 grid grid-cols-2 gap-3">
                    <a href="{{ route('learning.path-setup') }}" class="btn btn-sm btn-outline-indigo text-center">Learning Paths</a>
                    <a href="{{ route('learning.progress') }}" class="btn btn-sm btn-outline-indigo text-center">Track Progress</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Activity Timeline -->
    <div class="bg-white rounded-base shadow-card p-6 mb-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Recent Activities</h3>
        
        <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-3.5 top-0 h-full border-l-2 border-gray-200"></div>
            
            <!-- Timeline Items -->
            <div class="space-y-6">
                <!-- Training Activity -->
                <div class="relative pl-10">
                    <div class="absolute left-0 top-1 rounded-full bg-blue-500 border-4 border-white h-7 w-7 flex items-center justify-center">
                        <i class='bx bx-book-content text-white text-sm'></i>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-md">
                        <p class="text-sm font-medium text-gray-800">New Training Session Created</p>
                        <p class="text-xs text-gray-500 mt-1">Leadership Development Workshop - Sept 15, 2025</p>
                        <p class="text-xs text-gray-600 mt-2">Created by: Maria Rodriguez - <span class="text-gray-400">3 hours ago</span></p>
                    </div>
                </div>
                
                <!-- Competency Activity -->
                <div class="relative pl-10">
                    <div class="absolute left-0 top-1 rounded-full bg-purple-500 border-4 border-white h-7 w-7 flex items-center justify-center">
                        <i class='bx bx-medal text-white text-sm'></i>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-md">
                        <p class="text-sm font-medium text-gray-800">Competency Assessment Completed</p>
                        <p class="text-xs text-gray-500 mt-1">Technical Skills Assessment - IT Department</p>
                        <p class="text-xs text-gray-600 mt-2">Completed by: 12 employees - <span class="text-gray-400">Yesterday</span></p>
                    </div>
                </div>
                
                <!-- Learning Activity -->
                <div class="relative pl-10">
                    <div class="absolute left-0 top-1 rounded-full bg-indigo-500 border-4 border-white h-7 w-7 flex items-center justify-center">
                        <i class='bx bx-bulb text-white text-sm'></i>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-md">
                        <p class="text-sm font-medium text-gray-800">New Learning Path Launched</p>
                        <p class="text-xs text-gray-500 mt-1">Financial Analysis Certification Path</p>
                        <p class="text-xs text-gray-600 mt-2">Assigned to: 28 employees - <span class="text-gray-400">Sept 2, 2025</span></p>
                    </div>
                </div>
                
                <!-- Training Activity -->
                <div class="relative pl-10">
                    <div class="absolute left-0 top-1 rounded-full bg-blue-500 border-4 border-white h-7 w-7 flex items-center justify-center">
                        <i class='bx bx-book-content text-white text-sm'></i>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-md">
                        <p class="text-sm font-medium text-gray-800">Training Feedback Received</p>
                        <p class="text-xs text-gray-500 mt-1">Customer Service Excellence Workshop</p>
                        <p class="text-xs text-gray-600 mt-2">Average Rating: 4.8/5 - <span class="text-gray-400">Sept 1, 2025</span></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-4 text-center">
            <button class="text-sm font-medium text-primary hover:text-primary-dark transition">
                View All Activities
            </button>
        </div>
    </div>
    
    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Skills Gap Analysis -->
        <div class="bg-white rounded-base shadow-card p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Top Skills Gaps</h3>
            
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Data Analysis</span>
                        <span class="text-sm font-medium text-gray-700">68%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 68%"></div>
                    </div>
                    <div class="flex justify-end mt-0.5">
                        <span class="text-xs text-gray-500">Target: 85%</span>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Cloud Security</span>
                        <span class="text-sm font-medium text-gray-700">54%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-red-500 h-2.5 rounded-full" style="width: 54%"></div>
                    </div>
                    <div class="flex justify-end mt-0.5">
                        <span class="text-xs text-gray-500">Target: 80%</span>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Change Management</span>
                        <span class="text-sm font-medium text-gray-700">62%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 62%"></div>
                    </div>
                    <div class="flex justify-end mt-0.5">
                        <span class="text-xs text-gray-500">Target: 75%</span>
                    </div>
                </div>
                
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Leadership</span>
                        <span class="text-sm font-medium text-gray-700">79%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-green-500 h-2.5 rounded-full" style="width: 79%"></div>
                    </div>
                    <div class="flex justify-end mt-0.5">
                        <span class="text-xs text-gray-500">Target: 80%</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-4 text-right">
                <a href="{{ route('competency.gap-analysis') }}" class="text-sm font-medium text-primary hover:text-primary-dark transition">
                    View Full Analysis
                </a>
            </div>
        </div>
        
        <!-- Upcoming Deadlines -->
        <div class="bg-white rounded-base shadow-card p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Upcoming Deadlines</h3>
            
            <div class="space-y-3">
                <div class="flex items-start border-l-4 border-blue-500 pl-3 py-1">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-800">Leadership Workshop</p>
                        <p class="text-xs text-gray-500">Registration closes in 3 days</p>
                    </div>
                    <div class="text-xs text-blue-600 font-medium">Sept 10, 2025</div>
                </div>
                
                <div class="flex items-start border-l-4 border-yellow-500 pl-3 py-1">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-800">IT Security Assessment</p>
                        <p class="text-xs text-gray-500">Deadline for 22 employees</p>
                    </div>
                    <div class="text-xs text-yellow-600 font-medium">Sept 15, 2025</div>
                </div>
                
                <div class="flex items-start border-l-4 border-indigo-500 pl-3 py-1">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-800">Financial Analyst Path</p>
                        <p class="text-xs text-gray-500">Module 2 completion deadline</p>
                    </div>
                    <div class="text-xs text-indigo-600 font-medium">Sept 20, 2025</div>
                </div>
                
                <div class="flex items-start border-l-4 border-green-500 pl-3 py-1">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-800">Quarterly Training Report</p>
                        <p class="text-xs text-gray-500">Report submission deadline</p>
                    </div>
                    <div class="text-xs text-green-600 font-medium">Sept 30, 2025</div>
                </div>
                
                <div class="flex items-start border-l-4 border-purple-500 pl-3 py-1">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-800">Competency Framework Review</p>
                        <p class="text-xs text-gray-500">Department head approval needed</p>
                    </div>
                    <div class="text-xs text-purple-600 font-medium">Oct 5, 2025</div>
                </div>
            </div>
            
            <div class="mt-4 text-right">
                <button class="text-sm font-medium text-primary hover:text-primary-dark transition">
                    View All Deadlines
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
