<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Http\Resources\AccountResource;
use App\Http\Resources\AccountCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AccountController extends Controller
{
    public function index()
    {
        return Account::paginate();
        return new AccountCollection(Account::paginate());
    }

    public function store(Request $request)
    {
        $account = Account::create($request->only('name'));
        return response()->json($account, Response::HTTP_CREATED);
    }

    public function show(Account $account)
    {
        return $account;
    }

    public function update(Request $request, Account $account)
    {
        $account->fill($request->only('name'))->save();
        return response()->json($account, Response::HTTP_OK);
    }

    public function destroy(Account $account)
    {
        $account->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
