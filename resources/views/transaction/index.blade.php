@extends('frontend.master')

@section('content')

    <div class="content">
    <div class="card">
       <div class="card-header">
        <div class="text">
        <h1>Transactions page</h1>
        <a href="{{ route('transaction.create') }}">
            <h3 class=" float-end">create transaction</h3>
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
           <div class="table">
           <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Source of Transaction</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Phone No.</th>
                    <th>Currency</th>
                    <th>Date of Payment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->id }}</td>
                        <td>{{ $transaction->full_name }}</td>
                        <td>{{ $transaction->src_of_transaction }}</td>
                        <td>{{ $transaction->email }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->phone_no }}</td>
                        <td>{{ $transaction->currency }}</td>
                        <td>{{ $transaction->date_of_payment }}</td>

                        <td>
                            <a href="{{ url('/show_transaction/'.$transaction->id) }}">
                            <button type="submit" class="btn btn-success" >Show</button>
                            </a>
                            <a href="{{ url('/edit_transaction/'.$transaction->id) }}">
                            <button type="submit" class="btn btn-info" >Edit</button>
                            </a>
                            <form action="{{ url('/delete_transaction/'.$transaction->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                        </td>
                     
                    </tr>
                @endforeach
            </tbody> 
        </table>
       </div>
            </div>
        </div>
    </div>
    </div>
  
@endsection

