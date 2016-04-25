<?php

namespace App\Http\Controllers;

use App\Registrant;
use Illuminate\Http\Request;

class RegistrantsController extends Controller
{
    /**
     * Register a new registrant
     *
     * @param  Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        // Validate the fields
        $this->validate($request, [
            'name'           => 'required|string',
            'email'          => 'required|email',
            'phone'          => "required|regex:/\(\d{3,}\)\s\d{3,}-\d{4,}/",
            'dob'            => 'required|date_format:m/d/Y',
            'address_street' => 'required|string',
            'address_city'   => 'required|string',
            'address_state'  => 'required|string',
            'address_zip'    => "required|regex:/\d{5,}/",
            'agree_rules'    => 'required|accepted'
        ]);

        // Register & return the registrant
        return response()->json(
            Registrant::register($request->all())
        );
    }
}
