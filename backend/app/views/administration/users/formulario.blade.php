<script type="text/ng-template" id="modalUser">
    <div class="modal-content">
        <form name="formUser" ng-submit="formUser.$valid && save() " novalidate>
            <div class="modal-header">
                <button type="button" class="bootbox-close-button close" ng-click="close()" aria-hidden="true">×</button>
                <h3>
                        User
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            New user
                        </small>
                    </h3>
            </div>
            <!-- dialog body -->
            <div class="modal-body">
                <fieldset>
                    <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <h4 class="widget-title blue smaller">
                                <i class="ace-icon fa fa-user orange"></i>
                                Personal data
                                <hr/>
                            </h4>
                        <div class="input-group">
                            <span class="hidden-xs input-group-addon">
                                    <i class="ace-icon fa fa-code"></i>
                                </span>
                            <input class="form-control" type="text" name="name" ng-model="user.name" placeholder="Name(s)" required/>
                        </div>
                        <div class="error" ng-messages="formUser.name.$error" ng-if="formUser.name.$dirty || formUser.$submitted">
                            <small class="error" ng-message="required">You must specify a name</small>
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <div class="input-group">
                            <span class="hidden-xs input-group-addon">
                                    <i class="ace-icon  fa fa-user"></i>
                                </span>
                            <input class="form-control" type="text" name="last_name" ng-model="user.last_name" placeholder="Last name" required/>
                        </div>
                        <div class="error" ng-messages="formUser.apepat.$error" ng-if="formUser.apepat.$dirty || formUser.$submitted">
                            <small class="error" ng-message="required">You must specify a last name</small>
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <div class="input-group">
                            <span class="hidden-xs input-group-addon">
                                    <i class="ace-icon  fa fa-envelope-o"></i>
                                </span>
                            <input class="form-control" type="text" name="email" ng-model="user.email" placeholder="E-mail" required ng-remote-validate="/api/users/field-exists/email/{{user.id}}"/>
                        </div>
                        <div class="error" ng-messages="formUser.email.$error" ng-if="formUser.email.$dirty || formUser.$submitted">
                            <small class="error" ng-message="ngRemoteValidate">Email already exists</small>
                            <small class="error" ng-message="required">You must specify an email</small>
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <h4 class="widget-title blue smaller">
                            <i class="ace-icon fa fa-key orange"></i>
                            Acess Data
                            <hr>
                        </h4>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <div class="input-group">
                            <span class="hidden-xs input-group-addon"><i class="ace-icon fa fa-cubes"></i></span>
                            <ui-select name="rol" ng-model="user.rol_id" required>
                                <ui-select-match placeholder="Select a role">{{$select.selected.name}}</ui-select-match>
                                <ui-select-choices repeat="rol.id as rol in rols | filter: $select.search track by rol.id">
                                    <div ng-bind-html="rol.name | highlight: $select.search"></div>
                                </ui-select-choices>
                            </ui-select>
                        </div>
                        <div class="error" ng-messages="formUser.rol.$error" ng-if="formUser.rol.$dirty || formUser.$submitted">
                            <small class="error" ng-message="required">You must specify a role</small>
                        </div>
                    </div>
                    <div class="form-group col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <div class="input-group">
                            <span class="hidden-xs input-group-addon">
                                    <i class="ace-icon fa fa-key"></i>
                                </span>
                            <input class="form-control" type="text" name="login" ng-model="user.login" placeholder="Login" ng-remote-validate="/api/users/field-exists/login/{{user.id}}" required/>
                        </div>
                        <div class="error" ng-messages="formUser.login.$error" ng-if="formUser.login.$dirty || formUser.$submitted">
                            <small class="error" ng-message="ngRemoteValidate">The login name already exists</small>
                            <small class="error" ng-message="required">You must specify a login</small>
                        </div>
                    </div>
                    <div class="form-group col-xs-6 col-sm-6 col-lg-6 col-md-6">
                        <div class="input-group">
                            <span class="hidden-xs input-group-addon">
                                    <i class="ace-icon fa fa-key"></i>
                                </span>
                            <input class="form-control" type="password" name="pass" ng-model="user.pass" placeholder="Password" required/>
                        </div>
                        <div class="error" ng-messages="formUser.pass.$error" ng-if="formUser.pass.$dirty || formUser.$submitted">
                            <small class="error" ng-message="required">You must specify a password</small>
                        </div>
                    </div>
                    <div class="form-group col-xs-6 col-sm-6 col-lg-6 col-md-6">
                        <div class="input-group">
                            <span class="hidden-xs input-group-addon">
                                    <i class="ace-icon fa fa-key"></i>
                                </span>
                            <input class="form-control" type="password" name="pass2" ng-model="user.pass2" placeholder="Repeat Password" required password-verify="user.pass" />
                        </div>
                        <div class="error" ng-messages="formUser.pass2.$error" ng-if="formUser.pass2.$dirty || formUser.$submitted">
                            <small class="error" ng-message="required">You must re-enter your password</small>
                            <small class="error" ng-message="passwordVerify">The passwords do not match</small>
                        </div>
                    </div>
                </fieldset>
            </div>
            <!-- dialog buttons -->
            <div class="modal-footer">
                <button ng-click="close()" type="button" class="btn btn-default">cancel</button>
                <input type="submit" class="btn btn-primary" btn="Save">
            </btn>
        </form>
    </div>
</script>
