$(document).ready(function () {
   const $signInBtn = $("#sign-in-btn");
   const $signUpBtn = $("#sign-up-btn");
   const $container = $(".container");
 
   $signUpBtn.on("click", function () {
     $container.addClass("sign-up-mode");
   });
 
   $signInBtn.on("click", function () {
     $container.removeClass("sign-up-mode");
   });
 });


 $(document).ready(function () {
   
   $('#login-form').on('submit', function (event) {
       let isValid = true;

    
       const username = $('#login-username').val().trim();
       if (username === '') {
           $('#login-username').addClass('is-invalid');
           isValid = false;
       } else {
           $('#login-username').removeClass('is-invalid');
       }

      
       const password = $('#login-password').val().trim();
       if (password === '') {
           $('#login-password').addClass('is-invalid');
           isValid = false;
       } else {
           $('#login-password').removeClass('is-invalid');
       }

      
       if (!isValid) {
           event.preventDefault();
       }
   });

   
   $('.form-control').on('focus', function () {
       $(this).removeClass('is-invalid');
   });
});


 $(document).ready(function () {
   $('#signup-form').on('submit', function (event) {
       let isValid = true;

      
       const username = $('#signup-username').val();
       if (username.length < 4) {
           $('#signup-username').addClass('is-invalid');
           isValid = false;
       } else {
           $('#signup-username').removeClass('is-invalid');
       }

     
       const email = $('#signup-email').val();
       const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
       if (!emailRegex.test(email)) {
           $('#signup-email').addClass('is-invalid');
           isValid = false;
       } else {
           $('#signup-email').removeClass('is-invalid');
       }

       
       const password = $('#signup-password').val();
       if (password.length < 5) {
           $('#signup-password').addClass('is-invalid');
           isValid = false;
       } else {
           $('#signup-password').removeClass('is-invalid');
       }

      
       const confirmPassword = $('#signup-confirm-password').val();
       if (password !== confirmPassword) {
           $('#signup-confirm-password').addClass('is-invalid');
           isValid = false;
       } else {
           $('#signup-confirm-password').removeClass('is-invalid');
       }

     
       if (!isValid) {
           event.preventDefault();
       }
   });

   $('.form-control').on('focus', function () {
       $(this).removeClass('is-invalid');
   });
});
 