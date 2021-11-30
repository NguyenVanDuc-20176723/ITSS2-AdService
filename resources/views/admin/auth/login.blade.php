@extends('common.layout')

@section('content')
    @extends('common.admin_header')
    @if(count($errors) > 0)
        <div class="">
            @foreach ($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif
    @if(session('loginFail'))
    <div class="auth-card-alert-danger">
        {{session('loginFail')}}
    </div>
    @endif
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Adminログイン</h4>
                        <form class="forms-sample" method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">メール</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="メールを入力してください。">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">パスワード</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="パスワードを入力してください。">
                                </div>
                            </div>
                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary mr-2">ログイン</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
