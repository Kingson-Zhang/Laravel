<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redis;

class Home extends Controller
{
    //
    public function __construct(UserModel $userModel)
    {
        Redis::connection()->getName();
        $userModel->delete();
    }

    public function index()
    {
        config(['app.timezone' => 'America/Chicago']);
        $timezone = config('app.timezone');
        echo $timezone;
        $env = App::environment();
        echo $env;
    }
}
