@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Orders</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Order date</th>
                    <th>Order email</th>
                    <th>Order address</th>
                    <th>Order total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->date }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
