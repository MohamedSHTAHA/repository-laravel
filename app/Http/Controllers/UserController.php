<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\Criteria\Users\UserCriTest;
use App\Repositories\Criteria\Users\UserCriTest2;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{

    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {

        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $y = $this->userRepository
            ->makeModel()
            ->pushCriteria(new UserCriTest())
            ->pushCriteria(new UserCriTest())
            ->all();
        $x = $this->userRepository
            ->makeModel()
            ->pushCriteria(new UserCriTest())->all();
        return Response::json($this->userRepository
            ->pushCriteria(new UserCriTest())
            ->all());
    }


    public function show($id)
    {
        return Response::json($this->userRepository
           // ->pushCriteria(new UserCriTest())
            ->find($id));
    }
}
