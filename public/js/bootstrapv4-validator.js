(function($) {
    var errors = {};
    var b4validator = {}
    $.fn.b4validator = function(validators) {
        $(this).submit(function() {
            errors = {};
            var that = this;
            $.each(validators, function(id, params) {
                initializeFormForErrors(that, id);
            });
            $.each(validators, function(id, params) {
                $.each(params.rules, function(k, rule) {
                    setRule = rule.split(':');
                    if (!b4validator[setRule[0]]($(that).find("#" + id).val(), setRule[1] || null) && !errors[id]) {
                        errors[id] = params.messages[k]
                    };
                })
            })

            if (Object.keys(errors).length) {
                setErrors(this);
                return false;
            }
            return true;
        })
    };

    function initializeFormForErrors(formIdentifier, id) {
        parentElement = $(formIdentifier).find('#' + id).parent();
        parentElement.removeClass('has-danger has-success has-warning');
        if (parentElement.children('.form-control-feedback').length) {
            parentElement.children('.form-control-feedback').remove();
        }
    }

    function setErrors(formIdentifier) {
        $.each(errors, function(id, message) {
            errorHtml = '<div class="form-control-feedback">' + message + '</div>';
            parentElement = $(formIdentifier).find('#' + id).parent();
            parentElement.addClass('has-danger');
            parentElement.append(errorHtml);
        })

    }

    b4validator.required = function(value) {
        return !!value;
    }
    b4validator.minLength = function(value, length) {
        return !!(value && value.length >= length);
    }
    b4validator.maxLength = function(value, length) {
        return !!(value && value.length <= length);
    }
    b4validator.exactly = function(value, length) {
        return !!(value && value.length == length);
    }
    b4validator.regex = function(value, expression) {
        pattern = new RegExp(expression);
        return !!pattern.test(value);
    }

}(jQuery));