<?php
namespace App\Http\Controllers\Auth;

use Backpack\CRUD\app\Http\Controllers\Auth\ForgotPasswordController;


class ForgotPasswordControllerOverride extends ForgotPasswordController
{
    public function __construct()
    {
        parent::__construct();
    }
}
