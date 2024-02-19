<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected function firstName(): Attribute
    {
        return new Attribute(
            get: function($firstName)
            {
                return ucwords($firstName);
            },
            set: function($firstName)
            {
                return strtolower($firstName);
            }
        );
    }
}