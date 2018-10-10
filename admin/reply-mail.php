<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('header-1.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Mails</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Dashboard</a></li>
                    <li class="active">Mails</li>
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
                        <a href="mails.php" class="btn btn-sm btn-info">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <strong class="card-title">Reply</strong>
                    </div>
                    <div class="card-body">
                        <form method="" action="">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" id="" value="help@example.com" placeholder="To:" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="" value="" placeholder="Subject:" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="10" class="form-control">Message</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="#" class="btn btn-sm btn-info">
                                            <i class="fa fa-paperclip"></i> Attachment
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                        <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<?php include('footer.php'); ?>