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
        <h4 class="tittle-w3-agileits mb-4">Add Teacher Form</h4>
        <form action="{{url('/teacher/store')}}" method="post">@csrf
            {{--<div class="form-row">--}}
                {{--<div class="form-group col-md-6">--}}
                    {{--<label for="inputEmail4">Email</label>--}}
                    {{--<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required="">--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-6">--}}
                    {{--<label for="inputPassword4">Password</label>--}}
                    {{--<input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required="">--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">First name</label>
                    <input type="text" name="first_name" class="form-control" id="inputCity" required="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Middle name</label>
                    <input name="middle_name" type="text" class="form-control" id="inputCity" required="">
                    {{--<select id="inputState" class="form-control">--}}
                    {{--<option selected="">Choose...</option>--}}
                    {{--<option>...</option>--}}
                    {{--</select>--}}
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Last name</label>
                    <input type="text" name="last_name" class="form-control" id="inputZip" required="">
                </div>
            </div>

            <div class="form-row">
                {{--<div class="form-group col-md-4">--}}
                {{--<label for="inputCity">ID NO</label>--}}
                {{--<input type="text" name="id" class="form-control" id="inputCity" required="">--}}
                {{--</div>--}}
                <div class="form-group col-md-6">
                    <label for="inputState">Department</label>
                    <select id="inputState" class="form-control" name="department" required="">
                        <option selected="">Choose...</option>

                            <option value="1">Department 1</option>

                        <option value="2">Department 2</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputState">ID No.</label>
                    <input name="id" type="text" class="form-control" id="inputCity" required="">
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