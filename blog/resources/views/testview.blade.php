<x-header data="test component headder" />
@for($i=8;$i<10;$i++)
    <h3>{{$i}}</h3>
@endfor


@foreach ($users as $user)
 <h2>{{$user}}</h2>
@endforeach


<script>
    var data = @json($users);
    console.warn(data);
    console.warn(data[0]);
</script>
