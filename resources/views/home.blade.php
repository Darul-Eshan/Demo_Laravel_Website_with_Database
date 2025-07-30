
@extends("master")
@section('title')
    Welcome
    @endsection
@section('content')
    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset($product['image'])}}" alt=""/>
                        <div class="card-body">
                            <h4>{{$product['name']}}</h4>
                            <p>{{$product['price']}}</p>
                            <hr/>
                            <a href="{{route('details',['id'=>$product['id']])}}" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection

