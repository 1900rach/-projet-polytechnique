<?php
  session_start();
require('database.php');
?>
<?php
//validation du formulaire
      if(isset($_POST['valider'])){
//         var_dump($_POST);
// die;
//verifier si l'utilisateur a completer tous ses champs 
          if(!empty($_POST['mat']) AND !empty($_POST['pwd'])){

        //prise des données de l'utilisateur
        //le htmlspecialchars est là pour eviter qu'un connaisseur viennent recupérer les informations de notre bd
                    $user_mat = htmlspecialchars($_POST['mat']);
                    $user_pass = htmlspecialchars($_POST['pwd']);

//recupere l'utilisateur qui a le pseudo entré par l'utilisateur 
$checkconnexion = $bdd->prepare('SELECT * FROM utilisateur WHERE ID = ?');
$checkconnexion->execute(array($user_mat));
//rowCount permet de recupérer le nombre de données recupérer lors de la requete 
//include('premiere.php');

    if ($checkconnexion->rowCount() == 1) {
        $check = $checkconnexion->fetch();

        //  var_dump (password_verify($user_pass, $check['PASSWORD']));
            // die; 
        if (password_verify($user_pass, $check['PASSWORD'])) {

            $_SESSION['auth'] = true;
            $_SESSION['mat'] = $user_info['mat'];
            $_SESSION['nom'] = $user_info['nom'];
            $_SESSION['prenom'] = $user_info['prenom'];
            $_SESSION['date'] = $user_info['date'];
            $_SESSION['dep'] = $user_info['dep'];
            $_SESSION['pwd'] = $user_info['pwd'];
            $_SESSION['num'] = $user_info['num'];
            $_SESSION['mail'] = $user_info['mail'];
            $_SESSION['tof'] = $user_info['photo'];
            header('location:memoire.php');
        }else{
            echo "<script> alert('Votre mot de passe est incorrect')</script>";
        }
    }else{
        echo "<script> alert('vos identifiants sont incorrects')</script>";
    }

          }
          else{
            echo "<script> alert('Une erreur est survenue')</script>";
        }
        }
        
        ?>
        <!--xyoncode-->
        <!--var_dump ($checkconnexion->rowCount());
die; -->