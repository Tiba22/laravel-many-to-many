@extends('layouts.main-layout')

@section('content')
  <main id="mainIndex">
    <ul>
      <li class="title">
        <h2>Employees</h2>
      </li>
      @foreach ($employees as $employee)
        <li>
          <span>{{$employee -> firstname}} {{$employee -> lastname}}</span>
          <a class="employeeName" href="{{route('employeeDetails', $employee -> id)}}">
            <i class="fas fa-info-circle"></i>
          </a>
        </li>
      @endforeach
    </ul>
  </main>
@endsection
