<?php
       try {
           $bdd = new PDO('mysql:host=localhost;dbname=poly','root','');
       } catch (\Exception $e) {
           die('Erreur :'.$e->getMessage());
       }
?>