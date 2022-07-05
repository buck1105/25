<?php

namespace App\Repositories;

use App\Enums\UserRoleEnum;
use App\Models\User;
use App\Traits\ResponseTrait;


class DoctorRepository implements DoctorRepositoryContract
{
    use ResponseTrait;
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

       try  {
           if ($data['image']->move(public_path('assets/img'), $data['image']->getClientOriginalName())) {
               $data['image'] = (string)$data['image']->getClientOriginalName();
           }
           $data['role'] = 1;
           $data['password'] = bcrypt('1234');
           return $this->model->insert($data);
       }
       catch (\Exception $e) {
           return $this->model->errorResponse();
       }
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
