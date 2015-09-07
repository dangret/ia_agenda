<style>
    .editable-container.popover {
        top: 0px !important;
        left: 0px !important;
        position: relative !important;
    }
    
    .editable-popup {
        position: inherit !important;
    }
    
    .profile-picture {
        padding: 0;
    }
</style>
<title>Mi perfil</title>
<div class="page-header">
    <h1>
        <i class="ace-icon fa fa-user"></i> My profile
    </h1>
</div>
<div class="row">
    <div class="profile-user-info profile-user-info-striped">
        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-3 center">
            <div avatar img="user.photo" changed="save(data)"></div>
            <div class="label label-info label-xlg arrowed-in arrowed-in-right">
                <div class="">
                    <a href="javascript:void(0);" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                        <i class="ace-icon fa fa-user light-green"></i> &nbsp;
                        <span class="white">{{user.name}}</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-xs-12 col-sm-9">
            <div class="profile-info-row">
                <div class="profile-info-name"> username </div>
                <div class="profile-info-value">
                    <a href="javascript:void(0);" name="name" editable-text="user.login" onbeforesave="isAvailable('login',$data, user.id)" onaftersave="save($data)">{{user.login || 'Vacio'}}</a>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Name </div>
                <div class="profile-info-value">
                    <a href="javascript:void(0);" name="name" editable-text="user.name" onaftersave="save($data)">{{user.name || 'Vacio'}}</a>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Last Name </div>
                <div class="profile-info-value">
                    <a href="javascript:void(0);" name="last_name" editable-text="user.last_name" onaftersave="save($data)">{{user.last_name || 'Vacio'}}</a>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> E-mail </div>
                <div class="profile-info-value">
                    <a href="javascript:void(0);" name="email" editable-email="user.email" onbeforesave="isAvailable('email',$data, user.id)" onaftersave="save($data)" data-type="email">{{user.email || 'Vacio'}}</a>
                </div>
            </div>
            <div class="profile-info-row">
                <div class="profile-info-name"> Password </div>
                <div class="profile-info-value">
                    <a href="javascript:void(0);" name="pass" editable-password="user.pass" onaftersave="save($data)" data-type="password">Oculto</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
