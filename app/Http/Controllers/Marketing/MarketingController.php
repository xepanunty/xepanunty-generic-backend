<?php
namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarketingController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }
}
