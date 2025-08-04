
@extends('master')
@section('title')
    about
@endsection
@section('content')
    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                  <div class="card">
                      <div class="card-header">Full Name Program</div>
                      <div class="card-body">
                          <form action="{{route('makeFullName')}}" method="post">
                              @csrf
                              <div  class="row mb-3">
                                  <label class="col-md-3">First Name</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" value="{{session('first_name')}}" name="first_name">
                                  </div>
                              </div>
                              <div  class="row mb-3">
                                  <label class="col-md-3">Last Name</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" value="{{session('last_name')}}" name="last_name">
                                  </div>
                              </div>
                              <div  class="row mb-3">
                                  <label class="col-md-3">Full Name</label>
                                  <div class="col-md-9">
                                      <input type="text" value="{{session('massage')}}" class="form-control" >
                                  </div>
                              </div>
                              <div  class="row mb-3">
                                  <label class="col-md-3"></label>
                                  <div class="col-md-9">
                                      <input type="submit" class="btn btn-success" value="Make Full Name">
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

