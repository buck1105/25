<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function index() {
        return view('admin.specialist.index');
    }
}
