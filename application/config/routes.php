<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

/*$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;*/


//home
$route['admin-home'] = 'welcome/index';

//cow
$route['cow'] = 'cow/index';
$route['cow/add'] = 'cow/create';
$route['cow/store'] = 'cow/store';
$route['cow/edit/:id'] = 'cow/edit';
$route['cow/update/:id'] = 'cow/update';
$route['cow/delete/:id'] = 'cow/delete';
$route['cow/shed/:id'] = 'cow/shed';
$route['cow/details/:id'] = 'cow/details';



///diseas
$route['diseas'] = 'diseas/index';
$route['diseas/create'] = 'diseas/create';
$route['diseas/store'] = 'diseas/store';
$route['diseas/edit/:id'] = 'diseas/edit';
$route['diseas/update/:id'] = 'diseas/update';
$route['diseas/delete/:id'] = 'diseas/delete';

//shed
$route['shed'] = 'shed/index';
$route['shed/create'] = 'shed/create';
$route['shed/store'] = 'shed/store';
$route['shed/edit/:id'] = 'shed/edit';
$route['shed/update/:id'] = 'shed/update';
$route['shed/delete/:id'] = 'shed/delete';

//branch
$route['branch'] = 'branch/index';
$route['branch/create'] = 'branch/create';
$route['branch/store'] = 'branch/store';
$route['branch/edit/:id'] = 'branch/edit';
$route['branch/update/:id'] = 'branch/update';
$route['branch/delete/:id'] = 'branch/delete';

//activity
$route['activity'] = 'activity/index';
$route['activity/show/:id'] = 'activity/show';
$route['activity/others/:shed_id/:branch_id'] = 'activity/others';
$route['activity/weighing'] = 'activity/weighing';
$route['activity/sickness'] = 'activity/sickness';
$route['activity/heating'] = 'activity/heating';
$route['activity/pregnancy'] = 'activity/pregnancy';
$route['activity/deworming'] = 'activity/deworming';
$route['activity/vaccination'] = 'activity/vaccination';
$route['activity/treatment'] = 'activity/treatment';
$route['activity/medicine/:name'] = 'activity/medicine';
//lactation,feeding
$route['activity/lactation/:shed_id/:branch_id'] = 'activity/lactation';

//ratio
$route['ratio'] = 'ratio/index';
$route['add-ratio'] = 'ratio/create';

//ratio
$route['user'] = 'user/index';
$route['user/create'] = 'user/create';
$route['user/store'] = 'user/store';
$route['user/edit/:id'] = 'user/edit';

//lactation
$route['lactation/lactation-log'] = 'lactation/index';


//supplier
$route['supplier/supplier_name/:id'] = 'supplier/supplier_name';
$route['supplier/create'] = 'supplier/create';
$route['supplier/store'] = 'supplier/store';