<?php

use CodeIgniter\Router\RouteCollection;



/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Home/callviewalternatif', 'Home::callviewalternatif');
$routes->get('/Home/callviewnilaialternatif', 'Home::callviewnilaialternatif');
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
$routes->get('/Home/deletedata/(:num)', 'Home::deletedata/$1');
