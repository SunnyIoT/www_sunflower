@extends('layouts.user')
@section('content')

  <div class="col-md-offset-10 col-md-2" style="margin-top: 20px;">
    <select class="form-control" name="" style="font-size: 16px;">
      <option value="0">เมนูอาหารทั้งหมด</option>
      <option value="1">ต้นอ่อนข้าวสาลี</option>
      <option value="2">ต้นอ่อนทานตะวัน</option>
      <option value="3">ต้นอ่อนถั่วลันเตา</option>
      <option value="4">ต้นอ่อนหัวไชเท้า</option>
      <option value="5">ถั่วงอก</option>
    </select>
  </div>

  <div id="one" class="col-md-12" style="margin-top: 20px;">
    <div class="panel panel-info panel-body">
      <span style="font-size: 22px;">ประโยชน์ ต้นอ่อนข้าวสาลี</span><hr>
      <!-- <img src="{{ url('images/food/1.jpg')}}" alt="" style="width: 100%;"><br> -->
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="{{ url('images/food/example_1.jpg')}}" style="width: 250px; height: 200px;" alt="...">
          </a>
        </div>
        <div class="media-body" style="padding-left: 20px;">
          <!-- <h4 class="media-heading">Media heading</h4> -->
          <span style="font-size: 16px;">ช่วยลดความอ้วนเผาผลาญอาหารในร่างกาย</span><br>
          <span style="font-size: 16px;">ช่วยเพิ่มจำนวนเม็ดเลือดแดง</span><br>
          <span style="font-size: 16px;">ช่วยลดความดันเลือด</span><br>
          <span style="font-size: 16px;">ช่วยทำความสะอาดในร่างกายของเรา</span><br>
          <span style="font-size: 16px;">ช่วยให้อาหารย่อยได้ง่ายขึ้น</span><br>
          <span style="font-size: 16px;">ช่วยปรับสมดุลในร่างกาย</span><br>
          <span style="font-size: 16px;">ช่วยให้แผลในกระเพาะอาหารดีขึ้น</span><br>
          <span style="font-size: 16px;">ช่วยระบายท้องได้ดี แก้ปัญหาท้องผูก หรือริดสีดวงทวาร</span><br>
          <span style="font-size: 16px;">ช่วยขับสารพิษที่ตกค้างอยู่ในร่างกาย(detox)</span><br>
          <span style="font-size: 16px;">ช่วยลดความเสี่ยงต่อการเกิดโรคมะเร็งต่างๆ</span><br>
          <span style="font-size: 16px;">ช่วยแก้อาการคันตามผิวหนัง</span><br>
          <span style="font-size: 16px;">ช่วยให้ผมดกดำเป็นธรรมชาติ ไม่หงอกก่อนวัย</span><br>
          <span style="font-size: 16px;">ช่วยต้านความแก่ ทำให้หน้าดูเด็กอ่อนกว่าวัย</span><br>
          <span style="font-size: 16px;">ช่วยชะลอริ้วรอยแห่งวัย ใบหน้าดูเต่งตึงกระชับ</span><br>

        </div>
        <span class="pull-right">เครดิต www.ifit4health.com</span>
      </div>
    </div>
  </div>

  <div id="two" class="col-md-12" style="margin-top: 20px;">
    <div class="panel panel-info panel-body">
      <span style="font-size: 22px;">ประโยชน์ ต้นอ่อนทานตะวัน</span><hr>
      <!-- <img src="{{ url('images/food/1.jpg')}}" alt="" style="width: 100%;"><br> -->
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="{{ url('images/food/example_2.jpg')}}" style="width: 250px; height: 200px;" alt="...">
          </a>
        </div>
        <div class="media-body" style="padding-left: 20px;">
          <!-- <h4 class="media-heading">Media heading</h4> -->
          <span style="font-size: 16px;">ป้องกันโรคมะเร็ง</span><br>
          <span style="font-size: 16px;">ป้องกันโรคเบาหวาน</span><br>
          <span style="font-size: 16px;">ช่วยในการควบคุมน้ำหนัก</span><br>
          <span style="font-size: 16px;">บำรุงเซลล์สมอง</span><br>
          <span style="font-size: 16px;">ป้องกันการเกิดโรคอัลไซเมอร์</span><br>
          <span style="font-size: 16px;">ช่วยในการบำรุงผิวพรรณ บำรุงสายตา</span><br>
          <span style="font-size: 16px;">ชะลอการแก่ชรา</span><br>
          <span style="font-size: 16px;">มีธาตุอาหารที่เหมาะแก่หญิงตั้งครรภ์ เช่น กรดไขมันโอเมก้า 3, 6, 9 แร่ธาตุโฟเลทสูง</span><br>
          <span style="font-size: 16px;">มีวิตามิน บี 1 บี 6 วิตามินอี วิตามินซี และเซเลเนียม</span><br>
          <span style="font-size: 16px;">ขจัดสารพิษตกค้างในปอด</span><br>
          <span style="font-size: 16px;">ป้องกันการติดเชื้อในระบบทางเดินหายใจ</span><br>

        </div>
        <span class="pull-right">เครดิต www.1.bp.blogspot.com</span>
      </div>
    </div>
  </div>

  <div id="two_1" class="col-md-12" style="margin-top: 20px;">
    <div class="panel panel-info panel-body">
      <span style="font-size: 22px;">เมนู ต้นอ่อนทานตะวัน</span><hr>
      <!-- <img src="{{ url('images/food/1.jpg')}}" alt="" style="width: 100%;"><br> -->
      <div class="media">
        <div class="media-left">
          <span style="font-size: 16px;">ต้นอ่อนทานตะวันอบชีส</span>
          <img class="media-object" src="{{ url('images/food/2.jpg')}}" style="width: 250px; height: 200px;" alt="...">
          <span class="pull-right">เครดิต www.cooking.kapook.com</span>
        </div>
        <div class="media-body" style="padding-left: 5px;">
          <!-- <h4 class="media-heading">Media heading</h4> -->
          <div class="col-md-4">
            <span style="font-size: 16px;">แกงส้มต้นอ่อนทานตะวัน</span>
            <img class="media-object" src="{{ url('images/food/3.jpg')}}" style="width: 250px; height: 200px;" alt="...">
            <span class="pull-right">เครดิต www.cooking.kapook.com</span>
          </div>
          <div class="col-md-4">
            <span style="font-size: 16px;">ต้นอ่อนทานตะวันทอดกรอบราดน้ำยำ</span>
            <img class="media-object" src="{{ url('images/food/4.jpg')}}" style="width: 250px; height: 200px;" alt="...">
            <span class="pull-right">เครดิต www.cooking.kapook.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="three" class="col-md-12" style="margin-top: 20px;">
    <div class="panel panel-info panel-body">
      <span style="font-size: 22px;">ประโยชน์ ต้นอ่อนถั่วลันเตา (โตวเหมี่ยว)</span><hr>
      <!-- <img src="{{ url('images/food/1.jpg')}}" alt="" style="width: 100%;"><br> -->
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="{{ url('images/food/example_3.jpg')}}" style="width: 250px; height: 200px;" alt="...">
          </a>
        </div>
        <div class="media-body" style="padding-left: 20px;">
          <!-- <h4 class="media-heading">Media heading</h4> -->
          <span style="font-size: 16px;">มีวิตามินบี และซี ธาตุเหล็ก แคลเซียม ฟอสฟอรัส</span><br>
          <span style="font-size: 16px;">มีสารเซเลตินที่ช่วยในการทำงานของระบบประสาทและสมอง</span><br>
          <span style="font-size: 16px;">ช่วยบำรุงสายตา ตับ หัวใจ</span><br>
          <span style="font-size: 16px;">มีใยอาหารมาก ซึ่งช่วยในเรื่องระบบขับถ่าย ป้องกันมะเร้งลำไส้และกระเพาะอาหาร</span><br>

        </div>
        <span class="pull-right">เครดิต www.3.bp.blogspot.com</span>
      </div>
    </div>
  </div>

  <div id="three_1" class="col-md-12" style="margin-top: 20px;">
    <div class="panel panel-info panel-body">
      <span style="font-size: 22px;">เมนู ต้นอ่อนถั่วลันเตา (โตวเหมี่ยว)</span><hr>
      <!-- <img src="{{ url('images/food/1.jpg')}}" alt="" style="width: 100%;"><br> -->
      <div class="media">
        <div class="media-left">
          <span style="font-size: 16px;">สลัดโตวเหมี่ยวราดซอลโชยุ</span>
          <img class="media-object" src="{{ url('images/food/6.jpg')}}" style="width: 250px; height: 200px;" alt="...">
          <span class="pull-right">เครดิต www.pantip.com</span>
        </div>
        <div class="media-body" style="padding-left: 5px;">
          <!-- <h4 class="media-heading">Media heading</h4> -->
          <div class="col-md-4">
            <span style="font-size: 16px;">ต้มจืดโตวเหมี่ยว</span>
            <img class="media-object" src="{{ url('images/food/5.jpg')}}" style="width: 250px; height: 200px;" alt="...">
            <span class="pull-right">เครดิต www.knorr.co.th</span>
          </div>
          <div class="col-md-4">
            <span style="font-size: 16px;">ยำทะเลโตวเหมี่ยว</span>
            <img class="media-object" src="{{ url('images/food/7.jpg')}}" style="width: 250px; height: 200px;" alt="...">
            <span class="pull-right">เครดิต www.pantip.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="four" class="col-md-12" style="margin-top: 20px;">
    <div class="panel panel-info panel-body">
      <span style="font-size: 22px;">ประโยชน์ ต้นอ่อนหัวไชเท้า (ไควาเระ)</span><hr>
      <!-- <img src="{{ url('images/food/1.jpg')}}" alt="" style="width: 100%;"><br> -->
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="{{ url('images/food/example_4.jpg')}}" style="width: 250px; height: 200px;" alt="...">
          </a>
        </div>
        <div class="media-body" style="padding-left: 20px;">
          <!-- <h4 class="media-heading">Media heading</h4> -->
          <span style="font-size: 16px;">มีสารเควอร์เซทิน (quercetin) และ เคมเฟอรอล ไกลโคไซด์ ( kaempferol glycosides) ซึ่งเป็นสารต้านอนุมูลอิสระ</span><br>

        </div>
        <span class="pull-right">เครดิต www.organicfarmthailand.com</span>
      </div>
    </div>
  </div>

  <div id="four_1" class="col-md-12" style="margin-top: 20px;">
    <div class="panel panel-info panel-body">
      <span style="font-size: 22px;">เมนู ต้นอ่อนหัวไชเท้า (ไควาเระ)</span><hr>
      <!-- <img src="{{ url('images/food/1.jpg')}}" alt="" style="width: 100%;"><br> -->
      <div class="media">
        <div class="media-left">
          <span style="font-size: 16px;">ไควาเระผัดน้ำมันหอย</span>
          <img class="media-object" src="{{ url('images/food/8.jpg')}}" style="width: 250px; height: 200px;" alt="...">
          <span class="pull-right">เครดิต www.foodtravel.tv</span>
        </div>
        <div class="media-body" style="padding-left: 5px;">
          <!-- <h4 class="media-heading">Media heading</h4> -->
          <div class="col-md-4">
            <span style="font-size: 16px;">ไควาเระผัดเห็ดหอมใส่กุ้ง</span>
            <img class="media-object" src="{{ url('images/food/9.jpg')}}" style="width: 250px; height: 200px;" alt="...">
            <span class="pull-right">เครดิต www.foodtravel.tv</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="five" class="col-md-12" style="margin-top: 20px;">
    <div class="panel panel-info panel-body">
      <span style="font-size: 22px;">ประโยชน์ ถั่วงอก</span><hr>
      <!-- <img src="{{ url('images/food/1.jpg')}}" alt="" style="width: 100%;"><br> -->
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="{{ url('images/food/example_5.jpg')}}" style="width: 250px; height: 200px;" alt="...">
          </a>
        </div>
        <div class="media-body" style="padding-left: 20px;">
          <!-- <h4 class="media-heading">Media heading</h4> -->
          <span style="font-size: 16px;">ทำให้ผิวชุ่มชื้น ผิวนุ่ม เปล่งปลั่งดูมีน้ำมีนวล (วิตามินอี)</span><br>
          <span style="font-size: 16px;">ช่วยบำรุงประสาทและสมอง รวมทั้งช่วยในการทำงานของสมอง (เลซิทิน-Lecithin)</span><br>
          <span style="font-size: 16px;">เพิ่มการไหลเวียนของเลือดในร่างกาย</span><br>
          <span style="font-size: 16px;">ลดความเสี่ยงของโรคหลอดเลือดสมองและการเกิดอาการหัวใจวายเฉียบพลัน</span><br>
          <span style="font-size: 16px;">ช่วยลดระดับเอสโตรเจนในร่างกาย</span><br>

        </div>
        <span class="pull-right">เครดิต www.do.lnwfile.com</span>
      </div>
    </div>
  </div>

  <div id="five_1" class="col-md-12" style="margin-top: 20px;">
    <div class="panel panel-info panel-body">
      <span style="font-size: 22px;">เมนู ถั่วงอก</span><hr>
      <!-- <img src="{{ url('images/food/1.jpg')}}" alt="" style="width: 100%;"><br> -->
      <div class="media">
        <div class="media-left">
          <span style="font-size: 16px;">ผัดไทย</span>
          <img class="media-object" src="{{ url('images/food/10.jpg')}}" style="width: 250px; height: 200px;" alt="...">
          <span class="pull-right">เครดิต www.bkkflavour.com</span>
        </div>
        <div class="media-body" style="padding-left: 5px;">
          <!-- <h4 class="media-heading">Media heading</h4> -->
          <div class="col-md-4">
            <span style="font-size: 16px;">ตำถั่วงอก</span>
            <img class="media-object" src="{{ url('images/food/11.jpg')}}" style="width: 250px; height: 200px;" alt="...">
            <span class="pull-right">เครดิต www.horapa.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
