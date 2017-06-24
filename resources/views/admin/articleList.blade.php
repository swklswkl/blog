@extends('admin.common.common')
@section('content')
        <div class="container">



            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-table-1">文章列表</span>
                </div>
                <div class="mws-panel-body">
                    <table class="mws-datatable-fn mws-table">
                        <thead>
                        <tr>
                            <th>标题</th>
                            <th>作者</th>
                            <th>文章类型</th>
                            <th>阅读</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $val)
                        <tr class="gradeX">
                            <td>{{$val['title']}}</td>
                            <td>{{$val['author']}}</td>
                            <td>{{$val['type']}}</td>
                            <td class="center">{{$val['keyword']}}</td>
                            <td class="center">{{$val['created_at']}}</td>
                            <td class="center"></td>
                        </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@stop