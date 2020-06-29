@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('home') }}" method="POST">
        @csrf
        @foreach($products as $product)
        <div class="row justify-content-center">


            <div class="col-12 p-4">

                {{-- <input type="hidden" name="quantity_{{ $product->slug }}"> --}}
                <input type="hidden" name="drink_id[]" value="{{ $product->id }}">
                <div class="card">
                    <div class="card-header">{{ $product->name}}</div>

                    <div class="card-body">
                        <div class="text-center">
                            <h1>{{ $product->price }}</h1>
                        </div>

                        <div class="total">

                        </div>
                    </div>
                    <div class="card-footer bg-transparent border text-center">
                        <div class="number w-100">
                            <span class="minus">-</span>
                            <input type="text" class="quantity" value="0" name="quantity_{{$product->id}}">
                            <span class="plus">+</span>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        @endforeach


        <input type="submit" class="btn btn-success w-100" value="Unesi">
    </form>

</div>
@endsection

@section('footer-scripts')

<script>


</script>

@endsection