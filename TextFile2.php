<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Problema</title>
</head>
<body>
<?php
// Abriendo el archivo en modo append para agregar los datos al final
$ar = fopen("archivo.txt", "a") or die("Error al abrir archivo");

fputs($ar, $_POST['nombre']);
fputs($ar, "\n");
fputs($ar, $_POST['direccion']);
fputs($ar, "\n");

// verificar si los checkboxes están marcados antes de agregar
if(isset($_POST['jamon_queso'])){
    fputs($ar, "jamon y queso: si");
}else{
    fputs($ar, "jamon y queso: no");
}
fputs($ar, "\n");
fputs($ar, $_POST['cantidadJQ']);
fputs($ar, "\n");


if(isset($_POST['Napolitana'])){
    fputs($ar, "Napolitana: si");
}else{
    fputs($ar, "Napolitana: no");
}
fputs($ar, "\n");
fputs($ar, $_POST['cantidadNap']);
fputs($ar, "\n");

if(isset($_POST['Muzzarella'])){
    fputs($ar, "Muzzarella: si");
}else{
    fputs($ar, "Muzzarella: no");
}
fputs($ar, "\n");
fputs($ar, $_POST['cantidadMuz']);
fputs($ar, "\n");


fputs($ar, "--------------------------------------------------------------------------");
fputs($ar, "\n");
fclose($ar);

echo "Los datos se cargaron correctamente.";
?>
</body>
</html>