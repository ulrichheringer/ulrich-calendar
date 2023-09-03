@extends('layout')
@section('title', 'Calendar')
@section('content')
@php
    date_default_timezone_set('America/Sao_Paulo');
    // $date = date('m/d/Y h:i:s a', time());
    $currentYear = date('Y', time());
    $currentDay = date('d', time());
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
  
<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<table>
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
    <tr>
        <td>10:00</td>
        <td>Passear cachorro</td>
        <td>No tasks...</td>
        <td>No tasks...</td>
        <td>No tasks...</td>
        <td>No tasks...</td>
        <td>No tasks...</td>
        <td>No tasks...</td>
    </tr>
    <tr>
        <td>11:00</td>
        <td>Estudar</td>
    </tr>
    <tr>
        <td>12:00</td>
        <td>Comer</td>
    </tr>
    <tr>
        <td>13:00</td>
        <td>Dormir</td>
    </tr>
    <tr>
        <td>14:00</td>
    </tr>
    <tr>
        <td>15:00</td>
    </tr>
    <tr>
        <td>16:00</td>
    </tr>
</table>

{{--<ul class="days">
    @php
        $totalDaysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonthNumber, $currentYear);
    @endphp
    @for ($i = 0; $i<=$totalDaysInMonth;$i++)
        <li ><span class={{ $i == $currentDay ? 'active' : '' }}>{{ $i }}</span></li>
    @endfor
</ul>--}}
@endsection