<?php
session_start();
      require('developer/database.php');
      ?>
      <?php
//validation du formulaire
      if(isset($_POST['valider'])){   
        $date = date('Y');
// //verifier si l'utilisateur a completer tous ses champs 
          if(!empty($_POST['mat']) AND !empty($_POST['nom']) 
          AND!empty($_POST['prenom']) AND !empty($_POST['date'])
          AND!empty($_POST['dep']) AND !empty($_POST['pwd'])
         AND!empty($_POST['num']) AND !empty($_POST['mail'])){
               
//prise des données de l'utilisateur 
            $user_mat = htmlspecialchars($_POST['mat']);
            $user_name = htmlspecialchars($_POST['nom']);
//le htmlspecialchars est là pour eviter qu'un connaisseur viennent recupérer les informations de notre bd
            $user_prenom = htmlspecialchars($_POST['prenom']);
            $user_date = htmlspecialchars($_POST['date']);
            $user_dep= htmlspecialchars($_POST['dep']);
            $user_pwd = password_hash($_POST['pwd'] , PASSWORD_DEFAULT);
            $user_numero = htmlspecialchars($_POST['num']);
            $user_email = htmlspecialchars($_POST['mail']);
            //$user_pwd= htmlspecialchars($_POST['mdp']);
            
//password_hash crypte le mot de passe et password_default le garde sans changement
$check = $bdd->prepare('SELECT * FROM utilisateur WHERE ID=? AND NOM = ?  AND PRENOM = ?  AND DATE_NAIS = ? AND DEPART = ? AND PASSWORD = ? AND NUM_TEL = ? AND EMAIL = ? '); 
$check->execute(array($user_mat, $user_name, $user_prenom, $user_date, $user_dep,  $user_pwd, $user_numero, $user_email));
//compte le nombre de fois où le serveur reconnait le même NOM et le même prénom déjà entré 
if($check->rowCount() == 0){   
    // var_dump($_FILES) ;   
    //    die;  
      if (!empty($_FILES)) {
      $fname = $_FILES['fichier']['name'];
      $fext = strrchr($fname, ".");
      $f = array('.JPG','.jpg');
      $dest = 'photo/'.$fname;
      $femp = $_FILES['fichier']['tmp_name'];
      $size = $_FILES['fichier']['size'];
            
     if (in_array($fext,$f)AND $size <= 36000) {
        
         if (move_uploaded_file($femp,$dest)) {
            
$insert = $bdd->prepare('INSERT INTO utilisateur(ID, I_DEP, NOM, PRENOM, DATE_NAIS, PASSWORD, NUM_TEL, EMAIL, PHOTO) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
$insert->execute(array($user_mat, $user_dep, $user_name, $user_prenom, $user_date, $user_pwd, $user_numero, $user_email, $fname));
       
header('location:index.php');
                       
}else {
    echo "<script> alert('Une erreur ')</script>";
   } 
            }else {
                 echo "<script> alert('On a besoin d'une photo de 60*60 maxi')</script>";
            }
                //si le NOM et le prénom sont reconnu il ya cette erreur
                    }
                    else{
                        echo "<script> alert('Une erreur est arriver')</script>";
                    }
                             //verifier si l'utilisateur n'est pas déja inscrit    
                             }else {
                                 echo "<script> alert('cet utilisateur existe déja')</script>";
                             }
        //si tous les champs ne sont pas remplis il ya cette erreur 
        //   }
        //   else{
        //     echo "<script> alert('remplis tous les champs nor ')</script>";
        // }

}
      }
//xyoncode-->