@extends('admin.base')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            栏目管理
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"> Home</i></a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>
    <section class="content">
        <div class="content-body">
            <div class="box box-primary">
                <div class="box-header text-right">
                    <button type="button" class="btn btn-primary btn-add-category">添加类目</button>
                </div>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th class="text-center" style="width: 50%">名称</th>
                            <th class="text-center">顺序</th>
                            <th class="text-center">操作</th>
                        </tr>
                        @foreach ($category as $c)
                            <tr>
                                <td class="text-center">{{ $c->name }}</td>
                                <td class="text-center">{{ $c->sequence }}</td>
                                <td class="text-center">
                                    <!-- 重命名按钮 -->
                                    <button type="button" class="btn btn-xs btn-warning btn-category-rename">重命名</button>
                                    <!-- 启用/停用按钮 -->
                                    @if ($c->is_available == 1)
                                        <button type="button" class="btn btn-xs btn-warning btn-category-disable">停用</button>
                                    @else
                                        <button type="button" class="btn btn-xs btn-success btn-category-enable">启用</button>
                                    @endif
                                    <!-- 删除按钮 -->
                                    <button type="button" class="btn btn-xs btn-warning btn-category-delete">删除</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection