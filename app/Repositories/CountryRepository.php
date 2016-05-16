<?php

namespace App\Repositories;

use App\Country;

class CountryRepository
{
    public function getCountries()
    {
        return Country::orderBy('name','asc')                    
                    ->get();
    }
}