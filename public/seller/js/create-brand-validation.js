var CategoryFormAction = {
    init: function () {
        this.initForgotForm();
    },

    initForgotForm: function () {
        const $form = $('#brand_form');

        if (!$form.length) {
            return;
        }

        $('#submit-form').click(function () {
            $form.submit();
        });

        $form.find('input').first().focus();

        $form.validate({
            rules: {
                'name': {
                    required: true,
                },

                'en_name': {
                    required: true,
                },

                'slug': {
                    required: true,
                },

                'description': {
                    required: true,
                },

                'category': {
                    required: true,
                },

                'image': {
                    required: true,
                }
            },
            messages: {
                'name': {
                    'required': 'وارد نمودن نام دسته اجباری است',
                },

                'en_name': {
                    'required': 'وارد نمودن نام انگلیسی دسته اجباری است',
                },

                'slug': {
                    'required': 'وارد نمودن نامک اجباری است',
                },

                'category': {
                    'required': 'وارد نمودن گروه کالایی فعال برند اجباری است',
                },

                'description': {
                    'required': 'وارد نمودن شرح برند اجباری است',
                },

                'image': {
                    'required': 'بارگزاری تصویر برای لوگوی برند اجباری است',
                }
            },
            errorPlacement: function (error, element) {
                if (element.attr("name") == "name" || element.attr("name") == "en_name" || element.attr("name") == "description"){
                    error.insertAfter(element).addClass('error-msg');
                }
                else if(element.attr("name") == "slug"){
                    error.insertAfter(element).addClass('has-error error-msg');

                }
                else if(element.attr("name") == "category"){
                    error.appendTo(".js-selected-category").addClass('error-text');
                }

                else if(element.attr("name") == "image"){
                        error.appendTo(".c-content-upload__title").addClass('error-text').css('display', 'inline-block');
                }


            },
        }).showBackendErrors();
    },
};

$(function () {
    CategoryFormAction.init();
});
