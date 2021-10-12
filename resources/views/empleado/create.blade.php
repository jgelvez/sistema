Formulario de creación del empleado <br>
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
  @csrf
  @include('empleado.form',['modo'=>'Crear']) <!-- MODO es una variable que contiene la palabra CREAR -->
</form>