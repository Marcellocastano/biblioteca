<?php

ini_set("Display_errors",true); //far vedere a video tutti gli errori (anche quelli mascherati);
error_reporting(E_ALL);
$host = 'localhost';

                    $nomedatabase= 'biblioteca';
                    $nomeutente= 'root';
                    $password= '';
            
                        try {
                            $db = new PDO('mysql:host='.$host.';port=3306;dbname='.$nomedatabase.';charset=utf8', $nomeutente, $password);
            
                            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                            $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
                            $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
                        }
                        catch( PDOException $Exception ) {
                            var_dump($Exception->getMessage());
                                die('Errore nella connessione al mysql');
                        }

                    ?>