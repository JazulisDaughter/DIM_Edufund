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
        <div
            class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            
            <div class="lg:pr-4">
                <div
                    class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-9 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                    <div class="absolute inset-0  mix-blend-multiply"></div>
                    <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl"
                        aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-40"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <img src="https://student-activity.binus.ac.id/bssc/wp-content/uploads/sites/38/2021/07/1.jpg" alt=""
                        class="h-auto w-auto">
                    <figure class="relative isolate">
                        <svg viewBox="0 0 162 128" fill="none" aria-hidden="true"
                            class="absolute -left-2 -top-4 -z-10 h-32 stroke-white/20">
                            <path id="0ef284b8-28c2-426e-9442-8655d393522e"
                                d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                            <use href="#0ef284b8-28c2-426e-9442-8655d393522e" x="86" />
                        </svg>
                        <blockquote class="mt-6 text-xl font-semibold leading-8 text-white">
                            <p>“Thanks to EdFund, I’m not just learning; I’m reaching for the stars!”</p>
                        </blockquote>
                        <figcaption class="mt-6 text-sm leading-6 text-gray-300"><strong
                                class="font-semibold text-white">Surti Liow,</strong> CEO at Edufund</figcaption>
                    </figure>
                </div>
            </div>
            <div>
                <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                    <p class="text-base font-semibold leading-7 text-blue-600">Company values</p>
                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">How It Works</h1>
                    <div class="max-w-xl">
                        <h1 class="text-3xl font-semibold mt-8">Create a Campaign</h1>
                        <p class="mt-6">

                            Embark on your fundraising journey by establishing a campaign that aligns with your passions
                            and goals. Whether you're an individual, a group, or a corporation, you have the power to
                            create a meaningful impact by supporting children in need. Our platform provides a
                            user-friendly environment for you to create and manage your campaign, ensuring a seamless
                            experience from start to finish.
                        </p>
                        <h1 class="text-3xl font-semibold mt-8">Set Your Goals</h1>
                        <p class="mt-8">

                            Define your specific fundraising target and the timeframe for your campaign. Setting clear
                            objectives will help you stay focused, motivated, and accountable throughout the process.
                            Consider the needs of the children you aim to support and the resources required to achieve
                            your goals. By setting realistic expectations, you'll increase your chances of success and
                            maximize the impact of your efforts.</p>
                        <h1 class="text-3xl font-semibold mt-8">Share Your Story</h1>
                        <p class="mt-8">

                            Craft a compelling narrative that resonates with your audience and inspires them to donate.
                            Share personal stories, highlight the challenges faced by the children you're supporting,
                            and emphasize the positive outcomes that your campaign can achieve. A well-crafted story
                            will evoke emotions and create a strong connection with potential donors, encouraging them
                            to contribute to your cause.</p>
                        <h1 class="text-3xl font-semibold mt-8">Collect Donations</h1>
                        <p class="mt-8">

                            Our secure and user-friendly platform makes it easy for donors to contribute to your
                            campaign. We offer multiple payment options to accommodate different preferences and ensure
                            a convenient and secure donation process. By providing a seamless experience for donors,
                            you'll encourage more people to participate and support your cause.</p>
                        <h1 class="text-3xl font-semibold mt-8">Track Progress</h1>
                        <p class="mt-8">

                            Monitor your campaign's progress and keep your supporters updated on your achievements.
                            Sharing updates helps maintain momentum, encourages continued support, and demonstrates the
                            impact of your efforts. Utilize tracking tools to measure your progress and identify areas
                            for improvement. By providing transparency and accountability, you'll build trust with
                            donors and strengthen your campaign's credibility.</p>
                        <h1 class="text-3xl font-semibold mt-8">Make a Difference</h1>
                        <p class="mt-8">
                            Celebrate your success and the positive impact you've made. Your efforts will contribute to
                            empowering children's futures and creating a brighter world. By supporting education and
                            providing opportunities for children in need, you're investing in their potential and
                            helping to build a more equitable society. Reflect on your achievements and the lives you've
                            touched, and continue to inspire others to join you in making a difference.</p>
                    </div>
                </div>
                <dl class="mt-10 grid grid-cols-2 gap-8 border-t border-gray-900/10 pt-10 sm:grid-cols-4">
                    <div>
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Founded</dt>
                        <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">2020</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Donors</dt>
                        <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">4,200</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Kids</dt>
                        <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">10,000</dd>
                    </div>
                    <div>
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Raised</dt>
                        <dd class="mt-2 text-3xl font-bold leading-10 tracking-tight text-gray-900">25M</dd>
                    </div>
                </dl>
                <div class="mt-10 flex">
                    <a href="/aboutus" class="text-base font-semibold leading-7 text-blue-600">Learn more about our
                        company <span aria-hidden="true">&rarr;</span></a>
                </div>
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
