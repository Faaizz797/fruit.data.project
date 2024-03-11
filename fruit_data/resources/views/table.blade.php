@extends('layouts.main')

@section('navbar')
    @php
        $no = 1;
    @endphp

    <head>
        <title>Table || Page</title>
    </head>

    <body>
        <a href="/input">
            <button class="btn ml-2 mb-3 btn-success">Add Data</button>
        </a>

        {{-- Table Start --}}
        <div class="overflow-x-auto">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @foreach ($fruit as $f)
                        <tr>
                            <th>{{ $no }}</th>
                            <td>{{ $f->type }}</td>
                            <td>{{ $f->quantity }}</td>
                            <td>{{ $f->price }}</td>
                            <td class="flex">
                                <a href="/{{ $f->id }}/edit"><button class="btn mr-2 btn-warning">Edit</button></a>
                                <form action="/update/{{ $f->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn text-white btn-error">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @php
                        $no++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
@endsection
