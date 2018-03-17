@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create account</div>
                <div class="card-body">
                    <form action="{{ route('account.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection