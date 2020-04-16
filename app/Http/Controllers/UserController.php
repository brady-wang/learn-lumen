<?php

namespace App\Http\Controllers;

use App\Models\TbUsers;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

	public $userRepository;
	public function __construct()
	{
		$this->userRepository = new UserRepository();
	}

	public function info(Request $request)
    {

    	$table = $this->userRepository->getTable();
		echo $table;
    	$res = $this->userRepository->query()->where('id','>',1)->get();
    	dd($res->toArray());
    	$query = TbUsers::query();
	    $query->where(['id'=>2]);

	    $query->where(['user_name'=>'wang']);
	    $res = $query->get();

	    $res = (new UserRepository())->getList(['id'=>1,'user_name'=>'brady']);
	    dd($res->toArray());
    }

}
