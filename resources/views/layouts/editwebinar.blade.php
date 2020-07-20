@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="main">
        <div class="section">
            <div class="container">
                <h2 style="text-align: center">Edit Category Webinar</h2><br><br>
                <form method="post" action="/update/{{ $item->id }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-10 col-sm-9">
                            <div class="form-group">
                                <h6>Judul<span class="icon-danger">*</span></h6>
                                <input type="text" name="name" value="{{$item->name}}" class="form-control border-input" required placeholder="enter name here...">
                            </div>
                            <div class="form-group">
                                <h6>Status <span class="icon-danger">*</span></h6>
                                <div id="menu-dropdown">
                                    <div class="title">
                                        <div class="form-group">
                                            <select name="status" id="status" class="selectpicker" data-style="btn-danger btn-round"  data-menu-style="dropdown-danger">
                                               @if($item->status=="aktiv")

                                                    <option value="aktiv">aktiv </option>
                                                    <option value="non-aktiv">non-aktiv </option>
                                                @else
                                                    <option value="non-aktiv">non-aktiv </option>
                                                    <option value="aktiv">aktiv </option>
                                                @endif

                                            </select>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <h6>Desc Singkat <span class="icon-danger">*</span></h6>
                                <textarea name="desc" class="form-control textarea-limited" placeholder="Deskirpsikan singkat tentang program anda" rows="13"  >{{$item->desc}}</textarea>
                            </div>
                            <div class="form-group">
                                <h6>Poster <span class="icon-danger">*</span></h6>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px">
                                        <img src="{{asset('img/poster/'.$item->img)}}" alt="...">
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
                        <input type="text" name="tgl" value="{{$item->tgl}}" class="form-control border-input" required placeholder="enter tanggal here...">
                    </div>
                    <div class="form-group">
                        <h6>Waktu<span class="icon-danger">*</span></h6>
                        <input type="text" name="waktu" value="{{$item->waktu}}" class="form-control border-input" required placeholder="enter waktu here...">
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
