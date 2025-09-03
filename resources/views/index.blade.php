<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Human Resources 2 Dashboard') }}
    </h2>

    <div>
        <div class="mx-auto">
            <!-- KPI Cards Row -->
            <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-4">
                <!-- Total Employees Card -->
                <div class="p-4 bg-white rounded-base shadow-card">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-text-muted">Total Employees</p>
                            <p class="text-2xl font-bold text-text-dark">248</p>
                        </div>
                        <div class="p-2 bg-accent bg-opacity-20 rounded-full">
                            <i class='bx bx-user-circle text-primary text-xl'></i>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <span class="text-xs font-medium text-green-600">+4.5%</span>
                        <span class="ml-1 text-xs text-text-muted">from last month</span>
                    </div>
                </div>

                <!-- New Hires Card -->
                <div class="p-4 bg-white rounded-base shadow-card">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-text-muted">New Hires</p>
                            <p class="text-2xl font-bold text-text-dark">12</p>
                        </div>
                        <div class="p-2 bg-accent bg-opacity-20 rounded-full">
                            <i class='bx bx-user-plus text-primary text-xl'></i>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <span class="text-xs font-medium text-green-600">+2.1%</span>
                        <span class="ml-1 text-xs text-text-muted">from last month</span>
                    </div>
                </div>

                <!-- Turnover Rate Card -->
                <div class="p-4 bg-white rounded-base shadow-card">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-text-muted">Turnover Rate</p>
                            <p class="text-2xl font-bold text-text-dark">3.2%</p>
                        </div>
                        <div class="p-2 bg-accent bg-opacity-20 rounded-full">
                            <i class='bx bx-transfer-alt text-primary text-xl'></i>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <span class="text-xs font-medium text-green-600">-0.8%</span>
                        <span class="ml-1 text-xs text-text-muted">from last month</span>
                    </div>
                </div>

                <!-- Avg. Performance Card -->
                <div class="p-4 bg-white rounded-base shadow-card">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-text-muted">Avg. Performance</p>
                            <p class="text-2xl font-bold text-text-dark">87%</p>
                        </div>
                        <div class="p-2 bg-accent bg-opacity-20 rounded-full">
                            <i class='bx bx-line-chart text-primary text-xl'></i>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <span class="text-xs font-medium text-green-600">+1.2%</span>
                        <span class="ml-1 text-xs text-text-muted">from last month</span>
                    </div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-2">
                <!-- Employee Distribution Chart -->
                <div class="p-4 bg-white rounded-base shadow-card">
                    <h3 class="mb-4 text-lg font-medium text-text-dark">Employee Distribution</h3>
                    <div class="h-64 p-4 bg-gray-50 rounded-base">
                        <!-- Chart placeholder -->
                        <div class="flex items-center justify-center h-full text-text-muted">
                            <p>Employee distribution by department</p>
                        </div>
                    </div>
                </div>

                <!-- Headcount Trend -->
                <div class="p-4 bg-white rounded-base shadow-card">
                    <h3 class="mb-4 text-lg font-medium text-text-dark">Headcount Trend</h3>
                    <div class="h-64 p-4 bg-gray-50 rounded-base">
                        <!-- Chart placeholder -->
                        <div class="flex items-center justify-center h-full text-text-muted">
                            <p>Monthly headcount trend for the last 12 months</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module Access Row -->
            <div class="mb-6">
                <h3 class="mb-4 text-lg font-medium text-text-dark">Quick Access to Modules</h3>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Training Management -->
                    <a href="#" class="block p-4 transition-all bg-white border-1.5 border-accent hover:border-primary rounded-base shadow-card hover:shadow-md">
                        <div class="flex items-center">
                            <div class="p-2 mr-3 bg-accent bg-opacity-20 rounded-full">
                                <i class='bx bx-book-content text-primary text-xl'></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-text-dark">Training Management</h4>
                                <p class="text-sm text-text-muted">Plan and track trainings</p>
                            </div>
                        </div>
                    </a>

                    <!-- Competency Management -->
                    <a href="#" class="block p-4 transition-all bg-white border-1.5 border-accent hover:border-primary rounded-base shadow-card hover:shadow-md">
                        <div class="flex items-center">
                            <div class="p-2 mr-3 bg-accent bg-opacity-20 rounded-full">
                                <i class='bx bx-medal text-primary text-xl'></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-text-dark">Competency Management</h4>
                                <p class="text-sm text-text-muted">Evaluate skills & competencies</p>
                            </div>
                        </div>
                    </a>

                    <!-- Succession Planning -->
                    <a href="#" class="block p-4 transition-all bg-white border-1.5 border-accent hover:border-primary rounded-base shadow-card hover:shadow-md">
                        <div class="flex items-center">
                            <div class="p-2 mr-3 bg-accent bg-opacity-20 rounded-full">
                                <i class='bx bx-git-branch text-primary text-xl'></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-text-dark">Succession Planning</h4>
                                <p class="text-sm text-text-muted">Develop future leaders</p>
                            </div>
                        </div>
                    </a>

                    <!-- Learning Management -->
                    <a href="#" class="block p-4 transition-all bg-white border-1.5 border-accent hover:border-primary rounded-base shadow-card hover:shadow-md">
                        <div class="flex items-center">
                            <div class="p-2 mr-3 bg-accent bg-opacity-20 rounded-full">
                                <i class='bx bx-bulb text-primary text-xl'></i>
                            </div>
                            <div>
                                <h4 class="font-medium text-text-dark">Learning Management</h4>
                                <p class="text-sm text-text-muted">Access learning resources</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="p-4 bg-white rounded-base shadow-card">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-text-dark">Recent Activities</h3>
                    <a href="#" class="text-sm font-medium text-primary hover:text-primary-dark">View All</a>
                </div>
                <div class="space-y-4">
                    <!-- Activity Item -->
                    <div class="flex">
                        <div class="relative mr-3">
                            <div class="flex items-center justify-center w-8 h-8 bg-accent bg-opacity-20 rounded-full">
                                <i class='bx bx-calendar-check text-primary'></i>
                            </div>
                            <div class="absolute top-8 left-4 h-full border-l-2 border-dashed border-accent"></div>
                        </div>
                        <div class="pb-4">
                            <div class="flex items-center">
                                <h4 class="font-medium text-text-dark">Training Completed</h4>
                                <span class="ml-2 text-xs text-text-muted">2 hours ago</span>
                            </div>
                            <p class="text-sm text-text-muted">12 employees completed the leadership training program</p>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="flex">
                        <div class="relative mr-3">
                            <div class="flex items-center justify-center w-8 h-8 bg-accent bg-opacity-20 rounded-full">
                                <i class='bx bx-user-plus text-primary'></i>
                            </div>
                            <div class="absolute top-8 left-4 h-full border-l-2 border-dashed border-accent"></div>
                        </div>
                        <div class="pb-4">
                            <div class="flex items-center">
                                <h4 class="font-medium text-text-dark">New Hire Onboarding</h4>
                                <span class="ml-2 text-xs text-text-muted">Yesterday</span>
                            </div>
                            <p class="text-sm text-text-muted">3 new employees started onboarding process</p>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="flex">
                        <div class="relative mr-3">
                            <div class="flex items-center justify-center w-8 h-8 bg-accent bg-opacity-20 rounded-full">
                                <i class='bx bx-medal text-primary'></i>
                            </div>
                            <div class="absolute top-8 left-4 h-full border-l-2 border-dashed border-accent"></div>
                        </div>
                        <div class="pb-4">
                            <div class="flex items-center">
                                <h4 class="font-medium text-text-dark">Performance Review</h4>
                                <span class="ml-2 text-xs text-text-muted">2 days ago</span>
                            </div>
                            <p class="text-sm text-text-muted">Quarterly performance reviews completed for Marketing department</p>
                        </div>
                    </div>

                    <!-- Activity Item -->
                    <div class="flex">
                        <div class="mr-3">
                            <div class="flex items-center justify-center w-8 h-8 bg-accent bg-opacity-20 rounded-full">
                                <i class='bx bx-book-alt text-primary'></i>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center">
                                <h4 class="font-medium text-text-dark">New Learning Course</h4>
                                <span class="ml-2 text-xs text-text-muted">3 days ago</span>
                            </div>
                            <p class="text-sm text-text-muted">Added "Advanced Excel for HR Analytics" to learning catalog</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
