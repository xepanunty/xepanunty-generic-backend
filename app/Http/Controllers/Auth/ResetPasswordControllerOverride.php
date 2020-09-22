<?php
namespace App\Http\Controllers\Auth;

use Backpack\CRUD\app\Http\Controllers\Auth\ResetPasswordController;


class ResetPasswordControllerOverride extends ResetPasswordController
{
    public function __construct()
    {
        parent::__construct();
    }
}
