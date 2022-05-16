<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    public function medicalRecord(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function addMedicalRecord($medicalRecord): Model
    {
        return $this->medicalRecord()->create($medicalRecord);
    }

}
