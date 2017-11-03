<?php include_once 'includes/db_connect.php';

$post = json_decode(file_get_contents("php://input"));


$username = $post->utente;
$password = $post->password;

$query="SELECT utente.id, utente.email, utente.password FROM utente WHERE utente.email=? AND utente.password=?";
$bound =array($username,$password);
$stmt= $db-> prepare ($query); //prepara la query
$stmt-> execute($bound); //eseguisce la query
$num= $stmt-> rowCount();




if($num==1){
       
       $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
           $id=$row['id'];    
           $email=$row['email'];
           $password=$row['password'];
           $accesso=array("esito"=>true);
           $accesso['id']=$id;  
           $accesso['email']=$email;
           $accesso['password']=$password;
          

           
       
           header('Content-Type: application/x-json');
           echo json_encode($accesso);
           
           exit;
       }
       else
       {
           header('Content-Type: application/x-json');
           $accesso=array("esito"=>false);
           echo json_encode($accesso);
           exit;
       }

       
?>