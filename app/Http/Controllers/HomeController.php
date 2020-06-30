<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Profit;
use Carbon\Carbon;
use DB;




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

            // return redirect()->route('profit.statistic', [Carbon::now()]);
            return redirect()->route('profit.bills');

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

    public static function getDrinkName($id) {
        $product = Product::where('id','=', $id)->first();

        return $product->name;

        // return Product::where('id', '=', $id)->pluck('name')->get();
    }

    public function bills(Request $request) {

        $date = $request->input('date');



        if ($request->isMethod('post')) {

            // dd($date);
            $bills = DB::table('profits')
            ->selectRaw("JSON_ARRAYAGG(profits.product_id) as drinks, JSON_ARRAYAGG(quantity) as quantity, SUM(total) AS total, order_date")
            ->whereBetween('order_date', [$date." 00:00:00", $date. " 23:59:59"])
            ->groupBy('order_date')
            ->orderBy('order_date', 'DESC')
            ->get();

            
        }else {
            $bills = DB::table('profits')
            ->selectRaw("JSON_ARRAYAGG(profits.product_id) as drinks, JSON_ARRAYAGG(quantity) as quantity, SUM(total) AS total, order_date")

            ->groupBy('order_date')
            ->orderBy('order_date', 'DESC')
            ->get();
        }



        // dd($bills);

        return view("bills", [
            'bills' => $bills
        ]);

    }
}
