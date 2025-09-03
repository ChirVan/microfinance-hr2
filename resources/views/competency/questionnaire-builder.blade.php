<x-app-layout>
    <h2 class="mb-6 text-xl font-semibold text-brown">
        {{ __('Questionnaire Builder') }}
    </h2>

    <div class="w-full">
        <div class="bg-white p-6 rounded-base shadow-card">
            <div class="mb-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-medium text-text-dark">Competency Questionnaires</h3>
                        <p class="mt-1 text-sm text-text-muted">
                            Create and manage questionnaires for competency assessments.
                        </p>
                    </div>
                    <div class="flex space-x-3">
                        <button class="btn btn-secondary" x-data="" x-on:click="$dispatch('open-modal', 'import-questionnaire-modal')">
                            <i class='bx bx-import mr-2'></i>
                            Import Template
                        </button>
                        <button class="btn btn-primary" x-data="" x-on:click="$dispatch('open-modal', 'new-questionnaire-modal')">
                            <i class='bx bx-plus mr-2'></i>
                            New Questionnaire
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Questionnaire Filters -->
            <div class="mb-6 bg-gray-50 border border-gray-200 rounded-md p-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="competency_area" class="block text-sm font-medium text-gray-700 mb-1">Competency Area</label>
                        <select id="competency_area" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Areas</option>
                            <option value="technical">Technical Skills</option>
                            <option value="leadership">Leadership</option>
                            <option value="communication">Communication</option>
                            <option value="problem_solving">Problem Solving</option>
                            <option value="teamwork">Teamwork</option>
                        </select>
                    </div>
                    <div>
                        <label for="question_type" class="block text-sm font-medium text-gray-700 mb-1">Question Type</label>
                        <select id="question_type" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Types</option>
                            <option value="multiple_choice">Multiple Choice</option>
                            <option value="rating_scale">Rating Scale</option>
                            <option value="yes_no">Yes/No</option>
                            <option value="open_ended">Open-ended</option>
                            <option value="situational">Situational/Case-based</option>
                        </select>
                    </div>
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select id="status" class="w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Status</option>
                            <option value="active">Active</option>
                            <option value="draft">Draft</option>
                            <option value="archived">Archived</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Questionnaires Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">ID</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Title</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Linked Competency</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Questions</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Created</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Status</th>
                            <th class="px-4 py-3 border-b text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-700">Q-1001</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Leadership Skills Assessment</div>
                                <div class="text-xs text-gray-500">Evaluates leadership capabilities</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Leadership</td>
                            <td class="px-4 py-4 text-sm text-gray-700">12</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Sept 2, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900" x-data="" x-on:click="$dispatch('open-modal', 'edit-questionnaire-modal')">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-yellow-600 hover:text-yellow-900" x-data="" x-on:click="$dispatch('open-modal', 'assign-questionnaire-modal')">
                                        <i class='bx bx-user-plus'></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-700">Q-1002</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Technical Proficiency - Networking</div>
                                <div class="text-xs text-gray-500">Assesses networking knowledge and skills</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Technical Skills</td>
                            <td class="px-4 py-4 text-sm text-gray-700">15</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 28, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-yellow-600 hover:text-yellow-900">
                                        <i class='bx bx-user-plus'></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-700">Q-1003</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Communication Skills Evaluation</div>
                                <div class="text-xs text-gray-500">Evaluates written and verbal communication</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Communication</td>
                            <td class="px-4 py-4 text-sm text-gray-700">10</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 25, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Draft
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-yellow-600 hover:text-yellow-900">
                                        <i class='bx bx-user-plus'></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-700">Q-1004</td>
                            <td class="px-4 py-4">
                                <div class="text-sm font-medium text-gray-900">Problem-Solving Assessment</div>
                                <div class="text-xs text-gray-500">Evaluates critical thinking and problem-solving</div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-700">Problem Solving</td>
                            <td class="px-4 py-4 text-sm text-gray-700">8</td>
                            <td class="px-4 py-4 text-sm text-gray-700">Aug 22, 2025</td>
                            <td class="px-4 py-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Archived
                                </span>
                            </td>
                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-900">
                                        <i class='bx bx-edit-alt'></i>
                                    </button>
                                    <button class="text-yellow-600 hover:text-yellow-900">
                                        <i class='bx bx-user-plus'></i>
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
                    Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">4</span> questionnaires
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-500">Previous</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-blue-600 font-medium">1</button>
                    <button class="px-3 py-1 border border-gray-300 rounded-md text-sm bg-white text-gray-600">Next</button>
                </div>
            </div>
        </div>
    </div>

    <!-- New Questionnaire Modal -->
    <x-modal id="new-questionnaire-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Create New Questionnaire
            </h2>
            
            <form x-data="{ currentStep: 1, questionType: 'multiple_choice', questions: [{id: 1, text: '', type: 'multiple_choice', options: [{text: '', value: 1}, {text: '', value: 2}], weight: 1, mandatory: true}] }">
                <!-- Step 1: Basic Information -->
                <div x-show="currentStep === 1">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Basic Information</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="questionnaire_title" class="block text-sm font-medium text-gray-700 mb-1">Questionnaire Title</label>
                            <input type="text" id="questionnaire_title" name="questionnaire_title" placeholder="e.g., Leadership Skills Assessment" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="questionnaire_id" class="block text-sm font-medium text-gray-700 mb-1">Questionnaire ID</label>
                            <input type="text" id="questionnaire_id" name="questionnaire_id" value="Q-1005" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" readonly>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="linked_competency" class="block text-sm font-medium text-gray-700 mb-1">Linked Competency</label>
                        <select id="linked_competency" name="linked_competency" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">Select Competency</option>
                            <option value="leadership">Leadership</option>
                            <option value="technical_skills">Technical Skills</option>
                            <option value="communication">Communication</option>
                            <option value="problem_solving">Problem Solving</option>
                            <option value="teamwork">Teamwork</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description/Instructions</label>
                        <textarea id="description" name="description" rows="3" placeholder="Provide instructions for assessors..." class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
                    </div>
                </div>
                
                <!-- Step 2: Question Builder -->
                <div x-show="currentStep === 2">
                    <div class="flex justify-between items-center mb-3 pb-2 border-b">
                        <h3 class="text-sm font-medium text-gray-700">Questions</h3>
                        <button type="button" @click="questions.push({id: questions.length + 1, text: '', type: 'multiple_choice', options: [{text: '', value: 1}, {text: '', value: 2}], weight: 1, mandatory: true})" class="px-3 py-1 bg-primary text-white rounded-md text-sm hover:bg-primary-dark">
                            <i class='bx bx-plus'></i> Add Question
                        </button>
                    </div>
                    
                    <div class="space-y-6">
                        <template x-for="(question, index) in questions" :key="question.id">
                            <div class="bg-gray-50 border border-gray-200 rounded-md p-4">
                                <div class="flex justify-between items-center mb-3">
                                    <h4 class="text-sm font-medium text-gray-700">Question <span x-text="index + 1"></span></h4>
                                    <button type="button" @click="questions.splice(index, 1)" class="text-red-600 hover:text-red-900" x-show="questions.length > 1">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </div>
                                
                                <div class="mb-4">
                                    <label :for="'question_' + question.id" class="block text-sm font-medium text-gray-700 mb-1">Question Text</label>
                                    <textarea :id="'question_' + question.id" x-model="question.text" rows="2" placeholder="Enter your question here..." class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                                    <div>
                                        <label :for="'question_type_' + question.id" class="block text-sm font-medium text-gray-700 mb-1">Question Type</label>
                                        <select :id="'question_type_' + question.id" x-model="question.type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                            <option value="multiple_choice">Multiple Choice</option>
                                            <option value="rating_scale">Rating Scale (1-5)</option>
                                            <option value="yes_no">Yes/No</option>
                                            <option value="open_ended">Open-ended</option>
                                            <option value="situational">Situational/Case-based</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label :for="'weight_' + question.id" class="block text-sm font-medium text-gray-700 mb-1">Competency Weight</label>
                                        <select :id="'weight_' + question.id" x-model="question.weight" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                            <option value="1">Low (1)</option>
                                            <option value="2">Medium (2)</option>
                                            <option value="3">High (3)</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center">
                                        <input :id="'mandatory_' + question.id" type="checkbox" x-model="question.mandatory" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                        <label :for="'mandatory_' + question.id" class="ml-2 block text-sm text-gray-700">
                                            Mandatory Question
                                        </label>
                                    </div>
                                </div>
                                
                                <!-- Answer Options -->
                                <div x-show="question.type === 'multiple_choice'">
                                    <div class="mb-2 flex justify-between items-center">
                                        <label class="block text-sm font-medium text-gray-700">Answer Options</label>
                                        <button type="button" @click="question.options.push({text: '', value: question.options.length + 1})" class="text-sm text-primary hover:text-primary-dark">
                                            <i class='bx bx-plus'></i> Add Option
                                        </button>
                                    </div>
                                    
                                    <div class="space-y-2">
                                        <template x-for="(option, optIndex) in question.options" :key="optIndex">
                                            <div class="flex items-center space-x-2">
                                                <input type="text" x-model="option.text" class="flex-grow border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Option text...">
                                                <select x-model="option.value" class="w-20 border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <button type="button" @click="question.options.splice(optIndex, 1)" class="text-red-600 hover:text-red-900" x-show="question.options.length > 2">
                                                    <i class='bx bx-x'></i>
                                                </button>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                                
                                <div x-show="question.type === 'rating_scale'" class="text-sm text-gray-600 mt-2">
                                    Rating scale from 1 (Lowest) to 5 (Highest) will be used.
                                </div>
                                
                                <div x-show="question.type === 'yes_no'" class="text-sm text-gray-600 mt-2">
                                    Yes/No options will be provided with corresponding values.
                                </div>
                                
                                <div x-show="question.type === 'open_ended'" class="text-sm text-gray-600 mt-2">
                                    A text area will be provided for open-ended responses.
                                </div>
                                
                                <div x-show="question.type === 'situational'" class="mt-2">
                                    <label :for="'scenario_' + question.id" class="block text-sm font-medium text-gray-700 mb-1">Case Scenario</label>
                                    <textarea :id="'scenario_' + question.id" rows="2" placeholder="Describe the scenario..." class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                
                <!-- Step 3: Review and Save -->
                <div x-show="currentStep === 3">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Review Questionnaire</h3>
                    
                    <div class="bg-gray-50 border border-gray-200 rounded-md p-4 mb-4">
                        <div class="mb-3">
                            <span class="text-sm font-medium text-gray-700">Questionnaire Title:</span>
                            <span class="ml-2 text-sm text-gray-900" x-text="document.getElementById('questionnaire_title').value || 'Not specified'"></span>
                        </div>
                        <div class="mb-3">
                            <span class="text-sm font-medium text-gray-700">Linked Competency:</span>
                            <span class="ml-2 text-sm text-gray-900" x-text="document.getElementById('linked_competency').options[document.getElementById('linked_competency').selectedIndex].text || 'Not specified'"></span>
                        </div>
                        <div class="mb-3">
                            <span class="text-sm font-medium text-gray-700">Total Questions:</span>
                            <span class="ml-2 text-sm text-gray-900" x-text="questions.length"></span>
                        </div>
                        <div class="mb-3">
                            <span class="text-sm font-medium text-gray-700">Description:</span>
                            <p class="mt-1 text-sm text-gray-900" x-text="document.getElementById('description').value || 'No description provided'"></p>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="flex items-center">
                            <input id="activate" name="activate" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="activate" class="ml-2 block text-sm text-gray-700">
                                Activate questionnaire immediately
                            </label>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Buttons -->
                <div class="mt-6 flex justify-between">
                    <button type="button" @click="currentStep--" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-show="currentStep > 1">
                        Previous Step
                    </button>
                    <div class="ml-auto flex space-x-3">
                        <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'new-questionnaire-modal')">
                            Cancel
                        </button>
                        <button type="button" @click="currentStep++" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-show="currentStep < 3">
                            Next Step
                        </button>
                        <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-show="currentStep === 3">
                            Save Questionnaire
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </x-modal>
    
    <!-- Edit Questionnaire Modal -->
    <x-modal id="edit-questionnaire-modal" :show="false" max-width="4xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Edit Questionnaire: Leadership Skills Assessment
            </h2>
            
            <form x-data="{ currentStep: 1, questions: [{id: 1, text: 'Do you effectively delegate tasks to team members?', type: 'rating_scale', options: [], weight: 2, mandatory: true}, {id: 2, text: 'How well do you handle conflicts within your team?', type: 'rating_scale', options: [], weight: 3, mandatory: true}] }">
                <!-- Form content similar to New Questionnaire Modal, but pre-filled -->
                <div x-show="currentStep === 1">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Basic Information</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="edit_questionnaire_title" class="block text-sm font-medium text-gray-700 mb-1">Questionnaire Title</label>
                            <input type="text" id="edit_questionnaire_title" name="edit_questionnaire_title" value="Leadership Skills Assessment" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        </div>
                        <div>
                            <label for="edit_questionnaire_id" class="block text-sm font-medium text-gray-700 mb-1">Questionnaire ID</label>
                            <input type="text" id="edit_questionnaire_id" name="edit_questionnaire_id" value="Q-1001" class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm" readonly>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="edit_linked_competency" class="block text-sm font-medium text-gray-700 mb-1">Linked Competency</label>
                        <select id="edit_linked_competency" name="edit_linked_competency" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="leadership" selected>Leadership</option>
                            <option value="technical_skills">Technical Skills</option>
                            <option value="communication">Communication</option>
                            <option value="problem_solving">Problem Solving</option>
                            <option value="teamwork">Teamwork</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label for="edit_description" class="block text-sm font-medium text-gray-700 mb-1">Description/Instructions</label>
                        <textarea id="edit_description" name="edit_description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">This assessment evaluates leadership capabilities including delegation, conflict resolution, vision setting, and team motivation.</textarea>
                    </div>
                </div>
                
                <!-- Step 2: Questions (similar to new questionnaire but with pre-filled data) -->
                <div x-show="currentStep === 2">
                    <!-- Question editor similar to new questionnaire modal -->
                </div>
                
                <!-- Step 3: Review similar to new questionnaire modal -->
                <div x-show="currentStep === 3">
                    <!-- Review content -->
                </div>
                
                <!-- Navigation Buttons -->
                <div class="mt-6 flex justify-between">
                    <button type="button" @click="currentStep--" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-show="currentStep > 1">
                        Previous Step
                    </button>
                    <div class="ml-auto flex space-x-3">
                        <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'edit-questionnaire-modal')">
                            Cancel
                        </button>
                        <button type="button" @click="currentStep++" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-show="currentStep < 3">
                            Next Step
                        </button>
                        <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-show="currentStep === 3">
                            Update Questionnaire
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </x-modal>
    
    <!-- Assign Questionnaire Modal -->
    <x-modal id="assign-questionnaire-modal" :show="false" max-width="2xl" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Assign Questionnaire: Leadership Skills Assessment
            </h2>
            
            <form>
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Assignment Details</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="assessment_period" class="block text-sm font-medium text-gray-700 mb-1">Assessment Period</label>
                            <select id="assessment_period" name="assessment_period" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="q3_2025">Q3 2025 (Jul-Sep)</option>
                                <option value="q4_2025">Q4 2025 (Oct-Dec)</option>
                                <option value="q1_2026">Q1 2026 (Jan-Mar)</option>
                                <option value="q2_2026">Q2 2026 (Apr-Jun)</option>
                            </select>
                        </div>
                        <div>
                            <label for="assessor_type" class="block text-sm font-medium text-gray-700 mb-1">Assessor Type</label>
                            <select id="assessor_type" name="assessor_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                                <option value="manager">Manager</option>
                                <option value="hr">HR Staff</option>
                                <option value="peer">Peer Assessment</option>
                                <option value="self">Self-Assessment</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="due_date" class="block text-sm font-medium text-gray-700 mb-1">Due Date</label>
                        <input type="date" id="due_date" name="due_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                    </div>
                </div>
                
                <div class="mb-4">
                    <h3 class="text-sm font-medium text-gray-700 mb-3 pb-2 border-b">Select Employees</h3>
                    
                    <div class="mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <label for="department_filter" class="block text-sm font-medium text-gray-700">Filter by Department</label>
                            <div class="flex items-center">
                                <input id="select_all" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                <label for="select_all" class="ml-2 block text-xs text-gray-700">
                                    Select All
                                </label>
                            </div>
                        </div>
                        <select id="department_filter" name="department_filter" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                            <option value="">All Departments</option>
                            <option value="it">IT Department</option>
                            <option value="hr">Human Resources</option>
                            <option value="finance">Finance</option>
                            <option value="operations">Operations</option>
                        </select>
                    </div>
                    
                    <div class="border border-gray-200 rounded-md overflow-hidden">
                        <div class="max-h-60 overflow-y-auto">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 sticky top-0">
                                    <tr>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Select</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Employee</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Department</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2">
                                            <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            John Doe
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            IT Manager
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            IT Department
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2">
                                            <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            Jane Smith
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Team Lead
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Finance
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2">
                                            <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            Robert Johnson
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Project Manager
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Operations
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2">
                                            <input type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-900">
                                            Emily Wilson
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            HR Manager
                                        </td>
                                        <td class="px-4 py-2 text-sm text-gray-500">
                                            Human Resources
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-xs text-gray-500">
                            4 employees selected
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="notification_message" class="block text-sm font-medium text-gray-700 mb-1">Notification Message</label>
                    <textarea id="notification_message" name="notification_message" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50" placeholder="Optional message to include with the assignment notification..."></textarea>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'assign-questionnaire-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Assign Questionnaire
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
    
    <!-- Import Questionnaire Modal -->
    <x-modal id="import-questionnaire-modal" :show="false" max-width="md" focusable>
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 mb-4">
                Import Questionnaire Template
            </h2>
            
            <form>
                <div class="mb-4">
                    <label for="template_type" class="block text-sm font-medium text-gray-700 mb-1">Template Type</label>
                    <select id="template_type" name="template_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
                        <option value="">Select Template Type</option>
                        <option value="leadership">Leadership Assessment</option>
                        <option value="technical">Technical Skills Assessment</option>
                        <option value="communication">Communication Skills Assessment</option>
                        <option value="problem_solving">Problem Solving Assessment</option>
                        <option value="teamwork">Teamwork Assessment</option>
                        <option value="custom">Custom Template</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="file_upload" class="block text-sm font-medium text-gray-700 mb-1">Upload File</label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <i class='bx bx-cloud-upload text-gray-400 text-3xl'></i>
                            <div class="flex text-sm text-gray-600">
                                <label for="file_upload" class="relative cursor-pointer bg-white rounded-md font-medium text-primary hover:text-primary-dark focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary">
                                    <span>Upload a file</span>
                                    <input id="file_upload" name="file_upload" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">
                                Excel, CSV, or JSON files up to 10MB
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <div class="flex items-center">
                        <input id="override" name="override" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="override" class="ml-2 block text-sm text-gray-700">
                            Override existing questions if duplicates are found
                        </label>
                    </div>
                </div>
                
                <div class="flex justify-end space-x-3">
                    <button type="button" class="px-4 py-2 bg-white border border-gray-300 rounded-md font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" x-on:click="$dispatch('close-modal', 'import-questionnaire-modal')">
                        Cancel
                    </button>
                    <button type="submit" class="px-4 py-2 bg-primary border border-transparent rounded-md font-medium text-white hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Import Template
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
</x-app-layout>
