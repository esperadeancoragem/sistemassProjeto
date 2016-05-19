<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<link href="../css/menu2/menustyles.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<script src="../css/menu2/jquery-latest.min.js" type="text/javascript"></script>
<script src="../css/menu2/menuscript.js"></script>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sem título</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<script type="text/JavaScript">
function up(lstr){ // converte minusculas em maiusculas
var str=lstr.value; //obtem o valor
lstr.value=str.toUpperCase(); //converte as strings e retorna ao campo
}
//Para ativar essa função --> onkeyup="up(this)" <-- no input
</script>
<body>
Logo2
<div id="cssmenu">
<ul>
  <li><a href="../index.php">In&iacute;cio</a></li>
  <!--Inicio Cadastro -->
  <li class='active'><a href='#'>Cadastro</a>
    <ul>
      <li><a href='#'>Projetos</a>
      <ul>
      <li><a href="../projetoCadastrar.php" onclick="MM_effectAppearFade(this, 1000, 100, 0, false)">Cadastrar</a></li>
      <li><a href="../funcEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      </ul>
      </li>
      <li><a href='#'>Clientes</a>
      <ul>
      <li><a href="../clientesCadastro.php">Cadastrar</a></li>
      <li><a href="../xml/cliente.php">Cadastrar com XML</a></li>
      <li><a href="../clientesEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      <li><a href="../txt_cria_cliente2.php">Exportar</a></li>
      </ul>
      </li>
      <li><a href='#'>Fornecedores</a>
      <ul>
      <li><a href="../forneCadastro.php">Cadastrar</a></li>
      <li><a href="../xml/index.php">Cadastrar com XML</a></li>
      <li><a href="../forneEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      </ul>
      </li>
      <!--Inicio Produtos -->
  <li><a href='#'>Produtos</a>
    <ul>
    <li><a href='#'>Tipos de Produtos</a>
      <ul>
      <li><a href="./">Cadastrar</a></li>
      <li><a href="./">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      </ul>
      </li>
      <li><a href="../produtoCadastro.php">Cadastrar</a></li>
      <li><a href="../produtoEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      <li><a href="../produtoRelatorio.php">Relat&oacute;rio</a></li>
    </ul>
  </li>
  <!--Fim Produtos -->
      <li><a href='#'>Departamentos</a>
      <ul>
      <li><a href="../departCadastro.php">Cadastrar</a></li>
      <li><a href="../departEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      </ul>
      </li>
      <li><a href='#'>Contatos</a>
      <ul>
      <li><a href="../contatosCadastro.php">Cadastrar</a></li>
      <li><a href="../contatosEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      </ul>
      </li>
       <li><a href='#'>Endereço</a>
      <ul>
      <li><a href="../enderecoCadastro.php">Cadastrar</a></li>
      <li><a href="../enderecoEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      </ul>
      </li>
      <li class="divider"><a href="./">More...</a></li>
    </ul>
  </li>
  <!--Fim Cadastro -->
  <li><a href='#'>Vendas</a>
    <ul>
    <li><a href='#'>Orçamento</a>
      <ul>
      <li><a href="../orcamento.php">Criar Orçamento</a></li>
      <li><a href="../orcamentoeditar.php">Alterar Orçamento</a></li>
      <li><a href="../orcamentoRelatorio.php">Relatório - Data</a></li>
      </ul>
  </li>
  <li><a href='#'>Pedidos</a>
      <ul>
      <li><a href="../vendasSeparaProduto.php">Criar Pedido</a></li>
      <li><a href="../vendasSeparaProdutoEdita.php">Alterar Pedido</a></li>
      <li><a href="../vendasSeparaProdutoEdita2.php">Alterar Material do Pedido</a></li>
      <li><a href="./">menu</a></li>
      </ul>
  </li>
  <li><a href='#'>NF</a>
      <ul>
      <li><a href="../nota.php">Criar NF</a></li>
      <li><a href="../notaEdita.php">Editar NF</a></li>
      <li><a href="../vendasVisualizarPedidoP.php">Pedidos Prontos</a></li>
      <li><a href="../txt_cria_cliente2.php">Exportar</a></li>
      </ul>
  </li>
