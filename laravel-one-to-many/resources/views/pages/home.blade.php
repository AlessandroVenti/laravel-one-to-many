@extends('layouts.main-layout')

@section('content')
     <main>
          <ul>
               @foreach ($employees as $employee)
                   <li>
                        Employee: {{$employee -> firstname}} {{$employee -> lastname}}
                        <br>
                        @foreach ($employee -> tasks as $task)
                            Task Title: {{ $task -> title}}
                            <br>
                            Task Description: {{ $task -> description }}
                            <br>
                        @endforeach
                   </li>
               @endforeach
          </ul>
     </main>
@endsection