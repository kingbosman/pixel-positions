<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div  class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
            </div>

            <div class="space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
            <form action="/logout" method="POST">
                @csrf
                @method("DELETE")
                <div class="space-x-6">
                    <a href="/jobs/create">Post a job</a>
                    <button>Logout</button>
                </div>
            </form>
            @endauth
            @guest
                <div class="space-x-6">
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
