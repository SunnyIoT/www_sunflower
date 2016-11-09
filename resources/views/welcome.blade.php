<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Healthy</title>

    <!-- <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/sweetalert.css') }}"> -->


    <link href="{{ url::asset('https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ url::asset('bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url::asset('jquery.fullPage.css') }}" rel="stylesheet">
    <link href="{{ url::asset('examples.css') }}" rel="stylesheet">
    <link href="{{ url::asset('demo.css') }}" rel="stylesheet">
    <link href="{{ url::asset('assets/css/sweetalert.css') }}" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scrolloverflow.min.js"></script>
    <script type="text/javascript" src="jquery.fullPage.min.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>

    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }

        #alert_font {
            font-family: 'Kanit', sans-serif;
        }
    </style>

    <script src="ScrollTrigger.min.js"></script>
    <script>
        window.counter = function() {
            // this refers to the html element with the data-scroll-showCallback tag
            var span = this.querySelector('span');
            var current = parseInt(span.textContent);

            span.textContent = current + 1;
            console.log(current);
        };

        document.addEventListener('DOMContentLoaded', function() {
            var trigger = new ScrollTrigger({
                addHeight: true
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                menu: '#menu',
                anchors: ['home', 'buy', 'about', 'contact'],
                sectionsColor: ['#FFF', '#FFF', '#FFF', '#FFF'],
                autoScrolling: false
            });

            $('#myModal').on('shown.bs.modal', function() {
                $('#myInput').focus()
            });
        });
    </script>

</head>

<body>

    <div class="container-fulid">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <ul id="menu" class="text-right">
                    <li data-menuanchor="home" class="active"><a href="#home">หน้าแรก</a></li>
                    <li data-menuanchor="buy"><a href="#buy">สั่งซื้อ</a></li>
                    <li data-menuanchor="about"><a href="#about">เกี่ยวกับเรา</a></li>
                    <li data-menuanchor="contact"><a href="#contact">ติดต่อ</a></li>
                    <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">เข้าสู่ระบบ</a></li>
                    <li></li>
                </ul>
            </div>

            @if(session('status') === 'null')
            <script type="text/javascript">
                swal({
                    type: "warning",
                    title: "<span id='alert_font'>กรุณากรอกข้อมูลผู้ใช้งาน</span>",
                    text: "",
                    html: true
                });
            </script>
            @endif @if(session('status') === 'failed')
            <script type="text/javascript">
                swal({
                    type: "error",
                    title: "<span id='alert_font'>กรุณาตรวจสอบข้อมูลอีกครั้ง</span>",
                    text: "",
                    html: true
                });
            </script>
            @endif

            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            เข้าสู่ระบบจัดการ
                        </div>
                        <div class="modal-body">

                            <!-- <input type="text" class="form-control" name="name" value=""> -->
                            <form class="form-horizontal" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="username" class="col-md-4 control-label">ชื่อผู้ใช้งาน</label>
                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}"> @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong style="color: red;">กรุณากรอกข้อมูล</strong>
                                        </span> @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-4 control-label">รหัสผ่าน</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}"> @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong style="color: red;">กรุณากรอกข้อมูล</strong>
                                        </span> @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4 text-right">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-btn fa-sign-in"></i> เข้าสู่ระบบ
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div id="fullpage">
                <div class="section">
                    <!-- <div class="col-md-10 col-md-offset-1"> -->
                    <!-- <h1>One</h1> -->
                    <img src="{{url('images/sunflower-1213754_1920.jpg')}}" style="opacity: 0.8;" class="img-responsive">
                    <!-- </div> -->
                </div>
                <div class="section">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-12">
                            <span style="font-size: 60px;">
                            รวดเร็ว 3 ขั้นตอน
                            </span>
                            <br><br><br>
                        </div>
                        <div class="col-md-offset-1 col-md-2 col-sm-2">
                            <img src="images/icons/online-shop.png" class="img-responsive" alt="" />
                            <br>
                            <span style="font-size: 22px;">สั่งสินค้าผ่านเว็บไซต์</span>
                        </div>
                        <div class="col-md-offset-2 col-md-2 col-sm-2">
                            <img src="images/icons/credit-card.png" class="img-responsive" alt="" />
                            <br>
                            <span style="font-size: 22px;">ชำระสินค้า</span>
                        </div>
                        <div class="col-md-offset-2 col-md-2 col-sm-2">
                            <img src="images/icons/delivery-truck.png" class="img-responsive" alt="" />
                            <br>
                            <span style="font-size: 22px;">ส่งตรงถึงบ้าน</span>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="col-md-12">
                            <span style="font-size: 60px;">
                            เราได้มองหาไอเดียให้ทุกคน
                            <span style="display: block; line-height: 120%;">
                              สามารถปลูกผักกินเองได้
                            </span>
                            </span>
                            <!-- <br> -->
                            <span style="font-size: 32px; display: block; line-height: 150%;">
                              ไม่ต้องกังวลเรื่องพื้นที่อีกต่อไป สะดวกเรียบง่าย ใส่เมล็ดแล้วรอกินได้เลย!
                            </span>
                        </div>
                        <div class="col-md-12">
                            <hr size="1">
                        </div>
                        <div class="col-md-offset-1 col-md-2">
                            <img src="images/icons/house.png" class="img-responsive" alt="" />
                            <br>
                            <span style="font-size: 22px;">ปลูกกินได้เอง</span>
                        </div>
                        <div class="col-md-offset-2 col-md-2">
                            <img src="images/icons/calendar.png" class="img-responsive" alt="" />
                            <br>
                            <span style="font-size: 22px;">เพียงแค่รอ</span>
                        </div>
                        <div class="col-md-offset-2 col-md-2">
                            <img src="images/icons/harvest.png" class="img-responsive" alt="" />
                            <br>
                            <span style="font-size: 22px;">เก็บผลผลิต</span>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="col-md-10 col-md-offset-1">
                        <span style="font-size: 60px;">ติดต่อเรา.</span>
                    </div>
                    <div class="col-md-offset-2 col-md-2">
                        <img src="images/icons/telemarketer.png" class="img-responsive" alt="" />
                        <!-- <br> -->
                    </div>
                    <div class="col-md-5">
                      <span style="font-size: 60px; line-height: 120%;">SUNNY</span><span style="font-size: 32px;">( Sprouting Machine )</span>
                    </div>
                    <div class="col-md-offset-1 col-md-4">
                      <span style="font-size: 32px; display: block; line-height: 120%; color: blue;">apiruk326@gmail.com</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
