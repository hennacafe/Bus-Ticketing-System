<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-bold"> 
    <div class="flex h-screen">
        
        <aside class="flex flex-col w-64 h-full px-4 py-8 overflow-y-auto bg-white border-r dark:bg-gray-900 dark:border-gray-700">
            <a href="#">
                <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/logo.svg" alt="">
            </a>
            <nav class="mt-6">
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200"href="/Dashboard1">Dashboard</a>
                <a busTab" class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Bus-manage">Bus Manage</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Route-Manage">Route Manage</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Bus">Reports</a>
                <a id="settingsTab" class="flex items-center px-4 py-2 mt-5 bg-gray-100 rounded-md dark:bg-gray-800 dark:text-gray-200" href="#">Settings</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-10 overflow-auto">
            <!-- Bus Management Section (hidden) -->
            <div id="busSection" class="hidden">
                <h1 class="text-2xl font-bold">Manage Buses</h1>
                <!-- Bus management content here -->
            </div>

            <!-- Route Management Section (hidden) -->
            <div id="routeSection" class="hidden">
                <h1 class="text-2xl font-bold">Manage Routes</h1>
                <!-- Route management content here -->
            </div>

            <!-- Reports Section (hidden) -->
            <div id="reportSection" class="hidden">
                <h1 class="text-2xl font-bold">Reports</h1>
                <!-- Reports content here -->
            </div>

            <!-- Settings Section (default visible) -->
            <div id="settingsSection">
                <h1 class="text-2xl font-bold">System Settings</h1>
                
                <!-- Account Settings -->
                <div class="mt-8 p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold mb-4">Account Settings</h2>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <input type="text" value="Admin" class="p-2 border rounded w-full">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" value="User" class="p-2 border rounded w-full">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" value="admin@transport.com" class="p-2 border rounded w-full">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" value="+63 912 345 6789" class="p-2 border rounded w-full">
                        </div>
                        <div class="pt-4">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Update Profile</button>
                        </div>
                    </form>
                </div>

                <!-- System Preferences -->
                <div class="mt-8 p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold mb-4">System Preferences</h2>
                    <form class="space-y-4">
                        <div>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" checked>
                                <span class="ml-2">Enable email notifications</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                <span class="ml-2">Enable SMS alerts</span>
                            </label>
                        </div>
                        <div>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" checked>
                                <span class="ml-2">Show revenue reports by default</span>
                            </label>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Default Currency</label>
                                <select class="p-2 border rounded w-full">
                                    <option>Philippine Peso (₱)</option>
                                    <option>US Dollar ($)</option>
                                    <option>Euro (€)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Time Zone</label>
                                <select class="p-2 border rounded w-full">
                                    <option>Asia/Manila (GMT+8)</option>
                                    <option>UTC</option>
                                    <option>America/New_York (GMT-5)</option>
                                </select>
                            </div>
                        </div>
                        <div class="pt-4">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Save Preferences</button>
                        </div>
                    </form>
                </div>

                <!-- Security Settings -->
                <div class="mt-8 p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold mb-4">Security Settings</h2>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                            <input type="password" placeholder="Enter current password" class="p-2 border rounded w-full">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                            <input type="password" placeholder="Enter new password" class="p-2 border rounded w-full">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                            <input type="password" placeholder="Confirm new password" class="p-2 border rounded w-full">
                        </div>
                        <div class="pt-4">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Change Password</button>
                        </div>
                    </form>
                </div>

                <!-- System Information -->
                <div class="mt-8 p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold mb-4">System Information</h2>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">System Version</span>
                            <span class="font-medium">v2.3.1</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Last Updated</span>
                            <span class="font-medium">March 15, 2023</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Database Size</span>
                            <span class="font-medium">245 MB</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">License</span>
                            <span class="font-medium">Premium (Expires: Dec 31, 2023)</span>
                        </div>
                    </div>
                    <div class="mt-6 pt-4 border-t">
                        <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition mr-2">Check for Updates</button>
                        <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">Backup Database</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab switching functionality
        const tabs = {
            busTab: 'busSection',
            routeTab: 'routeSection',
            reportTab: 'reportSection',
            settingsTab: 'settingsSection'
        };

        function switchTab(activeTab) {
            // Hide all sections
            Object.values(tabs).forEach(section => {
                document.getElementById(section).classList.add('hidden');
            });
            
            // Remove active styling from all tabs
            Object.keys(tabs).forEach(tab => {
                document.getElementById(tab).classList.remove('bg-gray-100', 'dark:bg-gray-800');
            });
            
            // Show selected section and style its tab
            document.getElementById(tabs[activeTab]).classList.remove('hidden');
            document.getElementById(activeTab).classList.add('bg-gray-100', 'dark:bg-gray-800');
        }

        // Set up event listeners
        document.getElementById('busTab').addEventListener('click', function(e) {
            e.preventDefault();
            switchTab('busTab');
        });

        document.getElementById('routeTab').addEventListener('click', function(e) {
            e.preventDefault();
            switchTab('routeTab');
        });

        document.getElementById('reportTab').addEventListener('click', function(e) {
            e.preventDefault();
            switchTab('reportTab');
        });

        document.getElementById('settingsTab').addEventListener('click', function(e) {
            e.preventDefault();
            switchTab('settingsTab');
        });

        // Initialize with settings tab active
        switchTab('settingsTab');
    </script>
</body>
</html>