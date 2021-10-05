<?php
include "includes/connexion.php";
include "classes/substanceClass.php";

isset($_REQUEST['id_substance'])?$id_substance=$_REQUEST['id_substance']:$id_substance="";
isset($_POST['name_substance'])?$name_substance=$_POST['name_substance']:$name_substance="";
isset($_POST['formula_substance'])?$formula_substance=$_POST['formula_substance']:$formula_substance="";
isset($_POST['formula_weight'])?$formula_weight=$_POST['formula_weight']:$formula_weight="";

$s= new substances ($id_substance, $name_substance, $formula_substance, $formula_weight);

switch($_REQUEST['action']){
    case 'list':
        $substanceListe= $s->select($cnx);
        include "views/substances/list_substance.php";
    break;

    case 'prepareAdd':
        include "views/substances/add_substance.php";
    break;

    case 'add':
        $s->add($cnx);
        echo "<script>window.location.href='index.php?controller=Substance&action=list'</script>";   
    break;

    // case 'prepareUpdate':
    //     $substance=$s->prepareUpdate($cnx);
    //     include "views/substances/edit_substance.php";
    // break;

    case 'update':
        $s->update($cnx);
        echo "<script>window.location.href='index.php?controller=Substance&action=list'</script>";
    break;

    case 'delete':
        $s->delete($cnx);
        echo "<script>window.location.href='index.php?controller=Substance&action=list'</script>";
    break;

    default:
    echo "<script>window.location.href='index.php?controller=Substance&action=list'</script>";
    break;
}
