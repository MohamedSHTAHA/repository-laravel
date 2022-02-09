<?php

namespace App\Repositories\Contracts;

use App\Repositories\Criteria\Criteria;

/**
 * Interface CriteriaInterface
 * @package Bosnadev\Repositories\Contracts
 */
interface CriteriaInterface
{
    public function pushCriteria(Criteria $criteria);
}
