$(document).ready(function() {

    $('#contactForm').submit(function(e) {
        e.preventDefault();
        let isValid = true;

        $('#contactForm input[required], #contactForm textarea[required]').each(function() {
            if (!this.value.trim()) {
                $(this).addClass('is-invalid');  
                isValid = false;
            } else {
                $(this).removeClass('is-invalid');  
            }
        });

        let email = $('#email').val().trim();
        if (email && !validateEmail(email)) {
            $('#email').addClass('is-invalid');
            isValid = false;
        } else {
            $('#email').removeClass('is-invalid');
        }

        if (isValid) {
            $('#confirmModal').modal({
                backdrop: false,  
                keyboard: false   
            }).modal('show');
        }
    });

    $('#confirmSubmit').click(function() {
        $('#confirmModal').modal('hide');
        $('#successModal').modal({
            backdrop: false,  
            keyboard: false  
        }).modal('show');
    });

    

    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailPattern.test(email);
    }

});

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