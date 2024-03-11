@extends('layouts.admin')
@section("title")
Ordini
@endsection

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID Ordine</th>
                    <th>Nome</th>
                    <th>Data dell'ordine</th>
                    <th>Indirizzo E-mail</th>
                    <th>Indirizzo di consegna</th>
                    <th>Totale ordine</th>
                    <th>Dettagli</th>
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
                        <td>€ {{ $order->total }}</td>
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
