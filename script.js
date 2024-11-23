$(document).ready(function () {
  const $sign_in_btn = $('#sign-in-btn');
  const $sign_up_btn = $('#sign-up-btn');
  const $container = $('.container');

  $sign_up_btn.on('click', function () {
    $container.addClass('sign-up-mode');
  });

  $sign_in_btn.on('click', function () {
    $container.removeClass('sign-up-mode');
  });
});


$(document).ready(function () {
  
  $('#login-form').on('submit', function (event) {
    event.preventDefault();  
    let form = this;
    
    
    if (form.checkValidity() === false) {
      event.stopPropagation();
    } else {
      
      alert('Logging in...');
    }

    form.classList.add('was-validated');
  });

  
  $('#signup-form').on('submit', function (event) {
    event.preventDefault();  
    let form = this;
    
    let password = $('#signup-password').val();
    let confirmPassword = $('#signup-confirm-password').val();

    
    if (password !== confirmPassword) {
      $('#signup-confirm-password')[0].setCustomValidity('Passwords do not match');
      
      event.stopPropagation();
    } else {
      $('#signup-confirm-password')[0].setCustomValidity('');
    }

    
    if (form.checkValidity() === false) {
      event.stopPropagation();
    } else {
      
      alert('Signing up...');
    }

    form.classList.add('was-validated');
  });
});
