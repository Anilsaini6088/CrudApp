<?php

require_once "db-connection.php";

// print_r($_POST);
    $selectedId = $_POST['formid'];
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


if($conn)
{
    $sqlQuery = "UPDATE users SET student_name='$studentName',father_name='$fatherName',inquiry_topic='$inquiry_topic',
    inquiry_for='$inquiry_for',mobile_number='$mobile_number',address_city='$address',remark='$remark',contact_medium='$contact_medium',
    with_guardian='$with_guardian',coding_experience='$coding_exp',education_background='$education_bac',current_school_college='$schoolCollegeName' WHERE id='$selectedId'";

    $sqlQueryOutput = $conn->query($sqlQuery);


}

?>