<?php include_once 'includes/db_connect.php';

$query="SELECT libro.id, libro.titolo, libro.copertina, autore.nome AS autorenome, autore.cognome AS autorecognome FROM autore, libro, autore_libro WHERE autore.id=autore_libro.id_autore AND libro.id=autore_libro.id_libro LIMIT 4";

$bound =array();
$stmt= $db-> prepare ($query); //prepara la query
$stmt-> execute(); //eseguisce la query
$num= $stmt-> rowCount();


$libri=array();
    
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

            $id=$row['id'];
            $titolo=$row['titolo'];
            $copertina=$row['copertina'];
            $autorenome=$row['autorenome'];
            $autorecognome=$row['autorecognome'];
            
     

        
    
           $libro=array();
           $libro['id']=$id;
           $libro['titolo']=$titolo;
           $libro['copertina']=$copertina;
           $libro['autorenome']=$autorenome;
           $libro['autorecognome']=$autorecognome;

      
           array_push($libri, $libro);//inserisco gli array di "cliente" in clienti, creando un array associativo

        
           
        
       }
        header('Content-Type: application/x-json');
        echo json_encode($libri);
        exit;

?>