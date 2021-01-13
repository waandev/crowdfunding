<?php

namespace App;

use App\Traits\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class OtpCode extends Model
{
    use UsesUuid;

    protected $guarded = [];
}
