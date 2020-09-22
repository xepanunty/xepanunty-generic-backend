<?php
namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MarketingController extends Controller
{
    public function index(Request $request)
    {
        $sessionKeys = Session::all();
        $dataKeys = array_keys($sessionKeys);
        foreach ($dataKeys as $keyLogin) {
            if (strpos($keyLogin, 'login_backpack_') !== false) {
               return redirect("admin/dashboard");
            }
        }
        return view('welcome');
    }
}
