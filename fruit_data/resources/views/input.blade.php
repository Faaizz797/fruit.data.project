@extends('layouts.main')

@section('navbar')
    <head>
        <title>Input || Page</title>
    </head>
    <body>
        {{-- input Start --}}
        <form action="/store" method="POST">
            @csrf
            <div class="flex justify-center items-center">
                <div class=" w-full max-w-xs">
                    <label class="block form-control">
                        <div class="label">
                            <span class="label-text text-lg font-bold text-white">Type :</span>
                        </div>
                        <input type="text" placeholder="Apple"
                            class="input text-white input-bordered input-warning w-full max-w-xs" name="type"  required />
                    </label>
    
                    <label class="block form-control">
                        <div class="label">
                            <span class="label-text text-lg font-bold text-white">Quantity :</span>
                        </div>
                        <input type="text" placeholder="01kg"
                            class="input text-white input-bordered input-warning w-full max-w-xs" name="quantity"  required />
                    </label>
    
                    <label class="block form-control">
                        <div class="label">
                            <span class="label-text text-lg font-bold text-white">Price</span>
                        </div>
                        <input type="text" placeholder="e.g Rp.1000"
                            class="input text-white input-bordered input-warning w-full max-w-xs" name="price" required />
                    </label>
    
                    <button type="submit" class="btn btn-outline btn-success mt-5">Add</button>
        </form>

    </body>
@endsection