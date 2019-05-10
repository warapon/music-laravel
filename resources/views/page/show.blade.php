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
                @elseif(session('status') == 'warning')
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    Warning : ทำรายการไม่สำเร็จ กรุณากรอกข้อมูล
                </div>
                @endif @if(count($errors) > 0)
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    Warning : ทำรายการไม่สำเร็จ กรุณาตรวจสอบสกุลไฟล์ของท่านก่อนการเพิ่มข้อมูล
                </div>
                @endif
            </div>
            <div class="box-body pad">
                {{--
                <p>ข้อมูล{{$header}}</p> --}} @if (count($key) == 0)
                <h3>ไม่มีข้อมูลนี้ในระบบ กรุณาเพิ่มข้อมูล</h3>
                <form role="form" method="POST" action="{{url('theory/createkey')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="name_key" value="{{$name_key}}">
                    <input type="hidden" name="intrument" value="{{$intrument}}">
                    <input type="hidden" name="x" value="{{$x}}">
                    <input type="hidden" name="y" value="{{$y}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">URL youtube</label>
                        <input type="text" class="form-control" name="url_key" id="url_key" placeholder="url youtube..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">เสียง * เฉพาะสกุล mpeg, mpga, mp3, wav</label>
                        <input type="file" class="form-control" name="sound_key" id="sound_key">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">รูปภาพ * เฉพาะสกุล jpg, jpeg, png</label>
                        <input type="file" class="form-control" name="img_key" id="img_key">
                    </div>
                    <button type="submit" id="add" class="btn btn-primary"><i class="fa fa-fw fa-check"></i> บันทึก</button>
                </form>
                @else
                <form role="form" method="POST" action="{{url('theory/updatekey')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$key->id}}">
                    <div class="form-group">
                        @if ($key->url_video)
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$key->url_video}}?rel=0" allowfullscreen></iframe>
                        </div>
                        @endif
                        <label for="exampleInputEmail1">URL youtube</label>
                        <input type="text" class="form-control" name="url_key" id="url_key" placeholder="url youtube..">
                    </div>
                    @if ($key->sound)
                    <div class="col-md-12">

                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Example: Audio with no additional data ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                            <audio controls>
                              <source src="/images/uploads/sound/{{$key->sound}}" type="audio/mpeg" />
                            </audio>
                        <!-- ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^  -->
                        <!-- ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^ ^  -->
                    
                    
                          </div>
                          <input type="hidden" name="sound_old" value="{{$key->sound}}">
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">เสียง * เฉพาะสกุล mpeg, mpga, mp3, wav</label>
                        <input type="file" class="form-control" name="sound_key" id="sound_key">
                    </div>
                    @if ($key->img)                        
                    <img src="/images/uploads/key/{{$key->img}}" alt="Card image">
                    <input type="hidden" name="img_old" value="{{$key->img}}">
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">รูปภาพ * เฉพาะสกุล jpg, jpeg, png</label>
                        <input type="file" class="form-control" name="img_key" id="img_key">
                    </div>
                    <button type="submit" id="add" class="btn btn-primary"><i class="fa fa-fw fa-check"></i> บันทึก</button>
                </form>
                @endif

            </div>
        </div>
    </div>
    <!-- /.col -->
</div>

<!-- jQuery 3 -->
<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- CK Editor -->
<script src="/adminlte/bower_components/ckeditor/ckeditor.js"></script>
<script src="js/bootstrap3_player.js"></script>
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