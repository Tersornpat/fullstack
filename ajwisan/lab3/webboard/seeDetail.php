<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding: 0;margin: 0;">
    <?php
    $id = $_GET["id"];

    $fs = fopen("$i.txt","r");
    $e = fpassthru($fs);
    fclose($fs);
    echo $id;
    ?>
</body>
</html>
<!-- 
    $id = $_GET["id"];
    $filename = $id.".txt";

    $line = file($filename);
    $last =sizeof($line)-1;

    for ($i=0; $i < last-1; $i++) { 
        $ptext = $lines[$i];
        echo $ptext,"<br>";
    }

-->

    <div class="col-md-6 right_left_0px" style="z-index: -1;">
                        <div class="panel-layout row">
                            <div class="panel-box col-xs-3 bg-blue">
                                <div class="panel-content">
                                    <h4>
                                        <i class="fa fa-lg fa-train" style="color:brown;"></i>
                                    </h4>
                                    <b style="color: gray;" class="font-left-box">เลขขบวน</b><b style="color:brown;font-size: 30px;"><br>368</b>
                                </div>

                                <div style="text-align:center !important;">
                                    <a class="btn btn-warning" style="color: black;" target="_blank" href="https://ttsview.railway.co.th/searchresult.php?trainno=368"><b>ติดตาม</b></a>
                                </div>
                            </div>
                            <div class="panel-box col-xs-9" style="cursor: pointer;" onclick="getSearch(3107,1001,368)">
                                <div class="panel-content bg-gray" style="padding-left: 0px !important;padding-right: 0px !important;">
                                    <div class="">
                                        <b style="color: brown;" class="font-head-box">รถธรรมดา</b>
                                        <b style="color: brown;" class="font-head-box">ชุมทางฉะเชิงเทรา-กรุงเทพ</b>
                                    </div>
                                </div>
                                <div class="panel-content bg-white">
                                    <div class="row">
                                        <div class="col-md-1 col-xl-1 col-sm-1 col-xs-1 right_left_0px" style="padding: 0px 0px !important;">
                                            <div>
                                                <button class="btn btn-round right_left_0px" style="background-color: gray;height: 25px !important;min-width: 25px !important;">
                                                </button>
                                            </div>
                                            <div>
                                                <i class="glyph-icon icon-long-arrow-down"></i>
                                            </div>
                                            <div>
                                                <button class="btn btn-round btn-success right_left_0px" style="height: 25px !important;min-width: 25px !important;">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-11 col-xl-11 col-sm-11 col-xs-11 right_left_0px" style="padding: 0px 0px !important;">
                                            <div class="col-md-7 col-xl-7 col-sm-7 col-xs-7">
                                                <b style="color: black;" class="font-time-box">พระจอมเกล้า</b>
                                            </div>
                                            <div class="col-md-2 col-xl-2 col-sm-2 col-xs-2">
                                                <span style="color: black;" class="font-time-box">ออก</span>
                                            </div>
                                            <div class="col-md-3 col-xl-3 col-sm-3 col-xs-3">
                                                
                                                <span style="color: brown;" class="font-time-box">13:18</span>
                                            </div>
                                            <br><hr>
                                            <div class="col-md-7 col-xl-7 col-sm-7 col-xs-7">
                                                <b style="color: black;" class="font-time-box">กรุงเทพ</b>
                                            </div>
                                            <div class="col-md-2 col-xl-2 col-sm-2 col-xs-2">
                                                <span style="color: black;" class="font-time-box">ถึง</span>
                                            </div>
                                            <div class="col-md-3 col-xl-3 col-sm-3 col-xs-3">
                                                
                                                <span style="color: brown;" class="font-time-box">14:10</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="_remark">เปิดให้บริการตามปกติ.</span>
                                </div>
                            </div>
                        </div>
                    </div>
-->