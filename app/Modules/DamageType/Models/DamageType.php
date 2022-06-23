<?php

namespace App\Modules\DamageType\Models;

use App\Modules\Damage\Models\Damage;
use App\Modules\Department\Models\Department;
use App\Modules\ProfileGroup\Models\ProfileGroup;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamageType extends Model
{
    use HasFactory;
    protected $guarded=["id"];

    public function profileGroup()
    {
        return $this->belongsTo(ProfileGroup::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function damages()
    {
        return $this->hasMany(Damage::class);
    }

}
