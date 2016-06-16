<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    public function index()
    {
        $fullname = 'Khamphai KHOUNNAVONGSA';
        $website = 'www.Noobswe.webr.la';
        return view('site.about', [
            'fullname' => $fullname,
            'website' => $website
        ]);
    }
}
