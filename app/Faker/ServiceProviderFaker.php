<?php

namespace App\Faker;

use Exception;
use Faker\Provider\Base;

class ServiceProviderFaker extends Base
{
    protected static $usedNames = [];

    protected static $names = [
        'Teeth Cleaning',
        'Metal Braces Installation',
        'Facial Peeling',
        'Teeth Whitening 5 Root Canal Treatment',
        'Tartar Removal',
        'Dental Implants',
        'Allergy Treatment',
        'Skin Cleaning',
        'Acne Treatment',
        'Chemical Skin Peeling',
        'Laser Hair Removal',
        'Dental Veneers',
        'Eye Examination',
        'Clear Braces Installation',
        'Cavities Treatment',
        'Gum Cleaning',
        'Sensitive Teeth Treatment',
        'Pimple Treatment',
        'Face Lifting with Botox',
        'Smile Makeover with Veneers',
        'Ear Cleaning',
        'Skin Pigmentation Treatment',
        'Oral and Maxillofacial Surgery',
        'Wax Hair Removal',
        'Lip Peeling',
        'Scar Treatment',
        'Cosmetic Surgery',
        'Varicose Veins Treatment',
        'Skin Tightening Treatment',
        'Skin Rejuvenation Treatment',
    ];

    public function uniqueServiceName()
    {
        $available = array_filter(static::$names, function ($name) {
            return !in_array($name, static::$usedNames);
        });
        if (empty($available)) {
            throw new Exception("No unique names left.");
        }
        $name = static::randomElement($available);
        static::$usedNames[] = $name;

        return $name;
    }
}