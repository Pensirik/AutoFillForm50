<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Pensiri Kusalaporn</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
</head>
<body>
            <div class="container">
                    <form action="generate.php" method="POST">
                        <h1>หนังสือรับรองการหักภาษี ณ ที่ จ่าย</h1>
                        <p>ตามมาตรา 50 ทวิแห่งประมวลราษฎากร</p>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <input type="text" name="book_no" class="form-control" placeholder="เล่มที่" >
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="run_no" class="form-control" placeholder="เลขที่" >
                            </div>
                        </div>
                        <fieldset>
                        <legend>ข้อมูลผู้เสียภาษี ตอนที่ 1 :</legend>

                              <div class="form-group row">
                                    <div class="col-lg-6">ผู้มีหน้าที่หักภาษีณ ที่จ่าย : -
                                        <input type="text" name="name1" class="form-control" placeholder="ชื่อ" >
                                    </div>
                                    <div class="col-lg-6">เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*
                                        <input type="text" name="id1" class="form-control"  >
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <div class="col-lg-6">ที่อยู่
                                        <input type="text" name="add1" class="form-control" placeholder="ที่อยู่" >
                                    </div>

                                    <div class="col-lg-6">
                                        เลขประจำตัวผู้เสียภาษีอากร
                                        <input type="text" name="tin1" class="form-control"  >
                                    </div>
                              </div>
                              <hr/>
                              <legend>ข้อมูลผู้เสียภาษี ตอนที่ 2 :</legend>

                              <div class="form-group row">
                                    <div class="col-lg-6">ผู้มีหน้าที่หักภาษีณ ที่จ่าย : -
                                        <input type="text" name="name2" class="form-control" placeholder="ชื่อ" >
                                    </div>
                                    <div class="col-lg-6">เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)*
                                        <input type="text" name="id1_2" class="form-control"  >
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <div class="col-lg-6">ที่อยู่
                                        <input type="text" name="add2" class="form-control" placeholder="ที่อยู่" >
                                    </div>

                                    <div class="col-lg-6">
                                        เลขประจำตัวผู้เสียภาษีอากร
                                        <input type="text" name="tin1_2" class="form-control"  >
                                    </div>
                              </div>
                              <div class="form-group row">      

                                    <div class="col-lg-6">ลำดับที่
                                        <input type="text" name="item" class="form-control"  >
                                        (ให้สามารถอ้างอิงหรือสอบยันกันได้ระหว่างลำดับที่ตาม หนังสือรับรองฯ กับแบบยื่นรายการภาษีหักที่จ่าย)
                                    </div>

                                    <div class="col-lg-6">
                                    <table>
                                    <tr>
                                    <tb >     
                                      ในแบบ   <br/>                                 
                                        <input type="checkbox" id="" name="chk1"  class="m-1" value="Yes">
                                        <label> (1) ภ.ง.ด.1ก</label>
                                        <input type="checkbox" id="" name="chk2"  class="m-1" value="Yes" >
                                        <label> (2) ภ.ง.ด.1ก พิเศษ</label>
                                        <input type="checkbox" id="" name="chk3"  class="m-1" value="Yes" >
                                        <label> (3) ภ.ง.ด.2</label>
                                        <input type="checkbox" id="" name="chk4"  class="m-1"  value="Yes">
                                        <label> (4) ภ.ง.ด.3</label>
                                        <input type="checkbox" id="" name="chk5"  class="m-1" value="Yes" >
                                        <label> (5) ภ.ง.ด.2ก</label>
                                        <input type="checkbox" id="" name="chk6"  class="m-1"  value="Yes">
                                        <label> (6) ภ.ง.ด.3ก</label>
                                        <input type="checkbox" id="" name="chk7"  class="m-1"  value="Yes">
                                        <label> (7) ภ.ง.ด.53</label>
                                    </tb>
                                    </tr>
                                    </table>
                                    </div>
                              </div>
                              <hr/>
                           
                              <legend> ประเภทเงินได้เพิงประเมินที่จ่าย :</legend>
                                 <table class="table table-bordered">
                                    <thead>
                                    <tr class="text-center">
                                        <th width="40%">ประเภทเงินได้เพิงประเมินที่จ่าย</th>
                                        <th width="20%">วัน เดือน หรือปีภาษีที่จ่าย</th>
                                        <th width="20%">จำนวนเงินที่จ่าย</th>
                                        <th width="20%">ภาษีที่หักและนำส่งไว้</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1. เงินเดืออน ค่าจ่าง เบื้ยเลี้ยง โบนัส ฯลฯ ตามมาตรา 40 (1)</td>
                                        <td><input type="text" name="date1" class="form-control"  ></td>
                                        <td><input type="text" name="pay1_0" class="form-control" value="" ></td>
                                        <td><input type="text" name="tax1_0" class="form-control"  value=""></td>
                                    </tr>
                                    <tr>
                                        <td>2. ค่าธรรมเนียม ค่านายหน้า ฯลฯ ตามมาตรา 40 (2)</td>
                                        <td><input type="text" name="date2" class="form-control"  ></td>
                                        <td><input type="text" name="pay1_1" class="form-control"  ></td>
                                        <td><input type="text" name="tax1_1" class="form-control"  ></td>
                                    </tr>
                                    <tr>
                                        <td>3. คาแห่งลิขสิทธิ์ ฯลฯ ตามมาตรา 40 (3)</td>
                                        <td><input type="text" name="date3" class="form-control"  ></td>
                                        <td><input type="text" name="pay1_2" class="form-control"  ></td>
                                        <td><input type="text" name="tax1_2" class="form-control"  ></td>
                                    </tr>
                                    <tr>
                                        <td>4 . (ก) ดอกเบี้ย ฯลฯ ตามมาตรา 40 (4) (ก)</td>
                                        <td><input type="text" name="date4" class="form-control"  ></td>
                                        <td><input type="text" name="pay1_3" class="form-control"  ></td>
                                        <td><input type="text" name="tax1_3" class="form-control"  ></td>
                                    </tr>
                                    <tr>
                                        <td>4. (ข) เงินปันผล เงินส่วนแบ่งกำไร ฯลฯ ตามมาตรา 40 (4) (ข) <br/>
                                         (1) กรณีผู้ได้รับเงินปันผลได้รับเครดิตภาษี โดยจ่ายจาก
                                            กำไรสุทธิของกิจการที่ต้องเสียภาษีเงินได้นิติบุคคลในอัตราดังนี้ <br/>
                                          
                                            </td>
                                        <td colspan="3"></td>

                                    </tr>
                                    <tr>
                                        <td>(1.1) อัตราร้อยละ 30 ของกำไรสุทธิ</td>
                                        <td><input type="text" name="date5" class="form-control"  ></td>
                                        <td><input type="text" name="pay1_4" class="form-control"  ></td>
                                        <td><input type="text" name="tax1_4" class="form-control"  ></td>
                                    </tr>
                                    <tr>
                                        <td>(1.2) อัตราร้อยละ 25 ของกำไรสุทธิ</td>
                                        <td><input type="text" name="date6" class="form-control"  ></td>
                                        <td><input type="text" name="pay1_5" class="form-control"  ></td>
                                        <td><input type="text" name="tax1_5" class="form-control"  ></td>
                                    </tr>
                                    <tr>
                                        <td>(1.3) อัตราร้อยละ 30 ของกำไรสุทธิ</td>
                                        <td><input type="text" name="date7" class="form-control"  ></td>
                                        <td><input type="text" name="pay1_6" class="form-control"  ></td>
                                        <td><input type="text" name="tax1_6" class="form-control"  ></td>
                                    </tr>
                                    <tr>
                                        <td>
                                         <div class="form-group row"> 
                                            <label class="col-sm-4 col-form-label">(1.4) อัตราอื่นๆ (ระบุ)</label>
                                            <div class="col-sm-4">
                                            <input type="text" name="rate1"  class="form-control" >
                                            </div>
                                            <label class="col-sm-4 col-form-label">ของกำไรสุทธิ</label>
                                        </div>
                                        <td><input type="text" name="date8" class="form-control"   ></td>
                                        <td><input type="text" name="pay1_7" class="form-control"   ></td>
                                        <td><input type="text" name="tax1_7" class="form-control"   ></td>
                                    </tr>     
                                     <tr>
                                        <td>(2) กรณีผู้ได้รับเงินปันผลไม่ได้รับเครดิตภาษี เนื่องจากจ่ายจาก <br/>
                                         (2.1) กำไรสุทธิของกิจการที่ได้ รับยกเว้นภาษี เงินได้ นิติบุคคล <br/>
                                        </td>
                                        <td><input type="text" name="date9" class="form-control"   ></td>
                                        <td><input type="text" name="pay1_8" class="form-control"   ></td>
                                        <td><input type="text" name="tax1_8" class="form-control"   ></td>
                                    </tr>     
                                    <tr>
                                        <td>(2.2) เงินปันผลหรือเงินส่วนแบ่งของกำไรที่ได้รับยกเว้นไม่ต้องนำมาร่วมคำนวณเป็นรายได้เพื่ออเสียภาษีเงินได้ นิติบุคคล
                                        </td>
                                        <td><input type="text" name="date10" class="form-control"   ></td>
                                        <td><input type="text" name="pay1_9" class="form-control"   ></td>
                                        <td><input type="text" name="tax1_9" class="form-control"   ></td>
                                    </tr>    
                                    <tr>
                                        <td>(2.3) กำไรสุทธิส่วนที่ได้หักผลขาดทุนสุทธิยกมาไม่เกิน 5 ปี ก่อนรอบระยะเวลาบัญชี ปีปัจจุบัน
                                        </td>
                                        <td><input type="text" name="date11" class="form-control"   ></td>
                                        <td><input type="text" name="pay1_10" class="form-control"   ></td>
                                        <td><input type="text" name="tax1_10" class="form-control"   ></td>
                                    </tr> 
                                    <tr>
                                        <td>(2.4) กำไรที่รับรู้ทางบัญชี โดยวิธิส่วนได้ เสีย (equity method)
                                        </td>
                                        <td><input type="text" name="date12" class="form-control"   ></td>
                                        <td><input type="text" name="pay1_11" class="form-control"   ></td>
                                        <td><input type="text" name="tax1_11" class="form-control"   ></td>
                                    </tr> 
                                    <tr>
                                        <td>
                                        <div class="form-group row"> 
                                            <label class="col-sm-4 col-form-label"> (2.5) อื่นๆ (ระบุ)</label>
                                            <div class="col-sm-4">
                                            <input type="text" name="spec1" class="form-control" >
                                            </div>
                                            <label class="col-sm-4 col-form-label">ของกำไรสุทธิ</label>
                                        </div>
                                        </td>
                                       <td><input type="text" name="date13" class="form-control"   ></td>
                                        <td><input type="text" name="pay1_12" class="form-control"   ></td>
                                        <td><input type="text" name="tax1_12" class="form-control"   ></td>
                                    </tr>      
                                    <tr>
                                        <td>5. การจ่ายเงินได้ที่ต้องหักภาษี ณ ที่ จ่าย ตามคำสั่งกรมสรรพากรที่ออกตามมาตรา 3 เตรส เช่น รางวัล ส่วนลดหรือประโยชน์ใดๆ เนื่องจากการส่งเสริมการขายรางวัล
