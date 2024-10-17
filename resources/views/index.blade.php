<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            {{ __('title') }}
                        </div>
                        <form action="{{ route('send.email') }}" method="POST">
                            @csrf
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <label for="message">Mensaje:</label>
                            <textarea id="message" name="message" class="text-black" required></textarea>
                            <button type="submit">Enviar</button>
                        </form>
                        <button type="button" data-cc="show-preferencesModal">Manage cookie preferences</button>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
