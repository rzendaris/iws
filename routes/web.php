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

    Route::get('user-management-fe', 'Admin\UserManController@UserMgmtInit');
    Route::post('user-management-fe/insert', 'Admin\UserManController@UserMgmtInsert');
    Route::post('user-management-fe/update', 'Admin\UserManController@UserMgmtUpdate');
    Route::post('user-management-fe/delete', 'Admin\UserManController@UserMgmtDelete');

    Route::get('ethnic-fe', 'Admin\EthnicManController@EthnicInit');
    Route::post('ethnic-fe/insert', 'Admin\EthnicManController@EthnicInsert');
    Route::post('ethnic-fe/update', 'Admin\EthnicManController@EthnicUpdate');
    Route::post('ethnic-fe/delete', 'Admin\EthnicManController@EthnicDelete');

    Route::get('degree-fe', 'Admin\DegreeManController@DegreeInit');
    Route::post('degree-fe/insert', 'Admin\DegreeManController@DegreeInsert');
    Route::post('degree-fe/update', 'Admin\DegreeManController@DegreeUpdate');
    Route::post('degree-fe/delete', 'Admin\DegreeManController@DegreeDelete');

    Route::get('job-fe', 'Admin\JobManController@JobInit');
    Route::post('job-fe/insert', 'Admin\JobManController@JobInsert');
    Route::post('job-fe/update', 'Admin\JobManController@JobUpdate');
    Route::post('job-fe/delete', 'Admin\JobManController@JobDelete');

    Route::get('province-fe', 'Admin\ProvinceManController@ProvinceInit');
    Route::post('province-fe/insert', 'Admin\ProvinceManController@ProvinceInsert');
    Route::post('province-fe/update', 'Admin\ProvinceManController@ProvinceUpdate');
    Route::post('province-fe/delete', 'Admin\ProvinceManController@ProvinceDelete');

    Route::get('city-fe', 'Admin\CityManController@CityInit');
    Route::post('city-fe/insert', 'Admin\CityManController@CityInsert');
    Route::post('city-fe/update', 'Admin\CityManController@CityUpdate');
    Route::post('city-fe/delete', 'Admin\CityManController@CityDelete');

    Route::get('district-fe', 'Admin\DistrictManController@DistrictInit');
    Route::post('district-fe/insert', 'Admin\DistrictManController@DistrictInsert');
    Route::post('district-fe/update', 'Admin\DistrictManController@DistrictUpdate');
    Route::post('district-fe/delete', 'Admin\DistrictManController@DistrictDelete');
    Route::get('district-fe/get-list-city/{province_id}', 'Admin\DistrictManController@GetListCity');

    Route::get('village-fe', 'Admin\VillageManController@VillageInit');
    Route::post('village-fe/insert', 'Admin\VillageManController@VillageInsert');
    Route::post('village-fe/update', 'Admin\VillageManController@VillageUpdate');
    Route::post('village-fe/delete', 'Admin\VillageManController@VillageDelete');
    Route::get('village-fe/get-list-district/{city_id}', 'Admin\VillageManController@GetListDistrict');

    /**
     * End Content Management Routes
     */
});
Route::get('under-construction', 'HomeController@underConstruction');


// FE Dummy
Route::get('dashboard-fe', 'FeController@Dashboard');
Route::get('family-management-fe', 'FeController@FamilyManagement');
    Route::get('add-family-mgmt-fe', 'FeController@AddFamilyMgmt');
    Route::get('edit-family-mgmt-fe', 'FeController@EditFamilyMgmt');
Route::get('family-tree-fe', 'FeController@FamilyTree');
    Route::get('detail-family-tree-fe', 'FeController@DetailFamilyTree');