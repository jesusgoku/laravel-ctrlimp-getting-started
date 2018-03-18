<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Company;
use App\Commitment;


class CommitmentController extends Controller
{
    public function index(Company $company)
    {
        return $company->commitments()->paginate();
    }

    public function store(Request $request, Company $company)
    {
        $commitment = $company->commitments()->create($request->only('description', 'due_date'));
        return response()->json($commitment, Response::HTTP_CREATED);
    }

    public function show(Commitment $commitment)
    {
        return $commitment;
    }

    public function update(Request $request, Commitment $commitment)
    {
        $commitment->fill($request->only('description', 'due_date'))->save();
        return response()->json($commitment, Response::HTTP_OK);
    }

    public function destroy(Commitment $commitment)
    {
        $commitment->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
