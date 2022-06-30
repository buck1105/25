<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $data = Doctor::query()->paginate(8);
        return view('admin.doctor.index', compact('data'));
    }
}
