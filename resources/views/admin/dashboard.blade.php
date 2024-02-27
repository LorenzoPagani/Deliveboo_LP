@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8 rounded d-flex flex-column align-items-center table-responsive">
                <h2>Last orders:</h2>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Total</th>
                            <th scope="col">Order details</th>
                        </tr>
                        @foreach ($orders as $item)
                            <tr>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>€{{ $item->total }}</td>
                                <td>
                                    <ul>
                                        @foreach ($item->dishes as $dish)
                                            <li>x{{ $dish->pivot->quantity }} {{ $dish->name }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
                <a class="btn bg-white" href="{{ route('admin.orders') }}" role="button">All orders...</a>
            </div>
        </div>
    </div>
@endsection
