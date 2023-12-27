<?php
use illumiate\Http\Request;
use GuzzleHttp\Client;

Auth::routes();

Route::group(['middleware' => 'web'], function () {
    Route::get('/privacy-policy', 'HomeController@privacy_policy')->name('privacy_policy');
    Route::get('/terms-of-use', 'HomeController@terms_of_use')->name('terms_of_use');

    Route::get('/', function () {
        return view('home');
    })->name('landing');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/places', function () {
        return view('places');
    })->name('places');
    Route::get('/maps', function () {
        return view('maps');
    })->name('maps');
});


Route::group(['middleware' => 'auth', 'prefix' => 'panel'], function () {

    Route::get('/', 'HomeController@dashboard')->name('home');
    Route::get('/home', 'HomeController@dashboard')->name('home');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/events', function () {return view('dashboard.events');});

    Route::get('/budgeting', 'HomeController@dashboard')->name('budgeting');
    // Route::get('/dorms.show', 'HomeController@dashboard')->name('places');

    Route::group(['prefix' => 'my_account'], function() {
        Route::get('/', 'MyAccountController@edit_profile')->name('my_account');
        Route::put('/', 'MyAccountController@update_profile')->name('my_account.update');
        Route::put('/change_password', 'MyAccountController@change_pass')->name('my_account.change_pass');
    });

    /*************** Support Team *****************/
    Route::group(['namespace' => 'SupportTeam',], function(){

        /*************** Users *****************/
        Route::group(['prefix' => 'users'], function(){
            Route::get('reset_pass/{id}', 'UserController@reset_pass')->name('users.reset_pass');
        });



        /*************** Budgeting *****************/
        Route::group(['prefix' => 'budgeting'], function(){
            Route::get('/', 'TimeTableController@index')->name('tt.index');
            Route::post('/predict', 'TimeTableController@predict')->name('predict');

            Route::get('/showplaces', ShowPlaces::class)->name('showplaces');

            /*************** Comments *****************/
            Route::resource('comments', CommentsController::class);

            Route::group(['prefix' => 'favorites'], function () {
                Route::middleware('auth')->get('/', 'FavoriteController@favorites')->name('favorites');
                Route::middleware('auth')->post('/add', 'FavoriteController@addToFavorites')->name('favorites.add');
            });



            Route::group(['middleware' => 'teamSA'], function() {
                Route::post('/', 'TimeTableController@store')->name('tt.store');
                Route::put('/{tt}', 'TimeTableController@update')->name('tt.update');
                Route::delete('/{tt}', 'TimeTableController@delete')->name('tt.delete');
            });

            /*************** Predictions Records *****************/
            Route::group(['prefix' => 'records'], function(){

                Route::group(['middleware' => 'teamSA'], function(){
                    Route::get('manage/{ttr}', 'TimeTableController@manage')->name('ttr.manage');
                    Route::post('/', 'TimeTableController@store_record')->name('ttr.store');
                    Route::get('edit/{ttr}', 'TimeTableController@edit_record')->name('ttr.edit');
                    Route::put('/{ttr}', 'TimeTableController@update_record')->name('ttr.update');
                });

                Route::get('show/{ttr}', 'TimeTableController@show_record')->name('ttr.show');
                Route::get('print/{ttr}', 'TimeTableController@print_record')->name('ttr.print');
                Route::delete('/{ttr}', 'TimeTableController@delete_record')->name('ttr.destroy');

            });

            /*************** Time Slots *****************/
            Route::group(['prefix' => 'time_slots', 'middleware' => 'teamSA'], function(){
                Route::post('/', 'TimeTableController@store_time_slot')->name('ts.store');
                Route::post('/use/{ttr}', 'TimeTableController@use_time_slot')->name('ts.use');
                Route::get('edit/{ts}', 'TimeTableController@edit_time_slot')->name('ts.edit');
                Route::delete('/{ts}', 'TimeTableController@delete_time_slot')->name('ts.destroy');
                Route::put('/{ts}', 'TimeTableController@update_time_slot')->name('ts.update');
            });

            /*************** Budget API *****************/
            // Route::get('/Api-Post-Data/',function(){
            //     $client = new Client();
            //     $api_url="http://127.0.0.1:5000/api";
            //     $res=$client->post($api_url,[
            //         'form_params'=>[
            //             'country' => 'SWITZERLAND',
            //             'age' => '1-24',
            //             'travelWith' => 'Friends/Relatives',
            //             'purpose' => 'Leisure and Holidays',
            //             'numberofpeople' => 2,
            //             'activity' => 'Wildlife tourism',
            //             'tourArrangement' => 'Independent',
            //             'int_transport' => 'No',
            //             'accommodation' => 'Yes',
            //             'food' => 'Yes',
            //             'local_transport' => 'Yes',
            //             'sightseeing' =>  'No',
            //             'tour_guide' => 'Yes',
            //             'insurance' => 'Yes',
            //             'first_trip' => 'Yes',
            //             'paymentmode' => 'Cash',
            //             'Tzmainland' => 7,
            //             'Zanzibar' => 5]
            //         ]);
            //     $data_body= $res->getBody();
            //     echo $data_body;
            // });

            Route::get('/Api-Get-Data/',function(){
                $client = new Client();
                $data = $client -> get('http://127.0.0.1:5000/Getdata');
                $data_body= $data->getBody();

                $api=$data_body;
                return $api;
            });

        });

        /*************** Pins *****************/
        Route::group(['prefix' => 'pins'], function(){
            Route::get('create', 'PinController@create')->name('pins.create');
            Route::get('/', 'PinController@index')->name('pins.index');
            Route::post('/', 'PinController@store')->name('pins.store');
            Route::get('enter/{id}', 'PinController@enter_pin')->name('pins.enter');
            Route::post('verify/{id}', 'PinController@verify')->name('pins.verify');
            Route::delete('/', 'PinController@destroy')->name('pins.destroy');
        });

        /*************** Marks *****************/
        Route::group(['prefix' => 'marks'], function(){

           // FOR teamSA
            Route::group(['middleware' => 'teamSA'], function(){
                // Route::put('/{tt}', 'TimeTableController@update')->name('tt.');
                Route::get('batch_fix', 'MarkController@batch_fix')->name('marks.batch_fix');
                Route::put('batch_update', 'MarkController@batch_update')->name('marks.batch_update');
                Route::get('tabulation/{exam?}/{class?}/{sec_id?}', 'MarkController@tabulation')->name('marks.tabulation');
                Route::post('tabulation', 'MarkController@tabulation_select')->name('marks.tabulation_select');
                Route::get('tabulation/print/{exam}/{class}/{sec_id}', 'MarkController@print_tabulation')->name('marks.print_tabulation');
            });

            // FOR teamSAT
            Route::group(['middleware' => 'teamSAT'], function(){
                Route::get('/', 'MarkController@index')->name('marks.index');
                Route::get('manage/{exam}/{class}/{section}/{subject}', 'MarkController@manage')->name('marks.manage');
                Route::put('update/{exam}/{class}/{section}/{subject}', 'MarkController@update')->name('marks.update');
                Route::put('comment_update/{exr_id}', 'MarkController@comment_update')->name('marks.comment_update');
                Route::put('skills_update/{skill}/{exr_id}', 'MarkController@skills_update')->name('marks.skills_update');
                Route::post('selector', 'MarkController@selector')->name('marks.selector');
                Route::get('bulk/{class?}/{section?}', 'MarkController@bulk')->name('marks.bulk');
                Route::post('bulk', 'MarkController@bulk_select')->name('marks.bulk_select');
            });

            Route::get('select_year/{id}', 'MarkController@year_selector')->name('marks.year_selector');
            Route::post('select_year/{id}', 'MarkController@year_selected')->name('marks.year_select');
            Route::get('show/{id}/{year}', 'MarkController@show')->name('marks.show');
            Route::get('print/{id}/{exam_id}/{year}', 'MarkController@print_view')->name('marks.print');

        });

        Route::resource('students', 'StudentRecordController');
        Route::resource('users', 'UserController');
        Route::resource('classes', 'MyClassController');
        Route::resource('sections', 'SectionController');
        Route::resource('subjects', 'SubjectController');
        Route::resource('grades', 'GradeController');
        Route::resource('exams', 'ExamController');
        Route::resource('places', 'DormController');
        Route::resource('payments', 'PaymentController');

    });

    /************************ AJAX ****************************/
    Route::group(['prefix' => 'ajax'], function() {
        Route::get('get_lga/{state_id}', 'AjaxController@get_lga')->name('get_lga');
        Route::get('get_class_sections/{class_id}', 'AjaxController@get_class_sections')->name('get_class_sections');
        Route::get('get_class_subjects/{class_id}', 'AjaxController@get_class_subjects')->name('get_class_subjects');
    });

});

/************************ SUPER ADMIN ****************************/
Route::group(['namespace' => 'SuperAdmin','middleware' => 'super_admin', 'prefix' => 'super_admin'], function(){

    Route::get('/settings', 'SettingController@index')->name('settings');
    Route::put('/settings', 'SettingController@update')->name('settings.update');

});
