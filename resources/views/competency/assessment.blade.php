<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Employee Competency Assessment') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Competency Assessment Form</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Evaluate employee's current skills against the competency framework.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary">
                            <i class='bx bx-list-ul mr-2'></i>
                            View Assessments
                        </button>
                        <button class="btn btn-primary">
                            <i class='bx bx-plus mr-2'></i>
                            New Assessment
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Assessment Form -->
            <div class="bg-gray-50 border border-gray-200 rounded-base p-6">
                <!-- Employee Information Section -->
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 mb-6">
                    <div>
                        <h4 class="text-base font-medium text-text-dark mb-4">Employee Information</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex flex-col">
                                <label class="text-sm font-medium text-gray-600 mb-1">Employee ID</label>
                                <div class="flex">
                                    <input type="text" value="EMP-10042" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                                    <span class="ml-2 text-xs text-gray-500 flex items-center">Auto-fetched from Core HCM</span>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="text-sm font-medium text-gray-600 mb-1">Employee Name</label>
                                <div class="flex">
                                    <input type="text" value="John Doe" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                                    <span class="ml-2 text-xs text-gray-500 flex items-center">Auto-fetched</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-base font-medium text-text-dark mb-4">Position Information</h4>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="flex flex-col">
                                <label class="text-sm font-medium text-gray-600 mb-1">Job Title</label>
                                <div class="flex">
                                    <input type="text" value="Network Engineer" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                                    <span class="ml-2 text-xs text-gray-500 flex items-center">Auto-fetched</span>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label class="text-sm font-medium text-gray-600 mb-1">Supervisor</label>
                                <div class="flex">
                                    <input type="text" value="Jane Smith" class="bg-gray-100 border border-gray-200 rounded-md px-3 py-2 w-full text-gray-600" readonly>
                                    <span class="ml-2 text-xs text-gray-500 flex items-center">Auto-fetched</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Assessment Table Section -->
                <div class="mb-6">
                    <h4 class="text-base font-medium text-text-dark mb-4">Competency Assessment</h4>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200 rounded-base">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Competency Area</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Required Level</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Current Level</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Evidence/Notes</th>
                                    <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Attachments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-4 border-b text-sm">Networking</td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <select class="border rounded-md px-3 py-1 bg-gray-50 text-gray-700 focus:outline-none focus:ring-1 focus:ring-primary w-full" disabled>
                                            <option>Advanced</option>
                                        </select>
                                    </td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <select class="border rounded-md px-3 py-1 bg-white text-gray-700 focus:outline-none focus:ring-1 focus:ring-primary w-full">
                                            <option>Basic</option>
                                            <option selected>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert</option>
                                        </select>
                                    </td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <textarea class="border rounded-md px-3 py-2 bg-white text-gray-700 focus:outline-none focus:ring-1 focus:ring-primary w-full" rows="1">Needs CCNA Cert</textarea>
                                    </td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-md border border-gray-300 text-gray-700 flex items-center text-xs">
                                            <i class='bx bx-upload mr-1'></i> Upload Evidence
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 border-b text-sm">Communication</td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <select class="border rounded-md px-3 py-1 bg-gray-50 text-gray-700 focus:outline-none focus:ring-1 focus:ring-primary w-full" disabled>
                                            <option>Advanced</option>
                                        </select>
                                    </td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <select class="border rounded-md px-3 py-1 bg-white text-gray-700 focus:outline-none focus:ring-1 focus:ring-primary w-full">
                                            <option>Basic</option>
                                            <option>Intermediate</option>
                                            <option selected>Advanced</option>
                                            <option>Expert</option>
                                        </select>
                                    </td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <textarea class="border rounded-md px-3 py-2 bg-white text-gray-700 focus:outline-none focus:ring-1 focus:ring-primary w-full" rows="1">Good in reports</textarea>
                                    </td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-md border border-gray-300 text-gray-700 flex items-center text-xs">
                                            <i class='bx bx-upload mr-1'></i> Upload Evidence
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 border-b text-sm">Leadership</td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <select class="border rounded-md px-3 py-1 bg-gray-50 text-gray-700 focus:outline-none focus:ring-1 focus:ring-primary w-full" disabled>
                                            <option>Basic</option>
                                        </select>
                                    </td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <select class="border rounded-md px-3 py-1 bg-white text-gray-700 focus:outline-none focus:ring-1 focus:ring-primary w-full">
                                            <option selected>Basic</option>
                                            <option>Intermediate</option>
                                            <option>Advanced</option>
                                            <option>Expert</option>
                                        </select>
                                    </td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <textarea class="border rounded-md px-3 py-2 bg-white text-gray-700 focus:outline-none focus:ring-1 focus:ring-primary w-full" rows="1"></textarea>
                                    </td>
                                    <td class="px-4 py-4 border-b text-sm">
                                        <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-md border border-gray-300 text-gray-700 flex items-center text-xs">
                                            <i class='bx bx-upload mr-1'></i> Upload Evidence
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 text-sm">
                                        <button class="text-primary hover:text-primary-dark flex items-center text-sm">
                                            <i class='bx bx-plus-circle mr-1'></i> Add Competency
                                        </button>
                                    </td>
                                    <td class="px-4 py-4 text-sm"></td>
                                    <td class="px-4 py-4 text-sm"></td>
                                    <td class="px-4 py-4 text-sm"></td>
                                    <td class="px-4 py-4 text-sm"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Assessment Process Information -->
                <div class="mb-6 p-4 bg-blue-50 border border-blue-100 rounded-base">
                    <h4 class="text-sm font-medium text-blue-800 mb-2">Assessment Process</h4>
                    <ul class="list-disc list-inside text-xs text-blue-700 space-y-1">
                        <li>Supervisor or HR rates the employee per competency</li>
                        <li>Attach supporting evidence (certificates, reports, project samples)</li>
                        <li>Form is saved → automatically triggers Gap Analysis</li>
                        <li>Assessment results are stored in HR2 system</li>
                        <li>Materials Used: Certificates, performance records, test results</li>
                    </ul>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-end space-x-3">
                    <button class="px-6 py-2 border border-gray-300 rounded-base bg-white hover:bg-gray-50 text-gray-700">
                        Cancel
                    </button>
                    <button class="px-6 py-2 bg-primary hover:bg-primary-dark text-white rounded-base">
                        Save Assessment
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
