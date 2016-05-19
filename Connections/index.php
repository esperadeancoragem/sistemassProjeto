<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<p>
  <?php
require'bdprojetos.php';
require'functions.php';
//$nome = 'teste2';
//$busca = 'teste';
//var_dump(Cadastro($nome));
//var_dump(EditaFunc($nome, $busca));
$libera = isset($_POST['grava']);
if ($libera == 'Sim'){
	$cliente = array(
	'nome' => $_POST['nome'],
	'idade' => $_POST['idade'],
	'telefone' => $_POST['telefone']
	);
	$grava = CreateFunc('ant_cep', $cliente);
	
	if($grava){
		echo 'OK';
	}else{
		echo 'NO';
	}
	$libera = "";
}

?>
</p>
<form method="post" name="form1" id="form1" autocomplete="on" accept-charset="UTF-8">
  <fieldset>
    <legend>Teste</legend>  
  <p>
    <label for="textfield">Nome:</label>
    <input type="text" name="nome" id="nome" required>
  </p>
  <p>
    <label for="textfield2">Idade:</label>
    <input type="text" name="idade" id="idade" required>
  </p>
  <p>
    <label for="textfield3">Telefone:</label>
    <input type="text" name="telefone" id="telefone" required>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Enviar">
    <input type="hidden" name="grava" id="grava" value="Sim">
  &nbsp;</p>
  </fieldset>
 
</form>

<p>&nbsp;</p>
</body>
</html>