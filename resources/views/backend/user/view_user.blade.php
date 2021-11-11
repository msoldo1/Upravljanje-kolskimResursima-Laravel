@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">  <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Lista korisnika</h3>
                                <a href="{{ route('user.add') }}" style="float:right;" class="btn btn-rounded btn-success mb-5">Dodaj korisnika</a>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Redni br.</th>
                                            <th>Tip korisnika</th>
                                            <th>Ime</th>
                                            <th>Email</th>
                                            <th>Aktivnost</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allData as $key => $data)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td> {{ $data->usertype }}</td>
                                                <td> {{ $data->name }}</td>
                                                <td> {{ $data->email }}</td>
                                                <td> <a href="{{ route('user.edit', $data->id) }}" class="btn btn-info"> Edit </a>
                                                    <a href="{{ route('user.delete', $data->id) }}" class=" btn btn-danger" id="delete"> Delete </a>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>

                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
    <!-- /.content -->
        </div>
    </div>
@endsection
