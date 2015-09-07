<div class="col-md-6">
    <div class="main-box clearfix">
        <header class="main-box-header clearfix">
            <h2>Todo</h2>
        </header>
        <div class="main-box-body clearfix">
            <form name="formRol" ng-submit="formRol.$valid && save()" novalidate>
                <fieldset class="col col-xs-12 col-sm-12 col-lg-12 col-md-12">
                    <div class="form-group">
                        <div class="input-group col col-xs-12 col-sm-12 col-lg-12 col-md-12">
                            <span class="input-group-addon">
                                <i class="ace-icon fa fa-cubes"></i>
                            </span>
                            <input type="text" name="name" class="form-control" ng-model="rol.name" placeholder="Rol" ng-remote-validate="/api/rols/valid" required>
                        </div>
                        <div class="error" ng-messages="formRol.name.$error" ng-if="formRol.name.$dirty || formRol.$submitted">
                            <small class="error" ng-message="ngRemoteValidate">The role already exists</small>
                            <small class="error" ng-message="required">You must specify a name</small>
                        </div>
                    </div>
                </fieldset>
                <div class="clearfix"></div>
                <div class="form-actions center col col-xs-12 col-sm-12 col-lg-12 col-md-12">
                    <button type="submit" class="btn btn-sm btn-success">
                        Save
                        <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
