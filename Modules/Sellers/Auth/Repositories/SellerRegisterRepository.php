<?php

namespace Modules\Sellers\Auth\Repositories;

use Illuminate\Database\Eloquent\Model;
use Modules\Sellers\Auth\Repositories\Interfaces\SellerRegisterInterface;

class SellerRegisterRepository implements SellerRegisterInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function saveStepOne()
    {
        return $this->model->create($data);
    }
}
