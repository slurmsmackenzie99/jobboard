@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$job->title}}</div>

                <div class="card-body">
                    <p>
                        <h3>Company</h3>
                        {{$job->company_name}}
                    </p>
                    <p>
                        <h3>Description</h3>
                        {{$job->description}}
                    </p>
                    <p>
                        <h3>Posted</h3>
                        {{$job->created_at->diffForHumans()}}
                    </p>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Apply</div>

                <div class="card-body">
                    <button class="btn btn-success">Click here to apply</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
