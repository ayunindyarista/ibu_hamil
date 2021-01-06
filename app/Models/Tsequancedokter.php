<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tsequancedokter
 * 
 * @property int $id_dokter
 *
 * @package App\Models
 */
class Tsequancedokter extends Model
{
	protected $table = 'tsequancedokter';
	protected $primaryKey = 'id_dokter';
	public $timestamps = false;
}
