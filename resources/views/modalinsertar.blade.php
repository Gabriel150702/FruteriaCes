<div class="modal fade" id="modalInsertar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalInsertar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Insertar Fruta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form class="m-4" method="post" action="{{route('frutas.create')}}">
        @csrf 
         
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Nombre fruta</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtfruta" value="{{old('txtfruta')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtfruta') }}
                  </p>
            </div> 
        </div>


  
           <div class="row mb-3">
             <label  class="col-sm-2 col-form-label fw-bold">temporada</label>
             <div class="col-sm-10">
                   <input type="text" class="form-control" name="txttem" value="{{old('txttem')}}">
                   {{ $errors->first('txttem') }}
               </div>
             </div>




             <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Precio venta</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtprecio" value="{{old('txtprecio')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtprecio') }}
                  </p>
            </div> 
        </div>


        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Stock</label>
           <div class="col-sm-10">
                  <input type="text" class="form-control" name="txtst" value="{{old('txtst')}}" >
                  <p class="fst-Italic">
                  {{ $errors->first('txtst') }}
                  </p>
            </div> 
        </div>




    
    </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
      </div>
    </div>
  </div>
</div>