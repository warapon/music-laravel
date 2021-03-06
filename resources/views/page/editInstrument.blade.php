@extends('admin.layout') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body pad">
                @if(count($errors) > 0)
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    Warning : ทำรายการไม่สำเร็จ กรุณาเลือกไฟล์สกุล jpg, jpeg, png
                </div>
                @endif
                <h3>แก้ไข{{$header}}</h3>
                <form role="form" method="POST" action="{{url('instype/updateinstument')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ Request::get('edit') }}">
                    <input type="hidden" name="type_id" value="{{ Request::get('id') }}">
                    <input type="hidden" name="img_i" value="{{ $instrument->img_inst }}">
                    <input type="hidden" name="img_p" value="{{ $instrument->img_pro }}">
                    <div class="form-group">
                        <img class="img-responsive pad" src="{{'/images/uploads/pro/'.$instrument->img_pro}}" alt="Photo">
                            <label for="exampleInputEmail1">รูปภาพ(หน้าหลัก) * เฉพาะสกุล jpg, jpeg, png</label>
                        <input type="file" class="form-control" name="img_pro" id="img_instrumen" autofocus>
                        </div>
                    <div class="form-group">
                    <img class="img-responsive pad" src="{{'/images/uploads/instrument/'.$instrument->img_inst}}" alt="Photo">
                        <label for="exampleInputEmail1">รูปภาพ(หน้ารายละเอียด) * เฉพาะสกุล jpg, jpeg, png</label>
                    <input type="file" class="form-control" name="img_instrumen" id="img_instrumen">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อเครื่องดนตรี(TH) *</label>
                    <input type="text" class="form-control" name="name_th_instrumen" id="name_th_instrumen" value="{{$instrument->name_th_inst}}" placeholder="ชื่อเครื่องดนตรี(TH).."
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อเครื่องดนตรี(EN) *</label>
                        <input type="text" class="form-control" name="name_en_instrumen" id="name_en_instrumen" value="{{$instrument->name_en_inst}}" placeholder="ชื่อเครื่องดนตรี(EN).."
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รายละเอียด</label>
                        <textarea id="editor1" name="detail_instrumen" required rows="10" cols="80">
                            {{$instrument->detail_inst}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">URL-YOUTUBE *</label>
                        <input type="text" class="form-control" name="vedio_instrumen" id="vedio_instrumen" value="{{$instrument->url_inst}}" placeholder="https://www.youtube.com.."
                            required>
                    </div>
                    <button type="submit" id="add" class="btn btn-primary"><i class="fa fa-fw fa-check"></i> บันทึก</button>
                </form>

            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.col -->
</div>

<!-- jQuery 3 -->
<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- CK Editor -->
<script src="/adminlte/bower_components/ckeditor/ckeditor.js"></script>

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

    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

</script>
@endsection