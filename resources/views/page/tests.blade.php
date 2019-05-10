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

            </div>
            <div class="box-body pad">
                <p>รายละเอียด{{$header}}</p>

            </div>
            <!-- /.box -->
            <div class="box-body">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered" id="table">
                        <tbody>
                            <tr>
                                <th class="text-center">1</th>
                                <th>แบบทดสอบโน้ตสากลเบื้องต้น</th>
                                <th class="text-center"><a href="{{ url('test/1') }}">ข้อสอบประจำหน่วย</a></th>
                            </tr>
                            <tr>
                                <th class="text-center">2</th>
                                <th>แบบทดสอบประเภทเครื่องดนตรีสากล</th>
                                <th class="text-center"><a href="{{ url('test/2') }}">ข้อสอบประจำหน่วย</a></th>
                            </tr>
                            <tr>
                                <th class="text-center">3</th>
                                <th>แบบทดสอบทฤษฎีขั้นสูง</th>
                                <th class="text-center"><a href="{{ url('test/2') }}">ข้อสอบประจำหน่วย</a></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection