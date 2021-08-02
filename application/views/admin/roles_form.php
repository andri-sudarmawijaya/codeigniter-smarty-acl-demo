<?php $this->load->view('_layouts/header'); ?>
<?php $this->load->view('_layouts/navbar'); ?>
<?php $this->load->view('_layouts/sidebar'); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header clearfix">
                            <h2>Role <?php echo isset($item) ? 'Edit' : 'Create' ;?>
                                <small><?php echo isset($item) ? 'Module = ' . $item->name : 'New Role'; ?> </small>
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
                                
                                <div class="row">
                                    <div class="col-md-6">
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

                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="demo-radio-button">
                                                <label>Status</label>
                                                <div class="row clearfix"></div>
                                                <input name="status" value="active" type="radio" id="radio_39" class="with-gap radio-col-green"  <?php if (isset($item) && $item->status === 'active') {echo 'checked'; } ?>> <label for="radio_39">ACTIVE</label>
                                                <input name="status" value="inactive" type="radio" id="radio_42" class="with-gap radio-col-yellow" <?php if (isset($item) && $item->status === 'inactive') { echo 'checked'; } ?>> <label for="radio_42">INACTIVE</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="demo-checkbox">

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input toggle-checkbox" data-toggle-checkbox="permissions" id="checkbox-all">
                                        <label for="checkbox-all">Check All</label>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">credit_card</i>
                                        </span>
                                    <div class="form-line">
                                        <?php foreach ($modules as $module): $m_permissions = json_decode($module->permissions); ?>
                                            <dl class="row">
                                                <dt class="col-3"><?php echo $module->name; ?></dt>
                                                <dd class="col-9">
                                                    <?php foreach ($m_permissions as $pk => $pname):
                                                        if(isset($module_permissions[$module->id]) && in_array($pname,$module_permissions[$module->id])){
                                                            $checked = 'checked';
                                                        }else{ $checked = ''; }
                                                        ?>
                                                            <input class="form-check-input permissions" type="checkbox" name="modules[<?php echo $module->id; ?>][]"
                                                                value="<?php echo $pname; ?>" <?php echo $checked; ?> id="<?php echo $module->id.$pk; ?>">
                                                            <label class="form-check-label"
                                                                for="<?php echo $module->id.$pk; ?>"><?php echo $pname; ?></label>
                                                    <?php endforeach; ?>
                                                </dd>
                                            </dl>
                                        <?php endforeach; ?>
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
