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
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Dashboard1">Dashboard</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Bus-manage">Bus Manage</a>
                <a id="routeTab" class="flex items-center px-4 py-2 mt-5 bg-gray-100 rounded-md dark:bg-gray-800 dark:text-gray-200" href="#">Route Manage</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Bus">Report</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Settings">Settings</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-10 overflow-auto">
            <!-- Route Management Section (default visible) -->
            <div id="routeSection">
                <h1 class="text-2xl font-bold">Manage Routes</h1>
                
                <!-- Add Route Form -->
                <div class="mt-6 p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold">Add New Route</h2>
                    <form id="routeForm" class="mt-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <input type="text" id="startCity" placeholder="Start City" class="p-2 border rounded w-full" required>
                            <input type="text" id="endCity" placeholder="End City" class="p-2 border rounded w-full" required>
                            <input type="number" id="distance" placeholder="Distance (km)" class="p-2 border rounded w-full" required>
                            <input type="number" id="time" placeholder="Estimated Time (hours)" class="p-2 border rounded w-full" required>
                            <input type="number" id="fare" placeholder="Fare (USD)" class="p-2 border rounded w-full" required>
                            <select id="status" class="p-2 border rounded w-full" required>
                                <option value="">Select Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add Route</button>
                    </form>
                </div>

                <!-- Route List Table -->
                <div id="routeTable" class="mt-6 p-6 bg-white rounded-lg shadow-md">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-bold">Route List</h2>
                        <button id="refreshTable" class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                            Refresh
                        </button>
                    </div>
                    <table class="w-full mt-4 border">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="p-2 border">Route ID</th>
                                <th class="p-2 border">From</th>
                                <th class="p-2 border">To</th>
                                <th class="p-2 border">Distance</th>
                                <th class="p-2 border">Time</th>
                                <th class="p-2 border">Fare</th>
                                <th class="p-2 border">Status</th>
                                <th class="p-2 border">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="routeTableBody">
                            <!-- Sample data will be inserted here by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sample route data
        let routes = [
            {
                id: 1,
                start: "City A",
                end: "City B",
                distance: "120 km",
                time: "2.5 hrs",
                fare: "$15",
                status: "active"
            },
            {
                id: 2,
                start: "City A",
                end: "City C",
                distance: "180 km",
                time: "3.5 hrs",
                fare: "$20",
                status: "active"
            },
            {
                id: 3,
                start: "City B",
                end: "City C",
                distance: "90 km",
                time: "1.5 hrs",
                fare: "$12",
                status: "inactive"
            }
        ];

        // Function to render the route table
        function renderRouteTable() {
            const tableBody = document.getElementById('routeTableBody');
            tableBody.innerHTML = '';
            
            routes.forEach(route => {
                const row = document.createElement('tr');
                row.className = 'text-center';
                row.innerHTML = `
                    <td class="p-2 border">${route.id}</td>
                    <td class="p-2 border">${route.start}</td>
                    <td class="p-2 border">${route.end}</td>
                    <td class="p-2 border">${route.distance}</td>
                    <td class="p-2 border">${route.time}</td>
                    <td class="p-2 border">${route.fare}</td>
                    <td class="p-2 border">
                        <span class="px-2 py-1 ${route.status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'} rounded-full text-xs">
                            ${route.status === 'active' ? 'Active' : 'Inactive'}
                        </span>
                    </td>
                    <td class="p-2 border">
                        <button class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</button>
                        <button class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 ml-2" onclick="deleteRoute(${route.id})">Delete</button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Function to add a new route
        function addRoute(event) {
            event.preventDefault();
            
            const startCity = document.getElementById('startCity').value;
            const endCity = document.getElementById('endCity').value;
            const distance = document.getElementById('distance').value;
            const time = document.getElementById('time').value;
            const fare = document.getElementById('fare').value;
            const status = document.getElementById('status').value;
            
            if (!startCity || !endCity || !distance || !time || !fare || !status) {
                alert('Please fill in all fields');
                return;
            }
            
            const newRoute = {
                id: routes.length + 1,
                start: startCity,
                end: endCity,
                distance: `${distance} km`,
                time: `${time} hrs`,
                fare: `$${fare}`,
                status: status
            };
            
            routes.push(newRoute);
            renderRouteTable();
            
            // Reset the form
            document.getElementById('routeForm').reset();
            
            // Scroll to the table
            document.getElementById('routeTable').scrollIntoView({ behavior: 'smooth' });
        }

        // Function to delete a route
        function deleteRoute(id) {
            if (confirm('Are you sure you want to delete this route?')) {
                routes = routes.filter(route => route.id !== id);
                renderRouteTable();
            }
        }

        // Event listeners
        document.getElementById('routeForm').addEventListener('submit', addRoute);
        document.getElementById('refreshTable').addEventListener('click', renderRouteTable);

        // Initialize the table on page load
        document.addEventListener('DOMContentLoaded', renderRouteTable);
    </script>
</body>
</html>