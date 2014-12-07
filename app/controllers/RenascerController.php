<?php

class RenascerController extends BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function atualizaProdutoSegunda(){

	 /**Recebimento do arquivo JSON e decodificação*/
     $json = file_get_contents('php://input');
     $obj = json_decode($json);
    
     /**Atualização de valores na tabela posicaoContainer 
       $atualizar =  mysql_query("UPDATE renascerPedidoSegunda SET 
       
                                 
	                          nome_fornecedor = '".$obj->{'nome_fornecedor'}."',
	                          nome_produto = '".$obj->{'nome_produto'}."',
	                          quantidadeSegunda = '".$obj->{'quantidadeSegunda'}."',
	                          tipoSegunda = '".$obj->{'tipoSegunda'}."'	                          
	                          
	                          WHERE 
	                          	dataPedido = '".$obj->{'dataPedido'}."' AND
	                          	loja = '".$obj->{'loja'}."'");
	
	                                      if($atualizar){
	                                         echo "Atualizado comsucesso..!!!";
	                                         echo"\n \n";
	                                      }else{
		                                 echo"Não foi possivel atualizar...!!!";
		                                 echo"\n \n";
	                                      }
	         
  			mysql_close($con); 
  			*/
	}


	public function atualizaProdutoSexta(){
		
	/**Recebimento do arquivo JSON e decodificação
     $json = file_get_contents('php://input');
     $obj = json_decode($json);

    
     /**Atualização de valores na tabela posicaoContainer 
       $atualizar =  mysql_query("UPDATE renascerPedidoSexta SET 
       
                                 
	                          nome_fornecedor = '".$obj->{'nome_fornecedor'}."',
	                          nome_produto = '".$obj->{'nome_produto'}."',
	                          quantidadeSexta = '".$obj->{'quantidadeSexta'}."',
	                          tipoSexta = '".$obj->{'tipoSexta'}."'	                          
	                          
	                          WHERE 
	                          	dataPedido = '".$obj->{'dataPedido'}."' AND
	                          	loja = '".$obj->{'loja'}."'");
	
	                                      if($atualizar){
	                                         echo "Atualizado comsucesso..!!!";
	                                         echo"\n \n";
	                                      }else{
		                                 echo"Não foi possivel atualizar...!!!";
		                                 echo"\n \n";
	                                      }
	      
	      
  mysql_close($con);  */

	}



	public function buscaEstoque(){
		
	}

	public function deletaPedidoSexta(){

	$deletaSexta  = PedidoSegunda::where('nome_produto','=', $obj->{'nome_produto'})
        						 ->where('loja','=', $obj->{'loja'})
      							 ->where('dataPedido','=', $obj->{'dataPedido'})
      							 ->get();
	  if ($deletaSexta->delete()) {
	  		echo"Deletado com sucesso...!!!\n \n \n \n ";
			echo "_______________________________________________________________________________";
	  	}else{
	  		 echo"Não foi possivel Deletar no Banco de Dados...!!!";
	  	}	
	}


	public function deletaPedidoSegunda(){
			
	 $json = file_get_contents('php://input');
     $obj = json_decode($json);

      $deletaSegunda = PedidoSegunda::where('nome_produto','=', $obj->{'nome_produto'})
      							    ->where('loja','=', $obj->{'loja'})
      							    ->where('dataPedido','=', $obj->{'dataPedido'})
      							    ->get();
	  if ($deletaSegunda->delete()) {
	  		echo"Deletado com sucesso...!!!\n \n \n \n ";
			echo "_______________________________________________________________________________";
	  	}else{
	  		 echo"Não foi possivel Deletar no Banco de Dados...!!!";
	  	}		

	}


	public function inserirProdutoSexta(){
		 
		//Recebimento do arquivo JSON e decodificação
     $json = file_get_contents('php://input');
     $obj = json_decode($json);

    $pedidoSexta = new PedidoSexta;
    $pedidoSexta->loja = $obj->{'loja'};
    $pedidoSexta->nome_fornecedor = $obj->{'nome_fornecedor'};
    $pedidoSexta->nome_produto = $obj->{'nome_produto'};
    $pedidoSexta->quantidadeSexta = $obj->{'quantidadeSexta'};
    $pedidoSexta->tipoSexta = $obj->{'tipoSexta'};
    $pedidoSexta->dataPedido = $obj->{'dataPedido'};          

	    if ($pedidoSexta->save()) {
	    	 echo"Inserido com sucesso...!!! \n \n \n \n ";
		     echo "_______________________________________________________________________________";
	    }else{
	    	 echo"Não foi possivel inserir no Banco de Dados...!!!";
	    }

	}

	public function inserirProdutoSegunda(){
	
	//Recebimento do arquivo JSON e decodificação
     $json = file_get_contents('php://input');
     $obj = json_decode($json);

    $pedidoSegunda = new PedidoSegunda;
    $pedidoSegunda->loja = $obj->{'loja'};
    $pedidoSegunda->nome_fornecedor = $obj->{'nome_fornecedor'};
    $pedidoSegunda->nome_produto = $obj->{'nome_produto'};
    $pedidoSegunda->quantidadeSegunda = $obj->{'quantidadeSegunda'};
    $pedidoSegunda->tipoSegunda = $obj->{'tipoSegunda'};
    $pedidoSegunda->dataPedido = $obj->{'dataPedido'};          

	    if ($pedidoSegunda->save()) {
	    	 echo"Inserido com sucesso...!!! \n \n \n \n ";
		     echo "_______________________________________________________________________________";
	    }else{
	    	 echo"Não foi possivel inserir no Banco de Dados...!!!";
	    }

	}

	public function selecionaProdutoSexta(){
		/*
	 $json = file_get_contents('php://input');
     $obj = json_decode($json);

             
//Consulta no banco de dados pelo idProduto..no caso "1"
 
     $resultado = mysql_query("SELECT * FROM renascerPedidoSexta 
                                                            WHERE dataPedido = '".$obj->{'dataPedido'}."' AND 
                                                            loja = '".$obj->{'loja'}."' ");
        if(mysql_num_rows($resultado) > 0){
           $registro = mysql_fetch_object($resultado);
           
           echo $registro->loja;
           echo "<br/>";
           echo $registro->nome_fornecedor;
           echo "<br/>";
           echo $registro->nome_produto;
           echo "<br/>";
           echo $registro->quantidadeSexta;
           echo "<br/>";
           echo $registro->tipoSexta;
           echo "<br/>";
          
        }else{
             echo "Erro Produto nao existe...! ";
        }
    	                        
	      
  mysql_close($con); */
	}

	public function selecionaProdutoSegunda(){
		/*
		     $json = file_get_contents('php://input');
     $obj = json_decode($json);

             
//Consulta no banco de dados pelo idProduto..no caso "1"
 
     $resultado = mysql_query("SELECT * FROM renascerPedidoSegunda 
                                                              WHERE dataPedido = '".$obj->{'dataPedido'}."' AND
                                                               loja = '".$obj->{'loja'}."' ");
        if(mysql_num_rows($resultado) > 0){
           $registro = mysql_fetch_object($resultado);
           
           echo $registro->loja;
           echo "<br/>";
           echo $registro->nome_fornecedor;
           echo "<br/>";
           echo $registro->nome_produto;
           echo "<br/>";
           echo $registro->quantidadeSegunda;
           echo "<br/>";
           echo $registro->tipoSegunda;
           echo "<br/>";
          
        }else{
             echo "Erro Produto nao existe...! ";
        }
    	                        
	      
  mysql_close($con); 
  */
	}


    public function consultaEstoque(){
		return View::make("renascer.consultaEstoque");
    }
	


}
