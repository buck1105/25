<?php

namespace App\Http\Controllers\Admin;

use App\Enums\DoctorSpecialistEnum;
use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\CreateDoctorRequest;
use App\Imports\UserImport;
use App\Models\User;
use App\Models\Specialist;
use App\Interfaces\DoctorInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exports\UserExport;
use Excel;

class DoctorController extends Controller
{

    protected $repository;

    public function __construct(DoctorInterface $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $data = $this->repository->paginate();
        return view('admin.doctor.index', compact('data'));
    }

    public function create()
    {
        // $specialist = User::with(['specialist' => function($query) {
        //     $query->where('id', 2);
        // }])->get();

         // foreach ($specialist as $value) {
        //      dd(data_get($value, 'id'));
        // }
        $specialist = User::with('specialist')->get();
        return view('admin.doctor.create', compact('specialist'));
    }

    public function store(CreateDoctorRequest $request)
    {
        try {
            $doctor = $request->validated();
            $this->repository->store($doctor);
            return redirect()->route('admin.doctor.index');
        } catch (\Exception $e) {
            return back()->with(['message' => 'ERROR' . $e]);
        }
    }

    public function edit($id)
    {
        $data = $this->repository->find($id);
        return view('admin.doctor.edit', compact('data'));
    }

    public function delete($id)
    {
        try {
            $this->repository->destroy($id);
            return redirect()->route('admin.doctor.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();
        if (empty($request->file('image'))) {
            $data['image'] =  $request->image_old;
        }
        else {
            $img_old = User::query()->where('id', $id)->pluck('image')->first();
            if (is_file(public_path('assets\img\\'.$img_old))) {
                @unlink(public_path('assets\img\\'.$img_old));
            }
            $image = uniqid() . '_' . trim($request->file('image')->getClientOriginalName());
            $request->file('image')->move(public_path('assets/img'), $image);
            $data['image'] = $image;
        }
        $this->repository->update($id, $data);
        return redirect()->route('admin.doctor.index');
    }

    public function import(Request $request)
    {
        try {
            Excel::import(new UserImport(), $request->file('file'));
            return redirect()->route('admin.doctor.index');
        }
        catch(\Exception $e) {
            return back()->with('msg', 'Import không thành công'. $e->getMessage());
        }
    }

    public function exportDoctor() {
       return Excel::download(new UserExport, 'users.csv');
   }


    public static function splitString($data, $numChar)
    {
    $content = self::processString($data->content);
    $result = [];
    $length = mb_strlen($content, 'UTF-8');
    $length = $length - ($length % $numChar);
    for ($i = 0; $i < $length; $i += $numChar) {
        $char = mb_substr($content, $i, $numChar, 'UTF-8');
        $result[] = $char;
    }

    return $result;
    }
}
