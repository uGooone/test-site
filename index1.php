<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <?php 
            require ("connexion1.php");
            ?>
   <body>
   <?php
         include ("transfert1.php");
         if (isset($_FILES['fic']) )
         {
             transfert();
         }
      ?>
      <h3>Envoi d'une image</h3>
      <form enctype="multipart/form-data" action="#" method="post">
         <input type="hidden" name="MAX_FILE_SIZE" value="250000" />
         <input type="file" name="fic" size=100 />
         <input type="submit" value="Envoyer" />
      </form>
      <p><a href="liste1.php">Liste</a></p>
   </body>
</html>