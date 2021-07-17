<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userModel;
    //

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function find()
    {
        $this->userModel->update();
    }
}
