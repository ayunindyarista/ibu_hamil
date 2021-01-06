<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluasi
 * 
 * @property int $ID_EVALUASI
 * @property int $ID_PEMERIKSAAN
 * @property string $ID_DOKTER
 * @property Carbon $TGL_EVALUASI
 * @property string $RESPON_MEDIS
 * 
 * @property Dokter $dokter
 * @property Pemeriksaan $pemeriksaan
 *
 * @package App\Models
 */
class Evaluasi extends Model
{
	protected $table = 'evaluasi';
	protected $primaryKey = 'ID_EVALUASI';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_EVALUASI' => 'int',
		'ID_PEMERIKSAAN' => 'int'
	];

	protected $dates = [
		'TGL_EVALUASI'
	];

	protected $fillable = [
		'ID_PEMERIKSAAN',
		'ID_DOKTER',
		'TGL_EVALUASI',
		'RESPON_MEDIS'
	];

	public function dokter()
	{
		return $this->belongsTo(Dokter::class, 'ID_DOKTER');
	}

	public function pemeriksaan()
	{
		return $this->belongsTo(Pemeriksaan::class, 'ID_PEMERIKSAAN');
	}
}
