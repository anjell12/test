<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::orderBy('id', 'DESC')->get();
        return view('dashboard.transaction.index', [
            'title' => 'Transactions',
            'transactions' => $transactions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{
    $request->validate([
        'quantity' => 'required|integer|min:1',
        'product_id' => 'required|exists:products,id',
    ]);

    $product = Product::find($request->input('product_id'));

    // Hitung nilai price dan payment_amount
    $price = $product->price;
    $quantity = $request->input('quantity');
    $paymentAmount = $price * $quantity;

    // Buat data transaksi
    $transaction = Transaction::create([
        'product_id' => $request->input('product_id'),
        'quantity' => $quantity,
        'price' => $price,
        'payment_amount' => $paymentAmount,
        'reference_no' => 'INV' .  mt_rand(100000, 999999)
    ]);

    $apiKey = 'DATAUTAMA';

    // Buat tanda tangan
    $signature = hash('sha256', $request->method() . ':x-api-key=' . $apiKey);

    $response = [
        'code' => '2000',
        'message' => 'ok',
        'data' => [
            'reference_no' => $transaction->reference_no,
            'quantity' => $transaction->quantity,
            'price' => $transaction->price,
            'payment_amount' => $transaction->payment_amount,
        ],
    ];

    return response()->json($response, 200)
        ->header('X-API-Key', $apiKey)
        ->header('X-Signature', $signature);
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
