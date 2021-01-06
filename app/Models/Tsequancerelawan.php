<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tsequancerelawan
 * 
 * @property int $id_relawan
 *
 * @package App\Models
 */
class Tsequancerelawan extends Model
{
	protected $table = 'tsequancerelawan';
	protected $primaryKey = 'id_relawan';
	public $timestamps = false;
}
