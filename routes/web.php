<?php



// Admin group 
Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
	require_once __DIR__ . '/admin.php';
});

// User [auth] group
Route::group(['middleware' => ['auth']], function(){
	require_once __DIR__ . '/user.php';
});
	// All visitors group
	require_once __DIR__ . '/visitor.php';

