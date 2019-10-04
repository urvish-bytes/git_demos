$("#user_form").validate({
    rules: {
        first_name :"required",
        last_name :"required"
    },

    messages: {
        first_name: "Please enter valid name",
        last_name: "Please enter valid name",
    },
    submitHandler: function(form) {
        form.submit();
    }
});