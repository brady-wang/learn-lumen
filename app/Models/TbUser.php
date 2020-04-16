<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 2020/4/16
 * Time: 23:33
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TbUsers extends Model
{
	public $primaryKey = "id";
	public $table = "tb_users";
}