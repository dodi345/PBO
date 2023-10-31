<?php
interface paymentInterface{
    public function getStatus();
    public function sendIssue();
}

class creditCard implements paymentInterface{
    public function getStatus()
    {
        echo "Checking Credit Card server ... \n";
    }
    public function sendIssue(){
        echo "Issue sent .. \n";
    }
}
class Dana implements paymentInterface{
    public function getStatus()
    {
        echo "Checking Dana server ... \n";
    }
    public function sendIssue(){
        echo "Issue sent .. \n";
    }
}
class Gopay implements paymentInterface{
    public function getStatus()
    {
        echo "Checking Gopay server ... \n";
    }
    public function sendIssue(){
        echo "Issue sent .. \n";
    }
}

class paymentFactory{
    public function getInstance($class){
        return new $class;
    }
}
$option = 'Dana';

$paymentFactory = new paymentFactory;
$payment = $paymentFactory->getInstance($option);
$payment->getStatus();
echo "<br>";
$payment->sendIssue();