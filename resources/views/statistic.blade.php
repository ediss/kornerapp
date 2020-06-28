@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row justify-content-center">


            <div class="col-12 p-4">

                
                <div class="card">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Naziv</th>
                            <th scope="col">Kolicina</th>
                            <th scope="col">Ukupna cena</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; ?>
                            @foreach ($profits as $profit)
                            <?php $total = $total+$profit->total; ?>
                                <tr>
                                    @foreach ($profit->products as $product)

                                    <td>{{ $product->name }}</td>
                                    @endforeach
                                    <td>{{ $profit->quantity}}</td>
                                    <td>{{ $profit->total}}</td>
                                </tr>
                           
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <b>Ukupno: {{$total}} </b>
                                </td> 
                            </tr>

                            
                          
                     
                        </tbody>
                      </table>


                </div>
            </div>


        </div>
        


</div>
@endsection

@section('footer-scripts')

<script>


</script>

@endsection