@extends('layout')
@section('title','Home')
@section('content')
<p>Bienvenido <?php echo $nombre ?? "invitado"?></p>
<!--Ahora con blade -->
<p>Bienvenido {{$nombre ?? "invitado"}}</p>
@endsection