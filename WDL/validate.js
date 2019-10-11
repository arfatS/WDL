$(document).ready(function() {

    // Register Form Validation
    $('#register_form').submit(function(e) {
      e.preventDefault();
      var username = $('#username').val();
      var mobile = $('#mobile').val();
      var email = $('#email').val();
      var password = $('#password').val();
      var address = $('#address').val();

  
      $(".error").remove();
  
      if (username.length < 1) {
        $('#username').after('<span class="error">This field is required</span>');
      }
      if (mobile.length < 1) {
        $('#mobile').after('<span class="error">This field is required</span>');
      }
      if (email.length < 1) {
        $('#email').after('<span class="error">This field is required</span>');
      } else {
        var regEx = /^[a-zA-Z0-9][a-zA-Z0-9._%+-]{0,63}@(?:[a-z0-9-]{1,63}\.){1,125}[a-z]{2,63}$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          $('#email').after('<span class="error">Enter a valid email</span>');
        }
      }
      if (password.length < 8) {
        $('#password').after('<span class="error">Password must be at least 8 characters long</span>');
      }
      if (address.length < 1) {
        $('#address').after('<span class="error">This field is required</span>');
      }

    });


    // Login Form Validation
    $('#login_form').submit(function(e) {
        e.preventDefault();
        var username = $('#username').val();        
        var password = $('#password').val();

        $(".error").remove();
    
        if (username.length < 1) {
          $('#username').after('<span class="error">This field is required</span>');
        }
        if (password.length < 1) {
            $('#password').after('<span class="error">This field is required</span>');
        }
      });

    // Admin Form Validation
    $('#admin_form').submit(function(e) {
        e.preventDefault();
        var adminname = $('#adminname').val();        
        var password = $('#password').val();

        $(".error").remove();
    
        if (adminname.length < 1) {
          $('#adminname').after('<span class="error">This field is required</span>');
        }
        if (password.length < 1) {
            $('#password').after('<span class="error">This field is required</span>');
        }
    });
  
  });