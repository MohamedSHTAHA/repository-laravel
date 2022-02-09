<?php

namespace App\Repositories\Criteria;

use App\Repositories\Contracts\RepositoryInterface as Repository;
use Illuminate\Database\Eloquent\Builder;

abstract class Criteria {

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public abstract function apply($model);
}
