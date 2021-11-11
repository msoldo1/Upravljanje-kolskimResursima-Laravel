@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">  <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Uredite korisnika</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('user.update', $editData->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Tip korisnika <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="usertype" id="select" required class="form-control">
                                                        <option value="" selected="" disabled="">Izaberite korisnika</option>
                                                        <option value="admin" {{ ($editData->usertype == "admin" ? "selected" : "") }} >Admin</option>
                                                        <option value="user" {{ ($editData->usertype == "user" ? "selected" : "") }}>Student</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>User name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" value="{{ $editData->name }}"  name="name" class="form-control" required data-validation-required-message="This field is required"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>User email <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" value="{{ $editData->email }}"  name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info" value="Promjeni">
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
