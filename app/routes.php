<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("/", "HomeController@home");
Route::get('/home', "HomeController@home");
Route::get('/about-us', "HomeController@aboutUs");
Route::get('/services', "HomeController@services");
Route::get('/portifolio', "HomeController@portifolio");
Route::get('/blog-single', "HomeController@blogSingle");
Route::get("blog", "HomeController@blog");
Route::get('/pricing', "HomeController@pricing");
Route::get('/404', "HomeController@errorPag");
Route::get('/shortcodes', "HomeController@shortCodes");
Route::get('/contact', "HomeController@contact");
Route::get('/email-contact', "HomeController@contactEmail");
Route::post("/enviar-email", "HomeController@enviarEmail");
Route::post("/send-email", "HomeController@sendEmail"); 


/**Rotas para WebServices Renascer*/
Route::post('/atualizaProdutoSegunda', "RenascerController@atualizaProdutoSegunda");
Route::post('/atualizaProdutoSexta', "RenascerController@atualizaProdutoSexta");
Route::post('/buscaEstoque', "RenascerController@buscaEstoque");
Route::post('/deletaPedidoSexta', "RenascerController@deletaPedidoSexta");
Route::post('/deletaPedidoSegunda', "RenascerController@deletaPedidoSegunda");
Route::post('/inserirProdutoSexta', "RenascerController@inserirProdutoSexta");
Route::post('/inserirProdutoSegunda', "RenascerController@inserirProdutoSegunda");
Route::post('/selecionaProdutoSexta', "RenascerController@selecionaProdutoSexta");
Route::post('/selecionaProdutoSegunda', "RenascerController@selecionaProdutoSegunda");
Route::get('/pagina', "RenascerController@consultaEstoque");


Route::get("/teste", function(){


	$rs = array(
	array(
		'nro_menu' => 3136,
		'dsc_menu' => 'Pedidos',
		'nro_menu_fk' => 1,
		'nro_ordem_menu' => '{0}',
		'leaf' => 'n'
	),
	array(
		'nro_menu' => 3137,
		'dsc_menu' => 'Relatórios',
		'nro_menu_fk' => 1,
		'nro_ordem_menu' => '{1}',
		'leaf' => 'n'
	),
	array(
		'nro_menu' => 4119,
		'dsc_menu' => 'Lançar',
		'nro_menu_fk' => 3136,
		'nro_ordem_menu' => '{0,0}',
		'leaf' => 'y'
	),
	array(
		'nro_menu' => 4120,
		'dsc_menu' => 'Manutenção',
		'nro_menu_fk' => 3136,
		'nro_ordem_menu' => '{0,1}',
		'leaf' => 'y'
	),
	array(
		'nro_menu' => 3138,
		'dsc_menu' => 'Emitir Pedido',
		'nro_menu_fk' => 3137,
		'nro_ordem_menu' => '{1,0}',
		'leaf' => 'y'
	),
	array(
		'nro_menu' => 3139,
		'dsc_menu' => 'Pedidos Colocados No Mês',
		'nro_menu_fk' => 3137,
		'nro_ordem_menu' => '{1,1}',
		'leaf' => 'y'
	),
	array(
		'nro_menu' => 3140,
		'dsc_menu' => 'Histórico Do Cliente',
		'nro_menu_fk' => 3137,
		'nro_ordem_menu' => '{1,2}',
		'leaf' => 'y'
	),
	array(
		'nro_menu' => 3141,
		'dsc_menu' => 'Entregas Efetuadas',
		'nro_menu_fk' => 3137,
		'nro_ordem_menu' => '{1,3}',
		'leaf' => 'y'
	),

	####################################################
	#	test with tree, more than 2 levels
	###################################################
	array(
		'nro_menu' => 3142,
		'dsc_menu' => 'Entregas Efetuadas filho 1',
		'nro_menu_fk' => 3141,
		'nro_ordem_menu' => '{2,0}',
		'leaf' => 'y'
	),
	array(
		'nro_menu' => 3143,
		'dsc_menu' => 'Entregas Efetuadas filho 2',
		'nro_menu_fk' => 3141,
		'nro_ordem_menu' => '{2,1}',
		'leaf' => 'y'
	)

);

######################################################################
#		the test function begin here
######################################################################
function buildTree(&$tree,$arrayDados, $idPai = 1 ) {
    $resultado = array();
    foreach($arrayDados as $item ) {
        if( $item['nro_menu_fk'] == $idPai ) {
        	$item['dsc_menu'] = nl2br(str_replace("&", "&amp;", htmlentities($item['dsc_menu'])));
            $resultado[$item['dsc_menu']] = $item['nro_menu'];            
            // using recursion
            $children =  buildTree($tree,$arrayDados, $item['nro_menu'] );
            if( $children ) {
                $resultado[$item['dsc_menu']] = $children;
            }
        }
    }
    $tree = $resultado;
    return $tree;
}
######################################################################
#		the test function end here
######################################################################


$tree = array();
buildTree($tree, $rs);
echo "<pre>", print_r($tree, true);
      
});


