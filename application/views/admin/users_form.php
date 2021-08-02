<?php $this->load->view('_layouts/header'); ?>
<?php $this->load->view('_layouts/navbar'); ?>
<?php $this->load->view('_layouts/sidebar'); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header clearfix">
                            <h2>User <?php echo isset($item) ? 'Edit' : 'Create' ;?>
                                <small><?php echo 'username = ' . $item->username; ?> </small>
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
                                                <label>Username</label>
                                                <input type="text" name="username" value="<?php echo $item->username ?? set_value('username'); ?>" placeholder="Username" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <label>Email</label>
                                                <input type="email" name="email" value="<?php echo $item->email ?? set_value('email'); ?>" placeholder="Email" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <label>Nama Lengkap</label>
                                                <input type="text" name="name" value="<?php echo $item->name ?? set_value('name'); ?>" placeholder="Nama Lengkap" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">vpn_key</i>
                                            </span>
                                            <div class="form-line">
                                                <label>Password</label>
                                                <input type="password" name="password" placeholder="<?php echo isset($item) ? 'Leave blank to do not change': 'Password';?>" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix"></div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                            <div class="demo-radio-button">
                                                <label>Status</label>
                                                <div class="row clearfix"></div>
                                                <input name="status" value="active" type="radio" id="radio_39" class="with-gap radio-col-green"  <?php if (isset($item) && $item->status === 'active') {echo 'checked'; } ?>> <label for="radio_39">ACTIVE</label>
                                                <input name="status" value="inactive" type="radio" id="radio_42" class="with-gap radio-col-yellow" <?php if (isset($item) && $item->status === 'inactive') { echo 'checked'; } ?>> <label for="radio_42">INACTIVE</label>
                                                <input name="status" value="banned" type="radio" id="radio_30" class="with-gap radio-col-red" <?php if (isset($item) && $item->status === 'banned') { echo 'checked'; } ?>><label for="radio_30">BANNED</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('_layouts/footer'); ?>
