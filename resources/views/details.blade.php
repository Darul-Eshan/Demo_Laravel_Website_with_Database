@extends('master')
@section('title') details
@endsection
@section('content')
    <section class="py-5 bg-info-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <div class="card card-body">
                  <img src="{{asset($product['image'])}}" alt="">
              </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1>{{$product['name']}}</h1>
                    <h3>{{$product['price']}}</h3>
                    <p>{{$product['description']}}</p>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
