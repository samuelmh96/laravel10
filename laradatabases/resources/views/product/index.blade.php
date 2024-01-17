<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    @forelse($products as $key => $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->short_description }}</p>
            <p>Price: {{ $product->price }}$</p>
        </div>
    @empty
        <h5>No Data</h5>
    @endforelse
</body>
</html>