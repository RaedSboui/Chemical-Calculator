<?php
class users
{
  private $id_user;
  private $firstName_user;
  private $lastName_user;
  private $email_user;
  private $password_user;
  private $user_photo;
  private $user_type;



  public function __construct($id_user=null, $firstName_user=null, $lastName_user=null, $email_user=null, $password_user=null, $user_photo=null, $user_type=null)
  {
    $this->id_user = $id_user;
    $this->firstName_user = $firstName_user;
    $this->lastName_user = $lastName_user;
    $this->email_user = $email_user;
    $this->password_user = $password_user;
    $this->user_photo = $user_photo;
    $this->user_type = $user_type;
   }

   public function select($cnx)
   {
        $result=$cnx->prepare("SELECT * FROM users");
        $result->execute();
        return $result->fetchall(PDO::FETCH_OBJ);
    }
 

    public function add($cnx)
    {
        $result = $cnx->prepare("INSERT INTO users (firstName_user, lastName_user, email_user, password_user, user_photo, user_type)
                            VALUES (:firstName_user, :lastName_user, :email_user, :password_user, :user_photo, :user_type)");

        $result->bindParam(':firstName_user', $this->firstName_user);
        $result->bindParam(':lastName_user', $this->lastName_user);
        $result->bindParam(':email_user', $this->email_user);
        $result->bindParam(':password_user', $this->password_user);
        $result->bindParam(':user_photo', $this->user_photo);
        $result->bindParam(':user_type', $this->user_type);
        if($result->execute())
        {
            $_SESSION['message']= "User been notified ! ";
            $_SESSION['msg_type']= "success";
        }
    }



    public function prepareUpdate($cnx)
    {
        $result = $cnx->prepare("SELECT * FROM users WHERE id_user='" . $this->id_user . "'");
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }


    public function update($cnx)
    {
        $result = $cnx->prepare("UPDATE users SET firstName_user=:firstName_user, lastName_user=:lastName_user, email_user=:email_user,
         password_user=:password_user, user_photo=:user_photo, user_type=:user_type WHERE id_user=:id_user");

        $result->bindParam(':id_user', $this->id_user);
        $result->bindParam(':firstName_user', $this->firstName_user);
        $result->bindParam(':lastName_user', $this->lastName_user);
        $result->bindParam(':email_user', $this->email_user);
        $result->bindParam(':password_user', $this->password_user);
        $result->bindParam(':user_photo', $this->user_photo);
        $result->bindParam(':user_type', $this->user_type);
        if($result->execute())
        {
            $_SESSION['message']= "User been notified ! ";
            $_SESSION['msg_type']= "success";
        }
    }


    public function delete($cnx)
    {
        $result = $cnx->prepare("DELETE FROM users WHERE id_user=:id_user");
        $result->bindParam(':id_user', $this->id_user);
        if($_SESSION['user']->user_type =="user")
        {
            if($this->user_type != "user"){
                $_SESSION['message']= "You Can not Delete Admin !";
                $_SESSION['msg_type']= "warning";
            }
            else
            {
                $_SESSION['message']= "Only Admin Can Delete user !";
                $_SESSION['msg_type']= "warning";
            }
        }
        else if($_SESSION['user']->user_type =="super_admin")
        {
            if($result->execute())
            {
                $_SESSION['message']= "User has been deleted ! ";
                $_SESSION['msg_type']= "danger";
            }
        }
        else
        {
            if($this->user_type == "user")
            {
                if($result->execute())
                {
                    $_SESSION['message']= "User has been deleted ! ";
                    $_SESSION['msg_type']= "danger";
                }   
            }
            else if($this->user_type == "admin")
            {
                $_SESSION['message']= "Only Super Admin Can Delete Admin !";
                $_SESSION['msg_type']= "warning";
            }
            else
            {
                $_SESSION['message']= "You Can not Delete Super Admin !";
                $_SESSION['msg_type']= "warning";
            }
        }
    }


    public function login($cnx)
    {
        $user = $cnx->prepare("SELECT * FROM users WHERE email_user='".$this->email_user."' AND password_user='".$this->password_user."'");
        $user->execute();
        return $user->fetch(PDO::FETCH_OBJ);
    }

}


function chaine($taille){
    $ch="abcdefghijklmnopqrstuvwyz1234567890";
    $c="";
    for($i=0;$i<$taille;$i++){
        $position=rand(0,strlen($ch)-1);
        $c.=$ch[$position];
    }
    return $c;
}

 ?>
