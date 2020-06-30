@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <form action="{{route('profit.bills')}}" class="w-100" method="POST">
            @csrf
            <div class="form-group">
                <input type="date" class="form-control" name="date">
            </div>
            

            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary "value="Prikazi">
            </div>
            
        </form>
        <?php $total = 0; ?>

        @foreach ($bills as $bill)

        <?php $total = $total+$bill->total; ?>

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

    <div class="row">
        <div class="col-12">
            <div class="alert alert-success text-center">
                <b>Ukupno: {{$total}} </b>
            </div>
        </div>
        
    </div>



</div>
@endsection

@section('footer-scripts')

<script>


</script>

@endsection