<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.header')
<?php
    if(DB::connection()->getDatabaseName())
{
   echo "Connected to database ".DB::connection()->getDatabaseName();
}
$response->send();
?>
</body>

</html>
