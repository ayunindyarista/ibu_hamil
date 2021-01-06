<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Relawan
 * 
 * @property string $ID_RELAWAN
 * @property string $NAMA
 * @property string $ALAMAT
 * @property string $NO_TELP
 * @property string $NIK
 * @property bool $STATUS
 * @property string $EMAIL
 * @property string $PASSWORD
 * 
 * @property Collection|Pemeriksaan[] $pemeriksaans
 *
 * @package App\Models
 */
class Relawan extends Model
{
	protected $table = 'relawan';
	protected $primaryKey = 'ID_RELAWAN';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
	];

	protected $fillable = [
		'NAMA',
		'ALAMAT',
		'NO_TELP',
		'NIK',
		'EMAIL',
		'PASSWORD'
	];

	public function pemeriksaans()
	{
		return $this->hasMany(Pemeriksaan::class, 'ID_RELAWAN');
	}
}
