<!DOCTYPE html>
<html>
<head>
<title>Tairo Roberto</title>
<meta charset="utf-8"> 

<!-- Incluindo o CSS do Bootstrap -->
<link href="../packages/renascer/css/bootstrap.min.css" rel="stylesheet" media="screen">

<!-- Incluindo o jQuery que é requisito do JavaScript do Bootstrap -->
<script src="http://code.jquery.com/jquery-latest.js"></script>

<!-- Incluindo o JavaScript do Bootstrap -->
<script src="../packages/renascer/js/bootstrap.min.js"></script>

<!-- Incluindo o CSS -->
<link rel="stylesheet" type="text/css" href="../packages/renascer/css/estilo.css" />



<script language="JavaScript" type="text/javascript">

// função para validar os campos em branco
function validaDados()
{ 
  var passou = true;
  if((consultaEstoque.data.value == "")||(consultaEstoque.data1.value == "")||(consultaEstoque.loja.value == ""))
  {
   alert("Informe as datas do pedido e nome da loja..!!!");
   consultaEstoque.data.focus();
   passou = false;
   exit();
  }

 if(passou = true){
     consultaEstoque.action="../php/buscaEstoque.php"
            consultaEstoque.method="post";
  }
}
</script>

</head>

<body id = "home">

<div class="navbar navbar-default">
</div>
	
<div class="form-group">
  
<div class="input-group">
    <span class="input-group-addon"></span>
    </span>
 </div>
  <div align="center">
        <label class="control-label">Insira a data e nome da loja para buscar pedidos</label>
          
          <!--<form name="consultaEstoque" class="form-inline" role="form" onsubmit="return validaDados();" >
          -->
          {{Form::open(array('action' => 'RenascerController@inserirProdutoSegunda'))}}


            <div class="form-group">
              <label class="sr-only" for="text">Data</label>
              <input type="text" class="form-control" id="data" placeholder=" 	 1/1/2010	" name=" data">
               <input type="text" class="form-control" id="data1" placeholder="   1/1/2010 " name=" data1">
                  <div>
                      <input type="text" class="form-control" id="loja" placeholder="   *** Nome da loja ***" name="loja">
                  </div>
                 <button type="submit" class="btn btn-default" >Buscar Pedido</button>
                 <br>
                 Nome das Lojas
                 <br>
                 <div>
                   Boi do Povo, Cocaia, Conceição, Limão, Santana,Tatuapé, Vila Maria, Maria Marcolina, Pari, Sapopemba, Belém, Brás, Celso Garcia

                 </div>




<br>
<br>
<br>
<br>

<div class="form-group">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">
      <!--Lojas que possuem pedidos já realizados.-->
      </h3>
    </div>
    <div class="panel-body">
     <button type="submit" class="btn btn-large btn-block btn-default">button</button>
    </div>
  </div>
</div>






            </div>
            {{Form::close()}}
    
  </div>
</div>


</body>
</html>
