<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        return "<h1>HomePage</h1>";
    }

    public function oldUrl() {
        return redirect('/newUrl');
    }

    public function newUrl() {
        return "NEW URL PAGE";
    }
}