</ul>
  </li>
  <!--Inicio Receitas -->
  <li><a href='#'>Receitas</a>
    <ul>
    <li><a href='#'>Tipos de Receita</a>
      <ul>
      <li><a href="./">Cadastrar</a></li>
      <li><a href="./">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      </ul>
      </li>
      <li><a href="../receitaCadastro.php">Cadastrar</a></li>
      <li><a href="../receitaEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      <li><a href="../receitaRelatorio.php">Relat&oacute;rio</a></li>
    </ul>
  </li>
  <!--Fim Receitas -->
  <!--Inicio Despesas -->
  <li><a href='#'>Despesas</a>
    <ul>
    <li><a href='#'>Tipos de Despesas</a>
      <ul>
      <li><a href="../tipoDespesaCadastro.php">Cadastrar</a></li>
      <li><a href="../tipoDespesaEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      </ul>
      </li>
      <li><a href="../despesaCadastro.php">Cadastro Simples</a></li>
      <li><a href="../despesaCadastro2.php">Cadastro Multiplo</a></li>
      <li><a href="../despesaEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      <li><a href="../despesaRelatorio.php">Relat&oacute;rio</a></li>
    </ul>
  </li>
  <!--Fim Despesas -->
  <!--Inicio Compras -->
  <li><a href='#'>Compras</a>
    <ul>
    <li><a href='#'>Relatórios</a>
      <ul>
      <li><a href="./">Cadastrar</a></li>
      <li><a href="./">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
      </ul>
      </li>
      <li><a href="../ocompraCadastro.php">Cadastrar</a></li>
      <li><a href="../ocompraEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="./">Excluir</a></li>
    </ul>
  </li>
  <!--Fim Compras -->
  <li><a href='#'>Caixa</a>
  <ul>
  <li><a href='#'>Entradas</a>
      <ul>
      <li><a href="../caixaEntradaCadastro.php">Cadastrar</a></li>
      <li><a href="../caixaEntradaEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="../caixaEntradaExcluir.php">Excluir</a></li>
      </ul>
  </li>
  <li><a href='#'>Saidas</a>
      <ul>
      <li><a href="../caixaSaidaCadastro.php">Cadastrar</a></li>
      <li><a href="../caixaSaidaEditar.php">Editar</a></li>
      <li><a href="./">Consultar</a></li>
      <li><a href="../caixaSaidaExcluir.php">Excluir</a></li>
      </ul>
    <li><a href="../caixaRelatorio.php">Relatório</a></li>
    <li><a href='#'>Café da Tarde</a>
    <ul>
   <li><a href="../enquete" target="new">Votar</a></li>
   <li><a href="../enquete/relatorio.php" target="new">Relatorio</a></li>
   </ul>
   </li
  ></ul>
  </li>
 
  <!--Inicio Estoque -->
  <li><a href='#'>Estoque</a>
  <ul>
  <li><a href='#'>Manter</a>
      <ul>
      <li><a href="../nfEntrada.php">NF Entrada</a></li>
      <li><a href="../estoqueEntrada.php">Entrada Estoque</a></li>
      <li><a href="../estoqueEntradaRetorno.php">Retorno Estoque</a></li>
      <li><a href="../estoqueSaida.php">Saída Estoque</a></li>
      <li><a href="../estoquePedidos.php">Pedidos</a></li>
      <li><a href="./">Menu</a></li>
      </ul>
  </li>
  <li><a href='#'>Relatórios</a>
      <ul>
      <li><a href="../estoqueRelatEstado.php">Estado do Estoque</a></li>
      <li><a href="../estoqueRelatEntrada.php">Entradas</a></li>
      <li><a href="./">menu</a></li>
      <li><a href="./">menu</a></li>
      </ul>
  </li>
</ul>
  </li>
  <!--Fim Estoque -->
  <li><a href="../mibew/operator/login.php" target="_blank">Atendimento</a></li>
  <!--Inicio Relatorios Grafico -->
   <li>
   <a href='#'>Relatorios</a>
   <ul>
   <li><a href="http://192.168.0.2:1769/projetos/Relatorio_Fechamento.asp" target="new">Fechamentos</a></li>
   <li><a href="../graficos/grafico_barrasAnos.php">Produção Por Ano</a></li>
   <li><a href="http://192.168.0.2:1769/projetos/Relatorio_tarefas_adm.asp" target="new">Produção</a></li>
   </ul>
   </li>
   
    
  <li><a href='#'>Ajuda</a>
    <ul>
      <li><a href="<?php echo $logoutAction ?>">Sair</a></li>
   <li><a href="#" onclick="MM_popupMsg('SGI - ESPERA DE ANCORAGEM\r\rSistema de Gestão Integrada\r\rElaborado por Fábio Oller Buechler')">Sistema</a></li>
    </ul>
  </li>
</ul>
</div>
<?php
//Verifica se dados foram mandados por Submit ou pelo F5
	session_start();
	
	if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$request = md5( implode( $_POST ) );
		
		if( isset( $_SESSION['last_request'] ) && $_SESSION['last_request']== $request )
		{
			$libera = 'refresh';
		}
		else
		{
			$_SESSION['last_request']  = $request;
			$libera = 'post';
		}
	}
