<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HelloWord');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'home::index'); // rota principal do site do site
$routes->get('home', 'home::index'); // rota principal do site
$routes->get('cadastro_atleta', 'atleta::cadastroAtleta'); // rota de cadastro dos atletas
$routes->get('buscar_cidade', 'home::buscarCidade'); // rota para preencher o select cidade
$routes->add('cadastro_administrador', 'administrador::cadastroAdministrador'); // rota de cadastro dos administradores de eventos
$routes->get('admin', 'administrador::index');
$routes->get('loginAdministrador', 'administrador::login'); // rota login administrador
$routes->get('logoff', 'administrador::logoff');

//:any - signifca tanto texto como numero :num - somente numero 
//$1 significa posicao, se tiver mais de um parametro colocar $1, $2
//exemplo routes->add('detalhes/(:any)/(:num)', 'Produtos:detalhes/$1/$2');
// metodo get posso acessar tanto pelo caminho ex. produtos/index como pela rota ex. shopping
//metodo add posso acessar somente pela rota

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
