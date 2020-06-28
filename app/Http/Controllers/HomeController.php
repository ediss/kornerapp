<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Profit;
use Carbon\Carbon;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) {


        if ($request->isMethod('post')) {

            // dd($request);

            $ids = $request->input("drink_id");



            foreach($ids as $id) {
                $drink_quantity = $request->input("quantity_".$id);

                if($drink_quantity !=0) {

                    $drink = Product::where('id', '=', $id)->first();

                    $drink_price = $drink->price;



                    $total = $drink_price * $drink_quantity;

                    $profit = new Profit();

                    $profit->product_id     = $id;
                    $profit->quantity       = $drink_quantity;
                    $profit->total          = $total;
                    $profit->order_date     = Carbon::now();


                    $profit->save();


                }

            }

            return redirect()->route('profit.statistic', [Carbon::now()]);


            $kolicina = $request->input('quantity');
            // $kolicina2 = $request->input('quantity');

            // foreach($kolicina as $k) {
            //     echo $k. " ";
            // }

        }

        $products = Product::all();
        return view('home', [
            'products' => $products
        ]);
    }

    public function statistic($date) {

        $profits = Profit::where("order_date", "<=", $date)->get();

        return view("statistic", [
            'profits' => $profits
        ]);

    }
}