?>
<p> </p><br>

<!-- InstanceBeginEditable name="EditRegion" -->

<div class="form"><form method="post" name="projetoCadastro" id="projetoCadastro" accept-charset="UTF-8">
  
  <h2>Cadastro de Projeto</h2>
  <p>&nbsp;</p>
  <table width="505" border="0" cellpadding="0" cellspacing="10">
    <tr>
      <td><h4>
          <label for="projeto2"></label>
          Projeto
          
        </h4></td>
      <td colspan="3"><input name="projeto" type="text" class="textbox" id="projeto2" size="90"></td>
    </tr>
    <tr>
      <td width="80"><h4>Construtora</h4></td>
      <td width="120"><h4>
        <label for="construtora"></label>
        <select name="construtora" class="textbox" id="construtora">
        </select>
      </h4></td>
      <td width="80"><h4>Equipe</h4></td>
      <td width="170"><h4>
        <select name="equipe" class="textbox" id="equipe">
        </select>
      </h4></td>
    </tr>
    <tr>
      <td width="80"><h4>Proprietário</h4></td>
      <td width="120"><h4>
        <label for="proprietario"></label>
        <select name="proprietario" class="textbox" id="proprietario">
        </select>
      </h4></td>
      <td width="80"><h4>Status</h4></td>
      <td><h4>
        <select name="status" class="textbox" id="status">
        </select>
      </h4></td>
    </tr>
    <tr>
      <td width="80"><h4>Vendedor</h4></td>
      <td width="120"><h4>
        <label for="vendedor"></label>
        <select name="vendedor" class="textbox" id="vendedor">
        </select>
      </h4></td>
      <td width="80"><h4>Categoria</h4></td>
      <td><h4>
        <select name="categoria" class="textbox" id="categoria">
        </select>
      </h4></td>
    </tr>
    <tr>
      <td width="80"><h4>Última visita</h4></td>
      <td width="120"><h4>
        <label for="ultVisita"></label>
        <input name="ultVisita" type="text" class="textbox" id="ultVisita" size="12">
      </h4></td>
      <td width="80"><h4>Prioridade</h4></td>
      <td><h4>
        <label for="prioridade"></label>
        <select name="prioridade" class="textbox" id="prioridade">
        </select>
      </h4></td>
    </tr>
    <tr>
      <td width="80"><h4>Torres</h4></td>
      <td width="120"><h4>
        <label for="torres"></label>
        <input name="torres" type="text" class="textbox" id="torres" size="4">
      </h4></td>
      <td width="80"><h4>Data de fechamento</h4></td>
      <td>
        <h4>
          <label for="dataFechamento"></label>
          <input name="dataFechamento" type="text" class="textbox" id="dataFechamento" size="12">
    </h4></td></tr>
    <tr>
      <td width="80"><h4>Plantas</h4></td>
      <td width="120"><h4>
        <label for="plantas"></label>
        <select name="plantas" class="textbox" id="plantas">
        </select>
      </h4></td>
      <td width="80"><h4>Data de início</h4></td>
      <td><h4>
        <label for="dataInicio"></label>
        <input name="dataInicio" type="text" class="textbox" id="dataInicio" size="12">
      </h4></td>
    </tr>
    <tr>
      <td width="80"><h4>Fotos</h4></td>
      <td width="120"><h4>
        <select name="fotos" class="textbox" id="fotos">
        </select>
      </h4></td>
      <td width="80"><h4>Data de término</h4></td>
      <td><h4>
        <label for="dataTermino"></label>
        <input name="dataTermino" type="text" class="textbox" id="dataTermino" size="12">
      </h4></td>
    </tr>
    <tr>
      <td width="80"><h4>Croqui</h4></td>
      <td width="120"><h4>
        <select name="croqui" class="textbox" id="croqui">
        </select>
      </h4></td>
      <td width="80"><h4>Trabalho Sábado/Feriados?</h4></td>
      <td><h4>
        <label for="trabalhoFds"></label>
        <select name="trabalhoFds" class="textbox" id="trabalhoFds">
        </select>
      </h4></td>
    </tr>
    <tr>
      <td width="80"><h4>Orçamentos</h4></td>
      <td width="120"><h4>
        <input name="orcamentos" type="text" class="textbox" id="orcamentos" size="4">
      </h4></td>
      <td width="80"><h4>&nbsp;</h4></td>
      <td><h4>&nbsp;</h4></td>
    </tr>
    <tr>
      <td width="80"><h4>Qntd de Esperas</h4></td>
      <td width="120"><h4>
        <input name="qntdEsperas" type="text" class="textbox" id="qntdEsperas" size="4">
      </h4></td>
      <td width="80"><h4>&nbsp;</h4></td>
      <td><h4>&nbsp;</h4></td>
    </tr>
