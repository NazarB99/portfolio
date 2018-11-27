@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4>Добавить главное изображение</h4>
                <div class="row">
                    <div class="col-md-3 mr-2 mb-2">
                        <img src="/images/{{$main_img->img_name}}"
                             style="width: 200px; height: 100px; cursor: pointer">
                    </div>
                </div>
                <form method="POST" action="{{route('main.img.post')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" class="form-control-file" name="main_image">
                    <input class="btn btn-primary mt-2" type="submit" value="Добавить">
                </form>
            </div>
        </div>
    </div>
@endsection
