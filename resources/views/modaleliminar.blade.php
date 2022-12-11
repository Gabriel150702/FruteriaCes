<div class="modal fade" id="modaleliminar-{{$consulta->idFruta}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaleliminar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Estas seguro de que quieres eliminar?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form class="m-4" method="post" action="{{route('fruta.destroy',$consulta->idFruta)}}">
        @csrf
        {!!method_field('delete')!!}

        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label fw-bold ">Nombre fruta</label>
           <div class="col-sm-10">
                  <p  class="form-control" name="txtnombre" >{{$consulta->nombre}} </p>
                  
            </div> 
        </div>
  
           <div class="row mb-3">
             <label  class="col-sm-2 col-form-label fw-bold">Precio de:</label>
             <div class="col-sm-10">
                   <p class="form-control" name="txtprecio" >{{$consulta->precio}}</p>
                   
               </div>
             </div>  
              
              

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
        <button type="submit" class="btn btn-primary" >Eliminar</button>
    </form>
      </div>
    </div>
  </div>
</div>

 