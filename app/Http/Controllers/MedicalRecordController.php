<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalRecordRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function handleMedicalRecords(Patient $patient, MedicalRecordRequest $request)
    {

    }
}
