<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use HasFactory, \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $table = "continents";

    protected $fillable = [
        'name'
    ];

    public function getCountries()
    {
        return $this->hasMany(Country::class,'continent_id','id');
    }

    public function getProvinces()
    {
        return $this->hasManyThrough(Province::class,Country::class,'continent_id','country_id','id','id');
    }

    public function getCities()
    {
        return $this->hasManyDeep(City::class,[Country::class,Province::class],['continent_id','country_id','province_id'],['id','id','id']);
    }

    public function getShops()
    {
        return $this->hasManyDeep(Shop::class,[Country::class,Province::class,City::class],['continent_id','country_id','province_id','city_id'],['id','id','id','id']);
    }

    public function getEmployees()
    {
        return $this->hasManyDeep(Employee::class,[Country::class,Province::class,City::class,Shop::class],['continent_id','country_id','province_id','city_id','shop_id'],['id','id','id','id','id']);
    }
}
