Crear registros de mascotas

<form action="{{url('/pet')}}" method="post">
@csrf

@include('pet.form')
</form>