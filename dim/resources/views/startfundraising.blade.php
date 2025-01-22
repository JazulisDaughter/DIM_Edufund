<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

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


<div class="mt-16 lg:mt-32">
    <div class="xl:relative">
        <div class="mx-auto max-w-2xl">
            <header class="flex flex-col">
                <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">
                    <!-- Article Title -->
                    Create a Lasting Impact
                </h1>
            </header>
            <div class="space-y-10 divide-y divide-gray-900/10">
                <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                    <div class="px-4 sm:px-0">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so
                            be careful
                            what you share.</p>
                    </div>

                    <form class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                        <div class="px-4 py-6 sm:p-8">
                            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="website"
                                        class="block text-sm font-medium leading-6 text-gray-900">Fundraise Title</label>
                                    <div class="mt-2">
                                        <div
                                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            {{-- <span
                                                class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">http://</span> --}}
                                            <input type="text" name="website" id="website"
                                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                                placeholder="Join Us in Making a Difference">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="about"
                                        class="block text-sm font-medium leading-6 text-gray-900">About</label>
                                    <div class="mt-2">
                                        <textarea id="about" name="about" rows="3"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about
                                        your condition.</p>
                                </div>

                                <div class="col-span-full">
                                    <label for="photo"
                                        class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                                    <div class="mt-2 flex items-center gap-x-3">
                                        {{-- <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg> --}}
                                        <button type="button"
                                            class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="cover-photo"
                                        class="block text-sm font-medium leading-6 text-gray-900">Cover
                                        photo</label>
                                    <div
                                        class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                        <div class="text-center">
                                            {{-- <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg> --}}
                                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                                <label for="file-upload"
                                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file"
                                                        class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="first-name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Set your goal</label>
                                    <div class="mt-2">
                                        <input type="text" goal="goal" id="goal"
                                            autocomplete="given-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder="  Rp. ">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="first-name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Campaign end date</label>
                                    <div class="mt-2">
                                        <input type="text" goal="end" id="end"
                                            autocomplete="given-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder="  dd/mm/yyy ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                            <button type="button"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>
                </div>

                <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3">
                    <div class="px-4 sm:px-0">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive
                            mail.</p>
                    </div>

                    <form class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                        <div class="px-4 py-6 sm:p-8">
                            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="first-name"
                                        class="block text-sm font-medium leading-6 text-gray-900">First
                                        name</label>
                                    <div class="mt-2">
                                        <input type="text" name="first-name" id="first-name"
                                            autocomplete="given-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="last-name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Last
                                        name</label>
                                    <div class="mt-2">
                                        <input type="text" name="last-name" id="last-name"
                                            autocomplete="family-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label for="email"
                                        class="block text-sm font-medium leading-6 text-gray-900">Email
                                        address</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="email" autocomplete="email"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="phone"
                                        class="block text-sm font-medium leading-6 text-gray-900">Country code</label>
                                    <div class="mt-2">
                                        <select id="country" name="country" autocomplete="country-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Indonesia (+62)</option>
                                            <option>Singapore (+65)</option>
                                            <option>Malaysia (+60)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="last-name"
                                        class="block text-sm font-medium leading-6 text-gray-900">Phone number</label>
                                    <div class="mt-2">
                                        <input type="text" name="last-name" id="last-name"
                                            autocomplete="family-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="bank"
                                        class="block text-sm font-medium leading-6 text-gray-900">Bank</label>
                                    <div class="mt-2">
                                        <select id="bank" name="bank" autocomplete="bank"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Bank Mandiri</option>
                                            <option>Bank Central Asia (BCA)</option>
                                            <option>Bank Rakyat Indonesia (BRI)</option>
                                            <option>Bank Negara Indonesia (BNI)</option>
                                            <option>Bank Tabungan Negara (BTN)</option>
                                            <option>Bank Syariah Indonesia (BSI)</option>
                                            <option>CIMB Niaga</option>
                                            <option>OCBC Indonesia</option>
                                            <option>Permata Bank</option>
                                            <option>Bank Danamon</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="accountnumber"
                                        class="block text-sm font-medium leading-6 text-gray-900">Bank account number</label>
                                    <div class="mt-2">
                                        <input type="text" name="account-number" id="account-number"
                                            autocomplete="family-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="country"
                                        class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                                    <div class="mt-2">
                                        <select id="country" name="country" autocomplete="country-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Indonesia</option>
                                            <option>Singapore</option>
                                            <option>Malaysia</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-span-full">
                                    <label for="street-address"
                                        class="block text-sm font-medium leading-6 text-gray-900">Street
                                        address</label>
                                    <div class="mt-2">
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-2 sm:col-start-1">
                                    <label for="city"
                                        class="block text-sm font-medium leading-6 text-gray-900">City</label>
                                    <div class="mt-2">
                                        <input type="text" name="city" id="city"
                                            autocomplete="address-level2"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="region"
                                        class="block text-sm font-medium leading-6 text-gray-900">State /
                                        Province</label>
                                    <div class="mt-2">
                                        <input type="text" name="region" id="region"
                                            autocomplete="address-level1"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="postal-code"
                                        class="block text-sm font-medium leading-6 text-gray-900">ZIP /
                                        Postal code</label>
                                    <div class="mt-2">
                                        <input type="text" name="postal-code" id="postal-code"
                                            autocomplete="postal-code"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                            <button type="button"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>
                </div>

                <div class="grid grid-cols-1 gap-x-8 gap-y-8 pt-10 md:grid-cols-3">
                    <div class="px-4 sm:px-0">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Notifications</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">We'll always let you know about important
                            changes, but you
                            pick what else you want to hear about.</p>
                    </div>

                    <form class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
                        <div class="px-4 py-6 sm:p-8">
                            <div class="max-w-2xl space-y-10">
                                <fieldset>
                                    <legend class="text-sm font-semibold leading-6 text-gray-900">By Email</legend>
                                    <div class="mt-6 space-y-6">
                                        <div class="relative flex gap-x-3">
                                            <div class="flex h-6 items-center">
                                                <input id="comments" name="comments" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                                            </div>
                                            <div class="text-sm leading-6">
                                                <label for="comments"
                                                    class="font-medium text-gray-900">Comments</label>
                                                <p class="text-gray-500">Get notified when someones posts a comment on
                                                    a posting.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="relative flex gap-x-3">
                                            <div class="flex h-6 items-center">
                                                <input id="candidates" name="candidates" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                                            </div>
                                            <div class="text-sm leading-6">
                                                <label for="candidates"
                                                    class="font-medium text-gray-900">Candidates</label>
                                                <p class="text-gray-500">Get notified when a candidate applies for a
                                                    job.</p>
                                            </div>
                                        </div>
                                        <div class="relative flex gap-x-3">
                                            <div class="flex h-6 items-center">
                                                <input id="offers" name="offers" type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                                            </div>
                                            <div class="text-sm leading-6">
                                                <label for="offers" class="font-medium text-gray-900">Offers</label>
                                                <p class="text-gray-500">Get notified when a candidate accepts or
                                                    rejects an offer.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend class="text-sm font-semibold leading-6 text-gray-900">Push Notifications
                                    </legend>
                                    <p class="mt-1 text-sm leading-6 text-gray-600">These are delivered via SMS to your
                                        mobile
                                        phone.</p>
                                    <div class="mt-6 space-y-6">
                                        <div class="flex items-center gap-x-3">
                                            <input id="push-everything" name="push-notifications" type="radio"
                                                class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-600">
                                            <label for="push-everything"
                                                class="block text-sm font-medium leading-6 text-gray-900">Everything</label>
                                        </div>
                                        <div class="flex items-center gap-x-3">
                                            <input id="push-email" name="push-notifications" type="radio"
                                                class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-600">
                                            <label for="push-email"
                                                class="block text-sm font-medium leading-6 text-gray-900">Same
                                                as email</label>
                                        </div>
                                        <div class="flex items-center gap-x-3">
                                            <input id="push-nothing" name="push-notifications" type="radio"
                                                class="h-4 w-4 border-gray-300 text-blue-600 focus:ring-blue-600">
                                            <label for="push-nothing"
                                                class="block text-sm font-medium leading-6 text-gray-900">No
                                                push notifications</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
                            <button type="button"
                                class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit"
                                class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </form>
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
                                        <a href="/news"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">News
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
                                        <a href="#"
                                            class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="#"
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
