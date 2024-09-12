<form action="{{route('update')}}">
 <input type="number" name="id" value="{{$alldata->id}}" hidden> 
    <label for="">Student Name</label>
    <input type="text" name="name" value="{{$alldata->name}}">
    <label class="form-group" for="image">Profile Photo:</label>
    <input class="form-control" type="file" name="image" value="{{$alldata->image}}">
    <input type="submit">
</form>