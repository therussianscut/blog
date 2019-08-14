<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function getAbout () {



        $first= "sean";
        $last= "mccann";

        $full= $first. " ". $last;

        return view('/pages/about', compact('full'));


    }

    public function getContact () {

        return view('/pages/contact');


    }

    public function getIndex () {

        return view('/pages/welcome');


    }





}
