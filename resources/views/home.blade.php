@extends('layouts.app')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4>Добавить изображение</h4>
                <p class="text-lowercase">* Чтобы удалить картинку нажмите на нее</p>
                <div class="row">
                    @foreach($imgs as $img)
                        <div class="col-md-3 mr-2 mb-2">
                            <img src="images/projects/{{$img->image}}"
                                 style="width: 200px; height: 100px; cursor: pointer"
                                 onclick="deleteImage({!! $img->id !!})">
                            <form id="form-delete-{{$img->id}}" action="{{route('port.img.delete')}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="img" value="{{$img->id}}">
                            </form>
                        </div>
                    @endforeach
                </div>
                <form method="POST" action="/add/port-image" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="file" class="form-control-file" name="image">
                    <input class="btn btn-primary mt-2" type="submit" value="Добавить">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        deleteImage = (id) => {
            $res = confirm('Действительно хотите удалить картинку ?');
            if ($res === true){
                const form = document.getElementById(`form-delete-${id}`);
                form.submit();
            }
        }
    </script>
@endsection
