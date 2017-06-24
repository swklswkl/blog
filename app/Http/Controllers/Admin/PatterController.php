<?php
/**
 * Created by PhpStorm.
 * User: majun
 * Date: 2017/6/7
 * Time: 23:23
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PatterController extends Controller
{
    public function calendar(){
        return view('admin.calendar');
    }
    public function charts(){
        return view('admin.charts');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function error(){
        return view('admin.error');
    }
    public function files(){
        return view('admin.files');
    }
    public function form_elements(){
        return view('admin.form_elements');
    }
    public function form_layouts(){
        return view('admin.form_layouts');
    }
    public function gallery(){
        return view('admin.gallery');
    }
    public function grids(){
        return view('admin.grids');
    }
    public function icons(){
        return view('admin.icons');
    }public function index(){
        return view('admin.index');
    }
    public function table(){
        return view('admin.table');
    }
    public function typography(){
        return view('admin.typography');
    }
    public function widgets(){
        return view('admin.widgets');
    }
}