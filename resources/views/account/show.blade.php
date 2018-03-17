@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">{{ $account->name }}</li>
                        <a href="{{ route('company.create', ['account' => $account->id ])}}" class="btn btn-primary btn-sm ml-auto">Create company</a>
                    </ol>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($account->companies as $company)
                    <a href="{{ route('company.show', ['company' => $company->id]) }}" class="list-group-item list-group-action">{{ $company->name }} ({{ $company->rut }})</a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection