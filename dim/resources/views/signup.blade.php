<!DOCTYPE html>
<html lang="en">

{{-- <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold">Sign Up</span>
                <span class="font-light text-gray-400 mb-8">
                    Welcome! Please enter your details
                </span>
                <div class="py-4">
                    <span class="mb-2 text-md">Username</span>
                    <input type="text"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                        name="email" id="email" />
                </div>
                <div class="py-4">
                    <span class="mb-2 text-md">Email</span>
                    <input type="password" name="pass" id="pass"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                </div>
                <div class="py-4">
                    <span class="mb-2 text-md">Password</span>
                    <input type="password" name="pass" id="pass"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                </div>
                <div class="py-4">
                    <span class="mb-2 text-md">Phone Number</span>
                    <input type="password" name="pass" id="pass"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                </div>
                <div class="py-4">
                    <span class="mb-2 text-md">Role</span>
                    <input type="password" name="pass" id="pass"
                        class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                </div>
                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input type="checkbox" name="ch" id="ch" class="mr-2" />
                        <span class="text-md">Remember for 30 days</span>
                    </div>
                    <span class="font-bold text-md">Forgot password</span>
                </div>
                <button
                    class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                    Sign in
                </button>
                <button
                    class="w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-black hover:text-white">
                    <img src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" alt="img" class="w-6 h-6 inline mr-2" />
                    Sign in with Google
                </button>
                <div class="text-center text-gray-400">
                    By signing up, you agree to the Terms of Use and Privacy Policy
                    <span class="font-bold text-black">Sign Up</span>
                </div>
                <div class="text-center text-gray-400">
                    Already have an account?
                    <span class="font-bold text-black">Sign Up</span>
                </div>
            </div>
            <!-- {/* right side */} -->
            <div class="relative">
                <img src="https://www.unicef.org/sites/default/files/styles/hero_tablet/public/UN0837176.jpg.webp?itok=NqgJ3rp_" alt="img"
                    class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover" />
                <!-- text on image  -->
                <div
                    class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block">
                    <span class="text-white text-xl">We've been uesing Untitle to kick"<br />start every new project
                        and can't <br />imagine working without it."
                    </span>
                </div>
            </div>
        </div>

    </div>
</body> --}}

{{-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-50">

    <div class="max-w-md mx-auto py-10">
        <!-- Logo -->
        <div class="flex">
            <a href="/" aria-label="Home">
                <img src="c:\Users\ASUS\Downloads\edufundlogo.png" class="h-10 w-auto" alt="Logo" />
            </a>
        </div>

        <!-- Title -->
        <h2 class="mt-20 text-lg font-semibold text-gray-900">
            Get started for free
        </h2>


        <!-- Sign-up Form -->
        <form action="#" method="POST" class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2">
            <!-- First Name -->
            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">
                    First name
                </label>
                <input type="text" id="first_name" name="first_name" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Last Name -->
            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">
                    Last name
                </label>
                <input type="text" id="last_name" name="last_name" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Email Address -->
            <div class="col-span-full">
                <label for="email" class="block text-sm font-medium text-gray-700">
                    Email address
                </label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Password -->
            <div class="col-span-full">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Password
                </label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Referral Source -->
            <div class="col-span-full">
                <label for="referral_source" class="block text-sm font-medium text-gray-700">
                    How did you hear about us?
                </label>
                <select id="referral_source" name="referral_source"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option>AltaVista search</option>
                    <option>Super Bowl commercial</option>
                    <option>Our route 34 city bus ad</option>
                    <option>The “Never Use This” podcast</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="col-span-full">
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign up &rarr;
                </button>

                <!-- Sign-in Suggestion -->
                <p class="mt-2 text-sm text-gray-700">
                    Already registered?
                    <a href="/signin" class="font-medium text-blue-600 hover:underline">
                        Sign in
                    </a> to your account.
                </p>
            </div>
        </form>
    </div>

</body> --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        /* Custom gradient background for the right panel */
        .bg-gradient-right {
            background: linear-gradient(to right, #ACC5FF, #FFFFFF);
        }
    </style>
</head>

<body class="h-screen flex">

    <!-- Left panel: Form container -->
    <div class="flex flex-col justify-center w-full max-w-md px-8 py-10 bg-white">
        <!-- Logo -->
        <div class="flex mb-8">
            <a href="/" aria-label="Home">
                <img src="/path-to-logo.svg" class="h-10 w-auto" alt="Logo" />
            </a>
        </div>

        <!-- Title -->
        <h2 class="text-lg font-semibold text-gray-900">
            Get started for free
        </h2>

        <!-- Sign-up Form -->
        <form action="#" method="POST" class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2">
            <!-- First Name -->
            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">
                    First name
                </label>
                <input type="text" id="first_name" name="first_name" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Last Name -->
            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">
                    Last name
                </label>
                <input type="text" id="last_name" name="last_name" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

             <!-- Username -->
             <div class="col-span-full">
                <label for="username" class="block text-sm font-medium text-gray-700">
                    Username
                </label>
                <input type="text" id="username" name="username" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Email Address -->
            <div class="col-span-full">
                <label for="email" class="block text-sm font-medium text-gray-700">
                    Email address
                </label>
                <input type="email" id="email" name="email" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Password -->
            <div class="col-span-full">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    Password
                </label>
                <input type="password" id="password" name="password" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

             <!-- Phone Number -->
            
             <div>
                <label for="country_code" class="block text-sm font-medium text-gray-700">
                    Country Code
                </label>
                <select id="country_code" name="country_code"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option>Indonesia (+62)</option>
                    <option>Singapore (+65)</option>
                    <option>Malaysia (+60)</option>
                </select>
            </div>

            <div>
                <label for="phone_number" class="block text-sm font-medium text-gray-700">
                    Phone Number
                </label>
                <input type="text" id="phone_number" name="phone_number" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>

            <!-- Role -->
            <div class="col-span-full">
                <label for="role" class="block text-sm font-medium text-gray-700">
                    Role
                </label>
                <select id="role" name="role"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option>Donator</option>
                    <option>Applicant</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="col-span-full">
                <button type="submit"
                    class="w-full inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign up &rarr;
                </button>
                <!-- Sign-in Suggestion -->
                <p class="mt-2 text-sm text-gray-700">
                    Already registered?
                    <a href="/signin" class="font-medium text-blue-600 hover:underline">
                        Sign in
                    </a> to your account.
                </p>
            </div>
        </form>
    </div>

    <!-- Right panel: Gradient background -->
    <div class="hidden lg:flex flex-1 bg-gradient-right">
    </div>

</body>

</html>
