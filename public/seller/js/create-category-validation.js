var CategoryFormAction = {
    init: function () {
        this.initForgotForm();
    },

    initForgotForm: function () {
        const $form = $('#category_form');

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
                    'required': 'انتخاب دسته اجباری است',
                },

                'image': {
                    'required': 'انتخاب دسته اجباری است',
                }
            }
        }).showBackendErrors();
    },
};

$(function () {
    CategoryFormAction.init();
});
