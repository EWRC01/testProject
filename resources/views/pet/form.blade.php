Formulario create // Edit </br>

<label for="name">Nombre</label>
<input type="text" name="name" id="name" value="{{isset($pet->name)?$pet->name:''}}"><br/>

<label for="age">Edad</label>
<input type="number" name="age" id="age" value="{{isset($pet->age)?$pet->age:''}}"><br/>

<label for="color">Color</label>
<input type="text" name="color" id="color" value="  {{isset($pet->color)?$pet->color:''}} "><br/>

<button type="submit">Guardar</button>

<a href="{{url('pet')}}">Regresar</a>