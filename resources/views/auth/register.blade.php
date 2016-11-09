@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">สมัครสมาชิก</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('serial') ? ' has-error' : '' }}">
                          <label for="serial" class="col-md-4 control-label">รหัสผลิตภัณฑ์</label>
                          <div class="col-md-6">
                            <input id="serial" type="text" class="form-control" name="serial" value="{{ old('username') }}" maxlength="19" placeholder="XXXX-XXXX-XXXX-XXXX">
                            <span style="color: green;">(รหัสผลิตภัณฑ์จะติดภายในตัวเครื่อง)</span>
                            @if ($errors->first('serial') == 'The serial has already been taken.')
                              <span class="help-block">
                                <strong>ชื่อผู้ใช้งานนี้มีผู้ใช้แล้ว</strong>
                              </span>
                              @else
                                @if ($errors->has('serial'))
                                  <span class="help-block">
                                    <strong>กรุณากรอกข้อมูล</strong>
                                  </span>
                                @endif
                            @endif

                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                          <label for="username" class="col-md-4 control-label">ชื่อผู้ใช้งาน</label>
                          <div class="col-md-6">
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}">

                            @if ($errors->first('username') == 'The username has already been taken.')
                              <span class="help-block">
                                <strong>ชื่อผู้ใช้งานนี้มีผู้ใช้แล้ว</strong>
                              </span>
                              @else
                                @if ($errors->has('username'))
                                  <span class="help-block">
                                    <strong>กรุณากรอกข้อมูล</strong>
                                  </span>
                                @endif
                            @endif

                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">รหัสผ่าน</label>
                          <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="ขั้นต่ำ 4 ตัวอักษร">
                            @if ($errors->has('password'))
                              <span class="help-block">
                                <strong>กรุณาตรวจสอบรหัสผ่านอีกครั้ง</strong>
                              </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                          <label for="password_confirmation" class="col-md-4 control-label">ยืนยันรหัสผ่าน</label>
                          <div class="col-md-6">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="" placeholder="ขั้นต่ำ 4 ตัวอักษร">
                            @if ($errors->has('password_confirmation'))
                              <span class="help-block">
                                <strong>กรุณาตรวจสอบรหัสผ่านอีกครั้ง</strong>
                              </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                          <label for="tel" class="col-md-4 control-label">เบอร์โทรศัพท์</label>
                          <div class="col-md-6">
                            <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}">

                            @if ($errors->first('tel') == 'The tel has already been taken.')
                              <span class="help-block">
                                <strong>เบอร์โทรศัพท์นี้มีผู้ใช้แล้ว</strong>
                              </span>
                              @else
                                @if ($errors->has('tel'))
                                  <span class="help-block">
                                    <strong>กรุณากรอกข้อมูล</strong>
                                  </span>
                                @endif
                            @endif

                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">อีเมล</label>
                          <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="example@gmail.com">

                            @if ($errors->first('email') == 'The email has already been taken.')
                              <span class="help-block">
                                <strong>อีเมลนี้มีผู้ใช้แล้ว</strong>
                              </span>
                              @else
                                @if ($errors->has('email'))
                                  <span class="help-block">
                                    <strong>กรุณากรอกข้อมูล</strong>
                                  </span>
                                @endif
                            @endif

                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> สมัครสมาชิก
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
