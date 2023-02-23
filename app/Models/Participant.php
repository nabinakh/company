<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Participant extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'agency_code',
        'agency_name',
        'user_id',
        'group_type',
    ];

    public function agency_group(){
        return $this->belongsTo(AgencyGroup::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
