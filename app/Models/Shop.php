<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory ,\Znck\Eloquent\Traits\BelongsToThrough;

    protected $table = "shops";

    protected $fillable = [
        'city_id',
        'name'
    ];

    public function getContinent()
    {
        return $this->belongsToThrough(Continent::class,[Country::class,Province::class,City::class],'id','',[Country::class => 'continent_id',Province::class => 'country_id',City::class => 'province_id']);
    }

    public function getCountry()
    {
        return $this->belongsToThrough(Country::class,[Province::class,City::class],'id','',[Province::class => 'country_id',City::class => 'province_id']);
    }

    public function getProvince()
    {
        return $this->belongsToThrough(Province::class,City::class,'id','',[City::class => 'province_id']);
    }

    public function getCity()
    {
        return $this->belongsTo(City::class,'city_id','id');
    }

    public function getEmployees()
    {
        return $this->hasMany(Employee::class,'employee_id','id');
    }
}
