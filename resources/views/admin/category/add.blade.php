@extends('admin.dialog')

@section('content')

<section class="content">
    @if ($success_msg)
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{ $success_msg }}
    </div>
    @endif

    @if ($warning_msg)
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{ $warning_msg }}
    </div>
    @endif

    <form class="form-horizontal" method="post">
        <div class="box-body">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">类目名称</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-center" id="inputName" name="name">
                </div>
            </div>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">提交</button>
        </div>
    </form>
</section>

@endsection