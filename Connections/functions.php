 <?php
// Selecione Usuários
function DBSelUsers($table, $params = null, $fields = '*'){
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

// Selecione Prioriedades
function DBSelPrioriedades($table, $params = null, $fields = '*'){
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
//Atualiza Tarefas Comuns
function DBUpdataTarefComuns($table, array $data, $where = null){
    foreach ($data as $key => $value) {
        $fields[] = "{$key} = '{$value}'";
    }
    $fields = implode(', ', $fields);
    $where = ($where) ? " WHERE {$where}" : null;
    
    $query = "UPDATE {$table} SET {$fields}{$where}";
    return DBExecute($query); 
}

// Selecione Tarefas Comuns
function DBSelTarefasComuns($table, $params = null, $fields = '*'){
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

// Selecione Construtoras
function DBSelConstrutoras($table, $params = null, $fields = '*'){
	$params = ($params) ? " {$params}" : null;
	$query = "SELECT {$fields} FROM {$table}{$params} Order By nomeConstru ";
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
//Edita Tarefas Comuns
function EditTarefComuns($nome, $busca){
	$link = DBConnect();
	$query = "UPDATE ant_cep SET nome='$nome' WHERE nome='$busca'";
	$resut = @mysqli_query($link, $query) or die(mysqli_error());
	
	DBClose($link);
	
	return $resut;
	}
//Cria Tarefas Comuns
function CreateTarefComuns($table, array $data){
	
	$fields = implode(', ', array_keys($data));
	
	$values = "'".implode("', '", $data)."'";
	
	$query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";
		
	
	return DBExecute($query);
	}
	
//Cria Projetos
function CreateProjetos($table, array $data){
	
	$fields = implode(', ', array_keys($data));
	
	$values = "'".implode("', '", $data)."'";
	
	$query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";
		
	
	return DBExecute($query);
	}
	
//Executa
	function DBExecute($query){
	$link = DBConnect();
	$resut = @mysqli_query($link, $query) or die(mysqli_error($link));
	
	DBClose($link);
	
	return $resut;
	}
?>