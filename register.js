$.validator.addMethod("postalcode", function(value, element) {
    return this.optional(element) || /[A-Z|1-9]{2}-[A-Z|1-9]{3}/.test(value);
  }, "Please provide a valid postcode.");


$.validator.addMethod("findOutAge", function(age,element,min) {
    var age = parseInt($('#age').val());
    if (age < min) {
        return false;
    }
  return age >= min;
}, "You are not old enough!");

$("#form").validate({
    rules: {
        username: {
            required: true,
        },
        password: {
            required: true,
        },
        email: {
            required: true,
            email:true
        },
        phone: {
            required: true,
            digits: true
        },
        age: {
            required: true,
            findOutAge: 19
        },
        city: {
            required: true,
        },
        postcode: {
            required: true,
            postalcode: true
        },
        address: {
            required: true,        
        },
        reg_date: {
            required: true,        
        }
    },
    messages: {
        username: {
            required: "Please enter a username.",
        },
        password: {
            required: "Please enter a password.",
        },
        email: {
            required: "Please enter an email address.",
            email: "You must enter a valid email address."
        },
        phone: {
            required: "Please enter a phone number.",
        },  
        age: {
            required: "Please enter your age.",
            findOutAge: "You must be at least 19 years old!"
        },
        city: {
            required: "Please enter a city.",
        },
        postcode: {
            required: "Please enter a postcode.",
            postalcode: "You must have a postcode in XX-XXX format"
        },
        address: {
            required: "Please enter an address.",
        },
        reg_date: {
            required: "Please enter a valid date.",
        }  
    }
});

