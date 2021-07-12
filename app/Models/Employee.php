<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory ,\Znck\Eloquent\Traits\BelongsToThrough;

    protected $table = "employees";

    protected $fillable = [
        'shop_id',
        'name',
        'email',
        'designation',
        'phone'
    ];

    public function getShop()
    {
        return $this->belongsTo(Shop::class,'shop_id','id');
    }

    public function getCity()
    {
        return $this->belongsToThrough(City::class,Shop::class,'id','',[Shop::class => 'city_id']);
    }

    public function getProvince()
    {
        return $this->belongsToThrough(Province::class,[City::class,Shop::class],'id','',[City::class => 'province_id',Shop::class => 'city_id']);
    }

    public function getCountry()
    {
        return $this->belongsToThrough(Country::class,[Province::class,City::class,Shop::class],'id','',[Province::class => 'country_id',City::class => 'province_id',Shop::class => 'city_id']);
    }

    public function getContinent()
    {
        return $this->belongsToThrough(Continent::class,[Country::class,Province::class,City::class,Shop::class],'id','',[Country::class => 'continent_id',Province::class => 'country_id',City::class => 'province_id',Shop::class => 'city_id']);
    }
}
