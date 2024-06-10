<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    function index()
    {

        return view("posts.index");

    }

    function loged()
    {
        return view("users.dashboard");
    }
}

