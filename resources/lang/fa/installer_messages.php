<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title' => 'Diginova installer',
    'next' => 'بعدی',
    'back' => 'قبلی',
    'finish' => 'پایان',
    'forms' => [
        'errorTitle' => 'خطاهای زیر رخ داده است:',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => '',
        'title'   => 'دیجی نوا',
        'message' => 'نصب آسان اسکریپت دیجی نوا',
        'next'    => 'بررسی الزامات',
    ],

    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'الزامات سرور',
        'title' => 'نیازمندی ها',
        'next'    => 'بررسی پرمیشن ها',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'مجوز های دسترسی',
        'title' => 'مجوز های دسترسی',
        'next' => 'پیکربندی Environment',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'پیکربندی Environment',
            'title' => 'Environment پیکربندی ',
            'desc' => 'لطفاً نحوه پیکربندی فایل <code>env.</code> را انتخاب کنید.',
            'wizard-button' => 'پیکربندی آسان',
            'classic-button' => 'ویرایشگر متن کلاسیک',
        ],
        'wizard' => [
            'templateTitle' => 'Environment Settings | Guided Wizard',
            'title' => 'پیکربندی اسکریپت',
            'tabs' => [
                'environment' => 'Environment',
                'database' => 'دیتابیس',
                'application' => 'پیشرفته',
            ],
            'form' => [
                'name_required' => 'An environment name is required.',
                'app_name_label' => 'نام فروشگاه',
                'app_name_placeholder' => 'نام فروشگاه',
                'app_environment_label' => 'App Environment',
                'app_environment_label_local' => 'Local',
                'app_environment_label_developement' => 'Development',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Production',
                'app_environment_label_other' => 'Other',
                'app_environment_placeholder_other' => 'Enter your environment...',
                'app_debug_label' => 'وضعیت دیباگینگ',
                'app_debug_label_true' => 'فعال',
                'app_debug_label_false' => 'غیرفعال',
                'app_log_level_label' => 'App Log Level',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'critical',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'emergency',
                'app_url_label' => 'آدرس فروشگاه',
                'app_url_placeholder' => 'آدرس فروشگاه',
                'db_connection_failed' => 'خطا در اتصال به دیتابیس.',
                'db_connection_label' => 'نوع اتصال به دیتابیس',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'میزبان دیتابیس',
                'db_host_placeholder' => 'میزبان دیتابیس',
                'db_port_label' => 'درگاه دیتابیس',
                'db_port_placeholder' => 'درگاه دیتابیس',
                'db_name_label' => 'نام دیتابیس',
                'db_name_placeholder' => 'نام دیتابیس',
                'db_username_label' => 'نام کاربری دیتابیس',
                'db_username_placeholder' => 'نام کاربری دیتابیس',
                'db_password_label' => 'پسورد دیتابیس',
                'db_password_placeholder' => 'پسورد دیتابیس',

                'app_tabs' => [
                    'more_info' => 'More Info',
                    'broadcasting_title' => 'Broadcasting, Caching, Session, &amp; Queue',
                    'broadcasting_label' => 'Broadcast Driver',
                    'broadcasting_placeholder' => 'Broadcast Driver',
                    'cache_label' => 'Cache Driver',
                    'cache_placeholder' => 'Cache Driver',
                    'session_label' => 'Session Driver',
                    'session_placeholder' => 'Session Driver',
                    'queue_label' => 'Queue Driver',
                    'queue_placeholder' => 'Queue Driver',
                    'redis_label' => 'Redis Driver',
                    'redis_host' => 'Redis Host',
                    'redis_password' => 'Redis Password',
                    'redis_port' => 'Redis Port',

                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Mail Driver',
                    'mail_driver_placeholder' => 'Mail Driver',
                    'mail_host_label' => 'Mail Host',
                    'mail_host_placeholder' => 'Mail Host',
                    'mail_port_label' => 'Mail Port',
                    'mail_port_placeholder' => 'Mail Port',
                    'mail_username_label' => 'Mail Username',
                    'mail_username_placeholder' => 'Mail Username',
                    'mail_password_label' => 'Mail Password',
                    'mail_password_placeholder' => 'Mail Password',
                    'mail_encryption_label' => 'Mail Encryption',
                    'mail_encryption_placeholder' => 'Mail Encryption',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Pusher App Id',
                    'pusher_app_id_palceholder' => 'Pusher App Id',
                    'pusher_app_key_label' => 'Pusher App Key',
                    'pusher_app_key_palceholder' => 'Pusher App Key',
                    'pusher_app_secret_label' => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                ],
                'buttons' => [
                    'setup_database' => 'پیکربندی دیتابیس',
                    'setup_application' => 'پیکربندی سیستم',
                    'install' => 'نصب',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Environment Settings | Classic Editor',
            'title' => 'Classic Environment Editor',
            'save' => 'Save .env',
            'back' => 'Use Form Wizard',
            'install' => 'Save and Install',
        ],
        'title' => 'تنظیمات پیکربندی',
        'save' => 'ذخیره کردن .env',
        'success' => 'فایل .env برای شما ذخیره شد.',
        'errors' => 'ذخیره کردن فایل .env امکان پذیر نیست، لطفا آن را به صورت دستی ایجاد کنید.',
    ],

    'install' => 'نصب',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'Laravel Installer successfully INSTALLED on ',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'templateTitle' => 'Installation Finished',
        'migration' => 'Migration &amp; Seed Console Output:',
        'console' => 'Application Console Output:',
        'log' => 'Installation Log Entry:',
        'env' => 'Final .env File:',
        'title' => 'پایان نصب',
        'finished' => 'اپلیکیشن با موفقیت نصب شد.',
        'exit' => 'برای خروج اینجا را کلیک کنید',
    ],

    /*
     *
     * Update specific translations
     *
     */
    'updater' => [
        /*
         *
         * Shared translations.
         *
         */
        'title' => 'Diginova Updater',

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title'   => 'Welcome To The Updater',
            'message' => 'Welcome to the update wizard.',
        ],

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title'   => 'Overview',
            'message' => 'There is 1 update.|There are :number updates.',
            'install_updates' => 'Install Updates',
        ],

        /*
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => 'پایان',
            'finished' => 'دیتابیس فروشگاه با موفقیت بروزرسانی شد',
            'exit' => 'برای خروچ اینجا کلیک کنید',
        ],

        'log' => [
            'success_message' => 'Laravel Installer successfully UPDATED on ',
        ],
    ],
];
