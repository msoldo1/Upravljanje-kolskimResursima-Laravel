@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">  <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Form Validation</h4>
                        <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('user.store') }}">
                                    @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tip korisnika <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="usertype" id="select" required class="form-control">
                                                            <option value="" selected="" disabled="">Izaberite korisnika</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="user">Student</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h5>User password <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                                    </div>
                                </form>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
        </div>
    </div>
@endsection
