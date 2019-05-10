@extends('users.layout') 
@section('content')
<h3>{{$header}}</h3>
<hr>
<div class="row">
    @if (count($instruments) == 0)
    <div class="col-12 text-center text-danger">
        ไม่มีข้อมูล
    </div>
    @endif
    @foreach ($instruments as $instrument)
    <div class="col-6 col-md-3">
        <div class="card">
        <img class="card-img-top" src="/images/uploads/pro/{{$instrument->img_pro}}" alt="Card image" style="width:100%">
            <div class="card-body text-center">
                <h6 class="card-title">
                    {{$instrument->name_th_inst}}
                    {{$instrument->name_en_inst}}
                </h6>
            <h6><a href="{{$id}}/detail?id={{$instrument->id}}" class="btn btn-success stretched-link"><i class="fas fa-info"></i> รายละเอียด</a></h6>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection