<?php
//api coté serveur

require 'PDO.php';
$message = '';

if(isset($_POST['token']))
{


    if($_POST['token'] == 12345)
        {

        
            if(isset($_POST['Nom']))
            {
                $requete="SELECT * FROM groupes WHERE Nom = '".$_POST ['Nom']."'";
                $req =$pdo->prepare($requete);
                $req->execute();
                $groupes=$req->fetch();
                
                if(empty($groupes))
                {                                   
                    $sql="UPDATE groupes SET Nom='".$Nom."' WHERE id=".$id;
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute([$_PUT['Nom']]);

                    $message = 'le groupe a bien été Update';
                }else
              
                $message = 'le groupe existe deja';
            }
            else 
            {
                $message = 'Acces interdit, erreur token.';
            }
        }
        else
        {
            $message = 'Acces interdit, token manquant.';
        }
    
}        
$req = array();
$req['message'] = $message;


echo json_encode($req);

