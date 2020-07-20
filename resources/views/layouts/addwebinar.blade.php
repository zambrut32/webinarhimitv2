@extends('layouts.app')
@section('content')
        <div class="main">
            <div class="section">
                <div class="container">
                    <h2 style="text-align: center">Tambah Category Webinar</h2><br><br>
                    <form action="{{ route('prosesadd')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 col-sm-9">
                                <div class="form-group">
                                    <h6>Judul<span class="icon-danger">*</span></h6>
                                    <input type="text" name="name" class="form-control border-input" required placeholder="enter name here...">
                                </div>
                                <div class="form-group">
                                    <h6>Status <span class="icon-danger">*</span></h6>
                                    <div id="menu-dropdown">
                                        <div class="title">
                                            <div class="form-group">
                                                <select name="status" id="status" class="selectpicker" data-style="btn-danger btn-round"  data-menu-style="dropdown-danger">
                                                    <option value="aktiv">aktiv </option>
                                                    <option value="non-aktiv">non-aktiv </option>

                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <h6>Desc Singkat <span class="icon-danger">*</span></h6>
                                    <textarea name="desc" class="form-control textarea-limited" placeholder="Deskirpsikan singkat tentang program anda" rows="13"  ></textarea>
                                </div>
                                <div class="form-group">
                                    <h6>Poster <span class="icon-danger">*</span></h6>
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
                                            <img src="{{asset('img/image_placeholder.jpg')}}" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 370px"></div>
                                        <div>
                                            <span  class="btn btn-outline-default btn-round btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="img"></span>
                                            <a href="#paper-kit" name="img" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6>Tanggal<span class="icon-danger">*</span></h6>
                            <input type="text" name="tgl" class="form-control border-input" required placeholder="enter name here...">
                        </div>
                        <div class="form-group">
                            <h6>Waktu<span class="icon-danger">*</span></h6>
                            <input type="text" name="waktu" class="form-control border-input" required placeholder="enter name here...">
                        </div>

                        <div class="row buttons-row">
                            <div class="col-md-4 col-sm-4">
                                <button type="submit" class="btn btn-outline-primary btn-block btn-round">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
