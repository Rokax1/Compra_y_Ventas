<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>¿Estas seguro de eliminar eL producto ? <strong id="prod_name"> </strong> </h6>

            </div>
            <div class="modal-footer">
                <form action="{{ route('Products.destroy', 'eliminar') }}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="hidden" id="id_product" name="id_product" value="">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
