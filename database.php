<?php

	mysqli_report(MYSQLI_REPORT_STRICT);
	date_default_timezone_set("America/Sao_Paulo");
	
	function formataData($data, $formato){
		$d = new DateTime($data);
		return $d->format($formato);
	}
	
	function formataTelefone($fone){
		return "(" . substr($fone,0,2) . ")" . substr($fone,2,5) . "-" . substr($fone,7,4);
	}
	
	function formataCEP($cep){
		return substr($cep,0,5) . "-" . substr($cep,5,3);
	}
	
	function formataCPF($cpf){
		return substr($cpf,0,3) . "-" . substr($cpf,3,3) . "-" . substr($cpf,6,3) . "." . substr($cpf,9,2);
	}
	
	function open_database() {
		try {
			$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$conn -> set_charset("utf8");
			return $conn;
		} catch (Exception $e) {
			echo "<h3>Aconteceu um erro: " . $e->getMessage() . "</h3>";
			return null;
		}
	}

	function close_database($conn) {
		try {
			mysqli_close($conn);
		} catch (Exception $e) {
			echo "<h3>Aconteceu um erro: " . $e->getMessage() . "</h3>";
		}
	}
	
	/**
	 *  Pesquisa um Registro pelo ID em uma Tabela
	 */
	function find( $table = null, $id = null ) {
	  
		$database = open_database();
		$found = null;

		try {
		  if ($id) {
			$sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
			$result = $database->query($sql);
			
			if ($result->num_rows > 0) {
			  $found = $result->fetch_assoc();
			}
			
		  } else {
			
			$sql = "SELECT * FROM " . $table;
			$result = $database->query($sql);
			// echo $sql;
			if ($result->num_rows > 0) {
			  $found = $result->fetch_all(MYSQLI_ASSOC);
			
			/* Metodo alternativo
			$found = array();
			while ($row = $result->fetch_assoc()) {
			  array_push($found, $row);
			} */
			}
		  }
		} catch (Exception $e) {
		  $_SESSION['message'] = $e->GetMessage();
		  $_SESSION['type'] = 'danger';
	  }
		
		close_database($database);
		return $found;
	}
	
	/**
	 *  Pesquisa Todos os Registros de uma Tabela
	 */
	function find_all( $table ) {
	  return find($table);
	}
	
	/**
	 *  Insere um registro no BD
	 */
	function save($table = null, $data = null) {

	  $database = open_database();

	  $columns = null;
	  $values = null;

	  //print_r($data);

	  foreach ($data as $key => $value) {
		$columns .= trim($key, "'") . ",";
		$values .= "'$value',";
	  }

	  // remove a ultima virgula
	  $columns = rtrim($columns, ',');
	  $values = rtrim($values, ',');
	  
	  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

	  try {
		$database->query($sql);

		$_SESSION['message'] = "Registro cadastrado com sucesso.";
		$_SESSION['type'] = "success";
	  
	  } catch (Exception $e) { 
	  
		$_SESSION['message'] = "Não foi possível realizar a operação:" . $e->GetMessage();
		$_SESSION['type'] = "danger";
	  } 

	  close_database($database);
	}
	
	/**
	 *  Atualiza um registro em uma tabela, por ID
	 */
	function update($table = null, $id = 0, $data = null) {

	  $database = open_database();

	  $items = null;

	  foreach ($data as $key => $value) {
		$items .= trim($key, "'") . "='$value',";
	  }

	  // remove a ultima virgula
	  $items = rtrim($items, ',');

	  $sql  = "UPDATE " . $table;
	  $sql .= " SET $items";
	  $sql .= " WHERE id=" . $id . ";";

	  try {
		$database->query($sql);

		$_SESSION['message'] = "Registro cadastrado com sucesso.";
		$_SESSION['type'] = "success";
	  
	  } catch (Exception $e) { 
	  
		$_SESSION['message'] = "Não foi possível realizar a operação:" . $e->GetMessage();
		$_SESSION['type'] = "danger";
	  } 

	  close_database($database);
	}
	
	/**
	 *  Remove uma linha de uma tabela pelo ID do registro
	 */
	function remove($table = null, $id = null) {

	  $database = open_database();
		
	  try {
		if ($id) {

		  $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
		  $result = $database->query($sql);

		  if ($result = $database->query($sql)) {   	
			$_SESSION['message'] = "Registro Removido com Sucesso.";
			$_SESSION['type'] = "success";
		  }
		}
	  } catch (Exception $e) { 

		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = "danger";
	  }

	  close_database($database);
	}
	
	function filter( $table = null, $p = null ) {
	
		$database = open_database();
		$found = null;
		
		try {
			if ($p) {
				$sql = "SELECT * FROM " . $table . " WHERE " . $p;
				$result = $database->query($sql);
				if ($result->num_rows > 0) {
					$found = array();
					while ($row = $result->fetch_assoc()) {
					  array_push($found, $row);
					}
				} else {
					throw new Exception("Não foram encontrados registros de dados!");
				}
			}
			
		} catch (Exception $e) {
			$_SESSION ['message'] = "Ocorreu um erro: " . $e->Get_Message();
			$_SESSION ['type'] = "danger";
		}
			
			close_database($database);
			return $found;
	}
			
					
?>