@extends("admin.admin")
@section('content')
    <div class="col-8 p-4">
    <h1 class="lead display-5">Add product</h1>
    <br>
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Product nomi</label>
              <input type="text" name="product_name" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="narx" class="form-label">Narxi</label>
                <input type="text" name="product_price" class="form-control" id="narx">
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="file" name="product_image" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
