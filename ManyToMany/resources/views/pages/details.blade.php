@extends('layouts.main-layout')
@section('title')
  Dettagli Employee
@endsection
@section('content')

  <main id="mainDetails">
    <h1>
      Dettagli
    </h1>
    <h3>
      ID:
    </h3>
    <span>
      {{$employee -> id}}
    </span>
    <h3>
      Firstname:
    </h3>
    <span>
      {{$employee -> firstname}}
    </span>
    <h3>
      Lastname:
    </h3>
    <span>
      {{$employee -> lastname}}
    </span>
    <h1>
      Address
    </h1>

    <h3>
      Street:
    </h3>
    <span>
      {{$employee -> location -> street}}
    </span>
    <h3>
      State:
    </h3>
    <span>
      {{$employee -> location -> state}}
    </span>
    <h1>
      Tasks
    </h1>
    <h3>
      Name
    </h3>

    @if (count($employee -> tasks) > 0)
      @foreach ($employee -> tasks as $task)
        <span>
          {{$task -> name}}
        </span>
      @endforeach
    @else
      <span>
        Nessuna Task
      </span>
    @endif

    <a id="backHome" href="{{route('employeeHome')}}">
      Back to home
    </a>
  </main>

@endsection
