<?php

/**************************PHP-Start***********************/
/**/                                                    /**/
/**/    session_start();      //Start                   /**/
/**/    $_SESSION = array();  //$_SESSIOn Daten-Array   /**/
/**/                                                    /**/
/**********************************************************/


//Informationen f�r das array $_SESSTION beim einloggen
$_SESSION['user']['user_id']    //ID des eingeloggten Users
                 ['vorname']    //Vorname des Sch�lers aus der Datenbank
                 ['nachname']   //Nachname des Sch�lers aus der Datenbank
                 ['level'];     //Level (Was darf der Schueler sehen?)


/**********************Include-Files***********************/
/**/                                                    /**/
/**/   include ('conf/config.kb.php');                  /**/
/**/   include ('includings/class.rights.php');         /**/
/**/   include ('includings/class.db.php');             /**/
/**/   include ('includings/class.html.php');           /**/
/**/   include ('includings/class.klasse.php');         /**/
/**/   include ('includings/class.schueler.php');       /**/
/**/   include ('includings/class.stundenplan.php');    /**/
/**/   include ('views/test_schueler.php');             /**/
/**/   include ('views/test_klasse.php');               /**/
/**/   include ('views/test_test.php');                 /**/
/**********************************************************/


?>