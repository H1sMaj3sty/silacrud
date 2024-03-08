<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventory - hp</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>BRAND</th>
                <th>SERIES</th>
                <th>OWNER</th>
            </tr>
        </thead>
        @forelse($datas as $data)
        <tbody>
            <tr>
                <td>{{$data->brand}}</td>
                <td>{{$data->series}}</td>
                <td>{{$data->siswa->name}}</td>
            </tr>
            @empty
            <tr>
                <td>NO DATA</td>
                <td>NO DATA</td>
                <td>NO DATA</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">Inventory</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>BRAND</th>
                    <th>SERIES</th>
                    <th>OWNER</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($datas as $data)
                <tr>
                    <td>{{$data->brand}}</td>
                    <td>{{$data->series}}</td>
                    <td>{{$data->siswa->name}}</td>
                    <td>
                        <!-- <a href="{{route ('edithp', $data->id)}}">Edit</a> -->
                        <a href="#" class="btn btn-warning btn-sm editButtonModal" data-toggle="modal"
                            data-target="editModal" data-id="{{$data->id}}">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">No Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @include('components.modal-edit-hp')

    <script>
        $(document).ready(function () {
            $(document).on('click', '.editButtonModal', function () {
                let id = $(this).data('id');

                $.ajax({
                    url: 'edithp/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        $('#editId').val(response.datae.id);
                        $('#brand').val(response.datae.brand);
                        $('#series').val(response.datae.series);
                        $('#owner').empty();
                        $.each(response.datad, function (index, owner) {
                            let selected = (owner.id == response.datae.user_id) ? 'selected' : '';
                            $('#owner').append('<option value="' + owner.id + '"' + selected + '>' + owner.id + ' - ' + owner.name + '</option>');
                        });
                        $('#editModal').modal('show');

                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            $('#editForm').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function (response) {
                        $('#editModal').modal('hide');
                        updateTable(response.data);
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });

            function updateTable(data) {
                $('tbody').empty();
                $.each(data, function (index, item) {
                    $('tbody').append('<tr>' +
                        '<td>' + item.brand + '</td>' +
                        '<td>' + item.series + '</td>' +
                        '<td>' + item.siswa.name + '</td>' +
                        '<td>' +
                        '<a href="#" class="btn btn-warning btn-sm editButtonModal" data-toggle="modal" data-target="editModal" data-id="' + item.id + '">Edit</a>' +
                        '</td>' +
                        '</tr>'
                    );
                });
            }
        });
    </script>
</body>

</html>