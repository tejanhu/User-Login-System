$("#form").validate({
    rules: {
        email: {
            required: true,
            email:true
        },
        password: {
            required: true,
        }
    },
    messages: {
        email: {
            required: "Please enter an email address.",
            email: "You must enter a valid email address."
        },
        password: {
            required: "Please enter a password.",
        }
    }
});

