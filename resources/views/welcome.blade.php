<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sebrae ALI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 w-full">
    <!-- Start of main container -->
    <div class="relative"> <!-- Container with relative positioning -->
        <!-- Image element with full width -->
        <!-- <img src="{{ asset('images/sebrae_ali.jpg') }}" alt="Sebrae ALI" class="w-full"> -->
        <img src="{{ asset('images/ebooks.png') }}" alt="Sebrae ALI" class="w-full">
        <!-- Navigation menu -->
        <nav class="absolute top-0 right-0 m-3 flex"> <!-- Absolute positioned menu -->
            <!-- Conditional check for user authentication -->
            @if (Route::has('login')) <!-- Checking if 'login' route exists -->
                <div class="mx-3 flex flex-1 justify-end"> <!-- Container for menu items -->
                    <!-- Check if user is authenticated -->
                    @auth <!-- If user is authenticated -->
                        <!-- Link to dashboard -->
                        <a href="{{ url('/dashboard') }}" class="text-white px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Dashboard</a>
                    @else <!-- If user is not authenticated -->
                        <!-- Link to login page -->
                        <a href="{{ route('login') }}" class="text-white px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">{{ __('Log in') }}</a>
                        <!-- Check if registration route exists -->
                        @if (Route::has('register')) <!-- If registration route exists -->
                            <!-- Link to registration page -->
                            <a href="{{ route('register') }}" class="text-white px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"> {{ __('Register') }}</a>
                        @endif <!-- End of registration route check -->
                    @endauth <!-- End of authentication check -->
                </div> <!-- End of menu items container -->
            @endif <!-- End of 'login' route check -->
        </nav> <!-- End of navigation menu -->
        <!-- Logo image at top left -->
        <img src="{{ asset('images/logoali.png') }}" alt="ALI Logo" class="absolute top-0 left-0 m-3 h-20">
        <!-- Content container -->
        <div class="content absolute top-1/3 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white bg-opacity-90 p-3 rounded-lg">
            <!-- Form -->
            <form>
                <!-- Form content -->
                <div class="flex">
                    <!-- Dropdown select input -->
                    <select class="block p-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <option>Produtividade</option>
                        <option>Transformação Digital</option>
                        <option>Educação Empreendedora</option>
                        <option>Ecossistemas e Indicação Geográfica</option>
                        <option>Rural</option>
                    </select>
                    <!-- Text input field -->
                    <input type="text" class="ml-3 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Digite algo">
                    <!-- Submit button -->
                    <button type="submit" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-indigo-200">
                        Buscar
                    </button>
                </div> <!-- End of form content -->
            </form> <!-- End of form -->
        </div> <!-- End of content container -->
    </div> <!-- End of main container -->
        <!-- <img src="{{ asset('images/ebooks.png') }}" alt="Sebrae ALI" class="w-full"> -->
</body>
</html>
