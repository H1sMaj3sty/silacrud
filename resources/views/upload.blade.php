<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <h2>Add New Data</h2>
    <form action="{{route ('create')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>
        
        <label for="class">Class:</label>
        <select name="class" id="class">
            <option value="XI-PPLG-A" {{old('class') === 'XI-PPLG-A' ? 'selected' : ''}}>XI-PPLG-A</option>
            <option value="XI-PPLG-B" {{old('class') === 'XI-PPLG-B' ? 'selected' : ''}}>XI-PPLG-B</option>
        </select><br><br>
        
        
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ old('address') }}"><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ old('age') }}"><br><br>

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
        <h2 class="text-center text-primary">Add New Data</h2>
        <form action="{{route ('create')}}" method="POST" class="bg-light p-5 rounded">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="class">Class:</label>
                <select name="class" id="class" class="form-control">
                    <option value="XI-PPLG-A" {{old('class') === 'XI-PPLG-A' ? 'selected' : ''}}>XI-PPLG-A</option>
                    <option value="XI-PPLG-B" {{old('class') === 'XI-PPLG-B' ? 'selected' : ''}}>XI-PPLG-B</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="{{ old('address') }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" value="{{ old('age') }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>
