@extends('frontend.master')

@section('content')
<div class="container">
    <div class="content">
    <div class="card">
       <div class="card-header">
        <div class="text">
        <h1>Transactions page</h1>
        <a href="{{ url('/index_transaction') }}">
            <h3 class=" float-end">create transaction</h3>
        </a>
        </div>
            <div class="card-body">

            </div>
        </div>
    </div>
    </div>
</div>  
@endsection
