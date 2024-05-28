<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function storage(Request $request)
    {
        $url = $request->query('url');

        if (str_contains($url, "https://"))
            {
                header("Location: ".$url);
                return exit;
            }
            else
            {
                $url = "https://".$url;
                header("Location: ".$url);
                return exit;
            }
    }
}
