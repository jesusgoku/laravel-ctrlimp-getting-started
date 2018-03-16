@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create file</div>
                <div class="card-body">
                    <form action="{{ route('commitmentFile.store', ['commitment' => $commitment->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" placeholder="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" placeholder="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" id="file" name="file" placeholder="file" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create file</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection