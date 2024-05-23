<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //fetch all transactions 

        $transactions = Transaction::all();
        return view('transaction.index', ['transactions' => $transactions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //creating a transaction
        return view ('transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the data
        $validatedData = $request->validate([
            'src_of_transaction' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date_of_payment' => 'required|date',
            'full_name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:15',
            'email' => 'required|email|unique:transactions',
            'currency' => 'required|string|max:255',
            'transaction_ref' => 'required|string|max:255'
        ]);
    
        
        try {
            // Store the validated data into the database
            Transaction::create($validatedData);
            return redirect()->route('transaction.index')->with('success', 'Transaction created successfully.');
        } catch (\Exception $e) {
            // Handle the error and redirect back with an error message
            return redirect()->route('transaction.index')->with('error', 'Failed to save the data: ' . $e->getMessage());
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);
    
        if (!$transaction) {
            return redirect()->route('transactions.index')->with('error', 'Transaction not found.');
        }
        // Return the transaction show page
        return view('transaction.show', ['transaction' => $transaction]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return redirect()->route('transactions.index')->with('error', 'Transaction not found.');
        }
 
        return view('transaction.edit', compact('transaction'));
    }
    


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //update the data in the database 
        $validatedData = $request->validate([
            'src_of_transaction' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'date_of_payment' => 'required|date',
            'full_name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:15',
            'email' => 'required|email|unique:transactions',
            'currency' => 'required|string|max:255',
            'transaction_ref' => 'required|string|max:255'
        ]);
        
        Transaction::update($validatedData);
        return redirect()->route('transaction.index')->with('success','Transaction created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //delete the data from the db
        $transaction -> delete();
        return redirect()->route('transaction.index')->with('success', 'Transaction deleted successfully.');
    }
}
