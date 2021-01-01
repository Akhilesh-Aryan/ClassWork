@extends('base')
@section('title')
This is | Edit | UpdatePage
@endsection
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                    <form action="{{route('updateData',['id'=>$record->id])}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @if($errors->has('name')) is-invalid @else is-valid @endif" name="name" value="{{$record->name}}">
                                <label class="small text-danger">{{$errors->First('name')}}</label>
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control @if($errors->has('contact')) is-invalid @else is-valid @endif" name="contact" value="{{$record->contact}}">
                                <label class="small text-danger">{{$errors->First('contact')}}</label>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @if($errors->has('email')) is-invalid @else is-valid @endif" name="email" value="{{$record->email}}">
                                <label class="small text-danger">{{$errors->First('email')}}</label>
                            </div>
                            <div class="form-group">
                                <label for="date_if_birth">Date Of Birth</label>
                                <input type="date"class="form-control @if($errors->has('dob')) is-invalid @else is-valid @endif" name="dob" value="{{$record->dob}}">
                                <label class="small text-danger">{{$errors->First('dob')}}</label>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Update" class="form-control btn btn-danger btn-block" name="post">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection