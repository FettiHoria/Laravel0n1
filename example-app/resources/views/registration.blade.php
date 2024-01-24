@extends('layout')
@section('title', 'Login')
@section('content')

    <div class="form_center_div">
        <div class="min-vh-100 min-vw-100 d-flex flex-grow-1 justify-content-center align-items-center">
            <div>
                <form action="{{route('registerPost')}}" method="POST" style="align:center">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>

                        <center>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option selected>Select Role</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>

                            </select>
                        </center>

                    <center><button type="submit" class="btn btn-primary">Submit</button></center>
                </form>
                <div>
                </div>
            </div>

@endsection
