<html>
<body>
    <form method='post' action='index.php'>

    <label for='id_substance'>Substance</label>
    <select name="id_substance" id="id_substance">

                        <?php foreach ($substance as $obj) {
                            echo "<option value='" . $obj->id_substance . "'>" . $obj->name_substance . "</option>";
                        }
                        ?>
                    </select>


    <label for='T_critical'>Critical Temperature</label>
    <input type='text' name='T_critical' id='T_critical' value='<?php echo $caracterestic->T_critical;?>'>

    <label for='P_critical'>Critical Presure</label>
    <input type='text' name='P_critical' id='P_critical' value='<?php echo $caracterestic->P_critical;?>'>

    <label for='V_critical'>Critical Volume</label>
    <input type='text' name='V_critical' id='V_critical' value='<?php echo $caracterestic->V_critical;?>'>

    <label for='Z_critical'>Critical Z</label>
    <input type='text' name='Z_critical' id='Z_critical' value='<?php echo $caracterestic->Z_critical;?>'>

    <label for='T_boiling'>Boiling Temperature</label>
    <input type='text' name='T_boiling' id='T_boiling' value='<?php echo $caracterestic->T_boiling;?>'>

    <label for='T_melting'>Melting Temperature</label>
    <input type='text' name='T_melting' id='T_melting' value='<?php echo $caracterestic->T_melting;?>'>
   
    <input type='hidden'  name='controller' value='Caracterestic'>
    <input type='hidden' name='action' value='update'>
    <input type='hidden' name='id_caracterestic' value='<?php echo $caracterestic->id_caracterestic;?>'>
    <input type='submit' value='valider'>
    </form>
</body>
</html>