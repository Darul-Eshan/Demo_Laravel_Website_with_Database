@extends('master')
@section('title')Manage-Product
@endsection
@section('content')
   <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="col">
                <div class="card">
                    <div class="card-header">All product Information</div>
                    <div class="card-body">
                        <table class="table table-bordered ">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>IMage</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->description}}</td>
                            <td><img src="{{$product->image}}" alt=""></td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   </section>
@endsection
