@extends('layouts.admin')
@section("title")
Orders
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Order date</th>
                    <th>Order email</th>
                    <th>Order address</th>
                    <th>Order total</th>
                    <th>Order details</th>
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
                        <td>
                            <ul>
                                @foreach ($order->dishes as $dish)
                                    <li>x{{$dish->pivot->quantity}} {{$dish->name}}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
