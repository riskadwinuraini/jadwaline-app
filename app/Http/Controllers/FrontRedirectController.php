<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontRedirectController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $prevUrl = url()->previous();

        if($user = auth()->user()) {
            if($user->hasRole('admin')) return redirect()->route('admin.dashboard');
            return redirect()->route('member.dashboard');
        }

        if(str($prevUrl)->contains('admin-area'))
            return redirect()->route('admin.login');

        if(str($prevUrl)->contains('manager-area'))
            return redirect()->route('manager.login');

        return redirect('/');
    }
}
