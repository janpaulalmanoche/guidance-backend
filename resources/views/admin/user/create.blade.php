@extends('layouts.master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Add User Form</h4>
        <form action="{{url('/user-store')}}" method="post">@csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required="">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">First name</label>
                    <input type="text" name="first_name" class="form-control" id="inputCity" >
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Middle name</label>
                    <input name="middle_name" type="text" class="form-control" id="inputCity">
                    {{--<select id="inputState" class="form-control">--}}
                    {{--<option selected="">Choose...</option>--}}
                    {{--<option>...</option>--}}
                    {{--</select>--}}
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Last name</label>
                    <input type="text" name="last_name" class="form-control" id="inputZip">
                </div>
            </div>

            <div class="form-row">
                {{--<div class="form-group col-md-4">--}}
                {{--<label for="inputCity">ID NO</label>--}}
                {{--<input type="text" name="id" class="form-control" id="inputCity" required="">--}}
                {{--</div>--}}
                <div class="form-group col-md-6">
                    <label for="inputState">Role</label>
                    <select id="inputState" class="form-control" name="role">
                        <option selected="">Choose...</option>
                        @foreach($role as $roles)
                            <option value="{{$roles->id}}">{{$roles->role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputZip">Type</label>
                    <select id="inputState" name="type" class="form-control">
                        <option selected="">Choose...</option>
                        @foreach($type as $types)
                            <option value="{{$types->id}}">{{$types->type}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{--<div class="form-group">--}}
            {{--<label for="inputAddress2">Address 2</label>--}}
            {{--<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required="">--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
            {{--<div class="form-check">--}}
            {{--<input class="form-check-input" type="checkbox" id="gridCheck">--}}
            {{--<label class="form-check-label" for="gridCheck">--}}
            {{--Check me out--}}
            {{--</label>--}}
            {{--</div>--}}
            {{--</div>--}}
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection