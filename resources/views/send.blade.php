@extends('forms.app')

@section('content')
<div>
<form action="/marks" method="post">
<div class="container">
    <h2>Форма для добавления</h2>
    <div class="col-sm-3">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="form-control" type="text" placeholder="Имя" name="name"><br>
        <input class="form-control" type="text" placeholder="Фамилия" name="surname"><br>
        <input class="form-control" type="number" placeholder="Оценка" name="mark"><br>
        <input type="submit" class="btn btn-success" value="Добавить">
    </div>
</div>    

</form>
</div>

@endsection