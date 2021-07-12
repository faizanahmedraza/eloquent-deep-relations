<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory ,\Znck\Eloquent\Traits\BelongsToThrough;

    protected $table = "cities";

    protected $fillable = [
        'province_id',
        'name'
    ];

    public function getContinent()
    {
        $this->belongsToThrough(Continent::class,[Country::class,Province::class],'id','',[Country::class => 'continent_id',Province::class => 'country_id']);
    }

    public function getCountry()
    {
        $this->belongsToThrough(Country::class,Province::class,'id','',[Province::class => 'country_id']);
    }

    public function getProvince()
    {
        $this->belongsTo(Province::class,'province_id','id');
    }

    public function getShops()
    {
        return $this->hasMany(Shop::class,'shop_id','id');
    }

    public function getEmployees()
    {
        return $this->hasManyThrough(Employee::class,Shop::class,'city_id','shop_id','id','id');
    }
}
