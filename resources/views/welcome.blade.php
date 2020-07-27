@extends('layouts.mainlayout')

<form method="GET" action="{{url('sample')}}">
    <input type="text"  name="first_name" placeholder="firstname">
    <input type="text" name="last_name" placeholder="firstname">
    <button type="submit">Submit</button>
</form>
