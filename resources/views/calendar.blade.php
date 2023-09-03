@extends('layout')
@section('title', 'Calendar')
@section('content')
@php
    date_default_timezone_set('America/Sao_Paulo');
    // $date = date('m/d/Y h:i:s a', time());
    $currentYear = date('Y', time());
    $currentMonth = date('F', time());
    $currentMonthNumber = date('m', time());
@endphp
<div class="month">
    <ul>
      {{-- <liclass="prev">&#10094;</li> --}}
      {{--  <li class="next">&#10095;</li> --}}
      <li>{{ $currentMonth }}<br><span style="font-size:18px">{{ $currentYear }}</span></li>
    </ul>
</div>
  
{{-- <ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul> --}}

{{-- <table>
    <tr>
        <td>Time</td>
        <td>Mo</td>
        <td>Tu</td>
        <td>We</td>
        <td>Th</td>
        <td>Fr</td>
        <td>Sa</td>
        <td>Su</td>
    </tr>
    @foreach ($tasks as $task)
    <tr><td>{{ $task->time }}<td><td>{{ $task->name }}</td></tr>
    @endforeach
</table> --}}
{{-- <table>
    <tr>
        <td>Time</td>
        <td>Mo</td>
        <td>Tu</td>
        <td>We</td>
        <td>Th</td>
        <td>Fr</td>
        <td>Sa</td>
        <td>Su</td>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{ $task->time }}</td>
        <td>{{ $task->name }}</td>
        <td></td> <!-- Thu -->
        <td></td> <!-- We -->
        <td></td> <!-- Th -->
        <td></td> <!-- Fr -->
        <td></td> <!-- Sa -->
        <td></td> <!-- Su -->
    </tr>
    @endforeach
</table> --}}

{{-- <table>
    <tr>
        <td>Time</td>
        <td>Mo</td>
        <td>Tu</td>
        <td>We</td>
        <td>Th</td>
        <td>Fr</td>
        <td>Sa</td>
        <td>Su</td>
    </tr>
    @foreach ($groupedTasks as $time => $dayTasks)
        <tr>
            <td>{{ $time }}</td>
            @foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                <td>
                    @if (isset($dayTasks[$day]))
                        {{ Str::limit($dayTasks[$day]->name,20) }}
                        @else
                        No tasks to show
                    @endif
                </td>
            @endforeach
        </tr>
    @endforeach
</table> --}}

<table>
    <tr>
        <td>Time</td>
        @foreach (['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'] as $dayAbbreviation)
            <td>{{ $dayAbbreviations[$dayAbbreviation] }}</td>
        @endforeach
    </tr>
    @foreach ($allHoursInDay as $hour)
        <tr>
            <td>{{ $hour }}</td>
            @foreach (['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'] as $dayAbbreviation)
                <td>
                    @if (isset($groupedTasks[$hour][$dayAbbreviations[$dayAbbreviation]]))
                        {{ Str::limit($groupedTasks[$hour][$dayAbbreviations[$dayAbbreviation]]->name, 50) }}
                    @else
                        {{  Str::limit("Nenhuma tarefa", 15)}}
                    @endif
                </td>
            @endforeach
        </tr>
    @endforeach
</table>

{{--<ul class="days">
    @php
        $totalDaysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonthNumber, $currentYear);
    @endphp
    @for ($i = 0; $i<=$totalDaysInMonth;$i++)
        <li ><span class={{ $i == $currentDay ? 'active' : '' }}>{{ $i }}</span></li>
    @endfor
</ul>--}}

{{-- @foreach ($tasks as $task)
    <p>{{ $task->time }} - {{ $task->name }}</p>
@endforeach --}}
@endsection