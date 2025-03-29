<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Company Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .dark body {
            background-color: #111827;
        }

        .login-container {
            background: white;
            padding: 2.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 28rem;
        }

        .dark .login-container {
            background: #1f2937;
        }

        .company-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .logo-img {
            height: 80px;
            width: auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 600;
            color: #111827;
        }

        .dark h2 {
            color: #f3f4f6;
        }

        .login-btn {
            width: 100%;
            padding: 0.625rem;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 0.375rem;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #2563eb;
        }

        .toggle-dark-mode {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body class="dark:bg-gray-900">
    <button class="toggle-dark-mode" onclick="toggleDarkMode()">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-700 dark:text-gray-300">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773l-1.591-1.591M12 5.25V3m0 0V3m0 0V3m0 0V3m0 0V3m0 0V3" />
        </svg>
    </button>

    <div class="login-container dark:bg-gray-800">
        <div class="company-logo">
            <svg class="logo-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#3b82f6">
                <path d="M400 32H112C85.5 32 64 53.5 64 80v336c0 8.8-7.2 16-16 16h-8c-17.7 0-32 14.3-32 32s14.3 32 32 32h448c17.7 0 32-14.3 32-32s-14.3-32-32-32h-8c-8.8 0-16-7.2-16-16V80c0-26.5-21.5-48-48-48zm16 368V96c0-8.8 7.2-16 16-16s16 7.2 16 16v304h-32zm-288 0V96c0-8.8 7.2-16 16-16s16 7.2 16 16v304h-32zm160 0V96c0-8.8 7.2-16 16-16s16 7.2 16 16v304h-32zM136 96h240c4.4 0 8 3.6 8 8v240c0 4.4-3.6 8-8 8H136c-4.4 0-8-3.6-8-8V104c0-4.4 3.6-8 8-8zm-8 80v64c0 8.8 7.2 16 16 16h224c8.8 0 16-7.2 16-16v-64c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16z"/>
            </svg>
        </div>

        <h2 class="dark:text-white">Create an Account</h2>
        <form action="/signup" method="POST">
            <div>
                <label for="name" class="block text-sm text-gray-500 dark:text-gray-300">Full Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" required class="block w-full py-2.5 text-gray-700 placeholder-gray-400/70 bg-white border border-gray-200 rounded-lg mt-2 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <label for="email" class="block text-sm text-gray-500 dark:text-gray-300">Email Address</label>
                <input type="email" id="email" name="email" placeholder="john@example.com" required class="block w-full py-2.5 text-gray-700 placeholder-gray-400/70 bg-white border border-gray-200 rounded-lg mt-2 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <div class="mt-4">
                <label for="password" class="block text-sm text-gray-500 dark:text-gray-300">Password</label>
                <div class="relative flex items-center mt-2">
                    <button type="button" class="absolute right-0 focus:outline-none rtl:left-0 rtl:right-auto" onclick="togglePasswordVisibility()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mx-4 text-gray-400 transition-colors duration-300 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400">
                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                            <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <input type="password" id="password" name="password" placeholder="********" required class="block w-full py-2.5 text-gray-700 placeholder-gray-400/70 bg-white border border-gray-200 rounded-lg pl-5 pr-11 rtl:pr-5 rtl:pl-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
            </div>
            <button type="submit" class="login-btn mt-6">Sign Up</button>

            <p class="mt-4 text-sm text-center text-gray-600 dark:text-gray-400">
                Already have an account?
                <a href="/" class="text-blue-600 hover:underline dark:text-blue-400">Login here</a>
            </p>
        </form>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }

        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }

        // Check for saved dark mode preference
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
        } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
    </script>
</body>
</html>