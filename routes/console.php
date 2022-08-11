<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('User:saveComment {id} {comment} ', function ($id, $comment) {

    $user = User::find($id);
    if ($user) {
        $user->comments .= "\n" . $comment;
        $user->save();
        return $user->id;
    }
    return 'No such user ';
})->purpose('Save User\'s comments ');
