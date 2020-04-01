<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::middleware('auth')->group(function() {

    Route::get('/', 'HomeController@main');

    /**
     * End Content Management Routes
     */
});
Route::get('under-construction', 'HomeController@underConstruction');


// FE Dummy
Route::get('dashboard-fe', 'FeController@Dashboard');
Route::get('user-management-fe', 'FeController@Usermgmt');
    Route::get('add-family-mgmt-fe', 'FeController@AddFamilyMgmt');
    Route::get('edit-family-mgmt-fe', 'FeController@EditFamilyMgmt');
Route::get('family-tree-fe', 'FeController@FamilyTree');
    Route::get('detail-family-tree-fe', 'FeController@DetailFamilyTree');
Route::get('family-management-fe', 'FeController@FamilyManagement');
Route::get('master-city-fe', 'FeController@Mastercity');
Route::get('master-degree-fe', 'FeController@Masterdegree');
Route::get('master-district-fe', 'FeController@Masterdistrict');
Route::get('master-ethnic-fe', 'FeController@Masterethnic');
Route::get('master-job-fe', 'FeController@Masterjob');
Route::get('master-province-fe', 'FeController@Masterprovince');
Route::get('master-village-fe', 'FeController@Mastervillage');