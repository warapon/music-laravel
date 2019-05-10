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
                    <a href="{{ url('note/createnote') }}" type="button" class="create-modal btn btn-block btn-primary"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มเนื้อหา</a>
                </div>
            </div>
            <div class="box-body pad">
                <p>รายละเอียด{{$header}} สามารถเพิ่มรายการได้จากปุ่ม <code><i class="fa fa-fw fa-plus-circle"></i>เพิ่มเนื้อหา</code></p>
                <div class="row">
                    {{-- @foreach ($types as $value){{$value->name}} @endforeach --}}
                </div>

            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Condensed Full Width Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-condensed" id="table">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>รายการ</th>
                                <th class="text-center" style="width: 70px">#</th>
                            </tr>
                            @foreach ($notes as $value)
                            <tr class="post{{$value->id}}">
                                <td>{{$cout++}}</td>
                                <td>{{$value->name_note}}</td>
                                <td>
                                    <a href="{{ url('note/editnote?id='.$value->id) }}" type="button" class="edit-modal btn btn-warning btn-xs"><i class="fa fa-fw fa-edit"></i></a>
                                    <a href="{{ url('note/deletenote?id='.$value->id) }}" onclick="return delete_form()" type="button" class="delete-modal btn btn-danger btn-xs"><i class="fa fa-fw fa-trash-o"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
    <!-- /.col -->
</div>

<!-- jQuery 3 -->
<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- CK Editor -->
<script src="/adminlte/bower_components/ckeditor/ckeditor.js"></script>

<script>
    function delete_form() {
        if(confirm("คุณต้องการลบข้อมูลนี้หรือไม่ ?")){
            return true;
        }else{
            return false;
        }
    }

    $(function () {
    CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
  })

</script>
@endsection