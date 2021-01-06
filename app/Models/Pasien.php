<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pasien
 * 
 * @property string $ID_PASIEN
 * @property string $NAMA
 * @property string $ALAMAT
 * @property string $NO_TELP
 * @property Carbon $TGL_LAHIR
 * @property string $KOTA
 * @property string $HISTORI_KESEHATAN
 * @property string $NIK
 * @property string $NO_KK
 * 
 * @property Collection|Pemeriksaan[] $pemeriksaans
 *
 * @package App\Models
 */
class Pasien extends Model
{
	protected $table = 'pasien';
	protected $primaryKey = 'ID_PASIEN';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'TGL_LAHIR'
	];

	protected $fillable = [
		'NAMA',
		'ALAMAT',
		'NO_TELP',
		'TGL_LAHIR',
		'KOTA',
		'HISTORI_KESEHATAN',
		'NIK',
		'NO_KK'
	];

	public function pemeriksaans()
	{
		return $this->hasMany(Pemeriksaan::class, 'ID_PASIEN');
	}
}
