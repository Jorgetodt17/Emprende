@extends('layouts.plantillabaseemp')
@section('contenido')
<head>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
 crossorigin=""></script>
 <link rel="stylesheet" href="{{asset('css/create.css')}}">
</head>

<section>
<p class="mis-titulos">Editar emprendimiento</p>
<form id="Form" action="/emprendimiento/{{$emprendimiento->id}}" method="POST" enctype="multipart/form-data" class = "needs-validation" novalidate>
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$emprendimiento->nombre}}" required>
    <div class = "valid-feedback">¡Campo completado!</div>
    <div class = "invalid-feedback">Campo obligatorio.</div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$emprendimiento->descripcion}}" required>
    <div class = "valid-feedback">¡Campo completado!</div>
    <div class = "invalid-feedback">Campo obligatorio.</div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Localidad</label>
    <select id="localidad_id" name="localidad_id"  class="form-control" value="" required>
    <div class = "valid-feedback">¡Campo completado!</div>
    <div class = "invalid-feedback">Campo obligatorio.</div>      
        <option value="">Seleccione una Localidad</option>
        {{-- <option selected="selected" value={{$emprendimiento->localidad_id}}"></option> --}}
            @foreach($localidads as $localidad)
              @if (old('localidad_id') == $localidad->id)
              <option value="{{$localidad['id']}}" selected>{{$localidad['nombre']}}</option>
          	  @else
                <option value="{{$localidad['id']}}">{{$localidad['nombre']}}</option>
	          @endif


        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Dirección</label>
    <input id="direccion" name="direccion" type="text"  class="form-control" value="{{$emprendimiento->direccion}}" required>
    <div class = "valid-feedback">¡Campo completado!</div>
    <div class = "invalid-feedback">Campo obligatorio.</div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sitio Web</label>
    <input id="sitio_web" name="sitio_web" type="text"  class="form-control" value="{{$emprendimiento->sitio_web}}" required>
    <div class = "valid-feedback">¡Campo completado!</div>
    <div class = "invalid-feedback">Campo obligatorio.</div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Instagram</label>
    <input id="instagram" name="instagram" type="text"  class="form-control" value="{{$emprendimiento->instagram}}" required>
    <div class = "valid-feedback">¡Campo completado!</div>
    <div class = "invalid-feedback">Campo obligatorio.</div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Facebook</label>
    <input id="facebook" name="facebook" type="text"  class="form-control" value="{{$emprendimiento->facebook}}" required>
    <div class = "valid-feedback">¡Campo completado!</div>
    <div class = "invalid-feedback">Campo obligatorio.</div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input id="nro_telefono" name="nro_telefono" type="text"  class="form-control" value="{{$emprendimiento->nro_telefono}}" required>
    <div class = "valid-feedback">¡Campo completado!</div>
    <div class = "invalid-feedback">Campo obligatorio.</div>
  </div>
  
    <div class="mb-3">
    {{-- <img src="{{ "data:image/" .emprendimiento::('id')->imageType. ";base64," .base64_encode( $emprendimiento->logo ) }}"> --}}
    <img src="{{ asset('storage').'/'. $emprendimiento->logo}}" alt="" width="200">
    <br>
    <label for="logo" class="form-label">Logo</label>
    <input  id="logo" class="form-control-file" tabindex="5"  type="file"
      {{--   class="logo"  --}}
       name="logo"
       accept="image/png, image/jpeg, image/gif" value="{{$emprendimiento->logo}}">
       
  </div>
  <div class="mb-3">
  <select id="tipoempresa_id" name="tipoempresa_id"  class="form-control" value="" required>
    <div class = "valid-feedback">¡Campo completado!</div>
    <div class = "invalid-feedback">Campo obligatorio.</div> 
    <option value="">Seleccione un tipo de Empresa</option>
    {{-- <option selected="selected" value={{$emprendimiento->tipoempresa_id}}"></option> --}}
        @foreach($tipoempresas as $tipoempresa)
        @if (old('emprendimiento') == $tipoempresa->id)
        <option value="{{$tipoempresa['id']}}" selected>{{$tipoempresa['nombre']}}</option>
          @else
          <option value="{{$tipoempresa['id']}}">{{$tipoempresa['nombre']}}</option>
        @endif

    @endforeach
</select>
<div class="mb-3">
    <label for="" class="form-label">Ubicación Geográfica</label>
    <div id="map" style="height: 350px;"></div>
    <div class="mb-3">
      <div class="mb-3">
      <label for="" class="form-label">Latitud</label>
      <input id="latitud" name="latitud" type="text" value="{{$emprendimiento->latitud}}" class="form-control" required>
      <div class = "valid-feedback">¡Campo completado!</div>
      <div class = "invalid-feedback">Campo obligatorio.</div>
      <br>
      <label for="" class="form-label">Longitud</label>
      <input id="longitud" name="longitud" type="text" value="{{$emprendimiento->longitud}}" class="form-control" required>
      <div class = "valid-feedback">¡Campo completado!</div>
      <div class = "invalid-feedback">Campo obligatorio.</div>
    </div>
  <a href="/emprendimiento" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</section>
<script type="text/javascript" src="{{asset('js/maped.js')}}"></script>

@endsection