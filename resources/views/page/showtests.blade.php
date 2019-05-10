@extends('admin.layout') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header ">
                @if (session('status') == 'error')
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                    Error : มีข้อผิดพลาดกรุณาติดต่อผู้ดูแล
                </div>
                @elseif(session('status') == 'success')
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    Success : ทำรายการสำเร็จ
                </div>
                @endif

                <div class="col-md-2 pull-right">
                    <a href="{{url('test/'.$unit.'/create')}}"><button type="button" class="btn btn-block btn-primary"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มแบบทดสอบ</button></a>
                </div>
            </div>
            <div class="box-body pad">
                <p>รายละเอียด{{$header}}</p>

            </div>
            <!-- /.box -->
            <div class="box-body">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered" id="table">
                        <tbody>
                            @if (count($tests) == 0)
                            <h6 class="text-center text-red">ไม่มีข้อมูลนี้ในระบบ กรุณาเพิ่มข้อมูล</h6>
                            @else @foreach ($tests as $test)
                            <tr>
                                <th class="text-center">{{$count++}}</th>
                                <th>{!! $test->question !!}</th>
                                <th class="text-right">
                                    <a href="{{ url('test/'.$unit.'/edit?id='.$test->id) }}" type="button" class="edit-modal btn btn-warning btn-xs"><i class="fa fa-fw fa-edit"></i></a>
                                    <a href="{{ url('test/'.$unit.'/delete?id='.$test->id) }}" type="button" class="delete-modal btn btn-danger btn-xs"><i class="fa fa-fw fa-trash-o"></i></a>
                                </th>
                            </tr>
                            @endforeach @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection