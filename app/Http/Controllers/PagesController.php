<?php
/**
 * Created by PhpStorm.
 * User: Victor Zhao
 * Date: 2017-03-08
 * Time: 11:56 AM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Routing\Controller as BaseController;

class PagesController extends Controller
{
    protected function contact(){
        return view('pages.contactus');
    }

    protected function about(){
        return view('pages.aboutus');
    }
}