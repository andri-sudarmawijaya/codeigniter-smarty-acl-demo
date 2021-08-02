<?php $this->load->view('_layouts/header'); ?>
<?php $this->load->view('_layouts/navbar'); ?>
<?php $this->load->view('_layouts/sidebar'); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header clearfix">
                            <h2>    
                                <?php echo 'Manage Modules'; ?>
                            </h2>
                            <small>Terakhir diupdate : <?php echo '2021-02-11'; ?></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header clearfix">
                        
                            <div class="float-left clearfix">
                                <a href="<?php echo base_url($URI.'/create'); ?>" class="btn btn-success btn-sm"> Create</a>
                            </div>

                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Controller</th>
                                            <th>Permissions</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (count($items) > 0): foreach ($items as $item): ?>
                                        <tr>
                                            <td><?php echo $item->name; ?></td>
                                            <td><?php echo $item->controller; ?></td>
                                            <td><?php echo count(json_decode($item->permissions,0)); ?></td>
                                            <td>
                                                <form action="<?php echo base_url($URI.'/delete/' . $item->id); ?>"
                                                    method="post" onsubmit="return confirm('Are you sure?');">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="<?php echo base_url($URI.'/edit/' . $item->id); ?>"
                                                        class="btn btn-info"> Edit</a>
                                                        <button type="submit" class="btn btn-danger"> Delete</button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; else: ?>
                                        <tr>
                                            <td colspan="4" class="text-center">No results found!</td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view('_layouts/footer'); ?>
