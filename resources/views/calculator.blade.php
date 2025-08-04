@extends('master')

@section('title')
    Calculator
@endsection

@section('content')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">MY Calculator</div>
                        <div class="card-body">
                            <form action="{{ route('calculator') }}" method="post">
                                @csrf <!-- ✔️ Token for form security -->

                                <div class="row mb-3">
                                    <label class="col-md-3">First Number</label> <!-- ✔️ "Name" না, এখানে "Number" হওয়া উচিত -->
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="{{ session('first_number') }}" name="first_number">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Second Number</label> <!-- ✔️ Fix label -->
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" value="{{ session('second_number') }}" name="second_number">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Your Choice</label>
                                    <div class="col-md-9">
                                        <!-- ✔️ Each radio value fixed + pre-selecting logic -->
                                        <label><input type="radio" name="choice" value="+" {{ session('choice') == '+' ? 'checked' : '' }}> + </label>
                                        <label><input type="radio" name="choice" value="-" {{ session('choice') == '-' ? 'checked' : '' }}> - </label>
                                        <label><input type="radio" name="choice" value="*" {{ session('choice') == '*' ? 'checked' : '' }}> * </label>
                                        <label><input type="radio" name="choice" value="/" {{ session('choice') == '/' ? 'checked' : '' }}> / </label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <!-- ✔️ Result field show -->
                                        <input type="text" value="{{ session('result') }}" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="calculator_btn" value="Make Result">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
