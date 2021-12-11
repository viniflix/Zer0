<?php
	
	if(!empty($_GET['cliente_id']))
	{
		include_once('../../bd/conexao.php');

		$cliente_id = $_GET['cliente_id'];

		$sqlSelect = "SELECT * FROM cliente WHERE cliente_id=$cliente_id";

		$result = $conexao->query($sqlSelect);

		if($result->num_rows > 0)
		{
			$sqlDelete = "DELETE * FROM cliente WHERE cliente_id=$cliente_id"
			$resultDelete = $conexao->query($sqlDelete);
		}
	}
	header("Location: index.php");


?>