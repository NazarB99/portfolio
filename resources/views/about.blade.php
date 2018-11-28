@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4>О Нас</h4>
                <form method="POST" action="{{route('about.post')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="title" value="{{$about->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="text" cols="30" rows="10" class="form-control">{{$about->text}}</textarea>
                    </div>
                    <input class="btn btn-primary mt-2" type="submit" value="Добавить">
                </form>
            </div>
        </div>
    </div>
@endsection
