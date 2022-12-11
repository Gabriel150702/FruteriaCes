<!-- Modal -->
<div class="modal fade" id="modalactualizar-{{$consulta->idFruta}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalactualizar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Fruta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form class="m-4" method="post" action="{{route('fru.update',$consulta->idFruta)}}">
        @csrf 
          {!!method_field('PUT')!!}
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Nombre</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtfruta" value="{{$consulta->nombre}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtfruta') }}
                  </p>
            </div> 
        </div>
  
           <div class="row mb-3">
             <label  class="col-sm-2 col-form-label fw-bold">Temporada</label>
             <div class="col-sm-10">
                   <input type="text" class="form-control" name="txttemp" value="{{$consulta->temporada}}">
                   {{ $errors->first('txttemp') }}
               </div>
             </div>
           


             <div class="row mb-3">
             <label  class="col-sm-2 col-form-label fw-bold">Precio</label>
             <div class="col-sm-10">
                   <input type="text" class="form-control" name="txtprecio" value="{{$consulta->precio}}">
                   {{ $errors->first('txtprecio') }}
               </div>
             </div>


             <div class="row mb-3">
             <label  class="col-sm-2 col-form-label fw-bold">Stock</label>
             <div class="col-sm-10">
                   <input type="text" class="form-control" name="txtst" value="{{$consulta->st}}">
                   {{ $errors->first('txtst') }}
               </div>
             </div>



      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>

        </form>  
      </div>
    </div>
  </div>
</div>

 