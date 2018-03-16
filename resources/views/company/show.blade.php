@extends('layouts.app');

@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $company->account->name }} / Company: {{ $company->name }}
                    <a href="{{ route('commitment.create', ['company' => $company->id]) }}" class="btn btn-primary float-right">Create commitment</a>
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