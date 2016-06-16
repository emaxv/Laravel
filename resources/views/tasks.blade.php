@extends('layouts.app')

@section('content')
<h1>Task add form</h1>
<div>
<form method="POST" action="/task">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label for="name">Name</label><input name="name" id="name" type="text"><br><br>
    <label for="descr">Description</label><textarea name="descr" id="descr"></textarea><br><br>
    <label for="url">URL</label><input name="url" id="url" type="url"><br><br>
    <label for="priority">Priority</label><input name="priority" id="priority" type="number"><br><br>
    <input type="submit"><br>
</form>
</div>

@endsection