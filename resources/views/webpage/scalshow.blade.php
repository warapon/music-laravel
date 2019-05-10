@extends('users.layout') 
@section('content')
<h3>{{$header}}</h3>
<hr>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                @if (count($key) == 0)
                <div class="col-12 text-center text-danger">
                    ไม่มีข้อมูล
                </div>
                @else
                <h1>{{$key->name_key}} [{{$key->intrument}}]</h1> <br> @if ($key->url_video)
                <div class="col-12">
                    <h4>วีดีโอประกอบการสอน</h4>
                </div>
                <div class="col-12 col-md-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$key->url_video}}?rel=0"></iframe>
                    </div>
                </div><br><br> @endif @if ($key->sound)
                <div class="col-12">
                    <h4>เสียงประกอบการสอน</h4>
                </div>
                <div class="col-12"><audio controls>
                  <source src="/images/uploads/sound/{{$key->sound}}" type="audio/mpeg" />
                </audio>
                </div><br><br> @endif @if ($key->img)
                <div class="col-12">
                    <h4>รูปประกอบการสอน</h4>
                </div>
                <div class="col-12 text-center">
                    <img src="/images/uploads/key/{{$key->img}}" alt="Card image">
                </div>
                @endif @endif
            </div>
        </div>
    </div>
</div>
@endsection