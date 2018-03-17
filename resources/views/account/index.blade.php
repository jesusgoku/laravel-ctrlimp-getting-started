@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Accounts</li>
                            <a href="{{ route('account.create') }}" class="btn btn-primary btn-sm ml-auto">Create account</a>
                        </ol>
                        
                    </div>
                    @if($accounts)
                    <ul class="list-group list-group-flush">
                        @foreach($accounts as $account)
                        <a href="{{ route('account.show', ['account' => $account->id]) }}" class="list-group-item list-group-item-action">{{ $account->name }}</a>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection