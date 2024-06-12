<?php
include_once "db-Connection.php";
// print_r($_POST)
if($conn)
{
    $studentName = $_POST['s_name'];
    $fatherName = $_POST['f_name'];
    $inquiry_topic = $_POST['inquiry_topic'];
    $inquiry_for = $_POST['inquiry_for'];
    $mobile_number = $_POST['mobile_number'];
    $remark = $_POST['remark'];
    $address = $_POST['address'];
    $contact_medium = $_POST['contact_medium'];
    $with_guardian = $_POST['with_guardian'];
    $coding_exp = $_POST['coding_exp'];
    $education_bac = $_POST['education_bac'];
    $schoolCollegeName = $_POST['s_c_name'];


    // json_encode($contact_medium);
    // print_r($contact_medium);
    

    // function contactMediums(){
    //     $contactMedium = [];
    //     foreach($contact_medium as $medium)
    //     {
    //         $contactMedium[] = $medium;
    //     }
    //     return ($contactMedium);

    //     print_r($contactMedium);
    // };


    $totleContatMedium =  implode($contact_medium);
    print_r($contact_medium);

    // print_r($userName);

    $query = "INSERT INTO `users` (student_name,father_name,inquiry_topic,inquiry_for,mobile_number,address_city,remark,contact_medium,with_guardian,coding_experience,education_background,current_school_college) 
    VALUES(' $studentName',' $fatherName','$inquiry_topic',' $inquiry_for','$mobile_number','$address',$remark,'$totleContatMedium','$with_guardian','$coding_exp','$education_bac',' $schoolCollegeName')";

    $result = $conn->query($query);
}
?>