ในการประกวดการแข่งขัน การชิงโชค ค่าแสดงของนักแสดงสาธารณะ ค่าจ่างทำของค่าโฆษณา ค่าเช่า ค่าขนส่ง ค่าบริการ คาเบื่ยประกันวินาศภัย ฯลฯ </td>
                                        <td><input type="text" name="date14_0" class="form-control"   ></td>
                                        <td><input type="text" name="pay1_13_0" class="form-control"   ></td>
                                        <td><input type="text" name="tax1_13_0" class="form-control"   ></td>
                                    </tr>  
                                    <tr>
                                        <td>
                                        <div class="form-group row"> 
                                            <label class="col-sm-4 col-form-label">  6. อื่นๆ (ระบุ)</label>
                                            <div class="col-sm-4">
                                            <input type="text" name="spec3" class="form-control" >
                                            </div>
                                            <label class="col-sm-4 col-form-label">ของกำไรสุทธิ</label>
                                        </div>
                                       </td>
                                        <td><input type="text" name="date14_1" class="form-control"   ></td>
                                        <td><input type="text" name="pay1_13_1" class="form-control"   ></td>
                                        <td><input type="text" name="tax1_13_1" class="form-control"   ></td>
                                    </tr> 
                                     <tr>
                                        <td colspan="2">รวมเงินที่จ่ายและภาษีที่หักนำส่ง</td>
                                        <td><input type="text" name="pay1_14" class="form-control"   ></td>
                                        <td><input type="text" name="tax1_14" class="form-control"   ></td>
                                    </tr>  
                                    <tr>
                                        <td >รวมเงินภาษีที่หักนำส่ง (ตัวอักษร)</td>
                                        <td colspan="3"><input type="text" name="total" class="form-control"   ></td>
                                    </tr>    
                                    <tr>
                                        <td colspan ="4">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"> เงินที่จ่ายเข้า กบข./กสจ./กองทุนสงเคราะห์ครูโรงเรียนเอกชน</label>
                                            <div class="col-sm-2">
                                            <input type="text" name="text1_0_0" class="form-control" >
                                            </div>
                                            <label class="col-sm-1 col-form-label"> บาท</label>

                                      
                                            <label class="col-sm-3 col-form-label"> กองทุนประกันสังคม</label>
                                            <div class="col-sm-2">
                                            <input type="text" name="text1_0_1" class="form-control" >
                                            </div>
                                            <label class="col-sm-1 col-form-label"> บาท</label>

                                            <label class="col-sm-3 col-form-label"> กองทนสำรองเลี้ยงชีพ</label>
                                            <div class="col-sm-2">
                                            <input type="text" name="text1_1_0" class="form-control" >
                                            </div>
                                            <label class="col-sm-2 col-form-label"> บาท</label>
                                        </div>
                                       </td>
                                    </tr>      
                                    <tr>
                                        <td colspan="4">
                                        <div class="form-group row m-2">
                                            <label>ผู้จ่ายเงิน</label>                              
                                            <input type="checkbox"  name="chk8"  class="m-2" value="Yes">
                                            <label> (1) หัก ณ ที่จ่าย</label>
                                            <input type="checkbox"  name="chk9"  class="m-2" value="Yes">
                                            <label> (2) ออกให้ตลอดไป</label>
                                            <input type="checkbox"  name="chk10"  class="m-2" value="Yes">
                                            <label> (3) ออกให้ครั้งเดียว</label>
                                            <input type="checkbox"  name="chk11"  class="m-2" value="Yes">
                                            <label> (4) อื่น ๆ (ระบุ) </label>
                                            <div class="col-sm-2">
                                            <input type="text"  name="spec4" class="form-control">
                                            </div>
                                        </div>
                                        </td>
                                    </tr>     
                                      <tr>
                                        <td colspan ="2" style="width:50%" >
                                        <div><b>คำเตือน</b> ผู้มีหน้าที่ออกหนังสือรับรองการหักภาษีณ ที่จ่ายฝ่าฝืนไม่ปฏิบัติ ตามมาตรา 50 ทวิแหงประมวลรัษฎากรต้องรับโทษทางอาญาตามมาตรา 35 แห่งประมวลรัษฎากร</div>
                                        </td>
                                        <td colspan ="2" style="width:50%" >
                                        <div class="mb-2">ขอรับรองว่าข้อความและตัวเลขดังกล่าวข้างต้นถูกต้องตรงกับความจริงทุกประการ </div>
                                            <div class="form-group row"> 
                                            <label class="col-sm-3 col-form-label"> ลงชื่อ</label>
                                            <div class="col-sm-6">
                                            ....................................
                                            </div>
                                            <label class="col-sm-3 col-form-label"> ผู้จ่ายเงิน</label>
                                            </div>
                                        <div class="form-group row text-center m-auto" > 
                                         <input type="text" name="date_pay"  class="form-control col-sm-3" placeholder="วัน" > 
                                         <input type="text" name="month_pay"  class="form-control col-sm-6" placeholder="เดือน" >
                                         <input type="text" name="year_pay"  class="form-control col-sm-3" placeholder="ปี" ></div>
                                        <div class="mt-2 text-center">(วัน เดือน ปี ที่ออกหนังสือรับรองฯ )</div>
                                        </td>        
                                    </tr>     
                                    <tr>
                                    <td colspan="2" style="width:50%" >หมายเหตุ เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)* หมายถึง </td>
                                    <td colspan="2" style="width:50%" >
                                    <div>1. กรณีบุคคลธรรมดาไทย ให้ใช้เลขประจำตัวประชาชนของกรมการปกครอง</div>
                                    <div>2. กรณีนิติบุคคล ให้ใช้เลขทะเบียนนิติบุคคลของกรมพัฒนาธุรกิจการค้า </div>
                                    <div>3. กรณีอื่นๆ นอกเหนือจาก 1. และ 2. ให้ใช้ เลขประจำตัวผู้เสียภาษีอากร (13 หลัก) ของกรมสรรพากร </div>
                                    </td>
                                    </tr>                                                                        
                                    </tbody>
                                </table>

                        </fieldset>
                       
                              <button type="submit" class="btn btn-block btn-success">Send to PDF</button>
                             
                    </form>
            </div>
                  

      
</body>
</html>

