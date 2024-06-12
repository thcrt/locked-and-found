<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Locked and Found</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-black text-white/80">
<div class="min-h-screen flex flex-col w-full max-w-7xl mx-auto">
    <header class="grid grid-cols-3 items-center gap-2 py-10">
        <div class="text-center col-start-2">
            <x-application-logo/>
            <h2>
                Dubious items, dubious security.
            </h2>
        </div>
        <nav class="-mx-3 flex justify-end">
            @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </a>
            @else
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Log in
                </a>

                @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </a>
                @endif
            @endauth
        </nav>
    </header>

    <main class="mt-6">

        <div class="w-full mx-auto flex flex-row pt-16 pb-20">
            <div class="w-1/2 border-b-8 border-white/50">
                <h2 class="text-4xl font-semibold text-white">
                    Lost something on public transport?
                </h2>
                <h3 class="text-3xl font-semibold text-white">
                    We’ve got you covered. Probably.
                </h3>
            </div>
            <div class="w-1/2 text-xl/relaxed text-right font-medium flex flex-col gap-2">
                <p class="font-bold text-white/90">
                    Locked and Found is your portal for recovering your misplaced treasures
                    from buses, trains and exploitative ride-sharing services.
                </p>
                <p class="font-medium text-white/70">
                    Whether it's a family heirloom umbrella, a mysterious ticking briefcase or your
                    wife's girlfriend's favourite lawn flamingo, we keep your treasured items almost as
                    safe as they were when you first donated them to the public transport system.
                </p>
            </div>
        </div>

        <div class="flex flex-col px-8 rounded-lg gap-4 py-10 bg-zinc-900 mx-20">
            <div>
                <h2 class="text-xl font-semibold text-white">
                    Second-from-the-Top-Notch Security
                </h2>
                <p class="text-lg/relaxed">
                    Our team of more than two employees is dedicated to ensuring the security of our company
                    against legal action. Rest assured that your data is a better-kept secret than our
                    income reports. Here's how we cover our asses and your assets:
                </p>
            </div>

            <ul class="grid grid-cols-4 gap-2">
                <li class="p-3 rounded-lg bg-zinc-800 flex flex-col justify-center">
                    All available items are only accessible to authenticated users. Also, signing up is
                    easy, for maximum convenience.
                </li>
                <li class="p-3 rounded-lg bg-zinc-800 flex flex-col justify-center">
                    Our occasionally-friendly staff will verify your identity using state-of-the-art
                    guessing technology.
                </li>
                <li class="p-3 rounded-lg bg-zinc-800 flex flex-col justify-center">
                    Security is your responsibility, with a free choice of any password your heart
                    desires. As long as it's 8 characters.
                </li>
                <li class="p-3 rounded-lg bg-zinc-800 flex flex-col justify-center">
                    With one click, you can stay logged in indefinitely: perfect for that internet cafe
                    or library you keep coming back to.
                </li>
            </ul>

        </div>

        <h2 class="text-3xl text-center mt-10 mb-7">
            What are people saying?
        </h2>

        <div class="grid gap-8 grid-cols-3">

            <figure class="flex flex-col rounded-lg p-6 ring-1 ring-white/[0.05] bg-zinc-950">
                <blockquote class="text-lg">
                    "I lost my sanity on the subway, and while they couldn't return that, they did find
                    my headphones!"
                </blockquote>
                <figcaption class="text-sm text-right">
                    Tacitus Kilgore
                </figcaption>
            </figure>

            <figure class="flex flex-col rounded-lg p-6 ring-1 ring-white/[0.05] bg-zinc-950">
                <blockquote class="text-lg">
                    "I left my pet rock on the bus. Thanks to Locked and Found, Dwayne’s back home where
                    he belongs."
                </blockquote>
                <figcaption class="text-sm text-right">
                    Ata Johnson
                </figcaption>
            </figure>

            <figure class="flex flex-col rounded-lg p-6 ring-1 ring-white/[0.05] bg-zinc-950">
                <blockquote class="text-lg">
                    "They'll give you 20% off if you write a good review! I've written ten reviews and
                    now I get paid to find my own items. Did they think this through?"
                </blockquote>
                <figcaption class="text-sm text-right">
                    Frans Blauw
                </figcaption>
            </figure>
        </div>
    </main>

    <footer class="pt-10 pb-6 text-center text-xs text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</div>
</body>
</html>
