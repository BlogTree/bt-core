<?php
/**
 *
 * Load all routes from extensions or use in current context, or full path for other context
 *
 * @author Alexander Zagovorichev <zagovorichev@gmail.com>
 */

Route::get('test', function(){
    echo '1';
});

Route::resource('posts', 'PostsController');

Route::get('/', 'MainController@index');

