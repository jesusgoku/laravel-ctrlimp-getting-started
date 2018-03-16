@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create commitment</div>
                <div class="card-body">
                    <form action="{{ route('commitment.store', ['company' => $company->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" placeholder="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="due_date">Due date</label>
                            <input type="datetime-local" id="due_date" name="due_date" placeholder="due date" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create commitment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection