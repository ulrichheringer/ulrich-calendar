<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        ul {list-style-type: none;}
    body {font-family: Verdana, sans-serif;}
    
    /* Month header */
    .month {
      padding: 70px 5px;
      width: 99%;
      background: #1abc9c;
      text-align: center;
    }
    
    /* Month list */
    .month ul {
      margin: 0;
      padding: 0;
    }
    
    .month ul li {
      color: white;
      font-size: 20px;
      text-transform: uppercase;
      letter-spacing: 3px;
    }
    
    /* Previous button inside month header */
    .month .prev {
      float: left;
      padding-top: 10px;
    }
    
    /* Next button */
    .month .next {
      float: right;
      padding-top: 10px;
    }
    
    /* Weekdays (Mon-Sun) */
    .weekdays {
      margin: 0;
      padding: 10px 0;
      background-color:#ddd;
    }
    
    .weekdays li {
      display: inline-block;
      width: 13.6%;
      color: #666;
      text-align: center;
    }
    
    /* Days (1-31) */
    .days {
      padding: 10px 0;
      background: #eee;
      margin: 0;
    }
    
    .days li {
      list-style-type: none;
      display: inline-block;
      width: 13.6%;
      text-align: center;
      margin-bottom: 5px;
      font-size:12px;
      color: #777;
    }
    
    /* Highlight the "current" day */
    .days li .active {
      padding: 5px;
      background: #1abc9c;
      color: white !important
    }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>