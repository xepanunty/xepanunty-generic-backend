<?php

namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\AdminController;
use Illuminate\Routing\Controller;

class AdminControllerOverride extends AdminController
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
       parent::__construct();
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];

        return view(backpack_view('dashboard'), $this->data);
    }
}
