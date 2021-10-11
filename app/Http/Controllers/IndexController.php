<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class IndexController extends Controller
{
    function index()
    {
        $title = "Home";
        $faqDropdown=Faq::all();
        return view("index", compact('title','faqDropdown'));
    }
}
