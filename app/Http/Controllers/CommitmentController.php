<?php

namespace App\Http\Controllers;

use App\Company;
use App\Commitment;
use Illuminate\Http\Request;

class CommitmentController extends Controller
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
    public function create(Company $company)
    {
        return view('commitment.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        $company->commitments()->create($request->only('description', 'due_date'));

        return redirect()->route('company.show', ['company' => $company->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commitment  $commitment
     * @return \Illuminate\Http\Response
     */
    public function show(Commitment $commitment)
    {
        return view('commitment.show', compact('commitment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commitment  $commitment
     * @return \Illuminate\Http\Response
     */
    public function edit(Commitment $commitment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commitment  $commitment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commitment $commitment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commitment  $commitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commitment $commitment)
    {
        //
    }
}
