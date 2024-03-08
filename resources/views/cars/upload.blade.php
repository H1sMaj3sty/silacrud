<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cars</title>
</head>
<body>
    <h2>Add New Cars</h2>
    <form action="{{route ('create-mobil')}}" method="POST">
    @csrf

    <label for="brand">Brand</label>
    <input type="text" name="brand" id="brand"><br><br>

    <label for="year">Year</label>
    <input type="number" name="year" id="year"><br><br>

    <label for="owner">Owner</label>
    <select name="owner" id="owner">
    @forelse($data as $owner)
        <option value="{{$owner->id}}">{{$owner->name}}</option>
        @empty
        <option value="empty"> There are no owner, please input the owner's data first</option>
        @endforelse
    </select>


    <button type="submit">Add</button>

</form>      
</body>
</html> -->

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
        <form action="{{route ('create-mobil')}}" method="POST" class="bg-light p-5 rounded">
            @csrf

            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" id="brand" name="brand" value="{{ old('brand') }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" value="{{ old('year') }}" class="form-control">

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