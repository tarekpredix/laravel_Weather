<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Weather</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="weather-background">
    <div class="weather-box">
        <h1>Weather Report</h1>
        <h2>Location: {{$location}}</h2>
        <div class="weather-info">
            <h2>Temperature: {{$currentTemp}}°C</h2>
            <h2>Weather Condition: {{$currentCondition}}</h2>
        </div>
    </div>
</body>
</html>
