$("form.js-register").submit(function (event) {
    event.preventDefault();
    var _form = $(this);
    var data = {
        username: $('#name').val(),
        password: $('#password').val(),
        password2: $('#password2').val()
    };
    console.log(data);
});

