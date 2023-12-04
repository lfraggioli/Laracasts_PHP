<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <p class="mx-auto text-md">Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?>. Welcome to my page built with PHP & TailwindCSS.</p>

    </div>
</main>
</div>

</body>

</html>