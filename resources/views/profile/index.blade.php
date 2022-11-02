@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update applicant information</div>
                    <form action='{{route('profile.create')}}' method="POST">@csrf
                        <div class="card-body">
                            <div class='form-group'>
                                <label for=''>Address</label>
                                <input type='text' class='form-control' name='address'>
                            </div>

                            <div class='form-group'>
                                <label for=''>Phone number</label>
                                <input type='text' class='form-control' name='phone_number'>
                            </div>

                            <div class='form-group'>
                                <label for=''>Resume</label>
                                <input type='file' class='form-control' name='resume'>
                            </div>
                            <br>
                            <div class='form-group'>
                                <button class='btn btn-success' type='submit'> Update </button>
                            </div>
                        </div>
                        @if(Session::has('message'))
                        <div class='alert alert-success'>
                            {{Session::get('message')}}
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
