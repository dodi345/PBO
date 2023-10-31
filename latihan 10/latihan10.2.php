<!--!=factory pattern code a -->
<?php
class creditCard{
    public function getStatus(){
        // mengecek status koneksi server
        echo "Checking Credit Card server ... \n";
    }

    public function SendIssue(){
        echo "Issue Sent .. \n";
    }
}

class Dana {
    public function getStatus(){
        echo "Checking Dana Server ... \n";
    }
    public function SendIssue(){
        echo "Issue Sent .. \n";
    }
}

class Gopay {
    public function getStatus(){
        echo "Checking Gopay Server ... \n";
    }
    public function SendIssue(){
        echo "Issue Sent .. \n";
    }
}

$option = 'Gopay';
$payment = NULL;

if ($option == 'Gopay'){
    $payment = new Gopay;
    echo "<br>";
    $payment->getStatus();
    echo "<br>";
    $payment->SendIssue();
    echo "<br>";
}
elseif ($option == 'Dana'){
    $payment = new Dana;
    echo "<br>";
    $payment->getStatus();
    echo "<br>";
    $payment->SendIssue();
    echo "<br>";
}

elseif ($option == 'Cred'){
    $payment = new creditCard;
    echo "<br>";
    $payment->getStatus();
    echo "<br>";
    $payment->SendIssue();
    echo "<br>";
}