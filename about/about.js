$(document).ready(function () {
    
    $('form.needs-validation').on('submit', function (event) {
      
        if (!this.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

       
        $(this).addClass('was-validated');
    });

   
    $('#validationCustomUsername').on('input', function () {
        if ($(this).val().trim() === '') {
            $(this).addClass('is-invalid').removeClass('is-valid');
        } else {
            $(this).addClass('is-valid').removeClass('is-invalid');
        }
    });

    
    $('#invalidCheck').on('change', function () {
        if (!this.checked) {
            $(this).addClass('is-invalid').removeClass('is-valid');
        } else {
            $(this).addClass('is-valid').removeClass('is-invalid');
        }
    });
});

$(document).ready(function () {
  
    $('form.needs-validation').on('submit', function (event) {
        let formIsValid = true;

        
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const username = $('#validationTooltipUsername');
        if (!emailPattern.test(username.val())) {
            username.addClass('is-invalid').removeClass('is-valid');
            formIsValid = false;
        } else {
            username.addClass('is-valid').removeClass('is-invalid');
        }

        
        const password = $('#validationTooltipPassword');
        if (password.val().trim() === '') {
            password.addClass('is-invalid').removeClass('is-valid');
            formIsValid = false;
        } else {
            password.addClass('is-valid').removeClass('is-invalid');
        }

      
        if (!formIsValid) {
            event.preventDefault();
            event.stopPropagation();
        }
        
       
        $(this).addClass('was-validated');
    });
});