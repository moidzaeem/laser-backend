<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function centerServices()
    {
        return $this->belongsTo(CenterServices::class, 'id', 'center_id' );
    }

    public function practictionerCenter(){
        return $this->belongsTo(PractictionerCenter::class, 'id', 'center_id' );
    }

    public function centerDetails(){
        return $this->belongsTo(CenterDetail::class, 'id', 'center_id');
    }

    public function customersAppointments(){
        return $this->hasMany(Customers::class)->with('services');
    }
}
