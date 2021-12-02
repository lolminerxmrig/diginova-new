/*[PATH @digikala/supernova-digikala-marketplace/assets/local/js/controllers/registerController/confirmEmailAction.js]*/
let RegisterConfirmEmailAction = {
    init: function () {
        this.initNewConfirmEmailForm();
        this.initResendCode();
        this.initCountDownForResend();
        this.initCodeInput();
        this.initCountDownVisualTimer();
    },

    initResendCode: function () {
        const context = this;

        $('#resend-email-verification-code').on('click', function requestVerificationCode(e)
        {
            e.preventDefault();

            Services.ajaxPOSTRequestJSON(
                '/ajax/registration/code/',
                { type: 'email' },
                function () {
                    window.timeLeft = 60 * 5;
                    context.initCountDownForResend();
                    context.initCountDownVisualTimer();
                },
                function () {},
                false,
                true
            );
        });
    },

    initCountDownForResend: function () {
        window.timeLeft = window.timeLeft * 1000;

        const time = setInterval(function () {
            countDown();
        }, 1000);

        function countDown()
        {
            const element = $('#timer');
            let minutes, seconds;

            if (window.timeLeft <= 0) {
                window.timeLeft = 0;
                clearInterval(time);
                element.addClass('uk-hidden');
                element.text('');
                return;
            }

            window.timeLeft -= 1000;
            minutes = Math.floor(window.timeLeft / (1000 * 60));
            seconds = Math.floor((window.timeLeft % (1000 * 60)) / 1000);

            if (seconds < 10) {
                seconds = '0' + seconds;
            }
            minutes = '0' + minutes;
            element.removeClass('uk-hidden').text(minutes + ':' + seconds);
        }
    },

    initNewConfirmEmailForm: function () {
        const $form = $('#email-form');

        $('#btnSubmit').click(function submitForm()
        {
            $form.submit();
        });

        $form
            .find('input')
            .first()
            .focus();

        $form
            .validate({
                rules: {
                    'register[code]': {
                        required: true,
                        minlength: 4,
                        maxlength: 4,
                    },
                },
                messages: {
                    'register[code]': {
                        required: 'وارد نمودن کد تایید اجباری می‌باشد',
                        minlength: 'کد اعتبار سنجی می‌بایست حداقل ۴ رقم باشد',
                        maxlength: 'کد اعتبار سنجی می‌بایست حداکثر ۴ رقم باشد',
                    },
                },
            })
            .showBackendErrors();
    },

    initCodeInput: function () {
        const $input = $('[name="register[code]"]');
        const $codeWrapper = $input.siblings('.c-ui-input__code');
        const $codes = $codeWrapper.children();
        const activeClass = 'c-ui-input__code-digit--active';
        var submitted = false;

        $input.val('');

        $input.on('input focus change paste keyup', function controlCodeEvents()
        {
            if(submitted)
                return;
            const value = $(this).val();
            if (value.length > $codes.length) {
                $(this).val(value.slice(0, $codes.length));
            }

            $codes.each(function checkActiveCodeItem(index, item)
            {
                item.textContent = value[index] || '';

                const isActive =
                    (index === 0 && value.length === 0) ||
                    (index > 0 && value.length === index) ||
                    (index === value.length - 1 && index === $codes.length - 1);

                isActive ? item.classList.add(activeClass) : item.classList.remove(activeClass);
            });

            if (value.length === $codes.length) {
                submitted = true;
                $input.closest('form').submit();
            }
        });

        $input.on('blur', function iterateCodeItems()
        {
            $codes.each(function removeActiveClass(index, item)
            {
                item.classList.remove(activeClass);
            });
        });
    },

    initCountDownVisualTimer: function () {
        let $timerContainer;
        let timerControl;

        if (window.timeLeft) {
            $timerContainer = $('#countdown-target');
            timerControl = setInterval(updateTimer, 1000);

            updateTimer();
        }

        function timerContent(time)
        {
            const minutes = Math.floor(time / (1000 * 60));
            let seconds = Math.floor((time % (1000 * 60)) / 1000);

            if (seconds < 10) {
                seconds = '0' + seconds;
            }
            return Services.convertToFaDigit('<span>' + minutes + ':' + seconds + '</span> ثانیه');
        }

        function insertTimer(time, $container)
        {
            const $timerTemplate = '<div class="c-reg-form__timer">' + timerContent(time) + '</div>';

            $container.children().css({ visibility: 'hidden' });
            $container.append($timerTemplate);
        }

        function removeTimer($timer, $container)
        {
            $timer.remove();
            $container.children('p').css({ visibility: 'visible' });

            clearInterval(timerControl);
        }

        function updateTimer()
        {
            const $timer = $timerContainer.children('.c-reg-form__timer');
            const isCounterMounted = $timer.length;

            if (window.timeLeft) {
                isCounterMounted
                    ? $timer.html(timerContent(window.timeLeft))
                    : insertTimer(window.timeLeft, $timerContainer);
            } else if (!window.timeLeft && isCounterMounted) {
                removeTimer($timer, $timerContainer);
            }
        }
    },
};

$(function () {
    RegisterConfirmEmailAction.init();
});
