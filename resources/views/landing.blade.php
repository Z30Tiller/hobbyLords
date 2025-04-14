<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aether Corp Shop</title>
    @vite('resources/css/app.css')
    <style>
        /* Simple animated starfield background */
        body::before {
            content: "";
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 20px 20px;
            animation: pulse-bg 10s linear infinite;
            z-index: -1;
        }

        @keyframes pulse-bg {
            0% { background-position: 0 0; }
            100% { background-position: 100% 100%; }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-black via-zinc-900 to-purple-900 text-white min-h-screen flex items-center justify-center">

    <div class="text-center px-4 animate-fade-in">
        <h1 class="text-5xl md:text-6xl font-extrabold text-purple-400 mb-4 drop-shadow-xl tracking-wide">
            Welcome to Aether Corp Shop
        </h1>
        <p class="text-xl md:text-2xl text-zinc-300 mb-8 max-w-xl mx-auto">
            Your one-stop shop for trading cards, collectibles, and everything geek.
        </p>
        <a href="#"
           class="inline-block bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-8 rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out">
            Enter the Shop
        </a>
    </div>

</body>
</html>
