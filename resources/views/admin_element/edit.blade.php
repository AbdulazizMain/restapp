@extends("admin.admin")
@section('content')
    <div class="col-8 p-4">
    <h1 class="lead display-5">Edit product</h1>
    <br>
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Product nomi</label>
              <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$data->nomi}}">
            </div>
            <div class="mb-3">
                <label for="narx" class="form-label">Narxi</label>
                <input type="text" name="product_price" class="form-control" id="narx" value="{{$data->narx}}">
              </div>
              <div class="col-4">
                  <img src="{{$data->product_image}}" class="img-fluid" alt="">
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Rasim</label>
              <input type="file" name="product_image" class="form-control" id="exampleInputPassword1" value="{{$data->img}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
