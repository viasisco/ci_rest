<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'documentation';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* 
| 
| -----------------------------------------------------------------------
| DEFINE YOUR OWNS ROUTES
|------------------------------------------------------------------------
*/
$route['company']['GET'] = 'companyCtrl/getcompanies';                               // get all companies
$route['company/(:num)']['GET'] = 'companyCtrl/getcompany/$1';                          // get a specific company by id

$route['company']['POST'] = 'companyCtrl/setCompany';                                // create a new company
$route['company/check/(:num)']['POST'] = 'companyCtrl/checkCompany/$1';             //$1 = company ID
//simple example with multiparameters
$route['company/version/(:num)/(:num)']['POST'] = 'companyCtrl/checkVersion/$1/$2'; //$1 = company ID, $2 = version n°

$route['company/:id']['DELETE'] = 'companyCtrl/deleteCompany/$1';                   // delete a company by id 

$route['company/:id']['PUT'] = 'companyCtrl/updateCompany/$1';                      // update a company by id 
