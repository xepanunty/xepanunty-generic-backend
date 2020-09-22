<?php
namespace App\Http\Controllers\Auth;

use Backpack\CRUD\app\Http\Controllers\Auth\LoginController;


class LoginControllerOverride extends LoginController
{
    public function __construct()
    {
        parent::__construct();
    }
}
