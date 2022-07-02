<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $data = User::query()->where('role', UserRoleEnum::CUSTOMER)->paginate(8);
        return view('admin.user.index', compact('data'));
    }
}
