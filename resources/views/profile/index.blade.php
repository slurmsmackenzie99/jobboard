@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update applicant information</div>
                    <form action='{{ route('profile.create') }}' method="POST">@csrf
                        <div class="card-body">
                            <div class='form-group'>
                                <label for=''>Address</label>
                                <input type='text' class='form-control' name='address'>
                                @if($errors->has('address'))
                                <div class='error' style='color:red;'>
                                {{$errors->first('address')}}
                                </div>
                                @endif
                            </div>

                            <div class='form-group'>
                                <label for=''>Phone number</label>
                                <input type='text' class='form-control' name='phone_number'>
                                @if($errors->has('phone_number'))
                                <div class='error' style='color:red;'>
                                {{$errors->first('phone_number')}}
                                </div>
                                @endif
                            </div>

                            <br>
                            <div class='form-group'>
                                <button class='btn btn-success' type='submit'> Update </button>
                            </div>
                        </div>
                        @if (Session::has('message'))
                            <div class='alert alert-success'>
                                {{ Session::get('message') }}
                            </div>
                        @endif
                    </form>
                    <div class="card-header">Update resume</div>
                    <div class="card-body">
                    <form action="{{route('resume')}}" method="POST" enctype="multipart/form-data">@csrf
                        <div class='form-group'>
                            <label for=''>Resume</label>
                            <input type='file' class='form-control' name='resume'>
                            @if($errors->has('resume'))
                                <div class='error' style='color:red;'>
                                {{$errors->first('resume')}}
                                </div>
                                @endif
                            <br>
                            <button class='btn btn-success' type='submit'> Update </button>
                        </div>
                    </form>
                    </div>
                    <div class="card-header">Your current info</div>
                    <form action='{{ route('profile.create') }}' method="POST">@csrf
                        <div class="card-body">
                            <div class='form-group'>
                                <label for=''>Name</label>
                                {{ Auth::user()->name }}
                            </div>

                            <div class='form-group'>
                                <label for=''>Phone number</label>
                                {{ Auth::user()->phone_number }}
                            </div>


                            @if (!empty(Auth::user()->resume) == true)
                                <div class='form-group'>
                                    <a href="{{ Storage::url(Auth::user()->resume) }}"> Resume </a>
                                </div>
                            @else
                                Please upload resume
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
