<a href="{{route('contacts.create')}}">ADD</a>
@foreach($contactList as $i)
<a href="{{url('edit/'.$i->id)}}">edit</a>
<a href="{{url('deletecontact/'.$i->id)}}">delete</a>
<p>{{$i->title}}</p>
<p>{{$i->first_name}}</p>
<p>{{$i->last_name}}</p>
<p>{{$i->email}}</p>
<p>{{$i->phone}}</p>
<p>{{$i->destination}}</p>
<p>{{$i->opinion}}</p>
@endforeach
