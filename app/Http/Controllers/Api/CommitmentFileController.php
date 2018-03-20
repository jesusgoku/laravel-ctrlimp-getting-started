<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\CommitmentFile;
use App\Commitment;


class CommitmentFileController extends Controller
{
    public function index(Commitment $commitment)
    {
        return $commitment->files()->paginate();
    }

    public function store(Request $request, Commitment $commitment)
    {
        $commitmentFile = $commitment->files()->create(array_merge(
            $request->only('title', 'description'),
            [ 'path' => $request->file('file')->store('public') ]
        ));
        return response()->json($commitmentFile, Response::HTTP_CREATED);
    }

    public function show(CommitmentFile $commitmentFile)
    {
        return $commitmentFile;
    }

    public function update(Request $request, CommitmentFile $commitmentFile)
    {
        $commitmentFile->fill(array_merge(
            $request->only('title', 'description'),
            [ 'path' => $request->file('file')->store('public') ]
        ))->save();
        return response()->json($commitmentFile, Response::HTTP_OK);
    }

    public function destroy(CommitmentFile $commitmentFile)
    {
        $commitmentFile->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
