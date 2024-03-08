<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card rounded-lg shadow">
                    <div class="card-header bg-primary text-white rounded-top">
                        <h3 class="card-title mb-0">Create Account</h3>
                    </div>
                    <div class="card-body rounded-bottom">
                        <form action="{{ route('storeuser') }}" id="registerform" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password"
                                    class="form-control" required>
                                <div id="passwordMismatch" class="text-danger d-none">Passwords do not match</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
        document.getElementById('registerform').addEventListener("submit", function (event) {
            let password = document.getElementById('passowrd').value;
            let confirm_password = document.getElementById('confirm_password').value;

            if (confirm_password != passowrd) {
                document.getElementById('passwordMismatch').classList.remove("d-none");
                event.preventDefault();
            }
        });
    </script> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#registerform').submit(function (event) {
                let password = $('#password').val();
                let confirm_password = $('#confirm_password').val();

                if (confirm_password != password) {
                    $('#passwordMismatch').removeClass("d-none");
                    event.preventDefault();
                }
            });
        });
    </script>
</body>

</html>