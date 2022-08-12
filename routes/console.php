<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Validator;

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

Artisan::command('user:saveComment {id} {comment} ', function ($id, $comment) {
    if (is_numeric($id)) {
        $user = User::find($id);
        if ($user) {
            $user->comments .= "\n" . $comment;
            $user->save();
            $this->info('Comment was appended successfully!');
            return print_r($user->toArray());
        }
        return  $this->error('User with ID ' . $id . ' does not exist');
    }
    return $this->error('ID must be integer');
})->purpose('Save User\'s comments ');
