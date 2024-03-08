<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your form content here -->
                <form action="{{ route('create') }}" method="POST" class="bg-light p-5 rounded">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="class">Class:</label>
                        <select name="class" id="class" class="form-control">
                            <option value="XI-PPLG-A" {{old('class')==='XI-PPLG-A' ? 'selected' : '' }}>XI-PPLG-A
                            </option>
                            <option value="XI-PPLG-B" {{old('class')==='XI-PPLG-B' ? 'selected' : '' }}>XI-PPLG-B
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" value="{{ old('address') }}"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" value="{{ old('age') }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>