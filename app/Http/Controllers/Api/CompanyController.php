<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Account;
use App\Company;


class CompanyController extends Controller
{
    public function index(Account $account)
    {
        return $account->companies()->paginate();
    }

    public function store(Request $request, Account $account)
    {
        $company = $account->companies()->create($request->only('name', 'rut'));
        return response()->json($company, Response::HTTP_CREATED);
    }

    public function show(Company $company)
    {
        return $company;
    }

    public function update(Request $request, Company $company)
    {
        $company->fill($request->only('name', 'rut'))->save();
        return response()->json($company, Response::HTTP_OK);
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
