<?php get_header() ?>

<div class="max-w-screen-lg mx-auto h-full flex place-content-center items-center">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-black">Hello World!</h1>
        <h2 class="text-xl font-bold text-black">Wordpress Theme rapid development using Vite & Tailwindcss</h2>
        <div class="text-md mt-4">
            <a class="inline-block rounded-lg my-1 py-1 px-4 text-white bg-purple-700 hover:opacity-90" href="https://vitejs.dev/" target="_blank">ViteJS</a>
            <a class="inline-block rounded-lg my-1 py-1 px-4 text-white bg-green-600 hover:opacity-90" href="https://tailwindcss.com/" target="_blank">TailwindCSS</a>
        </div>

        <p class="mt-4 text-sm">To test browser sync in development mode ensure the following:</p>
        <code class="mt-1 px-4 py-1 bg-slate-800 text-gray-200 text-xs text-left inline-block">
            <p class="my-2">
                <span class="text-gray-500 block">// change IS_VITE_DEVELOPMENT to TRUE in functions.php</span>
                define('IS_VITE_DEVELOPMENT', TRUE);
            </p>
            <p class="my-2">
                <span class="text-gray-500 block">// run first time in your theme folder (node.js required)</span>
                npm install
            </p>
            <p class="my-2">
                <span class="text-gray-500 block">// start development & refresh your browser</span>
                npm run dev
            </p>
        </code>

        <p class="mt-1 text-xs">More instructions <a class="hover:underline" href="https://github.com/blonestar/wp-theme-vite-tailwind" target="_blank">here</a>.</p>

    </div>
</div>

<?php get_footer() ?>