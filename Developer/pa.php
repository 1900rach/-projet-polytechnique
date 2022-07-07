<?php
      require('database.php');
      ?>
      <?php
//validation du formulaire
      if(isset($_POST['valider'])){   
  
// //verifier si l'utilisateur a completer tous ses champs 
          if( !empty($_POST['nom'])AND !empty($_POST['n']) ){
               
//prise des données de l'utilisateur 
//le htmlspecialchars est là pour eviter qu'un connaisseur viennent recupérer les informations de notre bd
            $user_pnom = htmlspecialchars($_POST['nom']);
            $user_des = htmlspecialchars($_POST['n']);
            $user_date = date('Y-m-d h:m:s');
            //$user_pwd= htmlspecialchars($_POST['mdp']);
            $c = $bdd->query('SELECT * FROM these');  
            $count = $c->rowCount();
//password_hash crypte le mot de passe et password_default le garde sans changement
  

    if (!empty($_FILES)) {
        $fname = htmlspecialchars($_FILES['doc']['name']);
        $fext = strrchr($fname,'.');
        $f = array('.pdf','.PDF');
        $empl = $_FILES['doc']['tmp_name']; 
        $dest = 'fichiers/'.$fname;
        $size = $_FILES['doc']['size'];
        
        
        if(in_array($fext,$f)) {
            
                     $check = $bdd->prepare('SELECT * FROM these WHERE NOM_T = ?'); 
                    $check->execute(array($fname));
                    //compte le nombre de fois où le serveur reconnait le même NOM et le même prénom déjà entré 
                    if($check->rowCount() == 0){ 
                       
                        if (move_uploaded_file($empl,$dest)) {
                            
                            $insert = $bdd->prepare('INSERT INTO these(ID_T, ID, NOM_T, NOM_ETUD_T, NOM_ENCA_T, DES_T ,DATE_T, VALIDE) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
                            $insert->execute(array($count+1, $_SESSION['mat'], $fname, $_SESSION['nom'], $user_pnom, $user_des, $user_date, false));
                           
                            header('location:page.php');
                                    
                }else {
                    echo "<script> alert('Une erreur ')</script>";
                } 
                    
                    
                }else {
                    echo "<script> alert('remplissez tous les champs ')</script>";
                }
    }else {
                 echo "<script> alert('On a besoin d'un fichier et d'une photo de 60*60 maxi')</script>";
            }
                //si le NOM et le prénom sont reconnu il ya cette erreur
                    } else{
                        echo "<script> alert('Une erreur est arriver')</script>";
                    }
                             //verifier si l'utilisateur n'est pas déja inscrit    
                            }else {
                                echo "<script> alert('remplissez tous les champs ')</script>";
                            } 
        //si tous les champs ne sont pas remplis il ya cette erreur 
        //   }
        //   else{
        //     echo "<script> alert('remplis tous les champs nor ')</script>";
        // }

}
      