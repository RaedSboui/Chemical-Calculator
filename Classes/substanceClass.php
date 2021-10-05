<?php

class substances
{
  private $id_substance;
  private $name_substance;
  private $formula_substance;
  private $formula_weight;



  public function __construct($id_substance = null, $name_substance = null, $formula_substance = null, $formula_weight = null)
  {
    $this->id_substance = $id_substance;
    $this->name_substance = $name_substance;
    $this->formula_substance = $formula_substance;
    $this->formula_weight = $formula_weight;
  }


  public function select($cnx)
  {
    $result = $cnx->prepare("SELECT * FROM substances");
    $result->execute();
    return $result->fetchall(PDO::FETCH_OBJ);
  }

  public function add($cnx)
  {
    $result = $cnx->prepare("INSERT INTO substances (name_substance, formula_substance, formula_weight)
    VALUES (:name_substance, :formula_substance, :formula_weight)");

    $result->bindParam(':name_substance', $this->name_substance);
    $result->bindParam(':formula_substance', $this->formula_substance);
    $result->bindParam(':formula_weight', $this->formula_weight);
    
    if($result->execute())
    {
      $_SESSION['message']= "Caracterestics have been notified! ";
    $_SESSION['msg_type']= "success";
    }
   
  }

  public function prepareUpdate($cnx)
  {
    $result = $cnx->prepare("SELECT * FROM substances WHERE id_substance='" . $this->id_substance . "'");
    $result->execute();
    return $result->fetch(PDO::FETCH_OBJ);
  }

  public function update($cnx)
  {
    $_SESSION['message']= "Changes have been saved! ";
    $_SESSION['msg_type']= "success";

    $result = $cnx->prepare("UPDATE substances SET name_substance=:name_substance, 
    formula_substance=:formula_substance, formula_weight=:formula_weight
    WHERE id_substance=:id_substance");

    $result->bindParam(':id_substance', $this->id_substance);
    $result->bindParam(':name_substance', $this->name_substance);
    $result->bindParam(':formula_substance', $this->formula_substance);
    $result->bindParam(':formula_weight', $this->formula_weight);
    $result->execute();
  }

  public function delete($cnx)
  {
    
    
    $result = $cnx->prepare("DELETE FROM substances WHERE id_substance=:id_substance");
    $result->bindParam(':id_substance', $this->id_substance);
    if($result->execute()){
      $_SESSION['message']= "Substance has been deleted! ";
      $_SESSION['msg_type']= "danger";
    }
    else{
      $_SESSION['message']= "Cannot delete a parent row it was referenced for caracterestics";
      $_SESSION['msg_type']= "warning";
    }
  }
}
