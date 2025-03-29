<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticketing Dashboard</title>
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
                <a class="flex items-center px-4 py-2 mt-5 text-gray-700 bg-gray-100 rounded-md dark:bg-gray-800 dark:text-gray-200" href="#">Dashboard</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Bus-manage">Bus Manage</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Route-Manage">Route Manage</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Bus">Report</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/Settings">Settings</a>
                <a class="flex items-center px-4 py-2 mt-5 text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
</form>
        <div class="flex-1 p-10 overflow-auto">
            <h1 class="text-2xl font-bold">Bus Ticketing Dashboard</h1>
            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold">Total Buses</h2>
                    <p class="text-2xl font-semibold">120</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold">Bookings Today</h2>
                    <p class="text-2xl font-semibold">350</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold">Active Terminals</h2>
                    <p class="text-2xl font-semibold">15</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
