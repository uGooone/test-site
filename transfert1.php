<?php
    include ("connexion1.php");
    function transfert(){
        $ret        = true;
        $produits_blob   = '';
        $produits_taille = 0 ;
        $produits_type   = '';
        $produits_nom    = '';
        $taille_max = 2500000;
        $ret = is_uploaded_file($_FILES['fic']['tmp_name']);
        
        
        if ($ret =  false) {
            echo "Problème de transfert";
            return false;
        } 
        else 
        {
            // Le fichier a bien été reçu
            $produits_taille = $_FILES['fic']['size'];
            
            if ($produits_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            $produits_type = $_FILES['fic']['type'];
            $produits_nom  = $_FILES['fic']['name'];
            
            $produits_blob = file_get_contents($_FILES['fic']['tmp_name']);
            $req = "INSERT INTO produits (" . 
            "produits_nom, produits_taille, produits_type, produits_blob " .
            ") VALUES (" .
            "'" . $produits_nom . "', " .
            "'" . $produits_taille . "', " .
            "'" . $produits_type . "', " .
            "'" . addslashes ($produits_blob) . "') "; // le contenu binaire
           
        } 
    }
?>