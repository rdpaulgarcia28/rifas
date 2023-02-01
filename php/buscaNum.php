<?php 


$value_buscaNum = $_GET["buscaNum"];


require("conexion.php");
$conexion = mysqli_connect($db_hostname,$db_user,$db_password,$db_name,$db_port);
if(mysqli_connect_errno()){
    echo "FALLO AL CONECTAR LA BASE DE DATOS";
    exit();
}
mysqli_select_db($conexion,$db_name) or die("NO SE ENCUENTRA LA BASE DE DATOS");
mysqli_set_charset($conexion,"utf8");

echo "TODO BIEN <br>";
echo "$value_buscaNum";

$query_product = "INSERT INTO informacion_clientes (pagado, product_code, inventory_number, product_price, product_unit, category_product) VALUES ('$name_product','$code_product',$inventory_quantity,$price_product,$units_product,'$category_product')";

$result = mysqli_query($conexion,$query_product);

if ($result === false) {
    echo "ERROR AL ENVIAR DATOS <br>";
}else{
    echo "LOS DATOS SE GUARDARON CORRECTAMENTE: <br>";
}

?>