@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">  <!-- Main content -->
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Uredite svoj profil</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('profile.update', $editData->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Vaše ime <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" value="{{ $editData->name }}"  name="name" class="form-control" required data-validation-required-message="This field is required"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Vaš mail <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" value="{{ $editData->email }}"  name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Vaš tel. broj <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" value="{{ $editData->mobile }}"  name="mobile" class="form-control" required data-validation-required-message="This field is required"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Vaša adresa <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" value="{{ $editData->address }}"  name="address" class="form-control" required data-validation-required-message="This field is required"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Vaš spol </h5>
                                                <div class="controls">
                                                    <select name="gender" id="gender" required class="form-control">
                                                        <option value="" selected="" disabled="">Izaberite Spol</option>
                                                        <option value="male" {{ ($editData->gender == "male" ? "selected" : "") }} >Muško</option>
                                                        <option value="female" {{ ($editData->gender == "female" ? "selected" : "") }}>Žensko</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Vaša slika </h5>
                                                <div class="controls">
                                                    <input type="file" value="{{ $editData->image }}" class="form-control" name="image" id="image">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>Vaša slika </h5>
                                                <div class="controls">
                                                    <img id="showImage" style="width: 100px; height: 100px; border:1px solid #000000; " src="{{ (!empty($editData->image))? url('upload/user_image/'.$editData->image):url('upload/no_image.jpg') }}" alt="User Avatar">
                                                </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
               var reader = new FileReader();
               reader.onload = function (e) {
                    $('#showImage').attr('src', e.target.result)
               }
               reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>


@endsection
