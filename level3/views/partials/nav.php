<nav>
    <a href="/index.php" <?= urlIs('/index.php') ? 'style="font-weight: bold;"' : '' ?>>Home</a>
    <a href="/about.php" <?= urlIs('/about.php') ? 'style="font-weight: bold;"' : '' ?>>About</a>
    <a href="/contact.php" <?= urlIs('/contact.php') ? 'style="font-weight: bold;"' : '' ?>>Contact</a>
</nav>