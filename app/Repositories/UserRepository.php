<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\Eloquent\Repository;

class UserRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return User::class;
    }
}
