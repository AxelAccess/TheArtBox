<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<?php include('header.php'); ?>
<?php include('oeuvres.php'); ?>

<?php
    $oeuvre = $oeuvres[$_GET['id']];
?>
<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src=<?php echo($oeuvre['img']); ?> alt=<?php echo($oeuvre['title']); ?>>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo($oeuvre['title']); ?></h1>
            <p class="description"><?php echo($oeuvre['description']); ?></p>
            <p class="description-complete"><?php echo($oeuvre['completeDescription']); ?></p>
        </div>
    </article>
</main>

<?php include('footer.php'); ?>

</body>
</html>
