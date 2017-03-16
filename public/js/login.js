var loginFormValidators = {
    "mobile": {
        rules: ['required', 'maxLength:10', 'minLength:10', 'regex:[a-zA-z]'],
        messages: ['Mobile is required', 'Maximum 10 characters allowed', 'Minimum 10 characters allowed', 'Should contain only alphabets']
    },
    "password": {
        rules: ['required', 'exactly:15'],
        messages: ['Password is required', '15 characters required']
    }
}

jQuery(".login form").b4validator(loginFormValidators);