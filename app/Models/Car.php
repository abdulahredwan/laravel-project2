<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table ='cars';

    protected $primaryKey ='id';

    protected $fillable = ['name', 'founded', 'description'];

    public function carmodels()
    {
      return $this->hasMany(CarModel::class);
    }

    public function engines()
    {
      return $this->hasManyThrough(Engine::class,
      CarModel::class,
      'car_id',//Foregn Key On CarMode tabel
      'model_id'//Foragn key on Engine table.
    );
    }
    public function productionDate()
    {
      return $this->hasOneThrough(
        CarProductionDate::class,
        CarModel::class,
        'car_id',
        'model_id',
      );
    }


}
