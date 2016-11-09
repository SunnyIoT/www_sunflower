@extends('layouts.user')
@section('content')

  <div class="col-lg-8" style="margin-top: 20px;">
    <div class="col-md-12" style="margin: 0; padding: 0; margin-bottom: 20px;">
      <button type="button" class="btn btn-info pull-right" id="btnShowAdvanced">ปรับแต่งขั้นสูง <i id="iconBtnAdvanced" class="fa fa-gear fa-lg"></i></button>
    </div>
    <div class="col-md-12" id="customAdvanced" style="display: none; margin: 0; padding: 0;">
      <div class="panel panel-success">
          <div class="panel-heading">
              <i class="fa fa-bar-chart-o fa-lg"></i> <span style="font-size: 16px;">ข้อมูลเซ็นเซอร์ตัวเครื่อง</span>
              <div class="pull-right">

              </div>
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- <div class="col-md-12"> -->
              <div class="col-md-12 text-center">
                <div class="col-md-6">
                  <img src="{{ url('images/icons/snowflake.png') }}" >
                  <div id="text_temp" style="font-size: 18px;"></div>
                </div>
                <div class="col-md-6">
                  <img src="{{ url('images/icons/raindrop.png') }}" >
                  <div id="text_humid" style="font-size: 18px;"></div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
                <canvas id="chart_temp"></canvas>
              </div>
            <!-- </div> -->
          </div>
          <!-- /.panel-body -->
      </div>

      <div class="panel panel-info">
          <div class="panel-heading">
              <i class="fa fa-sliders fa-lg"></i> <span style="font-size: 16px;">ตั้งค่าการทำงานตัวเครื่อง</span>
              <div class="pull-right">

              </div>
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <!-- <div class="col-md-12"> -->
              <!-- Setting Temperature -->
              <div class="col-md-12 text-center">
                <!-- <div class="col-md-8"> -->
                  <div id="slider_temp"></div>
                  <br>
                  <span>ตั้งค่าอุณหภูมิ : <span id="current_temp"></span> เซลเซียส</span>
                  <br>
                  <span style="color: green;">(ค่าพื้นฐาน 25 เซลเซียส)</span>
                <!-- </div> -->
                <!-- <div class="col-md-4">
                  <button class="btn btn-success" id="btn_set_temp" style="width: 100%;">บันทึก</button>
                </div> -->
              </div>
              <!-- Setting Height -->
              <div class="col-md-12 text-center">
                <hr>
                <!-- <div class="col-md-12"> -->
                  <div id="slider_height"></div>
                  <br>
                  <span>ตั้งค่าความสูงลำต้น : <span id="current_height"></span> เซนติเมตร</span>
                  <br>
                  <span style="color: green;">(ค่าพื้นฐาน 10 เซนติเมตร)</span>
                <!-- </div> -->
                <!-- <div class="col-md-4">
                  <button class="btn btn-success" id="btn_set_height" style="width: 100%;">บันทึก</button>
                </div> -->
              </div>
              <div class="col-md-12 text-center">
                <hr>
                <!-- <div class="col-md-8"> -->
                  <div id="slider_light"></div>
                  <br>
                  <span>ตั้งค่าการให้แสง : <span id="current_light"></span> ชั่วโมง</span>
                  <br>
                  <span style="color: green;">(ค่าพื้นฐาน 4 ชั่วโมง)</span>
                <!-- </div> -->
                <!-- <div class="col-md-4">
                  <button class="btn btn-success" id="btn_set_light" style="width: 100%;">บันทึก</button>
                </div> -->
              </div>
              <div class="col-md-12 text-center">
                <hr>
                <!-- <div class="col-md-8"> -->
                  <div id="slider_on_watering"></div>
                  <br>
                  <span>ตั้งค่าเวลาแช่น้ำเมล็ด : <span id="current_on_watering"></span> ชั่วโมง</span>
                  <br>
                  <span style="color: green;">(ค่าพื้นฐาน 4 ชั่วโมง)</span>
                <!-- </div> -->
                <!-- <div class="col-md-4">
                  <button class="btn btn-success" id="btn_set_on_water" style="width: 100%;">บันทึก</button>
                </div> -->
              </div>
              <div class="col-md-12 text-center">
                <hr>
                <!-- <div class="col-md-8"> -->
                  <div id="slider_off_watering"></div>
                  <br>
                  <span>ตั้งค่าเวลาหยุดแช่น้ำ : <span id="current_off_watering"></span> ชั่วโมง</span>
                  <br>
                  <span style="color: green;">(ค่าพื้นฐาน 4 ชั่วโมง)</span>
                <!-- </div> -->
                <!-- <div class="col-md-4">
                  <button class="btn btn-success" id="btn_set_off_water" style="width: 100%;">บันทึก</button>
                </div> -->
              </div>
              <div class="col-md-12 text-center">
                <hr>
                <!-- <div class="col-md-8"> -->
                  <div id="slider_watering"></div>
                  <br>
                  <span>ตั้งค่าเวลารดน้ำ : <span id="current_watering"></span> วินาที</span>
                  <br>
                  <span style="color: green;">(ค่าพื้นฐาน 60 วินาที)</span>
                <!-- </div> -->
                <!-- <div class="col-md-4">
                  <button class="btn btn-success" id="btn_set_off_water" style="width: 100%;">บันทึก</button>
                </div> -->
              </div>
              <div class="col-md-12 text-center">
                <hr>
                <button class="btn btn-success" id="btn_save_setting" style="width: 20%;">บันทึก</button>
              </div>
            <!-- </div> -->
          </div>
          <!-- /.panel-body -->
      </div>

    </div>
  </div>
  <!-- /.col-lg-8 -->
  <div class="col-lg-4" style="margin-top: 20px;">
      <div class="panel panel-danger">
          <div class="panel-heading">
              <i class="fa fa-bell fa-lg"></i> <span style="font-size: 16px;">ระบบแจ้งเตือน</span>
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
              <div class="list-group">
                  <a href="#" class="list-group-item">
                      <i class="fa fa-commenting-o"></i> รับข้อมูลล่าสุด
                      <span class="pull-right text-muted small"><em id="last_time"></em>
                      </span>
                  </a>
                  <a href="#" class="list-group-item">
                      <i class="fa fa-envira"></i> ความสูงต้นอ่อน
                      <span class="pull-right text-muted small"><em id="last_height"></em>
                      </span>
                  </a>
                  <a href="#" class="list-group-item">
                      <i class="fa fa-gear"></i> โหมดการทำงาน
                      <span class="pull-right text-muted small"><em id="last_mode"></em>
                      </span>
                  </a>
                  <!-- <a href="#" class="list-group-item">
                      <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                      <span class="pull-right text-muted small"><em>11:13 AM</em>
                      </span>
                  </a>
                  <a href="#" class="list-group-item">
                      <i class="fa fa-warning fa-fw"></i> Server Not Responding
                      <span class="pull-right text-muted small"><em>10:57 AM</em>
                      </span>
                  </a> -->
              </div>
              <!-- /.list-group -->
          </div>
          <!-- /.panel-body -->
      </div>

  </div>
  <!-- /.col-lg-4 -->


  <!-- jQuery -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

  <!-- addSlider -->
  <!-- <script src="Obj.min.js"></script>
  <script src="addSlider.min.js"></script> -->

  <!-- Slider Bar -->
  <script src="nouislider.min.js"></script>

  <!-- <script>
    $(document).ready(funciton() {
      $('#customAdvanced').fadeOut();
    });
  </script> -->

  <!-- NETPIE -->
  <script src="{{ url('microgear.js') }}"></script>
  <script>
    var temp = [];
    var temp_counting         = 0;

    var humid = [];
    var humid_counting        = 0;

    var buffer_set_temp       = 0;
    var buffer_set_height     = 0;
    var buffer_set_light      = 0;
    var buffer_set_on_water   = 0;
    var buffer_set_off_water  = 0;
    var buffer_set_water      = 0;

  	const APPID = "WebApp";
  	const KEY = "fqfDfIlFuUzBJHP";
  	const SECRET = "p8yJ1nK5t2fekr1U9noZ1jzw4";

  	// const ALIAS = "html/14365118";
    const ALIAS = "html_" + (Math.random()*1000000).toFixed(0);

  	var microgear = Microgear.create({
  		key: KEY,
  		secret: SECRET,
  		alias : ALIAS
  	});

  	microgear.on('message',function(topic,msg) {
      console.log(msg);
      var obj = JSON.parse(msg);

      if (obj.Temperature <= 100) {
        temp.push(obj.Temperature);
        temp_counting++;
        if (temp_counting >= 8) {
          temp.shift();
          temp_counting--;
        }
        document.getElementById('text_temp').innerHTML = 'อุณหภูมิ : ' + obj.Temperature + ' เซลเซียส';
      }

      if (obj.Humidity <= 100) {
        humid.push(obj.Humidity);
        humid_counting++;
        if (humid_counting >= 8) {
          humid.shift();
          humid_counting--;
        }
        document.getElementById('text_humid').innerHTML = 'ความชื้นอากาศ : ' + obj.Humidity + ' เปอร์เซ็น';
      }

      document.getElementById('current_temp').innerHTML = Math.round(slider_temp.noUiSlider.get());
      document.getElementById('current_height').innerHTML = Math.round(slider_height.noUiSlider.get());
      document.getElementById('current_light').innerHTML = Math.round(slider_light.noUiSlider.get());
      document.getElementById('current_on_watering').innerHTML = Math.round(slider_on_watering.noUiSlider.get());
      document.getElementById('current_off_watering').innerHTML = Math.round(slider_off_watering.noUiSlider.get());
      document.getElementById('current_watering').innerHTML = Math.round(slider_watering.noUiSlider.get());

      var edit_day = obj.day;
      switch (edit_day) {
        case 1: edit_day = '01'; break;
        case 2: edit_day = '02'; break;
        case 3: edit_day = '03'; break;
        case 4: edit_day = '04'; break;
        case 5: edit_day = '05'; break;
        case 6: edit_day = '06'; break;
        case 7: edit_day = '07'; break;
        case 8: edit_day = '08'; break;
        case 9: edit_day = '09'; break;
      }

      var edit_month = obj.month;
      switch (edit_month) {
        case 1: edit_month = '01'; break;
        case 2: edit_month = '02'; break;
        case 3: edit_month = '03'; break;
        case 4: edit_month = '04'; break;
        case 5: edit_month = '05'; break;
        case 6: edit_month = '06'; break;
        case 7: edit_month = '07'; break;
        case 8: edit_month = '08'; break;
        case 9: edit_month = '09'; break;
      }

      var edit_hour = obj.hour;
      switch (edit_hour) {
        case 0: edit_hour = '00'; break;
        case 1: edit_hour = '01'; break;
        case 2: edit_hour = '02'; break;
        case 3: edit_hour = '03'; break;
        case 4: edit_hour = '04'; break;
        case 5: edit_hour = '05'; break;
        case 6: edit_hour = '06'; break;
        case 7: edit_hour = '07'; break;
        case 8: edit_hour = '08'; break;
        case 9: edit_hour = '09'; break;
      }

      var edit_minute = obj.minute;
      switch (edit_minute) {
        case 0: edit_minute = '00'; break;
        case 1: edit_minute = '01'; break;
        case 2: edit_minute = '02'; break;
        case 3: edit_minute = '03'; break;
        case 4: edit_minute = '04'; break;
        case 5: edit_minute = '05'; break;
        case 6: edit_minute = '06'; break;
        case 7: edit_minute = '07'; break;
        case 8: edit_minute = '08'; break;
        case 9: edit_minute = '09'; break;
      }

      document.getElementById('last_time').innerHTML = edit_day + '/' + edit_month + '/' + obj.year + ' ' + edit_hour + ':' + edit_minute;

      var filter_height = obj.cmdistance;
      var state_filter_height = 0;

      if (filter_height <= 0) {
        filter_height = 0;
      }

      // switch (filter_height) {
      //   case 0: filter_height = '0'; state_filter_height = 1; break;
      //   case 1: filter_height = '1'; state_filter_height = 1; break;
      //   case 2: filter_height = '2'; state_filter_height = 1; break;
      //   case 3: filter_height = '3'; state_filter_height = 1; break;
      //   case 4: filter_height = '4'; state_filter_height = 1; break;
      //   case 5: filter_height = '5'; state_filter_height = 1; break;
      //   case 6: filter_height = '6'; state_filter_height = 1; break;
      //   case 7: filter_height = '7'; state_filter_height = 1; break;
      //   case 8: filter_height = '8'; state_filter_height = 1; break;
      //   case 9: filter_height = '9'; state_filter_height = 1; break;
      //   case 10: filter_height = '10'; state_filter_height = 1; break;
      //   case 11: filter_height = '11'; state_filter_height = 1; break;
      //   case 12: filter_height = '12'; state_filter_height = 1; break;
      //   case 13: filter_height = '13'; state_filter_height = 1; break;
      //   case 14: filter_height = '14'; state_filter_height = 1; break;
      //   case 15: filter_height = '15'; state_filter_height = 1; break;
      // }

      if (filter_height >= 0) {
        document.getElementById('last_height').innerHTML = filter_height + ' เซนติเมตร';
        // state_filter_height = 0;
      }

      var state_mode = obj.mod;
      var text_mode;
      switch(state_mode) {
        case 0: text_mode = 'รอรับคำสั่ง'; break;
        case 1: text_mode = 'แช่เมล็ด'; break;
        case 2: text_mode = 'รดน้ำ'; break;
        case 3: text_mode = 'ให้แสงต้นอ่อน'; break;
        case 4: text_mode = 'พร้อมกิน'; break;
      }
      document.getElementById('last_mode').innerHTML = text_mode;

      update_graph();

  	});

  	microgear.on('connected', function() {
      microgear.subscribe("/gearname/html_" + <?php echo Auth::User()->serial; ?>);
  		microgear.setAlias(ALIAS);
  	});

  	microgear.on('present', function(event) {
  		console.log(event);
  	});

  	microgear.on('absent', function(event) {
  		console.log(event);
  	});

  	microgear.resettoken(function(err) {
  		microgear.connect(APPID);
  	});

    $(document).ready(function() {

        $('#btnShowAdvanced').on('click', function() {
          $('#customAdvanced').fadeToggle();
        });

        $('#btn_save_setting').click(function() {
          buffer_set_temp = Math.round(slider_temp.noUiSlider.get());
          buffer_set_height = Math.round(slider_height.noUiSlider.get());
          buffer_set_light = Math.round(slider_light.noUiSlider.get());
          buffer_set_on_water = Math.round(slider_on_watering.noUiSlider.get());
          buffer_set_off_water = Math.round(slider_off_watering.noUiSlider.get());
          buffer_set_water = Math.round(slider_watering.noUiSlider.get());

          var buffer_send = '{' +
          '"set_temp":' + buffer_set_temp + ',' +
          '"set_height":' + buffer_set_height + ',' +
          '"set_light":' + buffer_set_light + ',' +
          '"set_on_water":' + buffer_set_on_water + ',' +
          '"set_off_water":' + buffer_set_off_water + ',' +
          '"set_water":' + buffer_set_water + '}';

          microgear.chat(<?php echo Auth::User()->serial; ?>, buffer_send);

        });
    });

  </script>

  <!-- Morris Charts JavaScript -->
  <script src="js/Chart.min.js"></script>
  <script>
    var chart_temp = document.getElementById("chart_temp");
    var chart_humid = document.getElementById("chart_humid");

    var update_graph = function() {

      var myLineChart = new Chart(chart_temp, {
          type: 'line',
          data: {
            labels: ["", "", "", "", "", "", ""],
            datasets: [{
              label: "อุณหภูมิ",
              fill: false,
              lineTension: 0.1,
              backgroundColor: "rgba(54, 162, 235, 0.2)",
              borderColor: "rgba(54, 162, 235, 1)",
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: "rgba(54, 162, 235, 0.2)",
              pointBackgroundColor: "#fff",
              pointBorderWidth: 1,
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(54, 162, 235, 0.2)",
              pointHoverBorderColor: "rgba(220,220,220,1)",
              pointHoverBorderWidth: 2,
              pointRadius: 1,
              pointHitRadius: 10,
              data: temp,
              spanGaps: false,
            },{
              label: "ความชื้นอากาศ",
              fill: false,
              lineTension: 0.1,
              backgroundColor: "rgba(5255, 99, 132, 0.2)",
              borderColor: "rgba(255, 99, 132, 1)",
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: "rgba(255, 99, 132, 0.2)",
              pointBackgroundColor: "#fff",
              pointBorderWidth: 1,
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(255, 99, 132, 0.2)",
              pointHoverBorderColor: "rgba(220,220,220,1)",
              pointHoverBorderWidth: 2,
              pointRadius: 1,
              pointHitRadius: 10,
              data: humid,
              spanGaps: false,
            },{
              label: "ค่ามาตราฐานอุณหภูมิ",
              fill: false,
              lineTension: 0.1,
              backgroundColor: "rgba(153, 102, 255, 0.2)",
              borderColor: "rgba(153, 102, 255, 0.2)",
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: "rgba(153, 102, 255, 0.2)",
              pointBackgroundColor: "#fff",
              pointBorderWidth: 1,
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(153, 102, 255, 0.2)",
              pointHoverBorderColor: "rgba(153, 102, 255, 0.2)",
              pointHoverBorderWidth: 2,
              pointRadius: 1,
              pointHitRadius: 10,
              data: [25,25,25,25,25,25,25,25],
              spanGaps: false,
            }]
          },
          options: {

            responsive: true,
            animation : false,
            scales: {
                yAxes: [{
                    display: true,
                    ticks: {
                        beginAtZero: true,
                        max: 100
                    }
                }]
            },
            title:{
                display:true,
            },
            tooltips: {
                mode: 'label'
            }

          }
      });

    }

    // 'rgba(255, 99, 132, 0.2)',
    // 'rgba(54, 162, 235, 0.2)',
    // 'rgba(255, 206, 86, 0.2)',
    // 'rgba(75, 192, 192, 0.2)',
    // 'rgba(153, 102, 255, 0.2)',
    // 'rgba(255, 159, 64, 0.2)'

  </script>

  <!-- Custom Theme JavaScript -->
  <script src="dist/js/sb-admin-2.js"></script>

  <script>
    var slider_temp = document.getElementById('slider_temp');
    noUiSlider.create(slider_temp, {
      start: [25],
      // connect: true,
      range: {
        'min': 23,
        'max': 30
      }
    });

    var slider_height = document.getElementById('slider_height');
    noUiSlider.create(slider_height, {
      start: [10],
      // connect: true,
      range: {
        'min': 5,
        'max': 15
      }
    });

    var slider_light = document.getElementById('slider_light');
    noUiSlider.create(slider_light, {
      start: [4],
      // connect: true,
      range: {
        'min': 1,
        'max': 10
      }
    });

    var slider_on_watering = document.getElementById('slider_on_watering');
    noUiSlider.create(slider_on_watering, { // turn off watering
      start: [4],
      // connect: true,
      range: {
        'min': 1, // hour
        'max': 10
      }
    });

    var slider_off_watering = document.getElementById('slider_off_watering');
    noUiSlider.create(slider_off_watering, { // turn off watering
      start: [4],
      // connect: true,
      range: {
        'min': 1, // second
        'max': 240
      }
    });

    var slider_watering = document.getElementById('slider_watering');
    noUiSlider.create(slider_watering, { // turn off watering
      start: [60],
      // connect: true,
      range: {
        'min': 1, // second
        'max': 240
      }
    });

  </script>
@endsection
