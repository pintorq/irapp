<?php namespace App\Models\Dato_basico;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Dato_basico\Departamento;

class Ciudad extends Model
{
  use SoftDeletes;


  /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ciudades';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  protected $fillable = [
    'nombre',
    'departamento_id'
  ];

  /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'created_at',
      'updated_at',
      'deleted_at',
  ];

  protected $dates = [
      'created_at',
      'updated_at',
      'deleted_at',
  ];

  public function departamento(){
    return $this->belongsTo(Departamento::class);
  }
  
}
