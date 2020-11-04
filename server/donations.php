<?php
use Stripe\Stripe;

//require database connection config
require '../vendor/autoload.php';

$donaterName = $donaterPhoneNumber = $donaterEmail = $donatedAmount = $donatingIssue = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    $donaterName = testInput($data[1]["value"]);
    $donaterPhoneNumber = testInput($data[3]['value']);
    $donaterEmail = testInput($data[2]["value"]);
    $donatedAmount = testInput($data[0]["value"]);
    // $donatingIssue = testInput($data[5]["value"]);

    $data_to_insert = [
        'donaterName' => $donaterName,
        'donaterEmail' => $donaterEmail,
        'donaterPhoneNumber' => $donaterPhoneNumber,
        'donatedAmount' => $donatedAmount,
        // 'donatingIssue' => $donatingIssue,
    ];

    handlePayment($data_to_insert);
}

//sanitize input
function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function handlePayment($data)
{
    include '../config.php';

    $donaterName = $data['donaterName'];
    $donaterPhoneNumber = (int) $data['donaterPhoneNumber'];
    $donaterEmail = $data['donaterEmail'];
    $donatedAmount = (int) $data['donatedAmount'] * 100;
    $donatingIssue = 0; //$data['donatingIssue'];

    \Stripe\Stripe::setApiKey('sk_test_51HiN7yLWgkx67UK7J2imwlzneX4gGPpuVikcPXAQx2hLY2lqbLF01QjZHg7dbyuecXchchEsvQskKhkddFF4tNBW00ZFNo2tRJ');

    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => 'Donation',
                ],
                'unit_amount' => $donatedAmount,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'http://127.0.0.1/success',
        'cancel_url' => 'http://127.0.0.1/cancel',
    ]);

    $sql = "INSERT INTO donateus (donaterName,
            donaterPhoneNumber, donaterEmail, status,
            stripeCheckoutSession, donatedAmount, donatingIssue )
                VALUES ( ?,
                    ? , ?, 'pending' , ? ,
                    ?, ? )";

    $stmt = $db->prepare($sql);
    $stmt->bind_param("sissii", $donaterName,
        $donaterPhoneNumber, $donaterEmail, $session->id,
        $donatedAmount, $donatingIssue
    );

    $stmt->execute();

    // if ($db->query($sql) === true) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $db->error;
    // }

    $db->close();

    echo json_encode([
        'id' => $session->id,
    ]);
}
