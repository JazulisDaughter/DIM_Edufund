<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth bg-white antialiased">

<head>
    <!-- Meta information for title and description -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<header class="bg-white">
    <div class="container mx-auto flex justify-between items-center py-4">
        <a href="/" class="flex items-center">
            <img src="" alt="Logo" class="h-10 w-auto">
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
                    class="hidden h-8 w-full items-center gap-2 rounded-full bg-white pl-2 pr-3 text-sm text-zinc-500 ring-1 ring-zinc-900/10 transition hover:ring-zinc-900/20 lg:flex">
                    <svg class="h-5 w-5 stroke-current" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12.01 12a4.25 4.25 0 1 0-6.02-6 4.25 4.25 0 0 0 6.02 6Zm0 0 3.24 3.25" />
                    </svg>
                    <kbd class="ml-auto text-2xs text-zinc-400">
                        <form class="group relative flex h-12">
                            <svg class="pointer-events-none absolute left-3 top-0 h-full w-5 stroke-zinc-500"
                                viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12.01 12a4.25 4.25 0 1 0-6.02-6 4.25 4.25 0 0 0 6.02 6Zm0 0 3.24 3.25" />
                            </svg>
                            <input
                                class="flex-auto bg-transparent pl-10 text-zinc-900 outline-none placeholder:text-zinc-500 sm:text-sm pr-4"
                                placeholder="Find something..." />
                        </form>
                </button>
            </div>

            <!-- Search Button (Mobile) -->
            <div class="lg:hidden">
                <button type="button"
                    class="flex h-6 w-6 items-center justify-center rounded-md transition hover:bg-zinc-900/5"
                    aria-label="Find something...">
                    <svg class="h-5 w-5 stroke-zinc-900" viewBox="0 0 20 20" fill="none"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12.01 12a4.25 4.25 0 1 0-6.02-6 4.25 4.25 0 0 0 6.02 6Zm0 0 3.24 3.25" />
                    </svg>
                </button>
            </div>
        </nav>

        <div class="flex items-center space-x-4">
            <a href="/startfundraising" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-500">Start
                Fundraising</a>
            <a href="/signin" class="text-gray-600 hover:text-gray-900">Sign in</a>
        </div>
    </div>
</header>


<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
            <p class="text-base font-semibold leading-7 text-indigo-600">Deploy faster</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Scholarship</h1>
            <div
                class="mt-10 grid max-w-xl grid-cols-1 gap-8 text-base leading-7 text-gray-700 lg:max-w-none lg:grid-cols-2">
                <div>
                    <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed
                        amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus
                        varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus
                        enim. Mattis mauris semper sed amet vitae sed turpis id.</p>
                    <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id
                        blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris
                        varius vulputate et ultrices hac adipiscing egestas.</p>
                </div>
                <div>
                    <p>Erat pellentesque dictumst ligula porttitor risus eget et eget. Ultricies tellus felis id
                        dignissim eget. Est augue maecenas risus nulla ultrices congue nunc tortor.</p>
                    <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et. Id
                        blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel. Mauris
                        varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor et ut. Ac lorem
                        vel integer orci.</p>
                </div>
            </div>
            <div class="mt-10 flex">
                <a href="#"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                    started</a>
            </div>
        </div>
    </div>
    <div class="relative overflow-hidden pt-16 lg:pt-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <img class="mb-[-12%] rounded-xl shadow-2xl ring-1 ring-gray-900/10"
                src="https://tailwindui.com/img/component-images/project-app-screenshot.png" alt="">
            <div class="relative" aria-hidden="true">
                <div class="absolute -inset-x-20 bottom-0 bg-gradient-to-t from-white pt-[7%]"></div>
            </div>
        </div>
    </div>
</div>



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
                                <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">School
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
                                <a href="/faq" class="text-sm leading-6 text-gray-600 hover:text-gray-900">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">About</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="/aboutus" class="text-sm leading-6 text-gray-600 hover:text-gray-900">About
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
                <a href="https://www.instagram.com/abigaillregina/" class="text-gray-400 hover:text-gray-500">
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
            <p class="mt-8 text-xs leading-5 text-gray-500 md:order-1 md:mt-0">&copy; 2020 EduFund,
                Inc.
                All
                rights reserved.</p>
        </div>
    </div>
</footer>
</div>
</body>

</html>
