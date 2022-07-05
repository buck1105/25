<?php

namespace App\Http\Controllers\Admin;

use App\Enums\DoctorSpecialistEnum;
use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\CreateDoctorRequest;
use App\Models\User;
use App\Repositories\DoctorRepositoryContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{

    protected $repository;

    public function __construct(DoctorRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $data = $this->repository->paginate();
//        $data = User::query()->where('role', UserRoleEnum::DOCTOR)->paginate(8);
        return view('admin.doctor.index', compact('data'));
    }

    public function create()
    {
        $specialist = DoctorSpecialistEnum::asArray();
        return view('admin.doctor.create', compact('specialist'));
    }

    public function store(CreateDoctorRequest $request)
    {
        try {
            $doctor = $request->validated();
            $this->repository->store($doctor);
            return redirect()->route('admin.doctor.index');
        }
        catch (\Exception $e) {
            return back()->with(['message' => 'ERROR' . $e]);
        }
    }
}
