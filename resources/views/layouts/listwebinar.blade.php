@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="blog-2 section section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <h2 class="title">Webinar</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <a href="{{route('addWebinar')}}">
                            <button class="btn btn-rotate btn-round btn-info"><i class="nc-icon nc-settings-gear-65"></i> ADD</button>
                            </a>
                        </div>
                    </div>
                    <br>
                    <br />
                    <div class="row">
                        @foreach($liat as $li)

                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <div class="card-image">
                                        <a href="#pablo">
                                            <img class="img img-raised" src="img/poster/{{$li->img}}" />
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        @if($li->status=="aktiv")

                                            <a href="/hapus/{{ $li->id }}" onclick="return confirm('Are you sure?')"><h6 class="card-category text-danger" style="float: right"> delete</h6>
                                            </a>
                                            <a href="/edit/{{ $li->id }}" ><h6 class="card-category text-info" style="float: right"> Edit &nbsp</h6>
                                            </a>
                                            <h6 class="card-category text-success">{{$li->status}}</h6>

                                        @else
                                            <a href="/hapus/{{ $li->id }}" onclick="return confirm('Are you sure?')"><h6 class="card-category text-danger" style="float: right"> delete</h6>
                                            </a>
                                            <a href="/edit/{{ $li->id }}" ><h6 class="card-category text-info" style="float: right"> Edit &nbsp</h6>
                                            </a>
                                            <h6 class="card-category text-danger">{{$li->status}}</h6>
                                        @endif

                                        <h5 class="card-title">
                                            <a href="#pablo">{{ $li->name }}</a>
                                        </h5>
                                        <p class="card-description">
                                            {{$li->desc}}                                    </p>
                                        <hr>
                                        <div class="card-footer">
                                            <div class="author">
                                                <a href="#pablo">
                                                    <span style="font-size: 12px">{{$li->tgl}}</span>
                                                </a>
                                            </div>
                                            <div class="stats">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i> {{$li->waktu}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
