<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('header-1.php'); ?>
<style>
.btn-upload {
  position: relative;
  overflow: hidden;
}
.input-upload {
  position: absolute;
  font-size: 50px;
  opacity: 0;
  right: 0;
  top: 0;
}
</style>

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
                <section class="card">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#mail-inbox" role="tab" aria-selected="true">    
                                <i class="fa fa-envelope-o"></i> Mail Inbox
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#compose-mail" role="tab" aria-selected="false"> 
                                <i class="fa fa-comments-o"></i> Compose Mail 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#sent-mails" role="tab" aria-selected="true">    
                                <i class="fa fa-envelope-o"></i> Sent Mails 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#mail-trash" role="tab" aria-selected="false"> 
                                <i class="fa fa-trash-o"></i> Trash
                            </a>
                        </li>
                    </ul>
                </section>
                
                <div class="tab-content">
                    
                    <div id="mail-inbox" class="tab-pane fade show active" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Inbox</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table" class="table">
                                        <thead>
                                            <tr>
                                                <td>User Name</td>
                                                <td>Message</td>
                                                <td>Time</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>5 mins ago</td>
                                                <td>
                                                    <a href="reply-mail.php" class="btn btn-sm social btn-primary">
                                                        <i class="fa fa-reply"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>28 mins ago</td>
                                                <td>
                                                    <a href="reply-mail.php" class="btn btn-sm social btn-primary">
                                                        <i class="fa fa-reply"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>11 hours ago</td>
                                                <td>
                                                    <a href="reply-mail.php" class="btn btn-sm social btn-primary">
                                                        <i class="fa fa-reply"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="compose-mail" class="tab-pane fade" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Compose</strong>
                            </div>
                            <div class="card-body">
                                <form method="" action="">
                                    <div class="row">
                                        <div class="col-md-6 mx-auto">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" id="" value="" placeholder="To" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" id="" value="" placeholder="Subject" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea placeholder="Message" rows="10" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                             <div class="file btn btn-sm btn-primary btn-upload "> <i class="fa fa-paperclip"></i> Attachment
													<input class="input-upload" type="file" name="file"/>
											 </div>
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
                    
                    <div id="sent-mails" class="tab-pane fade " role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sent Mails</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table" class="table">
                                        <tbody>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>5 mins ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>28 mins ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>11 hours ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="mail-trash" class="tab-pane fade" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Trash</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table" class="table">
                                        <tbody>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>5 mins ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-primary">
                                                        <i class="fa fa-undo"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>28 mins ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-primary">
                                                        <i class="fa fa-undo"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>11 hours ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-primary">
                                                        <i class="fa fa-undo"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


<?php include('footer.php'); ?>