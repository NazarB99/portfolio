@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4>Текст на главной</h4>
                <form method="POST" action="{{route('main.text.post')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Первая Строка</label>
                        <input type="text" name="first_line" value="{{$main->first_line}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Вторая Строка</label>
                        <input type="text" name="second_line" class="form-control" value="{{$main->second_line}}"/>
                    </div>
                    <div class="form-group">
                        <label>Третья Строка - 1</label>
                        <input type="text" name="third_line_1" class="form-control" value="{{$main->third_line_1}}"/>
                    </div>
                    <div class="form-group">
                        <label>Третья Строка - 2</label>
                        <input type="text" name="third_line_2" class="form-control" value="{{$main->third_line_2}}"/>
                    </div>
                    <div class="form-group">
                        <label>Третья Строка - 3</label>
                        <input type="text" name="third_line_3" class="form-control" value="{{$main->third_line_3}}"/>
                    </div>
                    <input class="btn btn-primary mt-2" type="submit" value="Добавить">
                </form>
            </div>
        </div>
    </div>
@endsection
