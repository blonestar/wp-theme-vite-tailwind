    </main>

    <footer class="flex-0 bg-slate-100 px-4 py-2">
        <div class="container mx-auto text-center">
            <p class="text-xs">Currently in <strong><?php echo (IS_VITE_DEVELOPMENT) ? "development" : "production" ?></strong> mode.</p>
        </div>
    </footer>

<?php wp_footer() ?>
</body>
</html>