<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory, \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $table = "countries";

    protected $fillable = [
        'continent_id',
        'name',
    ];

    public function getContinent()
    {
        return $this->belongsTo(Continent::class,'continent_id','id');
    }

    public function getProvinces()
    {
        return $this->hasMany(Province::class,'province_id','id');
    }

    public function getCities()
    {
        return $this->hasManyThrough(City::class,Province::class,'country_id','province_id','id','id');
    }

    public function getShops()
    {
        return $this->hasManyDeep(Shop::class,[Province::class,City::class],['country_id','province_id','city_id'],['id','id','id']);
    }

    public function getEmployees()
    {
        return $this->hasManyDeep(Employee::class,[Province::class,City::class,Shop::class],['country_id','province_id','city_id','shop_id'],['id','id','id','id']);
    }
}
