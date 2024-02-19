<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;
    protected function type_audits_id(): Attribute
    {
        return new Attribute(
            get: function($type_audits_id)
            {
                return str_pad($type_audits_id, 3, "0", STR_PAD_LEFT);
            }
        );
    }
    
    protected function started_at(): Attribute
    {
        return new Attribute(
            get: function($started_at)
            {
                return 0;
            }
        );
    }
}
