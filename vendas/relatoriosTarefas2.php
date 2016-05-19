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
<link href="../css/tabela_mediagroove.css" rel="stylesheet" type="text/css">
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
<div class="form"><form method="post" name="relatoriosTarefas2" id="relatoriosTarefas2" accept-charset="UTF-8">

  <h2 align="center">Relatório de Tarefas</h2>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <h4 align="center">Total de registros encontrados:<span class="vermelho">xxxx</span> De: <span class="vermelho">xx/xx/xxxx</span> até: <span class="vermelho">xx/xx/xxxx</span></h4>
  <p>&nbsp;</p>
  <div align="center">
    <table width="1200" border="1" align="center" cellpadding="0" cellspacing="0" class="tbody">
      <tr class="tbody">
        <td width="50" bgcolor="#CCCCCC"><h4><strong>ID</strong></h4></td>
        <td width="250" bgcolor="#CCCCCC"><div align="center">
          <h4><strong>Projeto</strong></h4>
          </div></td>
        <td width="100" bgcolor="#CCCCCC"><div align="center">
          <h4><strong>Tarefa</strong></h4>
          </div></td>
        <td width="100" bgcolor="#CCCCCC"><div align="center">
          <h4><strong>Prioridade</strong></h4>
          </div></td>
        <td width="100" bgcolor="#CCCCCC"><div align="center">
          <h4><strong>Status</strong></h4>
          </div></td>
        <td width="100" bgcolor="#CCCCCC"><div align="center">
          <h4><strong>Setor</strong></h4>
          </div></td>
        <td width="100" bgcolor="#CCCCCC"><div align="center">
          <h4><strong>Início</strong></h4>
          </div></td>
        <td width="100" bgcolor="#CCCCCC"><div align="center">
          <h4><strong>Conclusão</strong></h4>
          </div></td>
        <td width="100" bgcolor="#CCCCCC"><h4><strong>Liberação</strong></h4></td>
        <td width="100" bgcolor="#CCCCCC"><h4><strong>Atribuição</strong></h4></td>
        <td width="100" bgcolor="#CCCCCC"><h4><strong>Sub-atribuição</strong></h4></td>
        </tr>
      <tr>
        <td width="50">&nbsp;</td>
        <td width="250">&nbsp;</td>
        <td width="100">&nbsp;</td>
        <td width="100">&nbsp;</td>
        <td width="100">&nbsp;</td>
        <td width="100">&nbsp;</td>
        <td width="100">&nbsp;</td>
        <td width="100">&nbsp;</td>
        <td width="100">&nbsp;</td>
        <td width="100">&nbsp;</td>
        <td width="100">&nbsp;</td>
        </tr>
    </table>
  </div>
  <p>&nbsp;</p>

</form>
</div>

<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
