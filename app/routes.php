 <?php

$router->get('', 'PagesController@home');
$router->get('/register','UsersController@register');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');