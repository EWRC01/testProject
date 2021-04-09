Registros de mascotas

<a href="{{ url('pet/create') }}">Add pet</a>
<table border="1.0">
<thead>
<th>#</th>
<th>Name</th>
<th>Age</th>
<th>Color</th>
</thead>
<tbody>
@foreach($pets as $pet)
<tr>
<td>{{$pet->id}}</td>
<td>{{$pet->name}}</td>
<td>{{$pet->age}}</td>
<td>{{$pet->color}}</td>

<td><a href="{{  url('/pet/' .$pet->id. '/edit') }}">Editar</a></td>

<!--Formulario para eliminar-->
<form action="{{  url('/pet/' .$pet->id)  }}" method="POST">
@csrf
{{method_field('DELETE')}}
<td><input type="submit" onclick="return confirm('Desea eliminar el registro')" value="Eliminar"></td>
</form>
</tr>
@endforeach
</tbody>
</table>