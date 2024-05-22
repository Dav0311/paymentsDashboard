@extends('frontend.master')

@section('content')
<div class="container">
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
           <table class="table">
               <thead>
                   <tr>
                       <th scope="col"> ID</th>
                       <th scope="col">Name</th>
                       <th scope="col">Phone No.</th>
                       <th scope="col">Email</th>
                       <th scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>
                   @if (isset($transactions) && !empty($transactions))
                       @foreach ($transactions as $t)
                       <tr class="table-active">
                               <td>{{ $t->id }}</td>
                               <td>{{ $t->full_name }}</td>
                               <td>{{ $t->phone_no }}</td>
                               <td>{{ $t->email }}</td>
                               <td>{{ $t->src_of_transaction}}</td>
                               <td>{{ $t->amount}}</td>
                               <td>{{ $t->pdate_of_payment }}</td>
                               <td>{{ $t->currency }}</td>
                               <td>{{ $t->ctransaction_ref }}</td>
                               <td>
                                   <a href="{{ route('transaction.show', $t->id) }}">
                                   <button type="submit" class="btn btn-success" >Show</button>
                                   </a>
                                   <a href="{{route('transaction.edit', $t->id) }}">
                                   <button type="submit" class="btn btn-info" >Edit</button>
                                   </a>
                                   <form action="{{ url('/delete_transaction', $t->id) }}" method="POST" style="display:inline;">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-danger" >Delete</button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                   @else
                       <tr>
                           <td colspan="5">No transactions available yet.</td>
                       </tr>
                   @endif
               </tbody>
           </table>
       </div>
            </div>
        </div>
    </div>
    </div>
</div>  
@endsection

