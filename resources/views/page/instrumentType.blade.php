@extends('admin.layout') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header ">
                <div id="alert"></div>

                <div class="col-md-2 pull-right">
                    <button type="button" class="create-modal btn btn-block btn-primary"><i class="fa fa-fw fa-plus-circle"></i> เพิ่มประเภท</button>
                </div>
            </div>
            <div class="box-body pad">
                <p>รายละเอียดประเภทเครื่องดนตรี สามารถเพิ่มรายการได้จากปุ่ม <code><i class="fa fa-fw fa-plus-circle"></i>เพิ่มประเภท</code></p>
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
                                <th>ชื่อประเภทเครื่องดนตรี</th>
                                <th class="text-center" style="width: 70px">#</th>
                            </tr>
                            @foreach ($types as $value)
                            <tr class="post{{$value->id}}">
                                <td>{{$cout}}</td>
                                <td><a href="{{ url('instype/instument?id=' . $value->id) }}">{{$value->name}}</a></td>
                                <td>
                                    {{-- <a href="{{action('InstrumentTypeController@edit',  $value->id)}}">
                                            <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-fw fa-edit"></i></button>
                                    </a> --}}
                                    <button type="button" class="edit-modal btn btn-warning btn-xs" data-id="{{$value->id}}" data-name="{{$value->name}}" data-cout="{{$cout++}}"><i class="fa fa-fw fa-edit"></i></button>                                    {{--
                                    <form method="POST" action="{{action('InstrumentTypeController@destroy', $value->id)}}" onsubmit="return delete_form()">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash-o"></i></button>
                                    </form> --}}
                                    <button type="button" class="delete-modal btn btn-danger btn-xs" data-id="{{$value->id}}" data-name="{{$value->name}} "><i class="fa fa-fw fa-trash-o"></i></button>
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

{{-- form Create Post --}}
<div class="modal fade" id="create" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">เพิ่มประเภท</h4>
            </div>

            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อประเภทเครื่องดนตรี</label>
                        <input type="text" class="form-control" name="name_type" id="name_type" autofocus placeholder="ชื่อประเภทเครื่องดนตรี.."
                            required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-fw fa-close"></i> ปิด</button>
                <button type="submit" id="add" class="btn btn-primary"><i class="fa fa-fw fa-check"></i> บันทึก</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- /form Create Post --}} {{-- form Edit Post --}}
<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">แก้ไขข้อมูล</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <input type="hidden" id="eid" name="id_type_edit">
                    <input type="hidden" id="cout" name="cout_type_edit">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อประเภทเครื่องดนตรี</label>
                        <input type="text" class="form-control" name="name_type_edit" id="ename" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-fw fa-close"></i> ปิด</button>
                <button type="submit" id="update" class="btn btn-primary"><i class="fa fa-fw fa-check"></i> อัพเดท</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- /form Edit Post --}} {{-- /form Delete Post --}}
<div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">ลบข้อมูล</h4>
            </div>
            <div class="modal-body">
                คุณต้องการลบข้อมูลชื่อ <span class="dname"></span> ใช่หรือไม่ ?
                <form role="form">
                    <input type="hidden" id="did" name="id_type_delete">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-fw fa-close"></i> ปิด</button>
                <button type="submit" id="remove" class="btn btn-warning"><i class="fa fa-fw fa-trash-o"></i> ลบ</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- /form Delete Post --}}

<!-- jQuery 3 -->
<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>

{{-- -- ajax Form Add -- --}}
<script type="text/javascript">
    $(document).on('click', '.create-modal', function(){
        $('#create').modal('show');
    });
// function Add(save)
    $("#add").click(function(){
        if($('input[name=name_type]').val() == '') return false;
        $.ajax({
            type : 'POST',
            url : 'createType',
            data :{
                '_token' : $('input[name=_token]').val(),
                'name_type' : $('input[name=name_type]').val()
            },
            success:function(data){
                if ((data.errors)) {
                    $("#alert").append('<div class="alert alert-danger alert-dismissible">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                    '<h4><i class="icon fa fa-ban"></i> Alert!</h4>'+
                    'Error : มีข้อผิดพลาดกรุณาติดต่อผู้ดูแล'+
                    '</div>');
                } else {
                    $("#alert").append('<div class="alert alert-success alert-dismissible">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                        '<h4><i class="icon fa fa-check"></i> Alert!</h4>'+
                        'Success : ทำรายการสำเร็จ'+
                    '</div>');
                    
                    $('#table').append('<tr class="post' + data.id + '">'+
                                '<td>{{$cout}}</td>'+
                                '<td>' + data.name +'</td>'+
                                '<td>'+
                                    '<button type="button" class="edit-modal btn btn-warning btn-xs" data-id="' + data.id +'" data-name="' + data.name +' " data-cout="{{$cout++}}"><i class="fa fa-fw fa-edit"></i></button>'+
                                    '<button type="button" class="delete-modal btn btn-danger btn-xs" data-id="' + data.id +'" data-name="' + data.name +' "><i class="fa fa-fw fa-trash-o"></i></button>'+
                                '</td>'+
                            '</tr>');
                }
            }
        });
        $('#name_type').val('');
        $('#create').modal('hide');
    });

