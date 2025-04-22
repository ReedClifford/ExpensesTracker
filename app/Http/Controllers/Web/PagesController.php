<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    //

    public function index(){
        return Inertia::render('Index'); // Points to resources/js/Pages/Projects/Index.vue
    }
}
