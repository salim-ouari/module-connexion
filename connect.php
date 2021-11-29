<?php

//***********************bdd plesk***********************
$bdd = mysqli_connect('localhost', 'salim-ouari', "Zidane07@", 'salim-ouari_moduleconnexion');
//   **********************bddlocal***********************
//   $bdd = mysqli_connect('localhost', 'root', "", 'salim-ouari_moduleconnexion');
mysqli_set_charset($bdd, 'utf8');
