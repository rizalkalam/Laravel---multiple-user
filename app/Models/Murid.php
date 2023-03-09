<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Murid extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable;

    protected $guarded = [];

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function($model){
            if ($model->getKey() == null) {
                 $model->setAttribute($model->getKeyName(), Str::uuid()->toString());
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    // protected $primaryKey = 'nis';

    // public $incrementing = false;
}
