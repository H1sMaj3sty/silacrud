<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mobil Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<!-- <body>
    <h2>Edit Mobil Data</h2>
    <form action="{{route ('changemobil')}}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{$datae->id}}"><br><br>

        <label for="brand">Brand: </label>
        <input type="text" name="brand" id="brand" value="{{$datae->brand}}"><br><br>

        <label for="year">Year: </label>
        <input type="number" name="year" id="year" value="{{$datae->year}}"><br><br>

        <label for="owner">Owner: </label>
        <select name="owner" id="owner">
            @forelse($datad as $owner)
            <option value="{{$owner->id}}">{{$owner->name}} - {{$owner->id}}</option>
            @empty
            <option value="empty">Add the Owner's data first</option>
            @endforelse
        </select>

        <button type="submit">Add</button>
    </form>
</body>

</html> -->

<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">Edit Data</h2>
        <form action="{{route ('changemobil')}}" method="POST" class="bg-light p-5 rounded">
            @csrf

            <input type="hidden" name="id" value="{{ $datae->id }}">

            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" name="brand" id="brand" value="{{ $datae->brand }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" value="{{ $datae->year }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="owner">Owner</label>
                <select name="owner" id="owner" class="form-control">
                    @forelse($datad as $owner)
                    <option value="{{$owner->id}}">{{$owner->name}} - {{$owner->id}}</option>
                    @empty
                    <option value="empty">Add the Owner's data first</option>
                    @endforelse
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>