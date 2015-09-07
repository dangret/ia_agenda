<div class="col-md-12">
    <div class="main-box clearfix">
        <header class="main-box-header clearfix">
            <h2><i class="fa fa-users"></i>
                <div class="pull-right">
                    <button class="btn btn-primary btn-block" ng-click='save()'>
                        <i class="ace-icon fa fa-user align-top bigger-125"></i> Nuevo Usuario
                    </button>
                </div>
            </h2>
        </header>
        <div class="main-box-body clearfix">
            <div class="table-responsive">
                <table datatable dt-options="datatable.options" dt-columns="datatable.columns" dt-instance="datatable.instance" class="table table-hover" width="100%"></table>
            </div>
        </div>
    </div>
</div>
