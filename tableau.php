<section class="member-list">
    <table>
        <thead>
            <tr>
                <th colspan="2">Nom de l'Argonaute &nbsp; <span>(Modifier - Supprimer)</span></th>
                <th colspan="2">Nom de l'Argonaute &nbsp; <span>(Modifier - Supprimer)</span></th>
                <th colspan="2">Nom de l'Argonaute &nbsp; <span>(Modifier - Supprimer)</span></th>
            </tr>
        </thead>
        <tbbody>
            <?php for($ligne=0; $ligne<3; $ligne++){ ?> <!-- boucle création des lignes -->
                <tr class="number-list">
                    <?php foreach($result as $key => $value): ?> <!-- boucle de création des cellules -->
                        <td id="numerotation"> <!-- affichage numérotation CSS  -->
                            <?=$value['nom']?> <!-- nom du membre de la bd -->
                        </td>
                        <td> <!-- bouton google material icons -->
                            <a href="index.php" >
                                <input type="button" value="edit" class="material-icons-round">
                            </a>
                            <a href="index.php?del=<?=$key?>">
                            <!-- <?php var_dump($key); ?> -->
                                <input type="button" value="delete" class="material-icons-round" onclick="return confirm('Êtes vous sur de vouloir supprimé ce membre ?')">
                            </a>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php } ?>
        </tbbody>
    </table>
</section>


