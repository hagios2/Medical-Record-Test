<?php

namespace App\Observers;

use App\Mail\MedicalRecordMail;
use App\Models\MedicalRecord;
use Illuminate\Support\Facades\Mail;

class MedicalRecordObserver
{
    /**
     * Handle the MedicalRecord "created" event.
     *
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return void
     */
    public function created(MedicalRecord $medicalRecord): void
    {
        Mail::to('peopleoperations@kompletecare.com')->queue(new MedicalRecordMail($medicalRecord));
    }

    /**
     * Handle the MedicalRecord "updated" event.
     *
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return void
     */
    public function updated(MedicalRecord $medicalRecord)
    {
        //
    }

    /**
     * Handle the MedicalRecord "deleted" event.
     *
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return void
     */
    public function deleted(MedicalRecord $medicalRecord)
    {
        //
    }

    /**
     * Handle the MedicalRecord "restored" event.
     *
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return void
     */
    public function restored(MedicalRecord $medicalRecord)
    {
        //
    }

    /**
     * Handle the MedicalRecord "force deleted" event.
     *
     * @param  \App\Models\MedicalRecord  $medicalRecord
     * @return void
     */
    public function forceDeleted(MedicalRecord $medicalRecord)
    {
        //
    }
}
