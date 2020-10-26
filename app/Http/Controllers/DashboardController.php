<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Repositories\UserValidation;

class DashboardController extends Controller
{
    private $repository;
    private $validator; 

    public function __construct(UserRepository $repository, UserValidation $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }
}
