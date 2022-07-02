<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $data = User::query()->where('role', UserRoleEnum::DOCTOR)->paginate(8);
        return view('admin.doctor.index', compact('data'));
    }
}
