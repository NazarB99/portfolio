@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4>Добавить главное изображение</h4>
                <div class="row">
                    <div class="col-md-3 mr-2 mb-2">
                        <img onclick="deleteImage();" src="/images/{{$main_img->img_name}}"
                             style="width: 200px; height: 100px; cursor: pointer">
                    </div>
                </div>
                <form method="POST" action="{{route('main.img.post')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" class="form-control-file" name="main_image">
                    <input class="btn btn-primary mt-2" type="submit" value="Добавить">
                </form>
                <form id="form-delete" action="{{route('main.img.delete')}}" method="POST">
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        deleteImage = () => {
            $res = confirm('Действительно хотите удалить картинку ?');
            if ($res === true){
                const form = document.getElementById(`form-delete`);
                form.submit();
            }
        }
    </script>
@endsection
