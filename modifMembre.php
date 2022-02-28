<!DOCTYPE html>
<html lang="fr">
<head>
    <title>ARGO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <link rel="stylesheet" href="argoCss.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
</head>
<?php
    include 'include.php';
    var_dump($_GET);
    $modifName = $_GET['Modif']; /* récupération de la variablaea $_GET pour utilisation plus simple dans le HTML  */
?>
<body>
    <!-- HEADER -->
    <header>
        <h1>
            <a href="index.php">
                <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo"/>
                Les Argonautes
            </a>
        </h1>
    </header>
    <!-- MAIN -->
    <main>
        <h2>Modification du nom, d'un membre de l'équipage :</h2>
        <!-- Modif member form -->
        <form method="GET" action="include.php">
            <label for="modifName">Modifier l'ancien Nom : </label>
            <input type="text" id="modifName" name="modifName" placeholder="Entrer votre nouveau nom." value="<?= $modifName ?>" pattern="^[A-Za-z]+$" autofocus required/>
            <!-- button update-->
            <button type="submit" name="update">Appliquer</button>
            <a href="index.php"><button type="button">Retour</button></a>
            <p class="italic">*Champs obligatoire: ne doit contenir que des lettres majuscule ou minuscule de A à Z.</p>
        </form>
    </main>
    <!-- FOOTER -->
    <footer>
        <p>Modifé par Jason en Anthestérion de l'an 515 avant JC</p>
    </footer>
</body>
</html>