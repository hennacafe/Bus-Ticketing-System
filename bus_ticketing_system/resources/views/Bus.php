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
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Bus-manage">Bus Manage</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Route-Manage">Route Manage</a>
                <a id="reportTab" class="flex items-center px-4 py-2 mt-5 bg-gray-100 rounded-md dark:bg-gray-800 dark:text-gray-200" href="#">Reports</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Settings">Settings</a>
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

            <!-- Reports Section (default visible) -->
            <div id="reportSection">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold">Bus Performance Reports</h1>
                    <div class="flex space-x-4">
                        <select class="p-2 border rounded">
                            <option>Last 7 Days</option>
                            <option>Last 30 Days</option>
                            <option>This Month</option>
                            <option>Last Month</option>
                            <option>Custom Range</option>
                        </select>
                        <button class="px-4 py-2 bg-blue-500 text-white rounded">Export</button>
                    </div>
                </div>

                <!-- Summary Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-700">Total Earnings</h3>
                        <p class="text-3xl font-bold mt-2 text-green-600">₱103,030</p>
                        <p class="text-sm text-gray-500 mt-1">+12% from last period</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-700">Total Trips</h3>
                        <p class="text-3xl font-bold mt-2">142</p>
                        <p class="text-sm text-gray-500 mt-1">+8% from last period</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-700">Average Occupancy</h3>
                        <p class="text-3xl font-bold mt-2">78%</p>
                        <p class="text-sm text-gray-500 mt-1">+5% from last period</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-700">Top Performing Bus</h3>
                        <p class="text-xl font-bold mt-2">DL-1002</p>
                        <p class="text-sm text-gray-500 mt-1">₱3,450 earnings</p>
                    </div>
                </div>

                <!-- Detailed Bus Reports -->
                <div class="mt-8 p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold mb-4">Bus Performance Details</h2>
                    <table class="w-full mt-4 border">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="p-2 border">Bus No.</th>
                                <th class="p-2 border">Driver</th>
                                <th class="p-2 border">Capacity</th>
                                <th class="p-2 border">Trips Completed</th>
                                <th class="p-2 border">Avg. Occupancy</th>
                                <th class="p-2 border">Total Earnings</th>
                                <th class="p-2 border">Earnings per Trip</th>
                                <th class="p-2 border">Performance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="p-2 border font-medium">DL-1001</td>
                                <td class="p-2 border">John Smith</td>
                                <td class="p-2 border">50</td>
                                <td class="p-2 border">24</td>
                                <td class="p-2 border">82%</td>
                                <td class="p-2 border text-green-600 font-medium">₱33,120</td>
                                <td class="p-2 border">₱130</td>
                                <td class="p-2 border">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Excellent</span>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="p-2 border font-medium">DL-1002</td>
                                <td class="p-2 border">Sarah Johnson</td>
                                <td class="p-2 border">40</td>
                                <td class="p-2 border">28</td>
                                <td class="p-2 border">85%</td>
                                <td class="p-2 border text-green-600 font-medium">₱43,450</td>
                                <td class="p-2 border">₱123</td>
                                <td class="p-2 border">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Excellent</span>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="p-2 border font-medium">DL-1003</td>
                                <td class="p-2 border">Michael Brown</td>
                                <td class="p-2 border">35</td>
                                <td class="p-2 border">20</td>
                                <td class="p-2 border">72%</td>
                                <td class="p-2 border text-green-600 font-medium">₱12,150</td>
                                <td class="p-2 border">₱108</td>
                                <td class="p-2 border">
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Good</span>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="p-2 border font-medium">DL-1004</td>
                                <td class="p-2 border">Robert Wilson</td>
                                <td class="p-2 border">50</td>
                                <td class="p-2 border">18</td>
                                <td class="p-2 border">65%</td>
                                <td class="p-2 border text-green-600 font-medium">₱10,890</td>
                                <td class="p-2 border">₱105</td>
                                <td class="p-2 border">
                                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Average</span>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="p-2 border font-medium">DL-1005</td>
                                <td class="p-2 border">Emily Davis</td>
                                <td class="p-2 border">40</td>
                                <td class="p-2 border">15</td>
                                <td class="p-2 border">58%</td>
                                <td class="p-2 border text-green-600 font-medium">₱3,420</td>
                                <td class="p-2 border">₱95</td>
                                <td class="p-2 border">
                                    <span class="px-2 py-1 bg-orange-100 text-orange-800 rounded-full text-xs">Needs Improvement</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Earnings Chart -->
                <div class="mt-8 p-6 bg-white rounded-lg shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-bold">Earnings Overview</h2>
                        <select class="p-2 border rounded">
                            <option>By Bus</option>
                            <option>By Route</option>
                            <option>By Driver</option>
                        </select>
                    </div>
                    <div class="border rounded-lg p-4 h-64 bg-gray-50 flex items-center justify-center">
                        <p class="text-gray-500">Earnings chart visualization would appear here</p>
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
            reportTab: 'reportSection'
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

        // Initialize with reports tab active
        switchTab('reportTab');
    </script>
</body>
</html>