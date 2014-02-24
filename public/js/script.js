$(document).ready(function() {

    jQuery.extend(jQuery.validator.messages, {
        required: "(*)&nbsp;Campos obligatorios.",
        remote: "El email que ha introducido ya está en uso. Pruebe con otro.",
        email: "El correo electrónico que ha introducido no es válido.",
        url: "Please enter a valid URL.",
        date: "Fecha es inválida.",
        dateISO: "Please enter a valid date (ISO).",
        number: "El valor tiene que ser numérico.",
        digits: "Sólo digitos.",
        creditcard: "Tarjeta de crédito inválida.",
        equalTo: "Las contraseñas no coinciden.",
        accept: "Tiene que aceptar las condiciones de uso.",
        maxlength: jQuery.validator.format("El valor máximo para este campo es de {0} caracteres."),
        minlength: jQuery.validator.format("El valor mínimo para este campo es de {0} caracteres."),
        rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
        range: jQuery.validator.format("Please enter a value between {0} and {1}."),
        max: jQuery.validator.format("El valor máximo para este campo es de {0}."),
        min: jQuery.validator.format("El valor mínimo para este campo es de {0}.")
    });



    $('.checkboxes').click(function() {
        if ($('#chckbxDescuentoPagares').is(':checked') || $('#chckbxCredito').is(':checked') || $('#chckbxPrestamo').is(':checked')) {
            $('label.error').hide();
            $('.gp_cbox ').closest('.control-group').addClass('error');
        } else {
            $('.gp_cbox ').closest('.control-group').removeClass('error');
        }
    });
    
    $('form').each(function(index, element) {
        console.log($(this));
//console.log(window[$(element).attr('name') + '_rules']);
        rules = {rules: window[$(element).attr('name') + '_rules']};
        if (undefined != window[$(element).attr('name') + '_rules']) {
            $.extend(rules, {
                highlight: function(element) {
                    $('label.error').hide();
                    //(element).closest('label').addClass('error');
                    $(element).addClass('error');
                },
                success: function(element) {
                    $('label.error').hide();
                    $(element).closest('.control-group').removeClass('error').addClass('success');
                    if ($('.success').find("#email").length) {
                        $('#errorElement').hide();
                    }
                } /*
                 submitHandler: function(form) {
                 return false;
                 }*/
            });
            $(element).validate(rules);
        }
    });

    $("#formSubHeader").validate({
        rules: {
            user: {
                required: true
            },
            password: {
                required: true
            }
        },
        highlight: function(element) {
            $('label.error').hide();
            $(element).closest('.control-group').addClass('error');
        }, /*
         submitHandler: function(form) {
         console.log('entra');
         return true;
         },*/
        success: function(element) {
            $('label.error').hide();
            $(element).closest('.control-group').removeClass('error').addClass('success');
            if ($('.success').find("#email").length) {
                $('#errorElement').hide();
            }
        }
    });
    // Validate
    // http://bassistance.de/jquery-plugins/jquery-plugin-validation/
    // http://docs.jquery.com/Plugins/Validation/
    // http://docs.jquery.com/Plugins/Validation/validate#toptions


    $('#contact-form').validate({
        rules: {
            cif: {
                required: true
            },
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            productofinanciacion: {
                required: true
            },
            chckbxDescuentoPagares: {
                required: function()
                {
                    return !$("input.checkboxes:checked").length > 0;
                }
            },
            chckbxCredito: {
                required: function()
                {
                    return !$("input.checkboxes:checked").length > 0;
                }
            },
            chckbxPrestamo: {
                required: function()
                {
                    return !$("input.checkboxes:checked").length > 0;
                }
            },
            importesolicitado: {
                required: true
            },
            facturacionanterior: {
                required: true
            }
        },
        highlight: function(element) {
            $('label.error').hide();
            $(element).closest('.control-group').addClass('error');
            $('#alert-info1').show();
            //console.log('Hay error de escritura email');

            if ($('#contact-form').find(".error").length) {
                if ($("#email").val() === '')
                {
                    $('#alert-info1').show();
                }
                else
                {
                    if ($('.error').find("#email").length) {
                        if ($("#email").val().indexOf('@', 0) === -1 || $("#email").val().indexOf('.', 0) === -1) {
                            if ($('#contact-form').find(".error").length) {
                                $('#alert-info1').show();
                                $('#errorElement').show();
                                $('label.error').hide();
                            }
                            else {
                                $('#alert-info1').hide();
                                $('#errorElement').show();
                                $('label.error').hide();
                            }
                        } else {
                            $('#alert-info1').show();
                            $('#errorElement').hide();
                            $('label.error').hide();
                        }
                    }
                }


                if (!$('#chckbxDescuentoPagares').is(':checked') && !$('#chckbxCredito').is(':checked') && !$('#chckbxPrestamo').is(':checked')) {
                    $('#errorElement2').show();
                } else {
                    $('#errorElement2').hide();
                }
            }
        },
        success: function(element) {
            $('label.error').hide();
            $(element).closest('.control-group').removeClass('error').addClass('success');
            //.text('OK!').addClass('valid')
            if ($('.success').find("#email").length) {
                $('#errorElement').hide();
            }
        }
        /*
         submitHandler: function(form) {     
         return this.submit();
         }*/
    });

    $('#Invertirform').validate({
        rules: {
            tipoinversor: {
                required: true
            },
            personacontacto: {
                required: true
            },
            email: {
                required: true
            },
            nombre_usuario: {
                required: true
            },
        },
        messages: {
            tipoinversor: {
                required: "Debe seleccionar un tipo de inversor"
            },
            razonsocial: {
                required: "Si el tipo de usuario es Inversor corporativo o Agente / Asesor Financiero, debe introducir una razón social"
                        /*required: {
                         depends: function(element) {
                         if ($("#tipoinversor").val() == "Inversor corporativo" || $("#tipoinversor").val() == "Agente / Asesor Financiero")return "Si el tipo de usuario es Inversor corporativo o Agente / Asesor Financiero, debe introducir una razón social.";
                         }
                         }*/
            },
            personacontacto: {
                required: "Debe introducir una persona de contacto"
            },
            email: {
                required: "Debe introducir una dirección de correo electrónico",
                remote: "El email proporcionado ya se encuentra en nuestras bases de datos."
            },
            reemail: {
                required: "Debe confirmar la dirección de correo electrónico.",
                equalTo: "Los emails proporcionados no se corresponden."
            },
            nombre_usuario: {
                required: "Debe introducir un nombre de usuario",
                remote: "El nombre de usuario proporcionado ya se encuentra en nuestras bases de datos."
            },
            contrasena: {
                required: "Por favor, introduzca una contraseña"
            },
            recontrasena: {
                required: "Debe introducir de nuevo la contraseña",
                equalTo: "Las contraseñas no coinciden"
            }
        },
        /*errorPlacement: function(error, element) {
         if ($(error).text()) {
         //$('#errorContainer').removeClass('hide');
         //$('#errorContainer').text($(error).text());
         $('#alert-info1').show();
         $('#alert-info1').text($(error).text());
         }
         
         },*/
        success: function(element) {
            if ($('#Invertirform').children('.error.control-group').length === 0) {
                $('#errorContainer').addClass('hide');
                $('#errorContainer').text('');
            }
        },
        unhighlight: function(element) {
            $(element).closest('.control-group').removeClass('error');
            if ($('#Invertirform').children('.error.control-group').length === 0) {
                $('#errorContainer').addClass('hide');
                $('#errorContainer').text('');
            }
            if ($("#tipoinversor").val() === "Inversor corporativo" || $("#tipoinversor").val() === "Agente / Asesor Financiero") {
                if ($('input[name=razonsocial]').val() === '') {
                    $('#Invertirform div:nth-child(2)').addClass('error');
                }
            } else {
                $('#Invertirform div:nth-child(2)').removeClass('error');
            }
        },
        highlight: function(element, second, third) {
            $(element).closest('.control-group').addClass('error');
        },
    });
}); // end document.ready


