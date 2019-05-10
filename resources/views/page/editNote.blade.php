@extends('admin.layout') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body pad">
                <h3>เพิ่มเนื้อหา</h3>
                <form role="form" method="POST" action="{{url('note/updatenote')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$note->id}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อเนื้อหา</label>
                    <input type="text" class="form-control" name="name_note" id="name_note" value="{{$note->name_note}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รายละเอียด</label>
                        <textarea id="editor1" name="detail_note" required rows="10" cols="80">
                                {{$note->detail_note}}
                        </textarea>
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
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })

</script>
@endsection