</table>
    <fieldset><legend>
      <h2>Endereço</h2>
      </legend>         
 <table width="505" border="0" cellpadding="0" cellspacing="10">
      <tr>
        <td width="74"><h4>
          <legend>Endereço</legend>
        </h4></td>
        <td colspan="3"><label for="endereco"></label>
        <input name="endereco" type="text" class="textbox" id="endereco" size="92"></td>
      </tr>
      <tr>
        <td><h4>Bairro</h4></td>
        <td width="200"><label for="bairro"></label>
        <input name="bairro" type="text" class="textbox" id="bairro"></td>
        <td width="10"><h4>CEP</h4></td>
        <td width="47"><label for="CEP"></label>
        <input name="CEP" type="text" class="textbox" id="CEP" size="8"></td>
      </tr>
      <tr>
        <td><h4>Cidade</h4></td>
        <td width="200"><label for="cidade"></label>
        <input name="cidade" type="text" class="textbox" id="cidade"></td>
        <td width="10"><h4>Estado</h4></td>
        <td><label for="UF"></label>
        <input name="UF" type="text" class="textbox" id="UF" size="2"></td>
      </tr>
    </table>
    
    </fieldset>
    
    <fieldset>
        <legend>
        <h2>Contatos</h2>
        </legend>
    
    <table width="505" border="0" cellpadding="0" cellspacing="10">
        <tr>
          <td width="90"><h4>Contato</h4></td>
          <td width="200"><label for="contato"></label>
          <input name="contato" type="text" class="textbox" id="contato" size="50"></td>
          <td width="30"><h4>Cargo</h4></td>
          <td width="200"><label for="cargo"></label>
          <input name="cargo" type="text" class="textbox" id="cargo"></td>
        </tr>
        <tr>
          <td width="90"><h4>Telefone</h4></td>
          <td width="200"><label for="telefone"></label>
          <input name="telefone" type="text" class="textbox" id="telefone"></td>
          <td width="30"><h4>ID</h4></td>
          <td width="200"><label for="ID"></label>
          <input name="ID" type="text" class="textbox" id="ID"></td>
        </tr>
        <tr>
          <td width="90"><h4>Email</h4></td>
          <td colspan="3"><label for="email"></label>
          <input name="email" type="text" class="textbox" id="email" size="80"></td>
        </tr>
        <tr>
          <td width="90"><h4>Contato 2</h4></td>
          <td><label for="contato2"></label>
          <input name="contato2" type="text" class="textbox" id="contato2" size="50"></td>
          <td width="30"><h4>Cargo</h4></td>
          <td><label for="cargo"></label>
          <input name="cargo2" type="text" class="textbox" id="cargo"></td>
        </tr>
        <tr>
          <td width="90"><h4>Telefone</h4></td>
          <td><label for="telefone"></label>
          <input name="telefone2" type="text" class="textbox" id="telefone" size="50"></td>
          <td width="30"><h4>ID</h4></td>
          <td><label for="cargo"></label>
          <input name="ID" type="text" class="textbox" id="cargo"></td>
        </tr>
        <tr>
          <td width="90"><h4>Email</h4></td>
          <td colspan="3"><label for="email"></label>
          <input name="email2" type="text" class="textbox" id="email" size="80"></td>
        </tr>
        <tr>
          <td width="90"><h4>Contato 3</h4></td>
          <td><label for="contato3"></label>
          <input name="contato3" type="text" class="textbox" id="contato3" size="50"></td>
          <td width="30"><h4>Cargo</h4></td>
          <td><label for="cargo"></label>
        <input name="cargo3" type="text" class="textbox" id="cargo"></td></tr>
        <tr>
          <td width="90"><h4>Telefone</h4></td>
          <td><label for="telefone"></label>
          <input name="telefone3" type="text" class="textbox" id="telefone"></td>
          <td width="30"><h4>ID</h4></td>
          <td><label for="ID"></label>
          <input name="ID2" type="text" class="textbox" id="ID"></td>
        </tr>
        <tr>
          <td width="90"><h4>Email</h4></td>
          <td colspan="3"><label for="EMAIL"></label>
          <input name="EMAIL" type="text" class="textbox" id="EMAIL" size="80"></td>
        </tr>
      </table>
     
      <legend></legend>
      
    </fieldset>
    <h4>&nbsp;</h4>
    <h4>
      <input name="Cadastrar" type="button" class="botao" value="Cadastrar">
      <input name="Limpar" type="reset" class="botao" id="Limpar" value="Limpar">
    </h4>
    <p>&nbsp;</p>
    
    </form>
</div>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
