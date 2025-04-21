<?php

namespace App\Faker;

use Faker\Provider\Base;

class DoctorTitleProvider extends Base
{

    protected static $usedTitles = [];
    protected static $titles = [
        'Intern',
        'Resident',
        'Registrar',
        'Specialist',
        'Consultant',
        'Senior Consultant',
        'Attending Physician',
        'Fellow',
        'Clinical Fellow',
        'Teaching Fellow',
        'Professor of Medicine',
        'Assistant Professor',
        'Associate Professor',
        'Visiting  Professor',
        'Intensivist',
        'Hospitalist',
        'Anesthesiologist',
        'Radiologist',
        'General Practitioner',
        'Family Medicine Doctor',
        'Consultant Surgeon',
        'Consultant Cardiologist',
        'Consultant Endocrinologist',
    ];

    public function uniqueDoctorTitle()
    {
        $available = array_filter(static::$titles, function ($titles) {
            return !in_array($titles, static::$usedTitles);
        });
        if (empty($available)) {
            throw new \Exception("No unique titles left.");
        }
        $title = static::randomElement($available);
        static::$usedTitles[] = $title;

        return $title;
    }
}