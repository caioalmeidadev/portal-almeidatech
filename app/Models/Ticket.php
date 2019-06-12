<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Ticket extends Model
{
    protected $fillable = ['client_id','create_date','expire_date','title','descryption','contact','contact_name',
    'tech_id','checked_for','create_for','status'];



    public $timestamps = False;

    public function getStatusAttribute($value)
    {
        switch($value){
            case 0 : return 'Aberto';
        }
    }



    public function users()
    {
        return $this->belongsTo(User::class,'create_for');
    }

    public function clients()
    {
        return $this->belongsTo(Client::class,'client_id');
    }

    public function techs()
    {
        return $this->belongsTo(User::class,'tech_id');
    }

    public function checked_for()
    {
        return $this->belongsTo(User::class,'checked_for');
    }

}
