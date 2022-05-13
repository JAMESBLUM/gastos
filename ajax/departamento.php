<?php
    require_once "../modelos/Departamento.php";
    $departamento = new Departamento();

    $idDepartamento = isset($_POST['idDepartamento'])?limpiarCadenas($_POST['idDepartamento']):"";
    $descripcion = isset($_POST['descripcion'])?limpiarCadenas($_POST['descripcion']):"";
    $fechaActualizacion=date("Y-m-d H:i:s");
    $idEmpleadoActualiza= 1; //cambiar por el usuario de la sesion.


    switch ($_GET["op"]){
        case "listar":
            //Implementación de la función listar
            $rspta= $departamento->listar();
            $data=Array();
            while($reg=$rspta->fetch_object()){
                $data[]=array(
                    "0"=>($reg->activo)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idDepartamento.')"><i 
                    class="far fa-edit"></i></button>'.
                    '<button class="btn btn-danger" onclick="desactivar('.$reg->idDepartamento.')"><i class="far 
                    fa-window-close"></i></button>':'<button class="btn btn-warning" onclick="mostrar('.$reg->idDepartamento.')"><i
                    class="far fa-edit"></i></button>'.
                    '<button class="btn btn-primary" onclick="activar('.$reg->idDepartamento.')"><i class="far 
                    fa-check-square"></i></button>',
                    "1"=>$reg->descripcion,
                    "2"=>$reg->fechaCreacion,
                    "3"=>$reg->fechaActualizacion,
                    "4"=>($reg->activo)?'<span class="badge badge-success">Activado</span>':'<span class="badge badge-danger">Desactivado</span>',
                    "5"=>$reg->idEmpActualiza,
                );
            }
            $results=array(
                "sEcho"=>1, //Información para el datatables
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

        case 'guardaryeditar':
            if(empty($idDepartamento)){
               $rspta = $departamento->insertar($descripcion);
               echo $rspta!=0?"Departamento registrado":"Error 
               departamento no registrado";
            }else{
                $rspta = $departamento->editar($idDepartamento, $descripcion, 
                $fechaActualizacion, $idEmpleadoActualiza);
                echo $rspta!=0?"Departamento actualizado":"Error 
                departamento no actualizado";
            }
            break;
    }
?>