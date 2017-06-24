@extends('admin.common.common')
@section('csrf-token')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@stop
@section('script')
    <script type="text/javascript" src="{{asset('admin/plugins/elrte/js/elrte.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/plugins/elfinder/js/elfinder.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/elrte/css/elrte.full.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/elfinder/css/elfinder.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/elrte/css/elrte-inner.css')}}" media="screen" />

    <script type="text/javascript" src="{{asset('admin/js/demo.formelements.js')}}"></script>
@stop
@section('content')
    <form id="ajaxform" method="post" >
        <div class="container">
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-check">文章相关</span>
                </div>
                <div class="mws-panel-body">
                    <div id="mws-validate" class="mws-form" >
                        <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                        <div class="mws-form-inline">
                            <div class="mws-form-row">
                                <label>文章标题</label>
                                <div class="mws-form-item large">
                                    <input type="text" name="title" class="mws-textinput required" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>文章作者</label>
                                <div class="mws-form-item large">
                                    <input type="text" name="author" class="mws-textinput required email" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>关键字</label>
                                <div class="mws-form-item large">
                                    <input type="text" name="keyword" class="mws-textinput required url" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>文章类型</label>
                                <div class="mws-form-item large">
                                    <select class="required" name="type">
                                        <option>PHP</option>
                                        <option>前端</option>
                                        <option>linux</option>
                                        <option>服务器</option>
                                        <option>框架</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-text-styling-3">文章内容</span>
                </div>
                <div class="mws-panel-body">
                    <div class="mws-form" >
                        <div class="mws-form-row">
                            <div class="mws-form-item">
                                <textarea name="content" id="elrte" cols="auto" rows="auto"></textarea>
                            </div>
                        </div>
                        <div class="mws-button-row">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a   class="mws-button red" id="addarticle" >发布文章</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript" src="{{asset('admin/plugins/layer/layer.js')}}"></script>
    <script>


    $(function () {
      $('#addarticle').click(function () {
         var formData = $("#ajaxform").serialize();
         $.ajax({
             type:'post',
             url:'{{url('admin/article/newarticle')}}',
             cache:false,
             dataType:'json',
             data:formData,
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
             success:function(data) {
                 layer.msg(data.msg,{icon:1},function(){
                     if(data.code==200){
                         parent.location.reload(); // 父页面刷新
                         var index = parent.layer.getFrameIndex(window.name); //获取窗口索引
                         parent.layer.close(index);
                     }

                 });
             }


         });
      });
    })
    </script>
@stop