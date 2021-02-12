Hello world on view page
<br>
Name : {{$name}}
<br>
Age : {{$age}}


@foreach($users as $user)

{{$user->name}};
<br>
@endforeach