<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }
    public function about(){
    	return view('pages.about');
    }
    public function rulesregulations(){
    	return view('pages.rulesregulations');
    }
    public function academics(){
    	return view('pages.academics');
    }
    public function beyondcurriculum(){
    	return view('pages.beyondcurriculum');
    }

    public function planner(){
    	return view('pages.planner');
    }
    public function achievements(){
    	return view('pages.achievements');
    }
    public function circularsnews(){
    	return view('pages.circularsnews');
    }
    public function photogallery(){
    	return view('pages.photogallery');
    }
    public function contactus(){
    	return view('pages.contactus');
    }
}
