<?php 
if (isset($_GET['id'])){
	include('database.php');
	$cliente = new Database();
	$id=intval($_GET['id']);
	$res = $cliente->delete($id);
	if($res){
		echo "<script>window.location='index.php';</script>";
	}else{
		echo "Error al eliminar el registro";
	}
}
?>