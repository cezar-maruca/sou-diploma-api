<?php

namespace App\ModelsAuthentication;

use Illuminate\Database\Eloquent\Model;

class ParentageType extends Model
{
    protected $connection = 'mysql_sa';

    protected $fillable = ['id'];

     public function parentage()
    {
        return $this->belongsToMany(Parentage::class)->withTimestamps();
        
    }

}
