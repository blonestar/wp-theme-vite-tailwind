<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class('h-screen border') ?>>

    <div class="h-full border1 flex flex-wrap content-center">
        <div class="inline-block border mx-auto text-center px-8 py-4 rounded-3xl shadow-xl">
            <h1 class="text-4xl font-bold text-black">Hello World!</h1>
            <h2 class="text-xl font-bold text-black">Wordpress Theme rapid development using Vite & Tailwindcss JIT</h2>
            <div class="text-md mt-4">
                <a class="inline-block rounded-lg my-1 py-1 px-4 text-white bg-green-600 hover:opacity-90" href="https://tailwindcss.com/" target="_blank">Tailwind</a>
                <a class="inline-block rounded-lg my-1 py-1 px-4 text-white bg-blue-600 hover:opacity-90" href="https://github.com/tailwindlabs/tailwindcss-jit" target="_blank">Tailwind JIT (Just-In-Time)</a>
                <a class="inline-block rounded-lg my-1 py-1 px-4 text-white bg-purple-700 hover:opacity-90" href="https://vitejs.dev/" target="_blank">Vite</a>
            </div>
            <p class="mt-3 text-sm">After you start Vite dev server (npm run dev) you shoud get this page formated in the middle of the screen, if so try edditing index.php in this theme.</p>
        </div>
    </div>

    <?php wp_footer() ?>
</body>
</html>