<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ApiTokenGenerator extends Controller
{

    /**
    * Update the authenticated user's API token.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return array
    */

    protected function update(Request $request)
    {
        $token = Str::random(60);

        $request->user()->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();

        return $token;
    }
    public function index(Request $request)
    {
      $token=$this->update($request);
      return view('api_token')->with(['token'=>$token]);
    }
}
