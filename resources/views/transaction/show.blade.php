@extends('frontend.master')

@section('content')

    <div class="content">
    <div class="card">
       <div class="card-header">
        <div class="text">
        <h1>Transactions details page for Ref: <strong>{{$transaction->transaction_ref}}</strong> </h1>
        <a href="{{ url('/transaction') }}">
            <h3 class=" float-end me-5">Back</h3>
        </a>
        </div>
            <div class="card-body mt-5">
                
            <div class="mb-3">
                  <p><strong>Name : </strong>{{$transaction->full_name}}</p>             
            </div>
            <div class="mb-3">
                  <p><strong>Phone number : </strong>{{$transaction->phone_no}}</p>             
            </div>
            <div class="mb-3">
                  <p><strong>Source of Transaction : </strong>{{$transaction->src_of_transaction}}</p>             
            </div>
            <div class="mb-3">
                  <p><strong>Email : </strong>{{$transaction->email}}</p>             
            </div>
            <div class="mb-3">
                  <p><strong>Amount : </strong>{{$transaction->amount}}</p>             
            </div>
            
            <div class="mb-3">
                  <p><strong>Currency : </strong>{{$transaction->currency}}</p>             
            </div>
            <div class="mb-3">
                  <p><strong>Transaction reference : </strong>{{$transaction->transaction_ref}}</p>             
            </div>
            <div class="mb-3">
                  <p><strong>Date of payment : </strong>{{$transaction->date_of_payment}}</p>             
            </div>

            <div class="mb-3">
                <p><strong>Created date : </strong>{{$transaction->created_at}}</p>             
            </div>
            
            </div>
        </div>
    </div>
    </div>

@endsection
