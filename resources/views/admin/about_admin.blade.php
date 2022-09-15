@include( "master.header")
<h1>Admin About Page </h1>

{{print_r($names)}}

@foreach($names as $name)

    <h3>{{$name}}</h3>

@endforeach