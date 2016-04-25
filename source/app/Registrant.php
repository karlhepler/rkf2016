<?php

namespace App;

use Carbon\Carbon;
use App\Events\RegistrantRegistered;
use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    ////////////////
    // PROPERTIES //
    ////////////////

    protected $fillable = [
        'name', 'email', 'phone', 'dob',
        'address_street', 'address_city',
        'address_state', 'address_zip',
        'agree_rules'
    ];

    protected $casts = [
        'agree_rules' => 'boolean'
    ];

    protected $dates = [
        'dob'
    ];

    ///////////////////////////
    // PUBLIC STATIC METHODS //
    ///////////////////////////

    /**
     * Register the registrant
     *
     * @param  array  $data
     * @return \App\Registrant
     */
    public static function register(array $data)
    {
        // Make sure the date is a carbon instance
        $data['dob'] = $data['dob'] instanceof Carbon
            ? $data['dob']
            : Carbon::createFromFormat('m/d/Y', $data['dob'])->startOfDay();

        // Create the registrant
        $registrant = static::create($data);

        // Fire event
        event(new RegistrantRegistered($registrant));

        // Return the registrant
        return $registrant;
    }
}