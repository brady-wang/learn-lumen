<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020/4/17
 * Time: 00:00
 */


namespace App\Repository;

use App\Models\TbUsers;
use App\Models\Users;
use Brady\Tool\Repository\BaseRepository;

class UserRepository extends BaseRepository
{
	const MODEL = TbUsers::class;
}