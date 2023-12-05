<?php

use CodeIgniter\Router\RouteCollection;



/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Home/callviewjenisusaha', 'Home::callviewjenisusaha');
$routes->get('/Home/callviewdataumkm', 'Home::callviewdataumkm');
$routes->get('/Home/callviewdatakriteria', 'Home::callviewdatakriteria');
$routes->get('/Home/callviewdatabobot', 'Home::callviewdatabobot');
$routes->get('/Home/callviewhitung', 'Home::callviewhitung');
$routes->get('/Home/callviewnormalisasi', 'Home::callviewnormalisasi');
$routes->get('/Home/callviewranking', 'Home::callviewranking');
$routes->get('/Home/callviewkeputusan', 'Home::callviewkeputusan');
$routes->get('/Home/forminput', 'Home::forminput');
$routes->post('/Home/simpandata', 'Home::simpandata');
$routes->get('/Home/formeditdata/(:num)', 'Home::formeditdata/$1');
$routes->post('/Home/editdata/(:num)', 'Home::editdata/$1');
$routes->post('/Home/deletedata/(:num)', 'Home::deletedata/$1');
