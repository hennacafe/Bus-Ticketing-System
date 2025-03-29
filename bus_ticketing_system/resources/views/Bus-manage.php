<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Buses</title>
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
                <a class="flex items-center px-4 py-2 mt-5 bg-gray-100 rounded-md dark:bg-gray-800 dark:text-gray-200" href="#">Bus Manage</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Route-Manage">Route Manage</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Bus">Report</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Settings">Settings</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-10 overflow-auto">
            <h1 class="text-2xl font-bold">Manage Buses</h1>
            
            <!-- Add Bus Form -->
            <div class="mt-6 p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Add New Bus</h2>
                <form id="addBusForm" class="mt-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" id="busName" placeholder="Bus Name" class="p-2 border rounded w-full" required>
                        <input type="text" id="busNumber" placeholder="Bus Number" class="p-2 border rounded w-full" required>
                        <input type="text" id="route" placeholder="Route" class="p-2 border rounded w-full" required>
                        <input type="number" id="seats" placeholder="Seats" class="p-2 border rounded w-full" required>
                    </div>
                    <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Add Bus</button>
                </form>
            </div>

            <!-- Bus List Table -->
            <div class="mt-6 p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-lg font-bold">Bus List</h2>
                <table class="w-full mt-4 border" id="busListTable">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2 border">Bus Name</th>
                            <th class="p-2 border">Bus Number</th>
                            <th class="p-2 border">Route</th>
                            <th class="p-2 border">Seats</th>
                            <th class="p-2 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="busListBody">
                        <!-- Bus entries will be added here dynamically -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('addBusForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Get the values from the input fields
            const busName = document.getElementById('busName').value;
            const busNumber = document.getElementById('busNumber').value;
            const route = document.getElementById('route').value;
            const seats = document.getElementById('seats').value;

            // Create a new row for the bus list
            const newRow = document.createElement('tr');
            newRow.classList.add('text-center');

            newRow.innerHTML = `
                <td class="p-2 border">${busName}</td>
                <td class="p-2 border">${busNumber}</td>
                <td class="p-2 border">${route}</td>
                <td class="p-2 border">${seats}</td>
                <td class="p-2 border">
                    <button class="px-2 py-1 bg-yellow-500 text-white rounded" onclick="editBus(this)">Edit</button>
                    <button class="px-2 py-1 bg-red-500 text-white rounded" onclick="deleteBus(this)">Delete</button>
                </td>
            `;

            // Append the new row to the bus list table body
            document.getElementById('busListBody').appendChild(newRow);

            // Clear the input fields after adding the bus
            document.getElementById('addBusForm').reset();
        });

        // Function to delete a bus row
        function deleteBus(button) {
            const row = button.closest('tr'); // Get the closest row
            row.remove(); // Remove the row from the table
        }

        // Function to edit a bus row (placeholder for future implementation)
        function editBus(button) {
            const row = button.closest('tr'); // Get the closest row
            const busName = row.cells[0].innerText;
            const busNumber = row.cells[1].innerText;
            const route = row.cells[2].innerText;
            const seats = row.cells[3].innerText;

            // Populate the form with the current values
            document.getElementById('busName').value = busName;
            document.getElementById('busNumber').value = busNumber;
            document.getElementById('route').value = route;
            document.getElementById('seats').value = seats;

            // Remove the row from the table
            row.remove();
        }
    </script>
</body>
</html>