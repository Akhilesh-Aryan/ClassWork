@extends('base')
@section('title')
This Is | HomePage
@endsection
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <form action="/" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"
                                class="form-control @if($errors->has('name')) is-invalid @else is-valid @endif"
                                name="name" value="{{old('name')}}">
                            <label class="small text-danger">{{$errors->First('name')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text"
                                class="form-control @if($errors->has('contact')) is-invalid @else is-valid @endif"
                                name="contact" value="{{old('contact')}}">
                            <label class="small text-danger">{{$errors->First('contact')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text"
                                class="form-control @if($errors->has('email')) is-invalid @else is-valid @endif"
                                name="email" value="{{old('email')}}">
                            <label class="small text-danger">{{$errors->First('email')}}</label>
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date Of Birth</label>
                            <input type="date"
                                class="form-control @if($errors->has('dob')) is-invalid @else is-valid @endif"
                                name="dob" value="{{old('dob')}}">
                            <label class="small text-danger">{{$errors->First('dob')}}</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-danger btn-block" name="post">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Dob</th>
                </tr>
                @foreach($data as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->name}}</td>
                    <td>{{$a->contact}}</td>
                    <td>{{$a->email}}</td>
                    <td>{{$a->dob}}</td>
                    <td> <a href="{{route('delete',['id'=>$a->id])}}" class="btn btn-danger">Delete</a></td>
                    <td> <a href="{{route('edit',['id'=>$a->id])}}" class="btn btn-success">Edit</a></td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
