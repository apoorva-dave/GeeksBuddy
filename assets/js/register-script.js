 // TODO: Take domain names dynamically
  var url = "http://davesdentalcare.com";

 // Registration Form js 
  $(document).ready(function () {
    $('#reg-form').hide();
  });
  function showDirectRegister() {
      $('#reg-form').show();
  }
  $('#reg-form').submit(function(e){
    e.preventDefault();
    var name = $('#name').val(),
        contact = $('#contact').val() 
        email = $('#email').val(),
        dob =  $('#dob').val(),
        password = $('#password').val(),
        c_password = $('#c_password').val(),
        gender = $('input[name="optradio"]:checked').val(); 
    console.log(name+" Contact "+contact+email);
    var errors = {
      present: false,
      name: {
        error: false,
        msg: null
      },
      email: {
        error: false,
        msg: null
      },
      contact: {
        error: false,
        msg: null
      },
      dob: {
        error: false,
        msg: null
      },
      password: {
        error: false,
        msg: null
      },
      c_password: {
        error: false,
        msg: null
      },
      gender: {
        error: false,
        msg: null
      },

    }

    if(name == ''){
      errors.present = true;
      errors.name.error = true;
      errors.name.msg = "Name is required";
    }

    if(email == ''){
      errors.present = true;
      errors.email.error = true;
      errors.email.msg = "Email is required";
    }

    if(contact == ''){
      errors.present = true;
      errors.contact.error = true;
      errors.contact.msg = "Contact is required";
    }

    if(dob == ''){
      errors.present = true;
      errors.dob.error = true;
      errors.dob.msg = "DOB is required";
    }

    if(password == ''){
      errors.present = true;
      errors.password.error = true;
      errors.password.msg = "Password is required";
    }
    if(c_password != password){
      errors.present = true;
      errors.c_password.error = true;
      errors.c_password.msg = "Passwords doesn't match";
    }

    if(gender == null){
      errors.present = true;
      errors.gender.error = true;
      errors.gender.msg = "Gender is required";
    }
    console.log(errors);
    if (errors.present) {
      showValidationErrors(errors);
    }else{
      var data = {
        name : name,
        contact: contact,
        email: email,
        dob: dob,
        gender: gender,
        password: password,
        c_password: c_password
      }
      console.log(data);
      $.post( url+"/Register/registerSubmit", data, function( result ) {
        res = JSON.parse(result);
        if (res.errors_present == true) {
          // show errors
          showValidationErrors(res);
        }else{
          if(res.success == true){
            window.location = url+"/Register/registerComplete/success";
          }else{
            window.location = url+"/Register/registerComplete/failed";
          }
        }
        
      });
    }
  });

  function showValidationErrors(errors){
    if (errors.name.error) {
      $('#name-group').addClass('has-error');
      $('#nameError').html(errors.name.msg);
      }
    if (errors.email.error) {
      $('#email-group').addClass('has-error');
      $('#emailError').html(errors.email.msg);
      }
    if (errors.password.error) {
      $('#password-group').addClass('has-error');
      $('#passwordError').html(errors.password.msg);
      }
    if (errors.contact.error) {
      $('#contact-group').addClass('has-error');
      $('#contactError').html(errors.contact.msg);
      }
    if (errors.c_password.error) {
      $('#c_password-group').addClass('has-error');
      $('#c_passwordError').html(errors.c_password.msg);
      } 
    if (errors.dob.error) {
      $('#dob-group').addClass('has-error');
      $('#dobError').html(errors.dob.msg);
      } 
    if (errors.gender.error) {
      $('#gender-group').addClass('has-error');
      $('#genderError').html(errors.gender.msg);
      } 
  }
