<script type="text/ng-template" id="add_evaluador">    

<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="bootbox-close-button close"  ng-click="close()" aria-hidden="true">×</button>
        <h3 style="border-bottom: none !important;">Agregar Evaluador</h3>
    </div>
    <!-- dialog body -->
    <div class="modal-body">
        <div class="row">
            <form role="form">
                <div class="row">
                    <div class="col-sm-12 text-center" align="center">
                        <div class="form-group col-xs-3">
                            <ui-select name="evaluador" ng-model="filtro.evaluador" >
                                <ui-select-match placeholder="Seleccione una opción">{{$select.selected.name}}</ui-select-match>
                                <ui-select-choices repeat="evaluar in evaluadores | filter: $select.search track by evaluar.id">
                                    <div ng-bind-html="evaluar.name | highlight: $select.search"></div>
                                </ui-select-choices>
                            </ui-select>
                        </div>
                    </div>
                </div>

            </form>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <table datatable dt-options="datatable.options" dt-columns="datatable.columns" dt-instance="datatable.instance" class="table">
                </table>
            </div>
        </div>

    </div>
    <!-- dialog buttons -->
    <div class="modal-footer">
        <input type="submit" ng-click="close()" class="btn btn-danger" value="Cancelar">
        <input type="submit" ng-click="save()" class="btn btn-primary" value="Guardar">
    </div>
</div>
</script>