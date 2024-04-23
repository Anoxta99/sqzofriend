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
<body class="bg-base-100">
    <div id="root">
        <div class="fixed flex flex-row bg-base-100 w-full items-center p-6 text-light">
            <div class="mx-2 grow">
                <div class="md:w-20 md:h-20 w-16 h-16 p-[0.5px]">
                    <a href="/"><img src="/logo1.png" alt="SqzoFriend"></a>
                </div>
            </div>
            <div class="hidden sm:block">
                <a class="px-4 inline-flex flex-row items-center hover:text-primary text-2xl uppercase font-semibold" href="/">Home</a>
                <a class="px-4 inline-flex flex-row items-center hover:text-primary text-2xl uppercase font-semibold" href="/profile">Profile</a>
                <a class="px-4 inline-flex flex-row items-center hover:text-primary text-2xl uppercase font-semibold" href="/members">Members</a>
                <a class="px-4 inline-flex flex-row items-center hover:text-primary text-2xl uppercase font-semibold" href="/socials">Socials</a>
                <a class="px-4 inline-flex flex-row items-center hover:text-primary text-2xl uppercase font-semibold" href="/contact">Contact</a>
            </div>
            <div class="sm:hidden">
                <div class="dropdown dropdown-bottom dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost text-white hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </div>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-none w-52">
                      <li><a class="hover:text-primary" href="/">Home</a></li>
                      <li><a class="hover:text-primary" href="/profile">Profile</a></li>
                      <li><a class="hover:text-primary" href="/members">Members</a></li>
                      <li><a class="hover:text-primary" href="/socials">Socials</a></li>
                      <li><a class="hover:text-primary" href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>