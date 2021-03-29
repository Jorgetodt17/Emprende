@extends('layouts.plantillabaseemp')

@section('contenido')
<head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <link rel="stylesheet" type="text/css" href="stylesheet.css" media="screen"/>
   <script type="text/javascript" src="{{asset('js/create.js')}}"></script>
  <link rel="stylesheet" href="{{asset('css/create.css')}}">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>
  <!-- Make sure you put this AFTER Leaflet s CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
 crossorigin=""></script>
 <link href= "{{ asset('css\create-edit.css') }}" rel="stylesheet" />
   </head>



<section>
  <div class="container">

        <p class="titulo">Crear Emprendimientos</p>
        <br>
        <br>
        
        {{--  @if(count($errors)>0)

      <ul>   
          @foreach ($errors->all() as $error)

              <li> {{ $error }} </li>
            
          @endforeach
          
      </ul>

      @endif  --}}
            <form id="Form" action="/emprendimiento" method="POST" enctype="multipart/form-data" class = "needs-validation" novalidate>
          @csrf
      <div class="container conteiner">
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input id="nombre" name="nombre" type="text" class="form-control input " required>
          <div class = "valid-feedback">¡Campo completado!</div>
          <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Descripción</label>
          <input id="descripcion" name="descripcion" type="text" class="form-control input" required>
          <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Localidad</label>

          <select id="localidad_id" name="localidad_id"  class="form-control input" required>
              <option value="">Seleccione una Localidad</option>
                  @foreach($localidads as $localidad)
                  <option value="{{$localidad['id']}}">{{$localidad['nombre']}}</option>
              @endforeach
          </select>
          <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Dirección</label>
          <input id="direccion" name="direccion" type="text"  class="form-control input" required>
          <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Sitio Web</label>
          <input id="sitio_web" name="sitio_web" type="text"  class="form-control input" required>
          <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Instagram</label>
          <input id="instagram" name="instagram" type="text"  class="form-control input" required>
          <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Facebook</label>
          <input id="facebook" name="facebook" type="text"  class="form-control input" required>
          <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Teléfono</label>
          <input id="nro_telefono" name="nro_telefono" type="text"  class="form-control input" required>
          <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>
        <div class="mb-3">

          <label for="logo" class="form-label">Logo</label>
          <input  id="logo" class="form-control-file input" tabindex="5"  type="file"
            {{--   class="logo"  --}}
            name="logo"
            accept="image/png, image/jpeg, image/gif">
            <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>

        <div class="mb-3 input">
        <label for="" class="form-label">Tipo de Empresa</label>
        <select id="tipoempresa_id" name="tipoempresa_id"  class="form-control" required>
            <option value="">Seleccione un tipo de Empresa</option>
                @foreach($tipoempresas as $tipoempresa)
                          <option value="{{$tipoempresa['id']}}">{{$tipoempresa['nombre']}}</option>
            @endforeach
            
        </select>
        <div class="mb-3">
          <label for="" class="form-label">Ubicación Geográfica</label>
          <div id="map" style="height:350px;"></div>
          <div class = "invalid-feedback">Campo obligatorio.</div>
        </div>
        <div class="mb-3 ubicacion">
          <div class="mb-3">
            <label for="" class="form-label">Latitud</label>
            <input id="latitud" name="latitud" type="text"  class="form-control" required>
            <br>
            <label for="" class="form-label">Longitud</label>
            <input id="longitud" name="longitud" type="text"  class="form-control" required>
          </div>
        </div>
          <br>
          <br>
      <div class="offset-1 justify-content-center">
        <a href="/emprendimiento" class="btn boton btn-outline-danger">Cancelar</a>
        <button type="submit" class="btn boton btn-outline-success">Guardar</button>
      </div>
      </form>
    </div>
  </div>

</section>


<script type="text/javascript" src="{{asset('js/map.js')}}"></script>
@endsection
