<?php


//varible isset valida si la informacion tiene algo o eta vacio.
$txtID=(isset( $_POST['txtID']))? $_POST['txtID']:""; //aca voy a validar que la informacion llegue
$txtID=(isset( $_POST['txtNombre']))? $_POST['txtNombre']:"";
$txtID=(isset( $_POST['txtApellidoM']))? $_POST['txtApellidoM']:"";
$txtID=(isset( $_POST['txtApellidoP']))? $_POST['txtApelldioP']:"";
$txtID=(isset( $_POST['txtCorreo']))? $_POST['txtCorreo']:"";
$txtID=(isset( $_POST['txtFoto']))? $_POST['txtFoto']:"";


$accion=$txtID=(isset( $_POST['accion']))? $_POST['accion']:"";

include ("../conexion/conexion.php");


//evaluo con un sw que es lo que preciona el usuario:

switch($accion){
    case "btnAgregar":
        //creamos un objeto apartir de la sentencia pdo
        $sentencia=$pdo->prepare("INSERT INTO empleados (Nombre,ApellidoM,ApellidoP,Correo,Foto)
        VALUES (:Nombre,:ApellidoM,:ApellidoP,:Correo,:Foto)");

        $sentencia->bindParam(':Nombre',$txtNombre);
        $sentencia->bindParam(':ApellidoM',$txtApellidoM);
        $sentencia->bindParam(':ApellidoP',$txtApellidoP);
        $sentencia->bindParam(':Correo',$txtCorreo);
        $sentencia->bindParam(':Foto',$txtFoto);
        $sentencia->execute();


        echo $txtID;
     echo "Presionaste btnAgregar";
        break;

         case "btnModificar":
             echo $txtID;
            echo "Presionaste btnModificar";
            break;

                case "btnEliminar":
                     echo $txtID;
                    echo "Presionaste btnEliminar";
                     break;

                            case "btnCancelar":
                                 echo $txtID;
                                echo "Presionaste btnCancelar";
                             break;

}







?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud con php y mysql</title>

    <link rel="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <form action="" method="post" enctype="multipart/form-data">
        <label for="">ID:</label><input type="text" name="textID  " placeholder="" id="text1" require=""><br>
        <label for="">Nombre:</label><input type="text" name="textNombre" placeholder="" id="text2" require=""><br>
        <label for="">ApellidoM:</label><input type="text" name="textApellidoM" placeholder="" id="text3" require=""><br>
        <label for="">ApellidoP:</label><input type="text" name="textApellidoP" placeholder="" id="text4" require=""><br>
        <label for="">Correo:</label><input type="text" name="textCorreo" placeholder="" id="text5" require=""><br>
        <label for="">Foto:</label><input type="text" name="textFoto" placeholder="" id="text6" require=""><br>


       <button value="btnAgregar" type="submit" name="accion">AGREGAR</button>
       <button value="btnModificar" type="submit" name="accion">MODIFICAR</button>
       <button value="btnEliminar" type="submit" name="accion">ELIMINAR</button>
       <button value="btnCancelar" type="submit" name="accion">CANCELAR</button>

        </form>
    </div>
</body>
</html>



<!-- method= "post" => ES UN METODO PARA RECIBIR INFORMACION QUE EL USUARIO RECIBE-->

<!-- enctype=""multipart/form-data" ">ESTE ATRIBUTO DEL FORMULARIO VA HACER QUE CUANDO LA INFORMACION CONTENGA UNA IMAGEN  AUTOMATICAMENTE SE PUEDA  RECEPCIONAR,si la evitamos no vamos a poder recepcionr la foto que el usuario nos envie -->