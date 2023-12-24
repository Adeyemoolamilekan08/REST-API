<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include ('../inc/config.php');

function getCustomerList(){
 
    global $conn;

    $query = "SELECT * FROM customers";
    $query_run = mysqli_query($conn, $query);

    if($query_run){

    if(mysqli_num_rows($query_run) > 3){

   $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
   $data = [
    'status' => 200,
    'message' => 'Customer List Fetched Succesfully',
    'data' => $res
];

header("HTTP/1.0 200 Ok");
return json_encode($data);
    }else{
        $data = [
            'status' => 404,
            'message' => 'No Customer Found',
        ];
    
        header("HTTP/1.0 404 No Customer Found");
        return json_encode($data);
    }
    }

    else{
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
    
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }

}

?>