@extends('layout')

@section('content')
    <div>
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <h3 style="text-align: center;"> 自动验证实验表单</h3>
        <form class="form-horizontal" action="{{ route('demos-the-basic-validation-rule') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">邮件格式</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">密码格式</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">日期格式</label>
                <div class="col-sm-10">
                    <input type="date" name="date" value="{{ date('Y-m-d H:i:s') }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 记住我
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">验证</button>
                </div>
            </div>
        </form>
    </div>
@endsection







