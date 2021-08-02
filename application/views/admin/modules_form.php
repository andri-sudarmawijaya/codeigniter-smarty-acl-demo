<?php $this->load->view('_layouts/header'); ?>
<?php $this->load->view('_layouts/navbar'); ?>
<?php $this->load->view('_layouts/sidebar'); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header clearfix">
                            <h2>Module <?php echo isset($item) ? 'Edit' : 'Create' ;?>
                                <small><?php echo isset($item) ? 'Module = ' . $item->name : 'New Module'; ?> </small>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header clearfix">
                        
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" novalidate="novalidate">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <label>Modules</label>
                                            <input type="text" name="name" value="<?php echo $item->name ?? set_value('name'); ?>" placeholder="Nama Lengkap" class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <label>Controller Name</label>
                                            <input type="text" name="controller" value="<?php echo $item->controller ?? set_value('controller'); ?>" placeholder="controller" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">vpn_key</i>
                                        </span>
                                        <div class="form-line">
                                            <label>Permissions(methods) List</label>
                                            <input type="text" name="permissions" placeholder="Permissions" class="form-control" value="<?php echo isset($item) ? implode(',',json_decode($item->permissions,0)) : set_value('permissions'); ?>"/>
                                            <small class="form-text">Comma separated</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix"></div>
                                
                                <button type="submit" class="btn btn-primary waves-effect"><?php echo isset($item) ? 'Update' : 'Create' ;?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('_layouts/footer'); ?>

