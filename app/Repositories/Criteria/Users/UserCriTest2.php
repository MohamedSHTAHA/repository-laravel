<?php

namespace App\Repositories\Criteria\Users;

use App\Repositories\Contracts\CriteriaInterface;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Criteria\Criteria;

class UserCriTest2 extends Criteria
{

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model)
    {
        $query = $model->where('id','>', 2);
        return $query;
    }
}
