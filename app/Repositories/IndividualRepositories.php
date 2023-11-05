<?php

namespace App\Repositories;
use App\Models\Individual;

class IndividualRepositories
{
    public function __construct(Individual $individual){
        $this->individual = $individual;
    }

    public function get() //buat ngambil semua data dr database
    {
        return $this->individual->all();
    } 

   
}


?>