<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

//echo strftime('%A, %d de %B de %Y', strtotime('today'));
# %A: dia da semana por extenso.
# %d: dia do mês representado com dois digitos.
# %B: mês por extenso.
#%Y: ano representado com quatro digitos.
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

<!-- InstanceBeginEditable name="EditRegion" --><div class="form"><form method="post" name="calendarioEventos" id="calendarioEventos" accept-charset="UTF-8">
<h2 align="center">Calendário de Eventos</h2>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="250" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="44"><div align="center"><strong><a href="anterior"><img src="icones/anterior.png" alt="voltar" name="Anterior" width="24" height="24" id="Anterior" align="right"></a></strong></div></td>
      <td width="161"><h4 align="center"><strong><?php echo strftime('%B %Y', strtotime('today'));?></strong></h4></td>
      <td width="45"><div align="center"><a href="próximo"><img src="icones/proximo.png" alt="ir" name="Próximo" width="24" height="24" id="Próximo" align="left"></a></div></td>
      </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="60" bgcolor="#33CCCC"><h4 align="center"><strong>D</strong></h4></td>
        <td width="55" bgcolor="#33CCCC"><h4 align="center"><strong>S</strong></h4></td>
        <td width="50" bgcolor="#33CCCC"><h4 align="center"><strong>T</strong></h4></td>
        <td width="60" bgcolor="#33CCCC"><h4 align="center"><strong>Q</strong></h4></td>
        <td width="60" bgcolor="#33CCCC"><h4 align="center"><strong>Q</strong></h4></td>
        <td width="55" bgcolor="#33CCCC"><h4 align="center"><strong>S</strong></h4></td>
        <td width="60" bgcolor="#33CCCC"><h4 align="center"><strong>S</strong></h4></td>
      </tr>
    </table>

    <table width="400" border="0" align="center" cellpadding="0" cellspacing="15">
      <tr>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="1" id="dia#8">
          01</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="2" id="dia#9">
          02</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="3" id="dia#10">
          03</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="4" id="dia#11">
          04</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="5" id="dia#12">
          05</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="6" id="dia#13">
          06</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="7" id="dia#14">
          07</em></h5></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="8" id="dia#15">
          08</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="9" id="dia#16">
          09</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="10" id="dia#17">
          10</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="11" id="dia#18">
          11</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="12" id="dia#19">
          12</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="13" id="dia#20">
          13</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="14" id="dia#21">
          14</em></h5></td>
        </tr>
      <tr>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="15" id="dia#22">
          15</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="16" id="dia#23">
          16</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="17" id="dia#24">
          17</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="18" id="dia#25">
          18</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="19" id="dia#26">
          19</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="20" id="dia#27">
          20</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="21" id="dia#28">
          21</em></h5></td>
        </tr>
      <tr>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="22" id="dia#29">
          22</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="23" id="dia#30">
          23</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="24" id="dia#31">
          24</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input name="25" type="radio" id="dia#32" value="25">
          25</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="26" id="dia#33">
          26</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="27" id="dia#34">
          27</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="28" id="dia#35">
          28</em></h5></td>
        </tr>
      <tr>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="29" id="dia#36">
          29</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="30" id="dia#37">
          30</em></h5></td>
        <td bgcolor="#FFFFFF"><h5 align="center">
          <em>
          <input type="radio" name="31" id="dia#38">
          31</em></h5></td>
        <td bgcolor="#CCCCCC">&nbsp;</td>
        <td bgcolor="#CCCCCC">&nbsp;</td>
        <td bgcolor="#CCCCCC">&nbsp;</td>
        <td bgcolor="#CCCCCC">&nbsp;</td>
        </tr>
    </table>
    
    <p>&nbsp;</p>
    <table width="350" border="0" cellspacing="0
    " cellpadding="0">
      <tr>
        <td width="103" bgcolor="#FFFFFF"><div align="center">
          <h5><strong>Inserir Evento</strong></h5>
        </div></td>
        <td width="119" bgcolor="#FFFFFF"><h5 align="center"><strong>Visulizar Evento(s)</strong></h5></td>
        <td width="128" bgcolor="#FFFFFF"><div align="center">
          <h5><strong>Limpar Seleções</strong></h5>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center"> <a href="inserirEvento.php" target="new"><img src="icones/novo.png" width="35" height="35"></a></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><a href="visualizarEventos.php" target="new"><img src="icones/visualizar.png" width="35" height="35"></a></div></td>
        <td bgcolor="#FFFFFF"><div align="center"><a href="calendarioEventosPt2.php"><img src="icones/deletar2.png" width="35" height="35" onClick="Reset"></a></div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    
</div>

</form>
</div>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
