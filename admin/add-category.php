<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('header-1.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Categories</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Dashboard</a></li>
                    <li class="active">Add Category</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Add Category</strong>
                    </div>
                    <div class="card-body">
                        <form method="" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Category Name</label>
                                        <input type="text" id="" placeholder="Enter your category name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <p>Category Added</p>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>