@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        @foreach ($bills as $bill)
        <div class="col-12 col-md-3 p-4 p-md-2 d-flex align-items-stretch">
            <div class="card">
                <div class="card-header">Racun: {{ $bill->order_date}}</div>

                <div class="card-body">
                    <div class="text-center">
                        <h1>{{ $bill->total }}</h1>

                        <ul>
                            @foreach (array_combine(json_decode($bill->drinks), json_decode($bill->quantity)) as $drink=> $value)
                                <li>

                                    <!--@todo MAKE A HELPER!! -->
                                    {{ App\Http\Controllers\HomeController::getDrinkName($drink) }}

                                    x {{$value}}


                                </li>
                            @endforeach
                        </ul>

                    </div>

                    <div class="total">

                    </div>
                </div>


            </div>

        </div>
        @endforeach



    </div>



</div>
@endsection

@section('footer-scripts')

<script>


</script>

@endsection