</script>

{{-- -- ajax Form Edit -- --}}
<script type="text/javascript">
    $(document).on('click', '.edit-modal', function(){
        $('#eid').val($(this).data('id'));
        $('#ename').val($(this).data('name'));
        $('#cout').val($(this).data('cout'));
        $('#edit').modal('show');
    });
// function Edit(update)
$("#update").click(function(){
    var cout_type = $('input[name=cout_type_edit]').val();
    if($('input[name=name_type_edit]').val() == '') return false;

    $.ajax({
            type : 'POST',
            url : 'editType',
            data :{
                '_token' : $('input[name=_token]').val(),
                'id_type' : $('input[name=id_type_edit]').val(),
                'name_type' : $('input[name=name_type_edit]').val()
            },
            success:function(data){
                if ((data.errors)) {
                    $("#alert").append('<div class="alert alert-danger alert-dismissible">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                    '<h4><i class="icon fa fa-ban"></i> Alert!</h4>'+
                    'Error : มีข้อผิดพลาดกรุณาติดต่อผู้ดูแล'+
                    '</div>');
                } else {
                    $("#alert").append('<div class="alert alert-success alert-dismissible">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                        '<h4><i class="icon fa fa-check"></i> Alert!</h4>'+
                        'Success : ทำรายการสำเร็จ'+
                    '</div>');
                    
                    $('.post' + data.id).replaceWith('<tr class="post' + data.id + '">'+
                                '<td>' + cout_type + '</td>'+
                                '<td>' + data.name +'</td>'+
                                '<td>'+
                                    '<button type="button" class="edit-modal btn btn-warning btn-xs" data-id="' + data.id +'" data-name="' + data.name +'" data-cout="' + cout_type +'"><i class="fa fa-fw fa-edit"></i></button>'+
                                    '<button type="button" class="delete-modal btn btn-danger btn-xs" data-id="' + data.id +'" data-name="' + data.name +' "><i class="fa fa-fw fa-trash-o"></i></button>'+
                                '</td>'+
                            '</tr>');
                }
            }
     });
     
     $('#edit').modal('hide');
});

</script>

{{-- -- ajax Form Delete -- --}}
<script type="text/javascript">
    $(document).on('click', '.delete-modal', function(){
        console.log($(this).data('name'));
        $('#did').val($(this).data('id'));
        $('.dname').text($(this).data('name'));
        $('#delete').modal('show');        
    });

    // function Remove(dalete)
    $("#remove").click(function(){
    if($('input[name=id_type_delete]').val() == '') return false;
        $.ajax({
            type : 'POST',
            url : 'deleteType',
            data :{
                '_token' : $('input[name=_token]').val(),
                'id_type_delete' : $('input[name=id_type_delete]').val()
            },
            success:function(data){
                if ((data.errors)) {
                    $("#alert").append('<div class="alert alert-danger alert-dismissible">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                    '<h4><i class="icon fa fa-ban"></i> Alert!</h4>'+
                    'Error : มีข้อผิดพลาดกรุณาติดต่อผู้ดูแล'+
                    '</div>');
                } else {
                    $("#alert").append('<div class="alert alert-success alert-dismissible">'+
                        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+
                        '<h4><i class="icon fa fa-check"></i> Alert!</h4>'+
                        'Success : ทำรายการสำเร็จ'+
                    '</div>');
                    
                    $('.post' + $('input[name=id_type_delete]').val()).remove();
                }
            }
        });
        $('#delete').modal('hide');
    });

</script>

<script>
    // $(window).on('load',function(){
    // });
    function delete_form() {
        if(confirm("คุณต้องการลบข้อมูลนี้หรือไม่ ?")){
            return true;
        }else{
            return false;
        }
    }

</script>
@endsection