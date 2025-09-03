<div
    x-data="{
        notifications: [
            {
                id: 1,
                type: 'assessment',
                title: 'Pending Assessment',
                message: 'You have a new leadership competency assessment due by July 15, 2025',
                date: '3 days ago',
                isRead: false
            },
            {
                id: 2,
                type: 'development',
                title: 'Development Plan Update',
                message: 'Your manager has updated your development plan with new activities',
                date: '1 day ago',
                isRead: false
            },
            {
                id: 3,
                type: 'framework',
                title: 'Framework Updated',
                message: 'The Technical Skills framework has been updated with new cloud computing competencies',
                date: '6 hours ago',
                isRead: false
            },
            {
                id: 4,
                type: 'gap',
                title: 'Gap Analysis Completed',
                message: 'Your competency gap analysis for Q2 2025 has been completed',
                date: 'Just now',
                isRead: false
            },
            {
                id: 5,
                type: 'assessment',
                title: 'Assessment Reminder',
                message: 'Reminder: Complete your team members\' performance assessments by end of week',
                date: '2 days ago',
                isRead: true
            }
        ],
        showAll: false,
        markAsRead(id) {
            this.notifications = this.notifications.map(notification => {
                if (notification.id === id) {
                    return {...notification, isRead: true};
                }
                return notification;
            });
        },
        markAllAsRead() {
            this.notifications = this.notifications.map(notification => ({...notification, isRead: true}));
        },
        get unreadCount() {
            return this.notifications.filter(notification => !notification.isRead).length;
        },
        get filteredNotifications() {
            return this.showAll ? this.notifications : this.notifications.slice(0, 3);
        },
        getIconClass(type) {
            switch(type) {
                case 'assessment':
                    return 'bx bx-clipboard text-blue-500';
                case 'development':
                    return 'bx bx-trending-up text-green-500';
                case 'framework':
                    return 'bx bx-grid-alt text-purple-500';
                case 'gap':
                    return 'bx bx-bar-chart-alt-2 text-amber-500';
                default:
                    return 'bx bx-bell text-gray-500';
            }
        }
    }"
    class="relative"
    @click.away="open = false"
>
    <button
        type="button"
        class="relative p-1 text-gray-600 hover:text-gray-900 focus:outline-none"
        @click="open = !open"
    >
        <i class='bx bx-bell text-2xl'></i>
        <template x-if="unreadCount > 0">
            <span class="absolute top-0 right-0 inline-flex items-center justify-center w-4 h-4 text-xs font-bold text-white bg-red-500 rounded-full">
                <span x-text="unreadCount"></span>
            </span>
        </template>
    </button>

    <div 
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute right-0 z-50 mt-2 w-80 md:w-96 overflow-hidden origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
        style="display: none;"
    >
        <div class="flex justify-between items-center px-4 py-3 bg-gray-50 border-b border-gray-200">
            <h3 class="text-sm font-medium text-gray-700">Notifications</h3>
            <div class="flex space-x-2">
                <button 
                    @click="markAllAsRead()"
                    class="text-xs text-blue-600 hover:text-blue-800"
                    x-show="unreadCount > 0"
                >
                    Mark all as read
                </button>
                <button 
                    @click="showAll = !showAll"
                    class="text-xs text-gray-600 hover:text-gray-800"
                >
                    <span x-text="showAll ? 'Show less' : 'View all'"></span>
                </button>
            </div>
        </div>

        <div class="max-h-[24rem] overflow-y-auto">
            <template x-if="filteredNotifications.length === 0">
                <div class="px-4 py-6 text-center text-gray-500">
                    <i class='bx bx-check-circle text-3xl mb-2'></i>
                    <p>You're all caught up!</p>
                </div>
            </template>

            <template x-for="notification in filteredNotifications" :key="notification.id">
                <div 
                    class="flex p-4 border-b border-gray-100 hover:bg-gray-50 transition-colors"
                    :class="{'bg-blue-50 hover:bg-blue-50': !notification.isRead}"
                >
                    <div class="flex-shrink-0 mr-3">
                        <div class="flex items-center justify-center h-10 w-10 rounded-full bg-gray-100">
                            <i :class="getIconClass(notification.type)"></i>
                        </div>
                    </div>
                    <div class="flex-1 cursor-pointer" @click="markAsRead(notification.id)">
                        <div class="flex justify-between">
                            <h4 
                                class="text-sm font-medium"
                                :class="notification.isRead ? 'text-gray-700' : 'text-gray-900'"
                                x-text="notification.title"
                            ></h4>
                            <span class="text-xs text-gray-500" x-text="notification.date"></span>
                        </div>
                        <p 
                            class="mt-1 text-xs"
                            :class="notification.isRead ? 'text-gray-500' : 'text-gray-700'"
                            x-text="notification.message"
                        ></p>
                        <div class="mt-1 flex justify-end">
                            <template x-if="!notification.isRead">
                                <button 
                                    @click.stop="markAsRead(notification.id)"
                                    class="text-xs text-blue-600 hover:text-blue-800"
                                >
                                    Mark as read
                                </button>
                            </template>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <div class="px-4 py-3 bg-gray-50 border-t border-gray-200 text-center">
            <a href="#" class="text-sm text-blue-600 hover:text-blue-800">Manage notification settings</a>
        </div>
    </div>
</div>
