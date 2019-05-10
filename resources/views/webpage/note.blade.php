@extends('users.layout') 
@section('content')
<h3>{{$note->name_note}}</h3>
<hr>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-body">
                {!! $note->detail_note !!}
            </div>
        </div>
    </div>
</div>
@endsection