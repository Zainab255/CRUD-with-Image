
<a href="{{route('students.create')}}">ADD</a>
@foreach($studentList as $i)
        <a href="{{url('edit/'.$i->id)}}">edit</a>
        <a href="{{url('deletestudent/'.$i->id)}}">delete</a>
        <a href="{{url('/student/detail/'.$i->id)}}">detail</a>
    <p>{{$i->name}}</p>
<img src="{{ asset('/images/'.$i->image) }}" alt="" class="border rounded-circle my-2" height="250px">
@endforeach


