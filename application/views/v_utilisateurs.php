<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 20/11/2014
 * Time: 09:16
 */

foreach ($Utilisateur as $user){
    echo($user->getNom()." <br>");
    echo($user->getPrenom()." <br>");
}?>
