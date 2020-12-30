<div class="form-group">

<label for="titulo" class="control-label">{{'Titulo'}}</label>


<input type="text" class="form-control {{$errors->has('titulo')?'is-invalid':''}}" name="titulo" id="titulo"

value="{{isset($servicio->titulo)?$servicio->titulo:old('titulo')}}">

{!! $errors->first('Titulo','<div class="invalid-feedback">:message</div>')!!}

</div>




<div class="form-group">
<label for="Descripcion"  class="control-label">{{'Descripcion'}}</label>
<input type="text" class="form-control {{$errors->has('Descripcion')?'is-invalid':''}}" name="Descripcion" id="Descripcion" 
value="{{isset($servicio->Descripcion)?$servicio->Descripcion:old('Descripcion')}}">
{!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>')!!}
</div>


<div class="form-group">
<label for="precio" class="control-label">{{'Precio'}}</label>
<input type="text" class="form-control {{$errors->has('precio')?'is-invalid':''}}" name="precio" id="precio" 
value="{{isset($servicio->precio)?$servicio->precio:old('precio')}}">
{!! $errors->first('Precio','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="foto" class="control-label">{{'Foto'}}</label>
@if(isset($servicio->Foto))
<br/>

<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$servicio->Foto}}" alt="" width="150">
<br/>
@endif
<input class="form-control {{$errors->has('foto')?'is-invalid':''}}" type="file" name="foto" id="foto" value="">
{!! $errors->first('Foto','<div class="invalid-feedback">:message</div>')!!}
</div>


<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">

<a class="btn btn-primary" href="{{url('servicios')}}">Regresar</a> 