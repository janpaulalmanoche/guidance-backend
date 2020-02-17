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
        <h4 class="tittle-w3-agileits mb-4">Add Booking Form</h4>
        <form action="{{route('booking.store')}}" method="post">@csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Date</label>
                    <input type="text" name="date" class="form-control" id="inputEmail4" value="{{$date_}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Class Subject</label>
                    <input type="text" name="title" class="form-control" id="inputPassword4" required="">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputCity">Teacher</label>
                    <select id="inputState" class="form-control" name="teacher_id">
                    <option selected="">Choose...</option>
                    @foreach($teacher as $teachers)
                    <option value="{{$teachers->id}}">{{ucfirst($teachers->first_name)}} {{ucfirst($teachers->last_name)}}</option>
                    @endforeach

                    </select>
                </div>
                {{--<div class="form-group col-md-6">--}}
                    {{--<label for="inputState">Time</label>--}}
                    {{--<select id="inputState" class="form-control" name="time">--}}
                        {{--<option selected="">Choose...</option>--}}
                        {{--@foreach($time as $times)--}}
                            {{--<option value="{{$times->time}}">{{$times->time}}</option>--}}
                        {{--@endforeach--}}

                    {{--</select>--}}
                {{--</div>--}}
                <div class="form-group ">

                </div>
            </div>

            <div class="form-row">
                {{--<div class="form-group col-md-4">--}}
                {{--<label for="inputCity">ID NO</label>--}}
                {{--<input type="text" name="id" class="form-control" id="inputCity" required="">--}}
                {{--</div>--}}
                <div class="form-group col-md-6">
                    {{--<label for="inputState">Role</label>--}}
                    {{--<select id="inputState" class="form-control" name="role">--}}
                        {{--<option selected="">Choose...</option>--}}


                    {{--</select>--}}
                </div>
                <div class="form-group col-md-6">
                    {{--<label for="inputZip">Type</label>--}}
                    {{--<select id="inputState" name="type" class="form-control">--}}
                        {{--<option selected="">Choose...</option>--}}

                    {{--</select>--}}
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