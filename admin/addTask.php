<?php session_start();
include("../handlers/connect.php");

include("include/header.php");
include('include/sidebar.php');
include('handlers/show_user.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Task</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">add task </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <form action="handlers/add_task.php" method="post">
                            <div class="card-body">

                                <?php 
                                if(isset($_SESSION['success'])){ ?>

                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <h5><i class="icon fas fa-check"></i> </h5>
                                    <?php echo $_SESSION['success']; 
                                    
                                     unset($_SESSION['success']);
                                    ?>
                                </div>

                                <?php  }
                                ?>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter task title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">body</label>
                                    <textarea " name=" body" class="form-control" id="exampleInputPassword1placeholder="
                                        task"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">user</label>
                                    <select name="user_name">
                                        <?php 
                                        while($users = mysqli_fetch_assoc($queryGetUsers)){ ?>

                                        <option value="<?= $users['id']; ?>">
                                            <?= $users['name'];  ?></option>

                                        <?php } ?>
                                    </select>
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add task</button>
                            </div>
                        </form>

                    </div><!-- /.card -->
                </div>
                <!-- /.col-md-6 -->

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include("include/footer.php");
?>