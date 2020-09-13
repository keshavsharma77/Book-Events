let base_url = "manage.php";

var today = new Date();
var t = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
console.log(t);

document.getElementById("register1").onclick = function() {
            document.getElementById("succ").innerHTML="";
            document.getElementById("home").style.display = "none";
            document.getElementById("register").style.display = "block";
            document.getElementById("regis_table").style.display = "none";

        }

document.getElementById("table_reg").onclick = function() {

          document.getElementById("home").style.display = "none";
          document.getElementById("register").style.display = "none";
          document.getElementById("regis_table").style.display = "block";
          showregistered();
                  }

        document.getElementById("home1").onclick = function() {

          document.getElementById("home").style.display = "block";
          document.getElementById("register").style.display = "none";
          document.getElementById("regis_table").style.display = "none";

        }



//form validation

function validateform(){
  var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
  var regemail= /^\w+([\.]?\w+)*@\w+([\.]?\w+)*(\.\w{2,5})+$/;
  var regphone = /^(\+91-|\+91|0)?[6-9]\d{9}$/;
  var name1 = document.myform.name.value;
  var email1 = document.myform.email.value;
  var tel1 = document.myform.tel.value;
  var addr = document.myform.address.value;
  var gen = document.myform.gender.value;
  var evnt = document.getElementById('inputState').value;
  var inputState = document.getElementById('inputState');

  const rbs = document.querySelectorAll('input[name="gender"]');
  let selectedValue;
  for (const rb of rbs) {
      if (rb.checked) {
          selectedValue = rb.value;
          break;
      }
  }
  if(addr =="")
{
alert("Please Enter Your Address");
document.myform.address.focus();
return false;
}

    if(!regName.test(name1)){
        alert("Please enter your full name (first & last name).Don't use numbers");
        document.getElementById('name').focus();
        return false;
    }

    else if(!regemail.test(email1)){
      alert("Invalid Email Id");
      document.getElementById('email').focus();
      return false;
    }
    else if(!regphone.test(tel1)){
      alert("Invalid Phone Number. Must start with (+91-) or (+91) or (0) ");
      document.getElementById('tel').focus();
      return false;
    }
    else if(inputState.value == "Choose..."){
      alert("Please select an Event!!");
      return false;
    }
    if(selectedValue == null){
      alert("Please Select Your Gender!!");
      return false;
    }
    var to = new Date();
               var h = to.getHours() + ":" + to.getMinutes() + ":" + to.getSeconds();
               var k={name: name1, email: email1 , tel: tel1, address: addr , gender: gen, event: evnt, time: h};
               alert("Thankxx for registering with us!! Hope you Enjoyy the Event :) !!!");
               var k = JSON.stringify(k);
              aftersubmit(k);
              document.getElementById("regis_form").reset();
}




function aftersubmit(k){
  let url = base_url + "?req=insert&object="+k; 
              $.get(url,function(data,success){
                  if(data=="Successfully Registered for Event!!")
                  {
                      document.getElementById("succ").innerHTML=data;
                  }
                  else
                  {
                      document.getElementById("fail").innerHTML=data;
                  }
                  
              });
}

function showregistered()
        {
          let url = base_url + "?req=list";
            $.get(url,function(data,success){
              if(data.length == 0)
              {
                  document.getElementById("demo1").innerHTML="<h3><div class='container text-center'>No Registration Yet!!. Be the first one to register.</div></h3>";
              }
              else{
                  var text;
                  text= "<table class='table table-striped table-bordered table-hover'><thead class='thead-dark'>";
                  text=text + "<tr><th>#</th><th>Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Gender</th><th>Event</th><th>Time</th></tr></thead><tbody>";
                  for(i=0;i<data.length;i++)
                  {
                      text= text + "<tr><td>" + (i+1) + "</td><td>" + data[i].name + "</td><td>" + data[i].email + "</td><td>" + data[i].phone_no + "</td><td>" + data[i].address + "</td><td>" + data[i].gender + "</td><td>" + data[i].event + "</td><td>" + data[i].time + "</td></tr>";
                  }
                  text += "</tbody></table>";
                  document.getElementById("demo1").innerHTML=text;
              }

            });

            
        }

//for register buttons
function formfunc(){
  document.getElementById("home").style.display = "none";
  document.getElementById("register").style.display = "block";
  document.getElementById("regis_table").style.display = "none";

}
