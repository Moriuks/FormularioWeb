<?Php
if(isset($_POST['submit'])){
    require_once("db.php");
    $sql = $conn->prepare("INSERT INTO General (
        proyecto,
        empresa,
        repLegal,
        cargoRepresentante,
        contacto,
        puesto,
        telefono,
        correo,
        descripcion,
        alcance,
        mInvolucrado,
        fecha_inicio,
        fecha_termino,
        complejidad,
        entregables,
        actsRealizar,
        recursosRequeridos,
        a1Nombre,
        a1Apellido,
        a2Nombre,
        a2Apellido,
        a3Nombre,
        a3Apellido,
        a4Nombre,
        a4Apellido,
        recursos,
        archivo
    )
    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $proyecto = $_POST['proyecto'];
    $empresa = $_POST['empresa'];
    $repLegal = $_POST['repLegal'];
    $cargoRepresentante = $_POST['cargoRepresentante'];
    $puesto = $_POST['puesto'];
    $contacto = $_POST['contacto'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $alcance = $_POST['alcance'];
    $descripcion = $_POST['descripcion'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $mInvolucrado = $_POST['mInvolucrado'];
    $complejidad = $_POST['complejidad'];
    $fecha_termino = $_POST['fecha_termino'];
    $actsRealizar = $_POST['actsRealizar'];
    $entregables = $_POST['entregables'];
    $recursosRequeridos = $_POST['recursosRequeridos'];
    $a1Nombre = $_POST['a1Nombre'];
    $a2Nombre = $_POST['a2Nombre'];
    $a1Apellido = $_POST['a1Apellido'];
    $a2Apellido = $_POST['a2Apellido'];
    $a3Nombre = $_POST['a3Nombre'];
    $a3Apellido = $_POST['a3Apellido'];
    $a4Nombre = $_POST['a4Nombre'];
    $a4Apellido = $_POST['a4Apellido'];
    $recursos = $_POST['recursos'];
    $archivo = $_POST['archivo'];

    
    $sql->bind_param("sssssssssssssssssssssssssss", 
    $proyecto, 
    $empresa, 
    $repLegal,
    $cargoRepresentante,
    $contacto,
    $puesto,
    $telefono,
    $correo,
    $descripcion,
    $alcance,
    $mInvolucrado,
    $fecha_inicio,
    $fecha_termino,
    $complejidad,
    $entregables,
    $actsRealizar,
    $recursosRequeridos,
    $a1Nombre,
    $a1Apellido,
    $a2Nombre,
    $a2Apellido,
    $a3Nombre,
    $a3Apellido,
    $a4Nombre,
    $a4Apellido,
    $recursos,
    $archivo
);
    if($sql->execute()){
        $succes_message = "Dado de alta exitosamente";
    }else{
        $error_message = "Hubo un problema agregando el record";
    }
    $sql->close();
    $conn->close();
}

?>