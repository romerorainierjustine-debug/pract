@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Update Profile') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <div class="content">   
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        This is the form for updating your profile
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" id="fname" class="form-control" value="{{ auth()->user()->fname }}">
                                </div>
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" id="lname" class="form-control" value="{{ auth()->user()->lname }}">
                                </div>
                                <div class="form-group
                                    <label for="midname">Middle Name</label>
                                    <input type="text" name="midname" id="midname" class="form-control" value="{{ auth()->user()->midname }}">
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" id="age" class="form-control" value="{{ auth()->user()->age }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" id="address" class="form-control" value="{{ auth()->user()->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="zipcode">Zip Code</label>
                                    <input type="text" name="zipcode" id="zipcode" class="form-control" value="{{ auth()->user()->zipcode }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection