<?php

namespace Modules\CurbAppealLive\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\CurbAppealLive\Http\Controllers\CurbAppealLiveApiController;

class CurbAppealLiveController extends CurbAppealLiveApiController
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index( $subdomain )
    {

        $channel = $this->getChannelBySubdomain( $subdomain );
        //$user = \App::make('\Modules\ReactionGo\Http\Controllers\ReactionGoApiController')->getGoUser($account);
       // dd($channel);
       // dd(json_encode($user));
       // return $user;
        return view('main');  
        return view('reactiongo::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create($account)
    {
        $user = \App::make('\Modules\ReactionGo\Http\Controllers\ReactionGoApiController')->updateGoUser($account);
        dd($user);
        return view('reactiongo::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('curbappeallive::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('curbappeallive::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
