<?php
    require_once '../modelos/Departamento.php';
    $departamento = new Departamento();

    //============== MOSTRAR ================
   /* $var = $departamento->mostrar('9');
    var_dump($var);*/

    //==================== LISTAR =====================
   /* $var = $departamento->listar();
    echo "Registros listar, no filtra registros inactivos <br>";
    var_dump($var);

    while ($reg=$var->fetch_object()){
        var_dump($reg);
        echo'<br>';
    }*/

    //============== SELECCIONAR =====================
   /* $var = $departamento->select();
    echo "Registros select,  filtra registros inactactivos <br>";
    var_dump($var);

    while ($reg=$var->fetch_object()){
        var_dump($reg);
        echo'<br>';
        echo'<br>';
    }*/

    //================== AGREGAR ===============
    /*$id01 = $departamento->insertar("Sistemas");
    echo "id del departamento: $id01 <br>";

    $id02 = $departamento->insertar("Ventas");
    echo "id del departamento: $id02 <br>";

    $id03 = $departamento->insertar("Marketing");
    echo "id del departamento: $id03 <br>";

    $id04 = $departamento->insertar("Sistemas");
    echo "id del departamento: $id04 <br>";

    $id05 = $departamento->insertar("Logistica");
    echo "id del departamento: $id05 <br>";*/

    //============ ACTUALIZAR ======================
    /*$updateDate=date("Y-m-d H:i:s");
    $departamento->editar('1', "Finanzas", $updateDate, '3');*/

    //================ DESACTIVAR ====================
    /*$departamento->desactivar('6');
    $departamento->desactivar('7');*/

    //=========== ACTIVAR ====================
    /*$departamento->activar('6');
    $departamento->activar('7');*/
?>