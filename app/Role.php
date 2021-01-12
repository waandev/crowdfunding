<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
    /**
     * The "booting" function of model
     *
     * @return void
     */
    protected static function boot()
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
        parent::boot();
    }

    protected $table = 'role';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
