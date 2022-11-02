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
                    @if (Session::has('message'))
                            <div class='alert alert-success'>
                                {{ Session::get('message') }}
                            </div>
                        @endif
                    <form action="{{route('apply', [$job->id])}}" method="POST">@csrf
                        <button class="btn btn-success" type="submit">Click here to apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
