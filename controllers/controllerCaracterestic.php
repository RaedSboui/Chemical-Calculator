<?php
include "includes/connexion.php";
include "classes/caracteresticClass.php";
include "classes/substanceClass.php";

isset($_REQUEST['id_caracterestic'])?$id_caracterestic=$_REQUEST['id_caracterestic']:$id_caracterestic="";
isset($_POST['T_critical'])?$T_critical=$_POST['T_critical']:$T_critical="";
isset($_POST['P_critical'])?$P_critical=$_POST['P_critical']:$P_critical="";
isset($_POST['V_critical'])?$V_critical=$_POST['V_critical']:$V_critical="";
isset($_POST['Z_critical'])?$Z_critical=$_POST['Z_critical']:$Z_critical="";
isset($_POST['T_boiling'])?$T_boiling=$_POST['T_boiling']:$T_boiling="";
isset($_POST['T_melting'])?$T_melting=$_POST['T_melting']:$T_melting="";
isset($_POST['id_substance'])?$id_substance=$_POST['id_substance']:$id_substance="";

$c= new caracterestic ($id_caracterestic, $T_critical, $P_critical, $V_critical, $Z_critical, $T_boiling, $T_melting, $id_substance);
$s= new substances ('', '', '', '');

switch($_REQUEST['action']){
    case 'list':
        $caracteresticListe= $c->select($cnx);
        $substance=$s->select($cnx);
        include "views/caracterestics/list_caracterestic.php";
    break;

    case 'prepareAdd':
        $substance=$s->select($cnx);
        include "views/caracterestics/add_caracterestic.php";
    break;

    case 'add':
        $c->add($cnx);
        echo "<script>window.location.href='index.php?controller=Caracterestic&action=list'</script>";
    break;

    // case 'prepareUpdate':
    //     $caracterestic=$c->prepareUpdate($cnx);
    //     $substance=$s->select($cnx);
    //     include "views/caracterestics/edit_caracterestic.php";
    // break;

    case 'update':
        $c->update($cnx);
        echo "<script>window.location.href='index.php?controller=Caracterestic&action=list'</script>";
    break;

    case 'delete':
        $c->delete($cnx);
        echo "<script>window.location.href='index.php?controller=Caracterestic&action=list'</script>";
    break;
 
    default:
        echo "<script>window.location.href='index.php?controller=Caracterestic&action=list'</script>";
    break;
}
?>