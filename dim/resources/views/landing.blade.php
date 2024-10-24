<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth bg-white antialiased">

<head>
    <!-- Meta information for title and description -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg-white">
        <div class="bg-white">
            <!-- Header -->

            <header class="absolute inset-x-0 top-0 z-50">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5 -">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                </div>
                <header>

                    <div class="container mx-auto flex justify-between items-center py-4">
                        <a href="/" class="flex items-center">
                            <img src="" alt="Logo" class="h-10 w-auto pl-10">
                            <span class="ml-2 text-xl font-semibold text-gray-900">EduFund</span>
                        </a>

                        <nav class="hidden md:flex space-x-6">
                            <a href="/startfundraising"
                                class="inline-block rounded-lg px-2 py-1 text-sm text-slate-700 hover:bg-slate-100 hover:text-slate-900">
                                Browse Fundraiser
                            </a>
                            <a href="/howitworks"
                                class="inline-block rounded-lg px-2 py-1 text-sm text-slate-700 hover:bg-slate-100 hover:text-slate-900">
                                How It Works
                            </a>
                            <!-- Search Button (Desktop) -->
                            <div class="hidden lg:block lg:max-w-md lg:flex-auto">
                                <button type="button"
                                    class="hidden h-8 w-full items-center gap-2 rounded-full bg-white pl-2 pr-3 text-sm text-zinc-500 ring-1 ring-zinc-900/10 transition hover:ring-zinc-900/20 lg:flex dark:bg-white/5 dark:text-zinc-400 dark:ring-inset dark:ring-white/10 dark:hover:ring-white/20">
                                    <kbd class="ml-auto text-2xs text-zinc-400 dark:text-zinc-500">
                                        <form class="group relative flex h-12">
                                            <svg class="pointer-events-none absolute left-3 top-0 h-full w-5 stroke-zinc-500"
                                                viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12.01 12a4.25 4.25 0 1 0-6.02-6 4.25 4.25 0 0 0 6.02 6Zm0 0 3.24 3.25" />
                                            </svg>
                                            <input
                                                class="flex-auto bg-transparent pl-10 text-zinc-900 outline-none placeholder:text-zinc-500 sm:text-sm dark:text-white pr-4"
                                                placeholder="Find something..." />
                                        </form>
                                </button>
                            </div>
                            <!-- Search Button (Mobile) -->
                            <div class="lg:hidden">
                                <button type="button"
                                    class="flex h-6 w-6 items-center justify-center rounded-md transition hover:bg-zinc-900/5 dark:hover:bg-white/5"
                                    aria-label="Find something...">
                                    <svg class="h-5 w-5 stroke-zinc-900 dark:stroke-white" viewBox="0 0 20 20"
                                        fill="none" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.01 12a4.25 4.25 0 1 0-6.02-6 4.25 4.25 0 0 0 6.02 6Zm0 0 3.24 3.25" />
                                    </svg>
                                </button>
                            </div>
                        </nav>

                        <div class="flex items-center space-x-4">
                            <a href="/startfundraising"
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Start
                                Fundraising</a>
                            <a href="/signin" class="text-gray-600 hover:text-gray-900 pr-10">Sign in</a>
                        </div>
                    </div>
                </header>
                <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                    <div class="flex lg:hidden">
                        <button type="button"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </nav>
                <!-- Mobile menu, show/hide based on menu open state. -->
                <div class="lg:hidden" role="dialog" aria-modal="true">
                    <!-- Background backdrop, show/hide based on slide-over state. -->
                    <div class="fixed inset-0 z-50"></div>
                    <div
                        class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                        <div class="flex items-center justify-between">
                            <a href="#" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                    alt="">
                            </a>
                            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                        </div>
                    </div>
                </div>
            </header>

            <main class="isolate">
                <!-- Hero section -->
                <div class="relative pt-14">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                        aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <div class="py-24 sm:py-32">
                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                            <div class="mx-auto max-w-2xl text-center">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Nurture Young
                                    Minds Shape a Better Tomorrow</h1>
                                <p class="mt-6 text-lg leading-8 text-gray-600">Igniting Minds, Brighter Futures</p>
                                <div class="mt-10 flex items-center justify-center gap-x-6">
                                    <a href="/donate"
                                        class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Get
                                        started</a>
                                    <a href="/howitworks" class="text-sm font-semibold leading-6 text-gray-900">Learn
                                        more
                                        <span aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                        aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="py-24 sm:pt-48">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-base font-semibold leading-7 text-blue-600">Fundraise</h2>
                <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Trending Fundraise</p>
            </div>
            <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-600">Invest in the next
                generation's story.</p>
            <div
                class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <div
                    class="flex flex-col justify-between rounded-3xl bg-white p-20 ring-1 ring-gray-200 lg:mt-8  xl:p-10">
                    <div>
                        <!-- Image Section -->
                        <img src="https://images.ctfassets.net/c2js6hi58pvj/1zQl8Raf3a9YJJZIeKY3Y4/5fddea3158f0b1cd3a45b89e4472116d/Indonesia_5.jpg"
                            alt="STEM Education" class="w-full h-auto rounded-t-3xl object-cover">

                        <!-- Title and Description -->
                        <div class="flex items-center justify-between gap-x-4 mt-4">
                            <h3 id="tier-freelancer" class="text-lg font-semibold leading-8 text-gray-900">Fund STEM
                                Education</h3>
                        </div>
                        <p class="mt-4 text-sm leading-6 text-gray-600">Support STEM (Science, Technology, Engineering,
                            and Mathematics)
                            programs to equip students with valuable skills for the future.</p>
                    </div>
                    <div>
                        <p class="mt-6 flex items-baseline gap-x-1">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">Rp 11.020.000</span>
                            <span class="text-sm font-semibold leading-6 text-gray-600">/29.000.000</span>
                        </p>
                        <h4 class="sr-only">Status</h4>
                        <div class="mt-6" aria-hidden="true">
                            <div class="overflow-hidden rounded-full bg-gray-200">
                                <div class="h-2 rounded-full bg-blue-600" style="width: 37.5%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-6 text-gray-600">38% of goal</p>
                        </div>
                    </div>
                    <a href="/campaigndetails" aria-describedby="tier-freelancer"
                        class="mt-8 block rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Details</a>
                </div>

                <div
                    class="flex flex-col justify-between rounded-3xl bg-white p-20 ring-1 ring-gray-200 lg:mt-8  xl:p-10">
                    <div>
                        <!-- Image Section -->
                        <img src="https://images.ctfassets.net/c2js6hi58pvj/1zQl8Raf3a9YJJZIeKY3Y4/5fddea3158f0b1cd3a45b89e4472116d/Indonesia_5.jpg"
                            alt="STEM Education" class="w-full h-auto rounded-t-3xl object-cover">

                        <!-- Title and Description -->
                        <div class="flex items-center justify-between gap-x-4 mt-4">
                            <h3 id="tier-freelancer" class="text-lg font-semibold leading-8 text-gray-900">Fund STEM
                                Education</h3>
                        </div>
                        <p class="mt-4 text-sm leading-6 text-gray-600">Support STEM (Science, Technology, Engineering,
                            and Mathematics)
                            programs to equip students with valuable skills for the future.</p>
                    </div>
                    <div>
                        <p class="mt-6 flex items-baseline gap-x-1">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">Rp 11.020.000</span>
                            <span class="text-sm font-semibold leading-6 text-gray-600">/29.000.000</span>
                        </p>
                        <h4 class="sr-only">Status</h4>
                        <div class="mt-6" aria-hidden="true">
                            <div class="overflow-hidden rounded-full bg-gray-200">
                                <div class="h-2 rounded-full bg-blue-600" style="width: 37.5%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-6 text-gray-600">38% of goal</p>
                        </div>
                    </div>
                    <a href="/campaigndetails" aria-describedby="tier-freelancer"
                        class="mt-8 block rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Details</a>
                </div>

                <div
                    class="flex flex-col justify-between rounded-3xl bg-white p-20 ring-1 ring-gray-200 lg:mt-8  xl:p-10">
                    <div>
                        <!-- Image Section -->
                        <img src="https://images.ctfassets.net/c2js6hi58pvj/1zQl8Raf3a9YJJZIeKY3Y4/5fddea3158f0b1cd3a45b89e4472116d/Indonesia_5.jpg"
                            alt="STEM Education" class="w-full h-auto rounded-t-3xl object-cover">

                        <!-- Title and Description -->
                        <div class="flex items-center justify-between gap-x-4 mt-4">
                            <h3 id="tier-freelancer" class="text-lg font-semibold leading-8 text-gray-900">Fund STEM
                                Education</h3>
                        </div>
                        <p class="mt-4 text-sm leading-6 text-gray-600">Support STEM (Science, Technology, Engineering,
                            and Mathematics)
                            programs to equip students with valuable skills for the future.</p>
                    </div>
                    <div>
                        <p class="mt-6 flex items-baseline gap-x-1">
                            <span class="text-4xl font-bold tracking-tight text-gray-900">Rp 11.020.000</span>
                            <span class="text-sm font-semibold leading-6 text-gray-600">/29.000.000</span>
                        </p>
                        <h4 class="sr-only">Status</h4>
                        <div class="mt-6" aria-hidden="true">
                            <div class="overflow-hidden rounded-full bg-gray-200">
                                <div class="h-2 rounded-full bg-blue-600" style="width: 37.5%"></div>
                            </div>
                            <p class="mt-4 text-sm leading-6 text-gray-600">38% of goal</p>
                        </div>
                    </div>
                    <a href="/campaigndetails" aria-describedby="tier-freelancer"
                        class="mt-8 block rounded-md bg-blue-600 px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Details</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="bg-white py-24 md:py-32">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-5">
            <ul role="list" class="-mt-12 space-y-12 divide-y divide-gray-200 xl:col-span-3">
                <li class="flex flex-col gap-10 pt-12 sm:flex-row">
                    <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover"
                        src="https://dpsmisdoha.com/DPSDoha/userspace/username/admin/DynamicFolder/DPS-MIS%20Facilities/Libraries/Library_img4.jpg"
                        alt="">
                    <div class="max-w-xl flex-auto">
                        <h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900">Elementary
                            School in Rengasdengklok Launches Reading Incentives Program</h3>
                        <p class="text-base leading-7 text-gray-600">Program</p>
                        <p class="mt-6 text-base leading-7 text-gray-600">SEK International School is seeking donations
                            to support its reading
                            incentive program. Join the cause and help encourage students to develop a love of books.
                        </p>
                        <ul role="list" class="mt-6 flex gap-x-6">
                            <a href="/news" class="text-sm font-semibold leading-6 text-gray-900">Read
                                more
                                <span aria-hidden="true">→</span></a>
                        </ul>
                    </div>
                </li>
                <li class="flex flex-col gap-10 pt-12 sm:flex-row">
                    <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover"
                        src="https://pict.sindonews.net/dyn/620/pena/news/2021/09/07/212/533858/keren-siswa-madrasah-raih-medali-indonesian-youth-robot-competition-di-korea-fsz.jpg"
                        alt="">
                    <div class="max-w-xl flex-auto">
                        <h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900">Local High School
                            Launches Robotic Competition</h3>
                        <p class="text-base leading-7 text-gray-600">Competition</p>
                        <p class="mt-6 text-base leading-7 text-gray-600">Al-Qohol is seeking donations to support its
                            inaugural robotics competition, designed to inspire students in STEM. Teams will compete to
                            design, build, and program robots. </p>
                        <ul role="list" class="mt-6 flex gap-x-6">
                            <a href="/news" class="text-sm font-semibold leading-6 text-gray-900">Read
                                more
                                <span aria-hidden="true">→</span></a>
                        </ul>
                    </div>
                </li>

                <li class="flex flex-col gap-10 pt-12 sm:flex-row">
                    <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover"
                        src="https://www.kids-world-travel-guide.com/images/xindonesia_schoolkids_Casa_nayafana_shutterstock.jpg.pagespeed.ic.5dM0Ybq2gd.jpg"
                        alt="">
                    <div class="max-w-xl flex-auto">
                        <h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900">Local Student Launch
                            Fundraising Campaign to Support STEM Education</h3>
                        <p class="text-base leading-7 text-gray-600">Education</p>
                        <p class="mt-6 text-base leading-7 text-gray-600">Bambang Abdullah, a 7th grader student at
                            Palma Secondary School is fundraising to support STEM education in the community. Join the
                            cause and help provide educational resources to students in need</p>
                        <ul role="list" class="mt-6 flex gap-x-6">
                            <a href="/news" class="text-sm font-semibold leading-6 text-gray-900">Read
                                more
                                <span aria-hidden="true">→</span></a>
                        </ul>
                    </div>
        </div>



        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
