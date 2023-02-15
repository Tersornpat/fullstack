<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <center>
    <form action="index.php" method="post">
        <button type="submit">HOMEPAGE(To reset)</button>
    </form>
    <form method="post" action="cal.php">
        <?php
            $amount = $_POST["amount"];
            $othbill = $_POST["othbill"]; 
            $fhdbill = $_POST["fhdbill"];
            $ohdbill = $_POST["ohdbill"];

            $sum = ($othbill*1000)+($fhdbill*500)+($ohdbill*100);
            echo "<h1>Amount Before -> <font color='Blue'>".$sum."</font></h1>";

            $tmpths = $tmpfhd = $tmpohd =$a = $b = $c = 0;
            
            if($amount%100 == 0 && $amount<=$sum && $amount>0){
                if($amount>=1000){
                    $tmpths = floor($amount/1000);
                    $a = $tmpths;
                    if($othbill <= $tmpths){
                        $tmpths -= $othbill;
                        $a = $othbill;

                        $tmpths = $othbill;
                        $othbill = 0;
                    }else{
                        $othbill -= $tmpths;
                    }
                }
                if ($amount>= 500){
                    $tmpfhd = floor(($amount-($tmpths*1000))/500);
                    $b = $tmpfhd;
                    if($fhdbill <= $tmpfhd){
                        $tmpfhd -= $fhdbill;
                        $b = $fhdbill;

                        $tmpfhd = $fhdbill;
                        $fhdbill = 0;
                    }else{
                        $fhdbill -= $tmpfhd;
                    }
                }
                if ($amount>= 100) {
                    $tmpohd = floor(($amount-((($tmpths*1000) + ($tmpfhd*500))))/100);
                    $ohdbill -= $tmpohd;
                    $c = $tmpohd;
                }

            }else{
                echo "<h1><font color='RED'> INVALID VALUE</font></h>";
            }
            echo "<h4>Withdraw amount: $amount baht</h4>";
            echo "<h4>One thousand bill : $a bills</h4>";
            echo "<h4>Five hundred bill : $b bills</h4>";
            echo "<h4>One hundred bill : $c bills</h4>";

            $sum = ($othbill*1000)+($fhdbill*500)+($ohdbill*100);
            echo "<h1>Amount Current -> <font color='Red'>".$sum."</font></h1>";
            echo "<input type='hidden' name='othbill' value='$othbill'>";
            echo "<input type='hidden' name='fhdbill' value='$fhdbill'>";
            echo "<input type='hidden' name='ohdbill' value='$ohdbill'>";       
        ?>
        <center>
            <h3>Enter Amount</h3>
            <input type="number" required name="amount">
            <button type="submit"> submit </button>
        </center>
    </form>
    </center>
</body>
</html>