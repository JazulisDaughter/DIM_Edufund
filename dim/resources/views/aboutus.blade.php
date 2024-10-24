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
                    class="hidden h-8 w-full items-center gap-2 rounded-full bg-white pl-2 pr-3 text-sm text-zinc-500 ring-1 ring-zinc-900/10 transition hover:ring-zinc-900/20 lg:flex dark:bg-white/5 dark:text-zinc-400 dark:ring-inset dark:ring-white/10 dark:hover:ring-white/20">
                    <svg class="h-5 w-5 stroke-current" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12.01 12a4.25 4.25 0 1 0-6.02-6 4.25 4.25 0 0 0 6.02 6Zm0 0 3.24 3.25" />
                    </svg>
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
                    <svg class="h-5 w-5 stroke-zinc-900 dark:stroke-white" viewBox="0 0 20 20" fill="none"
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

<div class="bg-white">
    <!-- Hero section -->
    <div class="relative isolate -z-10">
        <svg class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" />
        </svg>
        <div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48"
            aria-hidden="true">
            <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)">
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
                <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                    <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Invest in Education,
                            Invest in the Future.</h1>
                        <p class="relative mt-6 text-lg leading-8 text-gray-600 sm:max-w-md lg:max-w-none">
                            Our platform is dedicated to empowering children in Indonesia through
                            education. We connect generous donors with deserving children who lack the funds to pursue
                            their
                            academic dreams. Our mission is to bridge the gap between those who can help and those who
                            need it,
                            fostering a brighter future for the next generation.</p>
                    </div>
                    <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                        <div
                            class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                    alt=""
                                    class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                        </div>
                        <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1485217988980-11786ced9454?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                    alt=""
                                    class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80"
                                    alt=""
                                    class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                        </div>
                        <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1670272504528-790c24957dda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=left&w=400&h=528&q=80"
                                    alt=""
                                    class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1670272505284-8faba1c31f7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                    alt=""
                                    class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content section -->
    <div class="mx-auto -mt-12 max-w-7xl px-6 sm:mt-0 lg:px-8 xl:-mt-8">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our mission</h2>
            <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                    <p class="text-xl leading-8 text-gray-600">To empower children in Indonesia to reach their full
                        potential by providing access to quality education. We believe that every child deserves the
                        opportunity to learn and grow, regardless of their circumstances. Education is the key to
                        unlocking a brighter future, and we are committed to ensuring that all children have the chance
                        to achieve their dreams.</p>
                    <div class="mt-10 max-w-xl text-base leading-7 text-gray-700">
                        <p>By providing educational opportunities, we aim to:</p>
                        <p class="mt-10">Equip children with the knowledge and skills they need to thrive in the 21st
                            century. In today's rapidly changing world, education is more important than ever. By
                            providing children with a strong foundation in education, we are equipping them with the
                            tools they need to succeed in their future careers and contribute to society.</p>
                        <p class="mt-10">Build their confidence and self-esteem. Education can have a profound impact
                            on a child's self-worth. By providing children with opportunities to learn and grow, we are
                            helping them to develop a sense of confidence and self-belief. This confidence can have a
                            lasting impact on their lives and their ability to overcome challenges.</p>
                        <p class="mt-10">Foster a love of learning and a lifelong commitment to personal and
                            intellectual growth. Education is not just about acquiring knowledge; it is also about
                            developing a passion for learning and a desire to continue growing and expanding one's
                            horizons. By cultivating a love of learning in children, we are helping them to become
                            lifelong learners who are always seeking new knowledge and experiences.</p>
                        <p class="mt-10">Create a more equitable and just society. Education is a powerful tool for
                            social change. By providing access to education for all children, we are helping to create a
                            more equitable and just society where everyone has the opportunity to succeed. Education can
                            break down barriers of inequality and provide children with the tools they need to overcome
                            adversity and achieve their goals.</p>
                        <p>We are committed to working tirelessly to break down barriers to education and ensure that
                            every child in Indonesia has the chance to realize their full potential. Through our
                            efforts, we hope to create a brighter future for Indonesia and its children.</p>
                    </div>
                </div>
                <div class="lg:flex lg:flex-auto lg:justify-center">
                    <dl class="w-64 space-y-8 xl:w-80">
                        <div class="flex flex-col-reverse gap-y-4">
                            <dt class="text-base leading-7 text-gray-600">Children's education supported</dt>
                            <dd class="text-5xl font-semibold tracking-tight text-gray-900">44 million</dd>
                        </div>
                        <div class="flex flex-col-reverse gap-y-4">
                            <dt class="text-base leading-7 text-gray-600">Raised in total donations</dt>
                            <dd class="text-5xl font-semibold tracking-tight text-gray-900">Rp 119 billion</dd>
                        </div>
                        <div class="flex flex-col-reverse gap-y-4">
                            <dt class="text-base leading-7 text-gray-600">Schools are our partners</dt>
                            <dd class="text-5xl font-semibold tracking-tight text-gray-900">2,000</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Image section -->
    <div class="mt-32 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
            alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
    </div>

    <!-- Values section -->
    <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our values</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">We connect donors and students to support education in
                Indonesia. Our platform helps children pursue their dreams, no matter their financial circumstances.</p>
        </div>
        <dl
            class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div>
                <dt class="font-semibold text-gray-900">Innovation</dt>
                <dd class="mt-1 text-gray-600">We are committed to creativity, experimentation, and continuous
                    improvement. We believe that innovation is essential for staying ahead of the curve and providing
                    exceptional value to our customers. We encourage our team to think outside the box, explore new
                    ideas, and take calculated risks. By fostering a culture of innovation, we can drive growth, improve
                    efficiency, and enhance our competitive advantage.</dd>
            </div>
            <div>
                <dt class="font-semibold text-gray-900">Integrity</dt>
                <dd class="mt-1 text-gray-600">We adhere to the highest ethical standards in all of our dealings.
                    Integrity is a cornerstone of our company culture, and we believe that it is essential for building
                    trust and credibility. We are committed to conducting our business honestly, fairly, and
                    transparently. We expect all of our employees to act with integrity and to uphold the values of our
                    organization.</dd>
            </div>
            <div>
                <dt class="font-semibold text-gray-900">Excellence</dt>
                <dd class="mt-1 text-gray-600">We strive for the highest standards of quality and performance in
                    everything we do. We believe that excellence is not just a goal; it is a way of life. We are
                    committed to delivering exceptional products and services that exceed our customers' expectations.
                    We encourage our team to take pride in their work and to always strive for excellence.</dd>
            </div>
            <div>
                <dt class="font-semibold text-gray-900">Social Responsibility</dt>
                <dd class="mt-1 text-gray-600">We are committed to making a positive impact on society and the
                    environment. We believe that businesses have a responsibility to give back to the communities they
                    serve. We support various social and environmental initiatives and encourage our employees to get
                    involved in volunteer activities. By being a socially responsible company, we can contribute to a
                    better world and create a positive legacy.</dd>
            </div>
            <div>
                <dt class="font-semibold text-gray-900">Accountability</dt>
                <dd class="mt-1 text-gray-600">We take responsibility for our actions and the outcomes of our
                    decisions. We believe that accountability is essential for building trust and credibility. We
                    encourage our team to take ownership of their work and to be accountable for their results. By
                    holding ourselves accountable, we can learn from our mistakes, improve our performance, and build a
                    stronger organization.</dd>
            </div>
            <div>
                <dt class="font-semibold text-gray-900">Resilience</dt>
                <dd class="mt-1 text-gray-600">We believe in the importance of resilience in the face of challenges and
                    setbacks. We encourage our team to develop the resilience necessary to overcome obstacles and
                    persevere in the face of adversity. By fostering a culture of resilience, we can build a stronger
                    and more adaptable organization. </dd>
            </div>
        </dl>
    </div>

    <!-- Team section -->
    <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-48 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Our team</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Our platform connects donors and students to support
                education in Indonesia. We believe every child deserves the chance to learn and achieve their goals.
                Join us in making a difference.</p>
        </div>
        <ul role="list"
            class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
            <li>
                <img class="mx-auto h-24 w-24 rounded-full"
                    src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                    alt="">
                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Michael Foster
                </h3>
                <p class="text-sm leading-6 text-gray-600">Co-Founder / CTO</p>
            </li>
            <li>
                <img class="mx-auto h-24 w-24 rounded-full"
                    src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                    alt="">
                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Michael Foster
                </h3>
                <p class="text-sm leading-6 text-gray-600">Co-Founder / CTO</p>
            </li>
            <li>
                <img class="mx-auto h-24 w-24 rounded-full"
                    src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                    alt="">
                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Michael Foster
                </h3>
                <p class="text-sm leading-6 text-gray-600">Co-Founder / CTO</p>
            </li>
            <li>
                <img class="mx-auto h-24 w-24 rounded-full"
                    src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                    alt="">
                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Michael Foster
                </h3>
                <p class="text-sm leading-6 text-gray-600">Co-Founder / CTO</p>
            </li>
            <li>
                <img class="mx-auto h-24 w-24 rounded-full"
                    src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                    alt="">
                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Michael Foster
                </h3>
                <p class="text-sm leading-6 text-gray-600">Co-Founder / CTO</p>
            </li>
            <li>
                <img class="mx-auto h-24 w-24 rounded-full"
                    src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80"
                    alt="">
                <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Michael Foster
                </h3>
                <p class="text-sm leading-6 text-gray-600">Co-Founder / CTO</p>
            </li>
        </ul>
    </div>
    </main>

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
