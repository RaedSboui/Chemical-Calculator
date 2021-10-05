<?php

class caracterestic
{
  private $id_caracterestic;
  private $T_critical;
  private $P_critical;
  private $V_critical;
  private $Z_critical;
  private $T_boiling;
  private $T_melting;
  private $id_substance;
  


  public function __construct($id_caracterestic=null, $T_critical=null, $P_critical=null, $V_critical=null,$Z_critical=null, $T_boiling=null,$T_melting=null, $id_substance=null)
  {
    $this->id_caracterestic=$id_caracterestic;
    $this->T_critical=$T_critical;
    $this->P_critical=$P_critical;
    $this->V_critical=$V_critical;
    $this->Z_critical=$Z_critical;
    $this->T_boiling=$T_boiling;
    $this->T_melting=$T_melting;
    $this->id_substance=$id_substance;
  }  

    
  public function select($cnx)
  {
    $result=$cnx->prepare("SELECT * FROM caracterestics c, substances s WHERE c.id_substance=s.id_substance");
    $result->execute();
    return $result->fetchall(PDO::FETCH_OBJ);
  }
  


  public function add($cnx)
  {
    $result=$cnx->prepare("INSERT INTO caracterestics (T_critical,P_critical,V_critical,Z_critical,T_boiling,T_melting,id_substance)
     VALUES (:T_critical, :P_critical, :V_critical, :Z_critical, :T_boiling, :T_melting, :id_substance)");

    $result->bindParam(':T_critical', $this->T_critical);
    $result->bindParam(':P_critical', $this->P_critical);
    $result->bindParam(':V_critical', $this->V_critical);
    $result->bindParam(':Z_critical', $this->Z_critical);
    $result->bindParam(':T_boiling', $this->T_boiling);
    $result->bindParam(':T_melting', $this->T_melting);
    $result->bindParam(':id_substance', $this->id_substance);
    
    if($result->execute())
    {
      $_SESSION['message']= "Caracterestics have been notified! ";
      $_SESSION['msg_type']= "success";
    }
    else
    {
      $_SESSION['message']= "ERROR : You have to select Substance!";
      $_SESSION['msg_type']= "warning";
    }
  }


  

  public function prepareUpdate($cnx)
  {
    $result=$cnx->prepare("SELECT * FROM caracterestics c, substances s WHERE  id_caracterestic='".$this->id_caracterestic."'");
    $result->execute();
    return $result->fetch(PDO::FETCH_OBJ);
  }




  public function update($cnx)
  {
    $result=$cnx->prepare("UPDATE caracterestics SET T_critical=:T_critical, P_critical=:P_critical, V_critical=:V_critical, Z_critical=:Z_critical, T_boiling=:T_boiling, T_melting=:T_melting, id_substance=:id_substance
    WHERE id_caracterestic=:id_caracterestic");

    $result->bindParam(':T_critical', $this->T_critical);
    $result->bindParam(':P_critical', $this->P_critical);
    $result->bindParam(':V_critical', $this->V_critical);
    $result->bindParam(':Z_critical', $this->Z_critical);
    $result->bindParam(':T_boiling', $this->T_boiling);
    $result->bindParam(':T_melting', $this->T_melting);
    $result->bindParam(':id_substance', $this->id_substance);
    $result->bindParam(':id_caracterestic', $this->id_caracterestic);
    if($result->execute())
    {
      $_SESSION['message']= "Changes have been saved! ";
      $_SESSION['msg_type']= "success";
    }
  }



   public function delete($cnx)
   {
    
     $result=$cnx->prepare("DELETE FROM caracterestics WHERE id_caracterestic=:id_caracterestic");
     $result->bindParam(':id_caracterestic', $this->id_caracterestic);
      if($result->execute())
      {
        $_SESSION['message']= "Caracterestics has been deleted! ";
        $_SESSION['msg_type']= "danger";
      }
      else
      {
        $_SESSION['message']= "ERROR : Cannot delete caracterestics!";
        $_SESSION['msg_type']= "warning";
      }
    }
  }
  ?>
 