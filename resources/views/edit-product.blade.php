@extends('master')
@section('title') edit @endsection
@section('content')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">Add Product</div>
                        <div class="card-body">
                            <p class="text-success text-center">{{session('massage')}}</p>
                            <form action="{{route('product.update',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->name}}" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{$product->price}}" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="{{asset($product->image)}}" alt="" height="100" width="110">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

