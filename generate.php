<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}

define('ACCESSCHECK', true);

require_once 'vendor/autoload.php';

use Classes\GeneratePDF;

$data = [

      'book_no' => $_POST['book_no'],
      'run_no' => $_POST['run_no'],

      'name1' => $_POST['name1'],
      'id1' => $_POST['id1'],
      'add1' => $_POST['add1'],
      'tin1' => $_POST['tin1'],

      'name2' => $_POST['name2'],
      'id1_2' => $_POST['id1_2'],
      'add2' => $_POST['add2'],
      'tin1_2' => $_POST['tin1_2'],
      'clear data' => 'clear data',

      'pay1.0' => $_POST['pay1_0'],
      'pay1.1' => $_POST['pay1_1'],
      'pay1.2' => $_POST['pay1_2'],
      'pay1.3' => $_POST['pay1_3'],
      'pay1.4' => $_POST['pay1_4'],
      'pay1.5' => $_POST['pay1_5'],
      'pay1.6' => $_POST['pay1_6'],
      'pay1.7' => $_POST['pay1_7'],
      'pay1.8' => $_POST['pay1_8'],
      'pay1.9' => $_POST['pay1_9'],
      'pay1.10' => $_POST['pay1_10'],
      'pay1.11' => $_POST['pay1_11'],
      'pay1.12' => $_POST['pay1_12'],
      'pay1.14' => $_POST['pay1_14'],
      'pay1.13.0' => $_POST['pay1_13_0'],
      'pay1.13.1' => $_POST['pay1_13_1'],

      'tax1.0' => $_POST['tax1_0'],
      'tax1.1' => $_POST['tax1_1'],
      'tax1.2' => $_POST['tax1_2'],
      'tax1.3' => $_POST['tax1_3'],
      'tax1.4' => $_POST['tax1_4'],
      'tax1.5' => $_POST['tax1_5'],
      'tax1.6' => $_POST['tax1_6'],
      'tax1.7' => $_POST['tax1_7'],
      'tax1.8' => $_POST['tax1_8'],
      'tax1.9' => $_POST['tax1_9'],
      'tax1.10' => $_POST['tax1_10'],
      'tax1.11' => $_POST['tax1_11'],
      'tax1.12' => $_POST['tax1_12'],
      'tax1.14' => $_POST['tax1_14'],
      'tax1.13.0' => $_POST['tax1_13_0'],
      'tax1.13.1' => $_POST['tax1_13_1'],

      'date1' => $_POST['date1'],
      'date2' => $_POST['date2'],
      'date3' => $_POST['date3'],
      'date4' => $_POST['date4'],
      'date5' => $_POST['date5'],
      'date6' => $_POST['date6'],
      'date7' => $_POST['date7'],
      'date8' => $_POST['date8'],
      'date9' => $_POST['date9'],
      'date10' => $_POST['date10'],
      'date11' => $_POST['date11'],
      'date12' => $_POST['date12'],
      'date13' => $_POST['date13'],
      'date14.0' => $_POST['date14_0'],
      'date14.1' => $_POST['date14_1'],


      'chk1' => (isset($_POST['chk1']) ? 'Yes' : 'Off'),
      'chk2' => (isset($_POST['chk2']) ? 'Yes' : 'Off'),
      'chk3' => (isset($_POST['chk3']) ? 'Yes' : 'Off'),
      'chk4' => (isset($_POST['chk4']) ? 'Yes' : 'Off'),
      'chk5' => (isset($_POST['chk5']) ? 'Yes' : 'Off'),
      'chk6' => (isset($_POST['chk6']) ? 'Yes' : 'Off'),
      'chk7' => (isset($_POST['chk7']) ? 'Yes' : 'Off'),
      'chk8' => (isset($_POST['chk8']) ? 'Yes' : 'Off'),
      'chk9' => (isset($_POST['chk9']) ? 'Yes' : 'Off'),
      'chk10' => (isset($_POST['chk10']) ? 'Yes' : 'Off'),
      'chk11' => (isset($_POST['chk11']) ? 'Yes' : 'Off'),

      'Text1.0.0' => $_POST['text1_0_0'],
      'Text1.0.1' => $_POST['text1_0_1'],
      'Text1.1.0' => $_POST['text1_1_0'],

      'item' => $_POST['item'],
      'rate1' => $_POST['rate1'],
      'spec1' => $_POST['spec1'],
      'spec3' => $_POST['spec3'],
      'spec4' => $_POST['spec4'],
      'total' => $_POST['total'],
      
      'date_pay' => $_POST['date_pay'],
      'month_pay' => $_POST['month_pay'],
      'year_pay' => $_POST['year_pay'],

      
];


$pdf = new GeneratePdf;
$response = $pdf->generate($data);

header('Location: thanks.php?link=' . $response);
