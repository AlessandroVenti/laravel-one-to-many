@extends('layouts.main-layout')

@section('content')
     <main>
          <ul>
               @foreach ($employees as $employee)
                   <li>
                        <details>
                              <summary>Employee {{$employee -> id}}: {{$employee -> firstname}} {{$employee -> lastname}}</summary>
                              @foreach ($employee -> tasks as $task)
                              <p>Task Title: {{ $task -> title}}</p>
                              <p>Task Description: {{ $task -> description}}</p>
                              @endforeach
                        </details>
                   </li>
               @endforeach
          </ul>
     </main>
@endsection