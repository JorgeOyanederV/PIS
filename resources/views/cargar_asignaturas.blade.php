<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
<body>

    <table style="width:100%">
        <tr>
          <th>NRC</th>
          <th>codigo</th>
          <th>nombre</th>
        </tr>

        @forelse ($asignaturas as $a)
            <tr>
                <th>{{$a->NRC}}</th>
                <th>{{$a->codigo}}</th>
                <th>{{$a->nombre}}</th>
            </tr>
        @empty
            No hay elementos
        @endforelse

      </table> 
    
    <br>

    <form action="{{ route('ramos.import.excel') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(Session::has('message'))
        <p>{{ Session::get('message') }}</p>
        @endif

        <input type="file" name="file">
        <button>IMPORTAR</button>
        <br>
        @if($errors->any())
            {{$errors}}
        @endif
    </form>
</body>
</html>