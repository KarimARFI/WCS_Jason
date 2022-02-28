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
?>
<!-- ############################################################################################################ -->
<!-- PARTIE HTML -->
<!-- ############################################################################################################ -->
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
        <!-- New member form -->
        <h2>Ajouter un(e) Argonaute</h2>
        <form method="GET" action="include.php">
            <label for="name">Nom de l'Argonaute* : &nbsp;</label>
            <input type="text" id="name" name="name" placeholder="Charalampos" pattern="^[A-Za-z]+$" autofocus required/>
            <button type="submit">Envoyer</button>
            <p class="italic">*Champs obligatoire: ne doit contenir que des lettres majuscule ou minuscule de A à Z.</p>
            <!-- message de validation insertion bdd si ok -->
            <?php
                // $nom = $_GET['name'];
                // echo '<p style="color:green">Bonjour <b style="font-size:1.2em">'.$nom.'</b>. Vous faite maintenant partie de l\'équipage.</p>';
            ?>
        </form>
        <hr>
        <!-- Member list -->
        <h2>L'équipage est composé de <?= $nbrMembreBd ?> Membres.</h2>
        <section>
            <div class="divEntete">
                <div>Nom de l'Argonaute &nbsp; <span>(Modifier - Supprimer)</span></div>
                <div>Nom de l'Argonaute &nbsp; <span>(Modifier - Supprimer)</span></div>
                <div>Nom de l'Argonaute &nbsp; <span>(Modifier - Supprimer)</span></div>
            </div>
            <div class="divMembre">
                <!-- boucle de création des cellules -->
                <?php foreach($affichage as $key => $value): ?> <!-- $result : vient de l'include php -->
                    <div id="numerotation"> <!-- affichage numérotation CSS  -->
                        <!-- nom du membre de la bd -->
                        <?php echo $value['idArgonaute'].' - '.$value['nom'] ?>
                    </div>
                    <!-- bouton google material icons -->
                    <div class="center">
                        <!-- icone update et récupération des infos pour envoie sur modifMembre.php -->
                        <a href="modifMembre.php?Modif=<?= $value['nom'] ?>">
                            <input type="button" name="update" value="edit" class="material-icons-round">
                        </a>
                        <!-- icone delete et récupération de l'id pour effacement -->
                        <a href="index.php?del=<?= $value['idArgonaute'] ?>">
                            <input type="button" name="delete" value="delete" class="material-icons-round" onclick="return confirm('Êtes vous sur de vouloir supprimé ce membre ?')">
                        </a>
                    </div>
                <?php endforeach; ?>
                <br>
                <?php
                    // var_dump($affichage[$key]['idArgonaute']);
                ?>
            </div>
        </section>
    </main>
    <!-- FOOTER -->
    <footer>
        <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
    </footer>
</body>
</html>