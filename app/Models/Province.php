<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory ,\Znck\Eloquent\Traits\BelongsToThrough, \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $table = "provinces";

    protected $fillable = [
        'country_id',
        'name'
    ];

    public function getContinent()
    {
        return $this->belongsToThrough(Continent::class,Country::class,'id','',[Country::class => 'continent_id']);
    }

    public function getCountry()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }

    public function getCities()
    {
        return $this->hasMany(City::class,'city_id','id');
    }

    public function getShops()
    {
        return $this->hasManyThrough(Shop::class,City::class,'shop_id','city_id','id','id');
    }

    public function getEmployees()
    {
        return $this->hasManyDeep(Employee::class,[City::class,Shop::class],['province_id','city_id','shop_id'],['id','id','id']);
    }
}
