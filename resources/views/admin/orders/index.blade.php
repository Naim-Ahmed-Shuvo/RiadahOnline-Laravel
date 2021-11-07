@extends('admin.layout.app')

@section('main')
 <div class="col-8 mt-5 mx-auto">
     <div class="card">
         <div class="card-header">
             <h5>All Orders</h5>
             {{-- <button>See</button> --}}
         </div>
         <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">Ordered BY</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Total</th>
                    <th scope="col">Ordered At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                    @forelse ($orders as $idx=>$order)

                    <tr>
                      <th scope="row">{{$idx+1}}</th>
                      <td>{{$order->service_name}}</td>
                      <td>{{$order->checkout->name}}</td>
                      <td>{{$order->service_qty}}</td>
                      <td>{{$order->total}}</td>
                      <td>{{$order->created_at}}</td>
                      <td>
                          <a href="#" class="btn btn-info btn-sm">confirm</a>
                          <a href="#" class="btn btn-info btn-sm">pending</a>
                          <a href="{{route('delete.order',['id'=>$order->id])}}" class="btn btn-info btn-sm">delete</a>
                      </td>
                    </tr>
                    @empty
                      {{ "no orders yet" }}
                    @endforelse

                </tbody>
              </table>
         </div>
     </div>
 </div>
@endsection
