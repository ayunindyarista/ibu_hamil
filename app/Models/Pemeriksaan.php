<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pemeriksaan
 * 
 * @property int $ID_PEMERIKSAAN
 * @property string $ID_PASIEN
 * @property string $ID_RELAWAN
 * @property Carbon $TGL_PEMERIKSAAN
 * @property int $KEHAMILAN_KE
 * @property string $KELUHAN
 * @property float $TEKANAN_DARAH_SISTOL
 * @property float $TEKANAN_DARAH_DIASTOL
 * @property float $BERAT_BADAN
 * @property float $TINGGI_BADAN
 * @property int $UMUR_KEHAMILAN
 * @property boolean $FOTO
 * 
 * @property Relawan $relawan
 * @property Pasien $pasien
 * @property Collection|Evaluasi[] $evaluasis
 *
 * @package App\Models
 */
class Pemeriksaan extends Model
{
	protected $table = 'pemeriksaan';
	protected $primaryKey = 'ID_PEMERIKSAAN';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PEMERIKSAAN' => 'int',
		'KEHAMILAN_KE' => 'int',
		'TEKANAN_DARAH_SISTOL' => 'float',
		'TEKANAN_DARAH_DIASTOL' => 'float',
		'BERAT_BADAN' => 'float',
		'TINGGI_BADAN' => 'float',
		'UMUR_KEHAMILAN' => 'int',
	];

	protected $dates = [
		'TGL_PEMERIKSAAN',
		'TGL_RESPON',
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'ID_PASIEN',
		'ID_RELAWAN',
		'TGL_PEMERIKSAAN',
		'KEHAMILAN_KE',
		'KELUHAN',
		'TEKANAN_DARAH_SISTOL',
		'TEKANAN_DARAH_DIASTOL',
		'BERAT_BADAN',
		'TINGGI_BADAN',
		'UMUR_KEHAMILAN',
		'TGL_RESPON',
		'RESPONMEDIS',
		'FOTO',
		'created_at',
		'updated_at'
	];

	public function relawan()
	{
		return $this->belongsTo(Relawan::class, 'ID_RELAWAN');
	}

	public function pasien()
	{
		return $this->belongsTo(Pasien::class, 'ID_PASIEN');
	}

	public function evaluasis()
	{
		return $this->hasMany(Evaluasi::class, 'ID_PEMERIKSAAN');
	}
}
