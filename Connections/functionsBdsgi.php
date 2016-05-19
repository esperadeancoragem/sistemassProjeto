<?php
// Selecione Funcionários
function DBSelFunc($table, $params = null, $fields = '*'){
	$params = ($params) ? " {$params}" : null;
	$query = "SELECT {$fields} FROM {$table}{$params}";
	$result = DBExecute($query);
	
	if(!mysqli_num_rows($result)){
		return false;
	}else{
		while ($res = mysqli_fetch_assoc($result)){
			$data[] = $res;
		}
		return $data;
	}
	
} 


	
//Executa
	function DBExecute($query){
	$link = DBConnect();
	$resut = @mysqli_query($link, $query) or die(mysqli_error($link));
	
	DBClose($link);
	
	return $resut;
	}
?>