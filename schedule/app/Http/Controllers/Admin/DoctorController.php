<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $data = Doctor::query()->get();
        return view('admin.doctor.index', compact('data'));
    }
}
