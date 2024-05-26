<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    function index()
    {

        // Storage::disk('public')->put('storage/images/logo_loading.webp', $logoLoading);

        return view("home");

        // $idea = new Idea([
        //     'content' => 'test1',
        // ]);

        // $idea->save();

        // dump(Idea::all());

        // return view("dashboard", [
        //     'ideas' => Idea::all()
        // ]);
    }
}
