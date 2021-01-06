<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Dokter
 * 
 * @property string $ID_DOKTER
 * @property string $NAMA
 * @property string $ALAMAT
 * @property string $NO_TELP
 * @property string $NIK
 * @property string $KOTA
 * @property string $INSTANSI_ASAL
 * @property string $EMAIL
 * @property string $PASSWORD
 * 
 * @property Collection|Evaluasi[] $evaluasis
 *
 * @package App\Models
 */
class Dokter extends Model
{
	protected $table = 'dokter';
	protected $primaryKey = 'ID_DOKTER';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'NAMA',
		'ALAMAT',
		'NO_TELP',
		'NIK',
		'KOTA',
		'INSTANSI_ASAL',
		'EMAIL',
		'PASSWORD'
	];

	public function evaluasis()
	{
		return $this->hasMany(Evaluasi::class, 'ID_DOKTER');
	}
}
