<?php 
include "includes/connexion.php";
include "classes/userClass.php";
   
isset($_REQUEST['id_user'])?$id_user=$_REQUEST['id_user']:$id_user="";
isset($_POST['firstName_user'])?$firstName_user=$_POST['firstName_user']:$firstName_user="";
isset($_POST['lastName_user'])?$lastName_user=$_POST['lastName_user']:$lastName_user="";
isset($_POST['email_user'])?$email_user=$_POST['email_user']:$email_user="";
isset($_POST['password_user'])?$password_user=sha1($_POST['password_user']):$password_user="";
isset($_REQUEST['user_type'])?$user_type=$_REQUEST['user_type']:$user_type="";

//script the password
if(isset($_POST['old_password_user']) && empty($password_user))
$password_user=$_POST['old_password_user'];


if(isset($_FILES['user_photo']['tmp_name'])){
    $name=$_FILES['user_photo']['name'];

    //recupérer l'extension du fichier
    $tab=explode('.',$name);
    $ext=$tab[sizeof($tab)-1];

    //préparer une chaine aléatoire
    $nom_fichier=chaine(8);
    //changer le nom du fichier par un nom unique
    $name= $nom_fichier.".".$ext;
    copy($_FILES['user_photo']['tmp_name'],"images/".$name);
}
else
{
    $name="";
}


$u=new users($id_user,$firstName_user,$lastName_user,$email_user,$password_user,$name,$user_type);

switch($action){

    case 'list':
        $users=$u->select($cnx);
        include "views/users/list_user.php";
    break;

    case 'prepareAdd':
        include "views/users/add_user.php";
    break;

    case 'add':
        $u->add($cnx);
        echo "<script>window.location.href='index.php?controller=User&action=list';</script>";
    break;


    case 'prepareUpdate':
        $user=$u->prepareUpdate($cnx);
        include "views/users/edit_user.php";
    break;


    case 'update':
        $u->update($cnx);
        echo "<script>window.location.href='index.php?controller=User&action=list';</script>";
    break;


    case 'delete':
        $u->delete($cnx);
        echo "<script>window.location.href='index.php?controller=User&action=list';</script>";
    break;

    case 'prepareLogin':
        include "views/users/login_user.php";
    break;

    case 'login':
        $user=$u->login($cnx);
        if($user)
        {
	        $_SESSION['user']=$user;
	        echo "<script>window.location.href='index.php';</script>";
	    }
	    else
        {
	        echo "<script>window.location.href='login.php';</script>";
	    }
    break;

    default:
        echo "<script>window.location.href='index.php?controller=User&action=list';</script>";
    break;
}
?>