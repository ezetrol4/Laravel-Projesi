<?php

namespace App\Http\Controllers\API;
use Nette\Schema\Elements\Type;


use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends BaseController
{
    public function Userlist(Type $var = null)
    {
        $user = User::all();
        return $this->sendResponse($user, 'User List.');
    }
}