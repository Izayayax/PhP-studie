<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>

<main>
    <h1><?= $heading ?></h1>

    <form method="post" action="/contact">
        <label>Naam:</label>
        <input type="text" name="naam">

        <label>Email:</label>
        <input type="email" name ="email">

        <label>Bericht:</label>
        <textarea name="bericht"></textarea>

        <button type="submit">verstuur</button>
    </form>
</main>



</body>
</html>