@extends('frontend.master')

@section('content')
<div class="container">
    <div class="content">
    <div class="card">
       <div class="card-header">
        <div class="text">
        <h1>Create Transactions</h1>
        <a href="{{ route('transaction.index') }}">
            <h3 class=" float-end">Back</h3>
        </a>
        </div>
            <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="alert">
            {{ session('success') }}
            </div>
           @endif
           @if (session('error'))
            <div class="alert alert-danger" role="alert">
            {{ session('error') }}
            </div>
           @endif
            <div class="form mt-5">
           <form method="POST" action="{{ url('store_transaction') }}" >
           @csrf 
           @method('POST')
                <div class="mb-3">
                    <label for="name" class="form-label m-3">Full name</label>
                    <input type="text" name="full_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter full names here">    
                    @error('full_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror               
                </div>
                <div class="input-group mb-3">
                <label for="currency" class="form-label m-3">Currency <span>(Legal tender)</span></label>
                <input type="text" name="currency" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="enter currency here">
                @error('currency')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                <span class="input-group-text">$</span>
                <label for="amount" class="form-label m-3">Amount</label>
                <input type="number" name="amount"class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="enter full Amount here">
                @error('amount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                <span class="input-group-text">.00</span>
                </div>
                <div class="mb-3">
                    <label for="src_of_transaction" class="form-label m-3">source of transaction</label>
                    <input type="text" name="src_of_transaction"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter full names here"> 
                    @error('src_of_transaction')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror      
                </div>
              
                <div class="input-group mb-3">
                <label for="transaction_ref" class="form-label m-3">Transaction reference</label>
                <input type="text" name="transaction_ref" class="form-control m-3" aria-label="Amount (to the nearest dollar)" placeholder="enter currency here">
                @error('transaction_ref')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                <span class="input-group-text">$</span>
                <label for="phone_no" class="form-label m-3">Phone number</label>
                <input type="text" name="phone_no" class="form-control m-3" aria-label="Amount (to the nearest dollar)" placeholder="enter full Amount here">
                @error('phone_no')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <span class="input-group-text">.00</span>
                </div>       
                <div class="mb-3">
                    <label for="email" class="form-label m-3">Email address</label>
                    <input type="email" name="email" class="form-control m-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter email address here">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror   
                </div> 
                <div class="mb-3">
                            <label for="date_of_payment" class="form-label m-3">Date of Payment</label>
                            <input type="date" name="date_of_payment" class="form-control" id="date_of_payment">
                            @error('date_of_payment')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                        </div>   
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
</div>  
@endsection
