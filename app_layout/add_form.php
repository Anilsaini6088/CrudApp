
<a href="./index.php"><img style="width:30px;" class="back-img mx-3 my-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0Vr6njBWuBPNOCkRLluJIxwa3twd-CutJYw&s" alt=""></a>
<div class="container my-5">
     <h1>Enter User Details</h1>

     <form action="#"  id="form-field" >
     <div class="form-floating mb-3">
  <input type="text" class="form-control"  style="font-size:20px;"  required  id="floatingInput" name="s_name" >
  <label for="floatingInput">Enter Student Name</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control"  style="font-size:20px;"  required  id="floatingInput" name="f_name" >
  <label for="floatingInput">Enter Father's Name</label>
</div>



<div class="form-floating my-3" style="display:flex;gap:20px;">
 <select  class="topic-dropdown"  name="inquiry_topic" placeholder="Enter Inquiry Topic">
    <option value="C Programming">C Programming</option>
    <option value=" Python">Python</option>
    <option value="Web Design">Web Design</option>
    <option value="Full Stack Web Development">Full Stack Web Development</option>
    <option value="Frontend Development">Frontend Development</option>
    <option value="SQL">SQL</option>
    <option value="Graphic Design">Graphic Design</option>
</select>
  

  <div class="mx-5 redio-field" >
<h5>Inquiry For :</h5>
<input type="radio"  name="inquiry_for" id="" value="Regular Training" required style="width:25px; height:20px;">
<h6 > Regular Training </h6>

<input type="radio" name="inquiry_for" id="" value="Internship" style="width:25px;height:20px;">
<h6> Internship</h6>
</div>


</div>

<div class="mobileNo-field my-5" >
  <h5>Mobile Number :</h5>
<input type="text" class="mobile-number" name="mobile_number" placeholder="Enter Mobile No.">

<h5>Remarks :</h5>
<input type="number" class="remark" name="remark" placeholder="Enter Remark(Optional)">
</div>


<div class="form-floating">
  <h5>Location/Address</h5>
  <input type="text" class="address" style="width:90%;" name="address" placeholder="Enter Address/City (Optinol)" aria-label="Text input with dropdown button">
  <!-- <label for="floatingPassword">Enter Salary</label> -->
</div>

<div class="form-floating my-4">
  <h5>Contact Medium :</h5>
  <div style="display:flex; gap:50px;" class="my-3">
  <div  class="checkbox-field">
    <h6>Phone </h6>
  <input type="checkbox" name="contact_medium[]" value="Phone">
  </div>

  <div  class="checkbox-field">
    <h6> WhatsApp </h6>
  <input type="checkbox"  name="contact_medium[]" value="WhatsApp" >
  </div>

  <div  class="checkbox-field">
    <h6> Personal Visit </h6>
  <input type="checkbox"  name="contact_medium[]" value="personal">
  </div>

  <div class="mx-5 redio-field" >
<h5>With Guardian :</h5>
<input type="radio"  name="with_guardian" value="yes"  required  style="width:25px; height:20px;">
<h6 > Yes </h6>

<input type="radio" name="with_guardian" value="no"  style="width:25px; height:20px;">
<h6>No</h6>
</div>

  </div>

  </div>

  <div class="mx-2 my-5 redio-field" style="display:flex;gap:80px" >
    <div>
<h5>Previous Coding Experience :</h5>
<div style="display:flex;gap:30px;" class="my-3">
<input type="radio"  name="coding_exp" value="yes"  required style="width:25px; height:20px;">
<h6 > Yes </h6>

<input type="radio" name="coding_exp" value="no"  style="width:25px; height:20px;" >
<h6>No</h6>
</div>
</div>


</div>


<div style="display:flex;gap:100px;">
<div style="width:50%">
<h5>Education Background :</h5>
  <select name="education_bac" style="width:70%;" class="topic-dropdown" id="">
    <option value="12th pass">12th pass</option>
    <option value="B-Tech">B-Tech</option>
    <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="M-Tech">M-Tech</option>
    <option value="BA">BA</option>
    <option value="BCom">BCom</option>
    <option value="MSc">MSc</option>
    <option value="MCom">MCom</option>
    <option value="BSc">BSc</option>
    <option value="other">other</option>
  </select>
  </div>

  <div style="width:50%">
  <h5> Current School/College Name :</h5>
<input   class="topic-dropdown" style="width:70%;"   name="s_c_name" placeholder="Current School/College Name(Optional)">
</div>

  </div>

<a class="btn btn-primary my-4 add-btn" style="font-size:20px;" href="#">Save</a>
</form>



    </div>


   