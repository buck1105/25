<?php

namespace App\Repositories;

use App\Enums\UserRoleEnum;
use App\Models\User;
use App\Traits\ResponseTrait;
use App\Interfaces\DoctorInterface;

//use Illuminate\Support\Facades\Log;

class DoctorRepository implements DoctorInterface
{
    use ResponseTrait;

    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function paginate()
    {
        return $this->model->where('role', UserRoleEnum::DOCTOR)->orWhere('role', UserRoleEnum::NURSE)->with('specialist')->paginate(8);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function store($data)
    {
        try {
            $image = uniqid() . '_' . trim($data['image']->getClientOriginalName());
            $data['image']->move(public_path('assets/img'), $image);
            $data['image'] = $image;
            $data['password'] = bcrypt($data['password']);
            return $this->model->insert($data);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function update($id, $data)
    {
        $model = $this->find($id);
        $data['password']= bcrypt($data['password']);
        return $model->update($data);
    }

    public function destroy($id)
    {
        $model = $this->find($id);
        return $model->destroy($id);
    }

}
