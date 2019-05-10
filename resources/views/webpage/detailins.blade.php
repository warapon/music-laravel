@extends('users.layout') 
@section('content')
<h3>{{$instrument->name_th_inst}}(<small>{{$instrument->name_en_inst}}</small>)</h3>
<hr>
<div class="row">
    <div class="col-12 text-center">
        <img src="/images/uploads/instrument/{{$instrument->img_inst}}" alt="Card image">
    </div>
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>ชื่อ(TH) : </strong>{{$instrument->name_th_inst}}</p>
                <p class="card-text"><strong>ชื่อ(EN) : </strong>{{$instrument->name_en_inst}}</p>
                <p class="card-text"><strong>รายละเอียด</strong></p>
                {!! $instrument->detail_inst !!}
                <p class="card-text"><strong>วีดีโอประกอบการสอน</strong></p>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$instrument->url_inst}}?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection