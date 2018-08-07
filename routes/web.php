<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router)
{
	$router->get('/companies', 'CompaniesController@index');	
	$router->get('/companies/{id}/employees', 'CompaniesController@employees');	
	$router->post('/companies', 'CompaniesController@store');
	$router->get('/companies/{id}', 'CompaniesController@show');
	$router->put('/companies/{id}', 'CompaniesController@update');
	$router->delete('/companies/{id:[1-9]+}', 'CompaniesController@destroy');
});

$router->delete('/employees/{id}', 'EmployeesController@destroy');
$router->post('/employees', 'EmployeesController@store');
$router->put('/employees/{id}', 'EmployeesController@update');

/*$router->get('/companies/types/{type}', 'CompaniesController@getCompanyByType');

$router->get('/employees','EmployeesController@showAllEmployees');
$router->get('/employees/{id}', 'EmployeesController@showEmployeeById');
$router->get('/employees?job={job}', 'EmployeesController@showEmployeeByJob');*/