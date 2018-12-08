<div class="modal fade-modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create">

        <form action="{{ route('ServiceStore') }}" method="post">
            {{ csrf_field() }}
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">x</span>
                        </button>
                        <h4 class="modal-title">Agregar Tipo de Servicio</h4>
                    </div>
                    <div class="modal-body">
                        <label for="">Tipo de servicio:</label>
                        <input type="text" autocomplete="off" class="form-control" name="service" id="" placeholder="Ingrese el nuevo tipo de servicio">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
