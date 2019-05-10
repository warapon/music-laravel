@extends('admin.layout') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body pad">
                <form role="form" method="POST" action="{{url('test/add')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="unit_id" value="{{$unit}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">คำถาม</label>
                        <textarea id="editor1" name="question" required rows="10" cols="80">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ตัวเลือก ข้อ 1</label>
                        <input type="text" class="form-control" name="choice1" placeholder="ตัวเลือก ข้อ 1.." required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ตัวเลือก ข้อ 2</label>
                        <input type="text" class="form-control" name="choice2" placeholder="ตัวเลือก ข้อ 2.." required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ตัวเลือก ข้อ 3</label>
                        <input type="text" class="form-control" name="choice3" placeholder="ตัวเลือก ข้อ 3.." required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ตัวเลือก ข้อ 4</label>
                        <input type="text" class="form-control" name="choice4" placeholder="ตัวเลือก ข้อ 4.." required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">คำตอบ</label>
                        <select class="form-control" name="answer" required>
                                    <option></option>
                                    <option value="1">ข้อ 1</option>
                                    <option value="2">ข้อ 2</option>
                                    <option value="3">ข้อ 3</option>
                                    <option value="4">ข้อ 4</option>
                                  </select>
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