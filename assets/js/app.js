
// alert("script is running")


// getFormData()

function getFormData()
{
  let form = document.querySelector("#form-field")

      let formFields = form.querySelectorAll("input")
      let formSelectField = form.querySelectorAll("select")
      console.log(formFields)

      let formData = {};

      formFields.forEach((field,index)=>
      {
        formData[field.getAttribute("name")] = field.value
     
      })

      formSelectField.forEach((field,index)=>
      {
        formData[field.getAttribute("name")] = field.value
     
      })
        // console.log(formData)
      return formData
}




// let form = document.querySelector("#form-field")
let addBtn = document.querySelector(".add-btn");
let formSubmitUrl = './api/addFormData.php'



addBtn.addEventListener("click",(event)=>{



  let data = getFormData();
  console.log(data);

  if(data['s_name']=="" || data['f_name']=="" || data['inquiry_topic']=="" || data['inquiry_for']=="" || data['mobile_number']=="" || data['contact_medium']=="" || data['with_guardian']=="" || data['coding_exp']=="" || data['education_bac']=="")
  {
    // alert("please enter user deatils in field")

    alertData = {
                 position: "center",
                 icon: "error",
                 title: "Please Enter the user details",
                 showConfirmButton: true,
                 timer:3000
               };
      
      				 Swal.fire(alertData);
  }
  else
  {

 $.ajax({
        
  url:formSubmitUrl,
  type:'POST',
  data:data,
  datatype:'json',

  success:function(data){
    console.log('data submited')

 
       window.location.href = "./index.php"

    
    // console.log(data)
  },

  error: function(jqXHR, textStatus, errorThrown){
			console.log("data not submited")
      // console.log(data)
		 }
})


}

})





let deleteBtn = document.querySelectorAll(".delete-btn")

   let btnLength = deleteBtn.length;
  //  console.log(btnLength)

   let userDelete = false;

   for(let i=0;i<btnLength;i++)
   {
    deleteBtn[i].addEventListener("click",(event)=>{
      
      // event.preventDefault();

      let isconfirm = confirm("Do you really want to delete it")

      

      if(!isconfirm)
      {
        event.preventDefault();
      }
      



    })
   }