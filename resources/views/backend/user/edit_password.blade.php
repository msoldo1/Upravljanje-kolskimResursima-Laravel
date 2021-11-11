@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">  <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Promjeni šifru</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Trenutna šifra <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" name="oldpassword" class="form-control"  id="current_password">
                                                    @error('oldpassword')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Nova šifra <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" name="password"  class="form-control" id="password">
                                                    @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Ponovi šifru <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="password" name="password_confirmation" class="form-control"  id="password_confirmation">
                                                    @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
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
