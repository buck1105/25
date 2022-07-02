<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index(Request $request) {
//        $role = UserRoleEnum::getKeys();
        $data = User::query()->where('role', UserRoleEnum::DOCTOR)->paginate(8);
        return view('admin.doctor.index', compact('data'));
    }
}
