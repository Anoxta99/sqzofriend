<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sqzo Friend</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-black">
    <div id="root">
        <div class="fixed flex flex-row bg-black w-full items-center p-4 text-light">
            <div class="mx-2 grow">
                <div class="md:w-20 md:h-20 w-16 h-16 p-[0.5px]">
                    <a href="/"><img src="/logo1.png" alt="SqzoFriend"></a>
                </div>
            </div>
            <div class="hidden sm:block">
                <a class="px-4 inline-flex flex-row items-center text-white hover:text-primary text-2xl uppercase font-semibold" href="/">Home</a>
                <a class="px-4 inline-flex flex-row items-center text-white hover:text-primary text-2xl uppercase font-semibold" href="/profile">Profile</a>
                <a class="px-4 inline-flex flex-row items-center text-white hover:text-primary text-2xl uppercase font-semibold" href="/schedule">Schedule</a>
                <a class="px-4 inline-flex flex-row items-center text-white hover:text-primary text-2xl uppercase font-semibold" href="/socials">Socials</a>
                <a class="px-4 inline-flex flex-row items-center text-white hover:text-primary text-2xl uppercase font-semibold" href="/contact">Contact</a>
            </div>
            <div class="sm:hidden">
                <div class="dropdown dropdown-bottom dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost text-white hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </div>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-black rounded-none w-52">
                      <li><a class="hover:text-primary" href="/">Home</a></li>
                      <li><a class="hover:text-primary" href="/profile">Profile</a></li>
                      <li><a class="hover:text-primary" href="/schedule">Schedule</a></li>
                      <li><a class="hover:text-primary" href="/socials">Socials</a></li>
                      <li><a class="hover:text-primary" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full h-screen overscroll-x-none px6 flex flex-col justify-center pt-8">
            <div class="bg-black text-white py-20">
                <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
                    <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                        <h1 class="text-3xl md:text-5xl p-2 text-primary">SQZOFRIEND</h1>
                        <p class="text-sm md:text-base text-white my-5">A band based in Pekalongan, Central Java that interested in Alternative Metal songs. Formed of 5 most unique and schizoid people in the universe. Got a question? Click the button below!</p>
                        <a href="/contact"
                            class="bg-transparent hover:bg-primary text-primary hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-primary hover:border-transparent">
                            GET IN TOUCH</a>
                    </div>
                    <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
                        <div class="h-48 flex flex-wrap content-center">
                            <div>
                                <img class="inline-block mt-28 hidden xl:block" src="/malik.png"></div>
                                <div>
                                    <img class="inline-block mt-24 md:mt-0 p-8 md:p-0"  src="/okta.png"></div>
                                    <div>
                                        <img class="inline-block mt-28 hidden lg:block" src="/gambreng.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
</body>
</html>