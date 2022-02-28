<!-- ############################################################################################################ -->
<!-- PARTIE PHP -->
<!-- ############################################################################################################ -->
<?php
    //bloc de "try and catch"
    try{
        /* CONNEXION et CPATURE d'erreur */
        $connex_dbargonaute = new PDO("mysql:host=localhost; dbname=dbargonaute", 'root', '');
        $connex_dbargonaute->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /* SELECTION pour affichage dans le tableau */
        $search = $connex_dbargonaute->prepare('SELECT idArgonaute, nom FROM nomargonaute ORDER BY idArgonaute ASC');
        $search->execute();
        $affichage = $search->fetchall(PDO::FETCH_ASSOC); //récupération de toutes les données
        $nbrMembreBd = count($affichage); //compte le nombre de membre enregistré dans la bd
        /* ECRITURE DES NOUVEAUX MEMBRES */
        if(!empty($_GET['name'])){
            $argo = $connex_dbargonaute->prepare(" INSERT INTO nomargonaute(nom) VALUES(:nom) ");
            $argo->bindParam(':nom', $_GET['name']); //bindParam pour lié une variable fixe à un paramètre
            $argo->execute();
            header('location: index.php');
        }
        /* SUPPRESSION */
        if(isset($_GET['del'])){
            $getDel = $_GET['del'];
            $delete = $connex_dbargonaute->prepare(" DELETE FROM nomargonaute WHERE idArgonaute=$getDel ");
            $delete->execute();
            header('location: index.php');
        }
        /* MODIFICATION */
         if( isset( $_GET['modifName'] ) ){
             var_dump($_GET['modifName']);
             var_dump($_GET['idargonaute']);
            // $id = $_GET['idArgonaute'];
            // $nom = $_GET['modifName'];
            $modif = $connex_dbargonaute->prepare(" UPDATE nomargonaute SET nom=? WHERE idArgonaute=? ");
            $modif->execute();
         }
    }
    //capture des erreurs
    catch(PDOException $e){
        echo ' <b class="red">Fichier : </b>'.$e->getfile().'<br>';
        echo ' <b class="red">Erreur : </b>'.$e->getMessage().'<br>';
        echo ' <b class="red">Ligne : </b>'.$e->GetLine();
        die();
    }
    $connex_dbargonaute = NULL; //deconnexion de la bd
?>