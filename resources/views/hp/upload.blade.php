<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">Add New Car</h2>
        <form action="{{route ('createhp')}}" method="POST" class="bg-light p-5 rounded">
            @csrf

            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" id="brand" name="brand" value="{{ old('brand') }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="series">Series:</label>
                <input type="text" id="series" name="series" value="{{ old('series') }}" class="form-control">

            </div>

            <div class="form-group">
                <label for="owner">Owner:</label>
                <select name="owner" id="owner" class="form-control">
                    @forelse($data as $owner)
                    <option value="{{$owner->id}}">{{$owner->name}} - {{$owner->id}}</option>
                    @empty
                    <option value="empty"> There are no owner, please input the owner's data first</option>
                    @endforelse
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>

</html>