</body>

<section id="secondary-features" aria-label="Features for simplifying everyday business tasks"
    class="pb-14 pt-20 sm:pb-20 sm:pt-32 lg:pb-32">
    <div class="container mx-auto max-w-2xl md:text-center">
        <h2 class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">
            Why Us?
        </h2>
        <p class="mt-4 text-lg tracking-tight text-slate-700">
            Because you’d probably be a little confused if we suggested you complicate your everyday business tasks
            instead.
        </p>
    </div>

    <!-- Mobile Features -->
    <div class="-mx-4 mt-20 flex flex-col gap-y-10 overflow-hidden px-4 sm:-mx-6 sm:px-6 lg:hidden">
        <!-- Reporting Feature -->
        <div>
            <div class="mx-auto max-w-2xl">
                <div class="w-9 rounded-lg bg-blue-600">
                    <svg aria-hidden="true" class="h-9 w-9" fill="none">
                        <!-- Your SVG icon for Reporting goes here -->
                    </svg>
                </div>
                <h3 class="mt-6 text-sm font-medium text-blue-600">Clear Mission and Vision</h3>
                <p class="mt-2 font-display text-xl text-slate-900">
                    Our platform is dedicated to bridging the gap between those in need and those who want to make a
                    difference. We believe that every child deserves the opportunity to pursue their education,
                    regardless of their financial circumstances. Our mission is to create a sustainable and transparent
                    ecosystem that empowers children to reach their full potential.
                </p>
                <p class="mt-4 text-sm text-slate-600">
                    We talked about reporting in the section above but we needed three items here, so mentioning it one
                    more time for posterity.
                </p>
            </div>
            <div class="relative mt-10 pb-10">
                <div class="absolute -inset-x-4 bottom-0 top-8 bg-slate-200 sm:-inset-x-6"></div>
                <div
                    class="relative mx-auto w-[52.75rem] overflow-hidden rounded-xl bg-white shadow-lg shadow-slate-900/5 ring-1 ring-slate-500/10">
                    <img class="w-full" src="/path/to/profit-loss.png" alt="Profit and Loss Screenshot" />
                </div>
            </div>
        </div>

        <!-- Inventory Feature -->
        <div>
            <div class="mx-auto max-w-2xl">
                <div class="w-9 rounded-lg bg-slate-500">
                    <svg aria-hidden="true" class="h-9 w-9" fill="none">
                        <!-- Your SVG icon for Inventory goes here -->
                    </svg>
                </div>
                <h3 class="mt-6 text-sm font-medium text-slate-600">Trusted Partnerships</h3>
                <p class="mt-2 font-display text-xl text-slate-900">
                    Never lose track of what’s in stock with accurate inventory tracking.
                </p>
                <p class="mt-4 text-sm text-slate-600">
                    We have established strong partnerships with reputable organizations, schools, and local communities
                    to ensure the integrity and effectiveness of our platform. Our partners play a crucial role in
                    verifying the authenticity of donation requests and ensuring that funds are used appropriately.
                </p>
            </div>
            <div class="relative mt-10 pb-10">
                <div class="absolute -inset-x-4 bottom-0 top-8 bg-slate-200 sm:-inset-x-6"></div>
                <div
                    class="relative mx-auto w-[52.75rem] overflow-hidden rounded-xl bg-white shadow-lg shadow-slate-900/5 ring-1 ring-slate-500/10">
                    <img class="w-full" src="/path/to/inventory.png" alt="Inventory Screenshot" />
                </div>
            </div>
        </div>

        <!-- Contacts Feature -->
        <div>
            <div class="mx-auto max-w-2xl">
                <div class="w-9 rounded-lg bg-slate-500">
                    <svg aria-hidden="true" class="h-9 w-9" fill="none">
                        <!-- Your SVG icon for Contacts goes here -->
                    </svg>
                </div>
                <h3 class="mt-6 text-sm font-medium text-slate-600">Committed to Transparency</h3>
                <p class="mt-2 font-display text-xl text-slate-900">
                    Organize all of your contacts, service providers, and invoices in one place.
                </p>
                <p class="mt-4 text-sm text-slate-600">
                    Transparency is a core value of our platform. We are committed to providing clear information about
                    our operations, financial practices, and the impact of our initiatives. Donors can track the
                    progress of their contributions and have confidence that their funds are being used to make a real
                    difference in the lives of children.
                </p>
            </div>
            <div class="relative mt-10 pb-10">
                <div class="absolute -inset-x-4 bottom-0 top-8 bg-slate-200 sm:-inset-x-6"></div>
                <div
                    class="relative mx-auto w-[52.75rem] overflow-hidden rounded-xl bg-white shadow-lg shadow-slate-900/5 ring-1 ring-slate-500/10">
                    <img class="w-full" src="/path/to/contacts.png" alt="Contacts Screenshot" />
                </div>
            </div>
        </div>
    </div>

    <!-- Desktop Features -->
    <div class="hidden lg:mt-20 lg:block">
        <div class="grid grid-cols-3 gap-x-8 pl-20 pr-20">
            <!-- Reporting Feature -->
            <div class="relative">
                <div class="w-9 rounded-lg bg-blue-600">
                    <svg aria-hidden="true" class="h-9 w-9" fill="none">
                        <!-- Your SVG icon for Reporting goes here -->
                    </svg>
                </div>
                <h3 class="mt-6 text-sm font-medium text-blue-600">Clear Mission and Vision</h3>
                <p class="mt-2 font-display text-xl text-slate-900">
                    Stay on top of things with always up-to-date reporting features.
                </p>
                <p class="mt-4 text-sm text-slate-600">
                    Our platform is dedicated to bridging the gap between those in need and those who want to make a
                    difference. We believe that every child deserves the opportunity to pursue their education,
                    regardless of their financial circumstances. Our mission is to create a sustainable and transparent
                    ecosystem that empowers children to reach their full potential.
                </p>
            </div>

            <!-- Inventory Feature -->
            <div class="relative">
                <div class="w-9 rounded-lg bg-slate-500">
                    <svg aria-hidden="true" class="h-9 w-9" fill="none">
                        <!-- Your SVG icon for Inventory goes here -->
                    </svg>
                </div>
                <h3 class="mt-6 text-sm font-medium text-slate-600">Trusted Partnerships</h3>
                <p class="mt-2 font-display text-xl text-slate-900">
                    Never lose track of what’s in stock with accurate inventory tracking.
                </p>
                <p class="mt-4 text-sm text-slate-600">
                    We have established strong partnerships with reputable organizations, schools, and local communities
                    to ensure the integrity and effectiveness of our platform. Our partners play a crucial role in
                    verifying the authenticity of donation requests and ensuring that funds are used appropriately.
                </p>
            </div>

            <!-- Contacts Feature -->
            <div class="relative">
                <div class="w-9 rounded-lg bg-slate-500">
                    <svg aria-hidden="true" class="h-9 w-9" fill="none">
                        <!-- Your SVG icon for Contacts goes here -->
                    </svg>
                </div>
                <h3 class="mt-6 text-sm font-medium text-slate-600">Committed to Transparency</h3>
                <p class="mt-2 font-display text-xl text-slate-900">
                    Organize all of your contacts, service providers, and invoices in one place.
                </p>
                <p class="mt-4 text-sm text-slate-600">
                    Transparency is a core value of our platform. We are committed to providing clear information about
                    our operations, financial practices, and the impact of our initiatives. Donors can track the
                    progress of their contributions and have confidence that their funds are being used to make a real
                    difference in the lives of children.
                </p>
            </div>
        </div>
    </div>







    {{-- animated numbers --}}

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Animated Number Example</title>
        <style>
            /* Basic styles for the number display */
            .animated-number {
                font-size: 2rem;
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="number-container"
            style="height: 100vh; display: flex; align-items: center; justify-content: center;">
            <span id="animated-number" class="animated-number">0</span>
        </div>

        <script>
            // JavaScript to handle the animation
            const start = 0;
            const end = 100; // Replace with the desired end number
            const decimals = 0; // Number of decimal places

            let isInView = false;

            const animatedNumber = document.getElementById('animated-number');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        isInView = true;
                        animateNumber(start, end, decimals);
                        observer.unobserve(entry.target); // Stop observing once in view
                    }
                });
            }, {
                threshold: 0.5
            });

            observer.observe(animatedNumber); // Start observing the number element

            function animateNumber(start, end, decimals) {
                let current = start;
                const duration = 2000; // Animation duration in ms
                const stepTime = Math.abs(Math.floor(duration / (end - start)));

                const timer = setInterval(() => {
                    current += 1; // Increment number
                    animatedNumber.textContent = current.toFixed(decimals); // Update display
                    if (current >= end) {
                        clearInterval(timer);
                    }
                }, stepTime);
            }
        </script>
    </body>



    <!-- Anonymous Funding Section -->
    <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Anonymous Funding</h2>
            {{-- <p class="mt-6 text-base leading-7 text-gray-600">Diam nunc lacus lacus aliquam turpis enim. Eget hac velit est euismod lacus. Est non placerat nam arcu. Cras purus nibh cursus sit eu in id. Integer vel nibh.</p> --}}
        </div>
        <div
            class="mx-auto mt-16 flex max-w-2xl flex-col gap-8 lg:mx-0 lg:mt-20 lg:max-w-none lg:flex-row lg:items-end">
            <div
                class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-900 p-8 sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">
                <p class="flex-none text-3xl font-bold tracking-tight text-white">$8.9 billion</p>
                <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                    <p class="text-lg font-semibold tracking-tight text-white">We’re proud that our customers have made
                        over $8 billion in total revenue.</p>
                    <p class="mt-2 text-base leading-7 text-gray-400">Eu duis porta aliquam ornare. Elementum eget
                        magna egestas.</p>
                </div>
            </div>
            <div
                class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-900 p-8 sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">
                <p class="flex-none text-3xl font-bold tracking-tight text-white">$8.9 billion</p>
                <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                    <p class="text-lg font-semibold tracking-tight text-white">We’re proud that our customers have made
                        over $8 billion in total revenue.</p>
                    <p class="mt-2 text-base leading-7 text-gray-400">Eu duis porta aliquam ornare. Elementum eget
                        magna egestas.</p>
                </div>
            </div>
            <div
                class="flex flex-col-reverse justify-between gap-x-16 gap-y-8 rounded-2xl bg-gray-900 p-8 sm:flex-row-reverse sm:items-end lg:w-full lg:max-w-sm lg:flex-auto lg:flex-col lg:items-start lg:gap-y-44">
                <p class="flex-none text-3xl font-bold tracking-tight text-white">$8.9 billion</p>
                <div class="sm:w-80 sm:shrink lg:w-auto lg:flex-none">
                    <p class="text-lg font-semibold tracking-tight text-white">We’re proud that our customers have made
                        over $8 billion in total revenue.</p>
                    <p class="mt-2 text-base leading-7 text-gray-400">Eu duis porta aliquam ornare. Elementum eget
                        magna egestas.</p>
                </div>
            </div>
        </div>
    </div>


    

    <!-- Our Partners -->
    <div class="mx-auto mt-32 max-w-7xl sm:mt-40 sm:px-6 lg:px-8">
        <div
            class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
            <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">Our Partners</h2>
            <div
                class="mx-auto mt-20 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-12 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 sm:gap-y-14 lg:max-w-4xl lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/transistor-logo-white.svg" alt="Transistor"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/reform-logo-white.svg" alt="Reform" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal"
                    width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/statamic-logo-white.svg" alt="Statamic"
                    width="158" height="48">
            </div>
            <div class="absolute -top-24 right-0 -z-10 transform-gpu blur-3xl" aria-hidden="true">
                <div class="aspect-[1404/767] w-[87.75rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25"
                    style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                </div>
            </div>
        </div>
    </div>

    <!-- Why Us -->
    {{-- <div class="mt-32 overflow-hidden sm:mt-40">
        <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
                <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">WHY US?</h2>
                    <p class="mt-6 text-xl leading-8 text-gray-600">Quasi est quaerat. Sit molestiae et. Provident ad
                        dolorem occaecati eos iste. Soluta rerum quidem minus ut molestiae velit error quod. Excepturi
                        quidem expedita molestias quas.</p>
                    <p class="mt-6 text-base leading-7 text-gray-600">Anim aute id magna aliqua ad ad non deserunt
                        sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat. Quasi
                        aperiam sit non sit neque reprehenderit.</p>
                </div>
                <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents">
                    <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                        <img src="https://images.unsplash.com/photo-1670272502246-768d249768ca?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&q=80"
                            alt=""
                            class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                    </div>
                    <div
                        class="contents lg:col-span-2 lg:col-end-2 lg:ml-auto lg:flex lg:w-[37rem] lg:items-start lg:justify-end lg:gap-x-8">
                        <div class="order-first flex w-64 flex-none justify-end self-end lg:w-auto">
                            <img src="https://images.unsplash.com/photo-1605656816944-971cd5c1407f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80"
                                alt=""
                                class="aspect-[4/3] w-[24rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                        </div>
                        <div class="flex w-96 flex-auto justify-end lg:w-auto lg:flex-none">
                            <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1152&h=842&q=80"
                                alt=""
                                class="aspect-[7/5] w-[37rem] max-w-none flex-none rounded-2xl bg-gray-50 object-cover">
                        </div>
                        <div class="hidden sm:block sm:w-0 sm:flex-auto lg:w-auto lg:flex-none">
                            <img src="https://images.unsplash.com/photo-1612872087720-bb876e2e67d1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=768&h=604&q=80"
                                alt=""
                                class="aspect-[4/3] w-[24rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <!-- Footer -->
    <footer class="mt-32 sm:mt-40" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl px-6 pb-8 lg:px-8">
            <div class="border-t border-gray-900/10 pt-20 xl:grid xl:grid-cols-200 xl:gap-8">
                <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Solutions</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">School
                                        Fundraising</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Resources</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="/news" class="text-sm leading-6 text-gray-600 hover:text-gray-900">News
                                        That Matters</a>
                                </li>
                                <li>
                                    <a href="/faq"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">About</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="/aboutus"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">About
                                        EduFund</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                            <ul role="list" class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Claim</a>
                                </li>
                                <li>
                                    <a href="/privacypolicy"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                                </li>
                                <li>
                                    <a href="/tnc"
                                        class="text-sm leading-6 text-gray-600 hover:text-gray-900">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div
                class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 md:flex md:items-center md:justify-between lg:mt-24">
                <div class="flex space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">X</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">YouTube</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-xs leading-5 text-gray-500 md:order-1 md:mt-0">&copy; 2020 EduFund, Inc. All
                    rights reserved.</p>
            </div>
        </div>
    </footer>
    </div>

</html>

</html>
