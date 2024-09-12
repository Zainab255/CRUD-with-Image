<form action="{{ route('students.store') }}" enctype="multipart/form-data">
    <label for="name">Student Name</label>
    <input class="form-control" type="text" name="name">
    <label class="form-group" for="image">Profile Photo:</label>
    <input class="form-control" type="file" name="image">
    <input type="submit">
</form>
