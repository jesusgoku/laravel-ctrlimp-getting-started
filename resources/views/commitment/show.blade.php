@extends('layouts.app');

@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <ol class="breadcrumb pull-left">
                        <li class="breadcrumb-item"><a href="{{ route('account.show', ['account' => $commitment->company->account->id]) }}">{{ $commitment->company->account->name }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('company.show', ['company' => $commitment->company->id]) }}">{{ $commitment->company->name }}</a></li>
                        <li class="breadcrumb-item">{{ $commitment->description }}</li>
                        <a href="{{ route('commitmentFile.create', ['commitment' => $commitment->id]) }}" class="btn btn-primary btn-sm ml-auto">Upload file</a>
                    </ol>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($commitment->files as $commitmentFile)
                    {{--  <a href="{{ route('commitmentFile.show', ['commitmentFile' => $commitmentFile->id]) }}" class="list-group-item list-group-action">{{ $commitmentFile->title }}</a>  --}}
                    <a href="{{ Storage::url($commitmentFile->path) }}" class="list-group-item list-group-action">{{ $commitmentFile->title }}</a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection