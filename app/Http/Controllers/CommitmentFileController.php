<?php

namespace App\Http\Controllers;

use App\Commitment;
use App\CommitmentFile;
use Illuminate\Http\Request;

class CommitmentFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Commitment $commitment)
    {
        return view('commitmentFile.create', compact('commitment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Commitment $commitment)
    {
        $commitment->files()->create(array_merge(
            $request->only('title', 'description'),
            [ 'path' => $request->file('file')->store('public') ]
        ));
        
        return redirect()->route('commitment.show', ['commitment' => $commitment->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommitmentFile  $commitmentFile
     * @return \Illuminate\Http\Response
     */
    public function show(CommitmentFile $commitmentFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommitmentFile  $commitmentFile
     * @return \Illuminate\Http\Response
     */
    public function edit(CommitmentFile $commitmentFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommitmentFile  $commitmentFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommitmentFile $commitmentFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommitmentFile  $commitmentFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommitmentFile $commitmentFile)
    {
        //
    }
}
