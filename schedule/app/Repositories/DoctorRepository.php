<?php

namespace App\Repositories;

use App\Enums\UserRoleEnum;
use App\Models\User;
use App\Repositories\DoctorRepositoryContract as DoctorContract ;
use phpDocumentor\Reflection\Types\Boolean;

class DoctorRepository implements DoctorRepositoryContract
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function paginate()
    {
        return $this->model->where('role', UserRoleEnum::DOCTOR)->paginate(8);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function store($data)
    {

        $data['image']->move(public_path('assets/img'), $data['image']->getClientOriginalName());
        $data['image'] = (string)$data['image']->getClientOriginalName();
        $data['gender'] = (bool)$data['gender'];
        $data['role'] = 1;
        dd($data);
        return $this->model->insert($data);
    }

    public function update($id, $data)
    {
        $model = $this->find($id);
        return $model->update($data);
    }

    public function destroy($id)
    {
        $model = $this->find($id);
        return $model->destroy($id);
    }

}
