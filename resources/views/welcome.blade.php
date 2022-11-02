@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='row'>
            <h1>Recent Jobs</h1>
            <table class='table'>
                <thead>
                    <th>Position</th>
                    <th>Company</th>
                    <th>Description</th>
                    <th>Date</th>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                    <tr>
                        <td>{{$job->title}}</td>
                        <td>{{$job->company_name}}</td>
                        <td>{{$job->description}}</td>
                        <td>{{$job->created_at->diffForHumans()}}</td>
                        <td> <button class='btn btn-success btn-ssm'>Apply</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
