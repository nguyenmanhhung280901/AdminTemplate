<?php


namespace App\Http\Controllers;


class LayoutController
{

    public function layout(){
        return view('admin.layout');
    }

    public function index(){
        return view('admin.index');
    }

    public function calendar(){
        return view('admin.calendar');
    }

    public function form(){
        return view('admin.form');
    }

    public function list(){
        return view('admin.list');
    }

    public function uiElementsModal(){
        return view('admin.ui-elements-modal');
    }
}
