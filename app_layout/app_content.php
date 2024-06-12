

<div class=" my-5">
     <h1>CRUD APP</h1>

<a class="btn btn-primary my-4 add-btn" href="./addUser.php">Add New User </a>

<table class="table table-striped">
  <thead>
    <tr style="font-size:12px">
      <th scope="col">id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Inquiry Topic</th>
      <th scope="col">Inquiry For</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Location/Address</th>
      <th scope="col">Remarks</th>
      <th scope="col">Contact Medium</th>
      <th scope="col">With Guardian</th>
      <th scope="col">P.C.Exp.</th>
      <th scope="col">Edu.background</th>
      <th scope="col">Cur.school/College</th>
      <th scope="col">Edit/Delete</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  <?php
     
     require_once "./api/db-connection.php";


     if($conn)
     {
       // echo "connected";
     
       $sql = "SELECT id,student_name,father_name,inquiry_topic,inquiry_for,mobile_number,address_city,remark,contact_medium,with_guardian,coding_experience,education_background,current_school_college FROM users";
       $sqlResult = $conn->query($sql);
     
       $data = $sqlResult->fetchAll(PDO::FETCH_ASSOC);
     
      //  print_r($data);
    
       $counter = 0;
    foreach($data as $userData)
    {
      $counter++;
       
    $user_id = $userData['id']; 
    $studentName = $userData['student_name'];
    $fatherName = $userData['father_name'];
    $inquiry_topic =$userData['inquiry_topic'];
    $inquiry_for = $userData['inquiry_for'];
    $mobile_number = $userData['mobile_number'];
    $remark = $userData['remark'];
    $address = $userData['address_city'];
    $contact_medium = $userData['contact_medium'];
    $with_guardian = $userData['with_guardian'];
    $coding_exp = $userData['coding_experience'];
    $education_bac = $userData['education_background'];
    $schoolCollegeName = $userData['current_school_college'];

      echo "<tr style='font-size:12px'>";
      echo "<th scope='row'>$counter</th> ";
      echo "<td>$studentName</td> ";
      echo "<td>$fatherName</td> ";
      echo "<td> $inquiry_topic</td> ";
      echo "<td> $inquiry_for</td> ";
      echo "<td>$mobile_number</td> ";
      echo "<td>$address</td> ";
      echo "<td>$remark</td> ";
      echo "<td>$contact_medium</td> ";
      echo "<td>$with_guardian</td> ";
      echo "<td> $coding_exp</td> ";
      echo "<td>$education_bac</td> ";
      echo "<td>$schoolCollegeName</td> ";
      echo "<td><a class='btn btn-success ' style='font-size:10px' href='./edit_record.php?id=$user_id'>Edit</a> ";
      echo "<a class='btn btn-danger my-2 delete-btn' style='font-size:10px' href='./api/delete_record.php?id=$user_id'>Delete</a></td> ";
      echo "</tr> ";
    }

    

  }
    ?>

  </tbody>
</table>
    </div>


   