@extends('layouts.app');

@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('account.show', ['account' => $company->account->id]) }}">{{ $company->account->name }}</a></li>
                        <li class="breadcrumb-item">{{ $company->name }}</li>
                        <a href="{{ route('commitment.create', ['company' => $company->id]) }}" class="btn btn-primary btn-sm ml-auto">Create commitment</a>
                    </ol>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($company->commitments as $commitment)
                    <a href="{{ route('commitment.show', ['commitment' => $commitment->id]) }}" class="list-group-item list-group-action">{{ $commitment->description }} ({{ $commitment->due_date }})</a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection