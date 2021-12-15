<?php
            try{
            $conn = new PDO("mysql:host=localhost;dbname=bank", 'root');
            }
            catch (Exception $e) {
                die('Erreur de connexion à mysql : '.$e->getMessage());
            }
?>