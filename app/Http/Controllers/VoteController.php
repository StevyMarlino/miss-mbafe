<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Http\Requests\StoreVoteRequest;
use App\Http\Requests\UpdateVoteRequest;
use App\Models\VoteIp;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $ip = [];
        foreach(VoteIp::all() as $voteIp)
        {
            $ip[] = $voteIp->ip;
        }
        $datas = [
            'candidates' => Vote::all(),
            'ip_votes' => $ip
        ];
        return view('mbafe.index',$datas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVoteRequest  $request
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateVoteRequest $request)
    {
        $candidate = Vote::find($request->id);
        $candidate->total_vote ++;
        $candidate->save();

         VoteIp::create([
            'ip' => request()->ip()
        ]);

        return redirect()->back();
    }

}
