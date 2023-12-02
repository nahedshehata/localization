<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
</head>
<body>

@foreach ($data as $item)
    <h2>{{ $item["body_" . app()->getLocale()] }}</h2>
    <p>{{  $item["title_" . app()->getLocale()] }}</p>
@endforeach
</body>
</html>
