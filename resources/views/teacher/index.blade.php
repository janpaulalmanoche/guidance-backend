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
        <h4 class="tittle-w3-agileits mb-4">Teacher list | <a href="{{url('/teacher-create')}}">Add</a></h4>

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">department</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teacher as $users)
                <tr>

                    <th scope="row">{{ucfirst($users->first_name)}} {{ucfirst($users->last_name)}} </th>
                    <td>{{$users->department}}</td>
                    <td>@Edit</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <!--// table5 -->

@endsection