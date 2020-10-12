<?php
namespace App\Http\Controllers\Marketing;

use Backpack\PageManager\PageManagerServiceProvider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MarketingController extends Controller
{
    public $layout = 'layouts.app';


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

    public function static(Request $request)
    {
        $requestPage = $request->fullUrl();
        if(!empty($requestPage)) {
            $explodePages = explode('/',  $requestPage);
            $explodePages= array_reverse($explodePages);
             $explodedPages = $explodePages[0];
             $pageSel =  !empty($explodedPages) ? $explodedPages : false;
             $existsInDatabase = \Backpack\PageManager\app\Models\Page::where('slug', "static/{$pageSel}")->get()->last();
             if (!$pageSel || empty($existsInDatabase)) {
                 return redirect(url('/'));
             }
             if ($pageSel && !empty($existsInDatabase)) {
                 // open modal with opage content
                 $page = $existsInDatabase;
                 return view('static', compact('page'));
             }
            return redirect(url('/'));
        }
    }

    public function store(Request $request)
    {
        return view('store');
    }
}
