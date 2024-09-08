<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        $viewName = env("APP_NAME");

        return view($viewName);
    }
}
