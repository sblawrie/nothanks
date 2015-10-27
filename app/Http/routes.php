<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', ['middleware' => 'auth', function() {
    return view('dashboard');
}]);

Route::get('/employees', function () {
    return view('employees', [
        'Users' => App\User::with('Messages')->get()
    ]);
});

Route::get('/skills', function () {
    return view('skills', [
        'Skills' => App\Skill::with('Messages')->get()
    ]);
});

Route::get('/recruiters', function () {
    return view('recruiters', [
        'Recruiters' => App\Recruiter::with('Messages')->get()
    ]);
});

Route::get('/messages', function () {
    return view('messages', [
        'Messages' => App\Message::with('Recruiter', 'Employee')->get()
    ]);
});

Route::get('messages/{id}', function($message_id) {
    return App\Message::find($message_id)->body;
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::post('/endpoint', function () {
    $data = json_decode(Request::input('mandrill_events'), true)[0];
    if (isset($data['msg']['attachments'])) {
        unset($data['msg']['attachments']);
    }
    $User = App\User::firstOrCreate([
        'email' => $data['msg']['from_email'],
        'name' => isset($data['msg']['from_name']) ? $data['msg']['from_name'] : 'N/A'
    ]);
    preg_match_all("#From:\s\w+\s\w+#", $data['msg']['text'], $matches);
    $Recruiter = null;
    if ($matches[0]) {
        $last_from = array_pop($matches[0]);
        $Recruiter = App\Recruiter::firstOrCreate([
            'name' => substr($last_from, 6)
        ]);
    }
    $matches = [];
    $skills = App\Skill::lists('id', 'name')->toArray();
    $string_regex = implode('|', array_keys($skills));
    preg_match_all("#$string_regex#", $data['msg']['text'], $matches);
    $found_skills = array_unique($matches[0]);
    $message = App\Message::create([
        'user_id' => $User->id,
        'body' => $data['msg']['text'],
        'recruiter_id' => $Recruiter ? $Recruiter->id : ''
    ]);
    if ($found_skills) {
        $message->Skills()->attach(array_values(array_intersect_key($skills, array_flip($found_skills))));
    }
    return Response::json(['success' => true]);
});