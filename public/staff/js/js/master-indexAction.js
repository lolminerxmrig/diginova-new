/*[PATH @digikala/supernova-digikala-marketplace/assets/local/js/controllers/productsController/indexAction.js]*/
ProductsAction = {
    init: function () {
        var functions = [
            this.initProductTitle,
            this.initProductActions,
            this.initProductList,
            this.initCommonSelect,
            this.initWatchFilterChanges,
            this.initFilter,
            this.initFilterBar
        ];

        var self = this;

        $(functions).map(function (index, item) {
            item = item.bind(self);

            try {
                item();
            } catch (e) {
                window.Sentry && window.Sentry.captureException(e);
                // eslint-disable-next-line no-console
                console.warn(e);
            }
        });
    },

    initCommonSelect: function () {
        let $form = $('.js-search-product-form');
        if (!$form.length) return;

        Services.commonSelect2();
    },

    initProductTitle: function () {
        $('.js-product-ajax').select2({
            ajax: {
                url: '/ajax/product/suggest/',
                data: function (params) {
                    return {
                        query: params.term
                    };
                }
            }
        });
    },

    initProductActions: function () {

        $(document).on('click', '.js-rejected-reason-icon', function () {
            let $id = $(this).data('id');

            Services.ajaxPOSTRequestHTML(
                '/ajax/product/getrejectionreason/',
                {
                    'product_id': $id
                },
                function (response) {
                    let content = '<h2>آخرین توضیحات</h2>';
                    let data = '';
                    const duplicateProductId = response.data[0].duplicate_product_id;
                    const productUrl = response.data[0].product_url;
                    if (duplicateProductId != null && productUrl != null) {
                        content += "<h5>کالای شما با کالایی که قبلا در سایت وجود داشته با شماره " +
                            "<a href='" + productUrl + "'>" + duplicateProductId + "</a>" +
                            " مشابه است. لطفا از این کالا برای قیمت‌گذاری استفاده کنید.</h5>"
                    } else {
                        if (response.data[0].description != null) {
                            data += response.data[0].description + '\n';
                        }

                        $.each(response.data[0].reasons, function (index, item) {
                            data += '<p>' + item + '</p>';
                        });
                        content += "<h5>برای مشاهده دلایل رد کالا روی \"ویرایش محصول\" کلیک کنید</h5>" + data
                    }

                    UIkit.modal.alert("<div class='modal-confirm'><span class='modal-confirm-icon' uk-icon='icon: warning; ratio: 5'></span>" +
                        content +
                        "</div>", {
                            labels: {
                                'ok': 'تایید'
                            }
                    });

                    $('.modal-confirm').parent().siblings('.uk-modal-footer').removeClass('uk-text-right').addClass('uk-text-center').css('border', 'none');
                },
                false,
                true
            );
        });
        $(document).on('click', '.js-publish', function () {
            let $id = $(this).data('id');
            Services.ajaxPOSTRequestHTML(
                '/ajax/product/publish/',
                {
                    'productId': $id
                },
                function (response) {
                    if (response.status == false) {
                        UIkit.notification(__(response.data), {
                            status: 'danger',
                            pos: 'bottom-right',
                            timeout: 5000
                        });
                    } else {
                        UIkit.notification('درخواست انتشار شما با موفقیت انجام شد', {
                            status: 'success',
                            pos: 'bottom-right',
                            timeout: 5000
                        });

                        Services.ajaxPOSTRequestHTML(
                            $('.js-search-table').data('search-url'),
                            $.extend(
                                {
                                    sortColumn: $('.js-search-table').data('sort-column'),
                                    sortOrder: $('.js-search-table').data('sort-order'),
                                    items: 10,
                                    page: 1
                                },
                                [],
                                []
                            ),
                            function (data) {
                                $('.js-table-container').replaceWith(data);
                            },
                            false,
                            true
                        );
                    }
                },
                false,
                true
            );
        })
    },
    initProductList: function () {
        var publish_alert = function () {
            var publishAlertContent = $(' <div  class="yellow-alert publish-alert" uk-alert><p>محصول با وضعیت پیش‌نویس فقط برای شما قابل نمایش است و توسط مرکز فروشندگان قابل رویت نیست. محصول پیش‌نویس خود را انتشار داده و منتظر تأیید آن باشید.<a href="/product/create/" >درج محصول جدید</a></p></div>');
            if($('.js-publish').length > 0) {
                if (!$('.publish-alert').length > 0) {
                    publishAlertContent.insertAfter('.c-filters');
                }
            }
        };
        $(function () {
            $(document).on('click', '.js-search-pager', function () {
                publish_alert();
            });
            publish_alert();
        });
    },
    initExportForImport: function () {
        var exportForImportBtn = document.querySelector('#export_for_import_button');
        var searchForm = document.querySelector('#searchForm');
        if (!(exportForImportBtn && searchForm)) return;

        var $searchForm = $(searchForm);

        exportForImportBtn.addEventListener('click', setImportUrl);

        function setImportUrl() {
            this.href = this.dataset.href + '?' + $searchForm.serialize();
        }
    },
    initMassUpload: function () {
        var massUploadBtn = document.querySelector('#import-button');
        if (!massUploadBtn) return;

        var massInputFile = massUploadBtn.parentNode.querySelector('#mass-import');
        if (!massInputFile) return;

        massUploadBtn.style.cssText = 'width: ' + (massUploadBtn.offsetWidth + 20) + 'px !important';

        var url = '/ship-by-seller/import/';
        var labelInitialText = massUploadBtn.innerText;
        var modalWrapperClass = '.js-common-modal-notification';
        var reloadText = 'بارگذاری مجدد';
        var refreshErrorBtn = {
            text: reloadText,
            cb: function toggleUpload(e) {
                e.preventDefault();

                UIkit.modal(modalWrapperClass).hide();
                $(massUploadBtn).click();
            },
            classes: ['reload']
        };

        var successBtn = {
            text: 'جزییات بارگذاری',
            url: '/imports/'
        };

        UIkit.upload('#' + massInputFile.id, {
            url: url,
            multiple: false,
            method: 'POST',
            beforeSend: function (xhr) {
                massUploadBtn.classList.remove('reload');
                massUploadBtn.classList.add('is-loading');
                massInputFile.disabled = true;
                massUploadBtn.innerText = 'بارگذاری فایل اکسل …';
            },

            error: function () {
                showServerError(
                    'فروشنده گرامی،',
                    'بارگذاری فایل شما با خطا مواجه شده است. لطفاً مجدداً تلاش نمایید.',
                    [refreshErrorBtn]
                );
                massUploadBtn.classList.add('reload');
                massUploadBtn.innerText = reloadText;
                resetBtn(true);
            },

            progress: function (e) {
                var progressPercent = Math.floor((e.loaded / e.total) * 100);
                massUploadBtn.innerText = 'بارگذاری فایل اکسل ' + window.Services.convertToFaDigit(progressPercent) + '٪';
            },

            complete: function () {
                var result = jQuery.parseJSON(arguments[0].response);
                if (result.status === false) {
                    showServerError(
                        'فروشنده گرامی،',
                        result.data,
                        true
                    );
                    resetBtn();
                    massUploadBtn.innerText = labelInitialText;
                    massUploadBtn.classList.add('disabled');
                    massInputFile.querySelector('input').disabled = true;
                } else if (result.status === true) {
                    Services.commonModalNotification(
                        'فروشنده گرامی،',
                        'بارگذاری با موفقیت انجام شد. پس از بررسی فایل، نتیجه به شما اطلاع داده خواهد شد.',
                        'success'
                    );
                    resetBtn();
                    massUploadBtn.innerText = labelInitialText;
                } else {
                    showServerError(
                        'فروشنده گرامی،',
                        'بارگذاری فایل شما با خطا مواجه شده است. لطفاً مجدداً تلاش نمایید.',
                        [refreshErrorBtn]
                    );
                    massUploadBtn.classList.add('reload');
                    massUploadBtn.innerText = reloadText;
                    resetBtn(true);
                }
            },
        });

        function showServerError(title, errMsg, actions) {
            window.Services.commonModalNotification(
                title, errMsg, 'error', actions
            );
        }

        function resetBtn(reset) {
            massUploadBtn.classList.remove('is-loading');
            if (reset) {
                input.disabled = false;
            }
        }
    },

    initWatchFilterChanges: function () {
        let $form = $('.js-search-product-form');
        if (!$form.length) return;

        $form.find('select').on('change', function () {
            $form.find('#submitButton').attr('disabled', false);
        });

        $form.find('[name="search[value]"]').on('input', function () {
           if ($(this).val() !== '') {
               $form.find('#submitButton').attr('disabled', false);
           } else {
               $form.find('#submitButton').attr('disabled', true);
           }
        });
    },

    initFilter: function () {
        let $form = $('.js-search-product-form');
        let $this = this;
        if (!$form.length) return;
        let inputFilter = $('input[name="search[value]"]');
        let $filterBar = $('#searchFilterBar');

        $('#submitButton').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (inputFilter.val() !== '') {
                let $filterItem = $filterBar.find('div[name="search[type]"]');
                let $searchType = $('select[name="search[type]"]').select2('data')[0].text;
                $filterItem.find('.js-selected-filter').html(inputFilter.val());
                $filterItem.find('.js-filter-title').html($searchType + ':');
                $filterItem.removeClass('uk-hidden');
                $filterBar.removeClass('uk-hidden');
            }
        })
    },

    initFilterBar: function () {
        let $this = this;
        let $form = $('.js-search-product-form');
        if (!$form.length) return;
        let $filterBar = $('#searchFilterBar');

        $form.find('select').on('change', function () {
            if ($(this).attr('name') !== 'search[type]') {
                let barItem = $(this).attr('name');
                let barItemVal = $(this).select2('data')[0].text;
                let $filterItem = $filterBar.find(`div[name="${barItem}"]`);
                if (barItemVal !== 'انتخاب کنید') {
                    $filterItem.find('.js-selected-filter').html(barItemVal);
                    $filterItem.removeClass('uk-hidden');
                    $filterBar.removeClass('uk-hidden');
                    $('#submitButton').click();
                } else {
                    $filterItem.find('.js-remove-filter').click();
                }
            }
        });

        $('input[name="search[fake_status]"]').on('input', function () {
            let $filterItem = $filterBar.find('div[name="search[fake_status]"]');
            $filterItem.find('.js-selected-filter').html($(this).siblings('span').html());
            $filterItem.removeClass('uk-hidden');
            $filterBar.removeClass('uk-hidden');
            $('#submitButton').click();
        });

        $('.js-remove-filter').on('click', function () {
            let activeFilters = $('.js-filter-bar-item.uk-hidden').length;
            if (activeFilters < 4) {
                let $barItemContainer = $(this).parent();
                let $filterName = $barItemContainer.attr('name');
                let $filter = $form.find(`select[name="${$filterName}"]`);
                $(this).siblings('js-selected-filter').html('');
                $filter.val('');
                $filter.trigger('change.select2');
                $barItemContainer.addClass('uk-hidden');
                $('#submitButton').click();
            } else {
                $('.js-remove-all-filters').click();
            }
        });

        $('.js-remove-all-filters').on('click', function () {
            $(this).parents('#searchFilterBar').addClass('uk-hidden');
            $('#searchForm').trigger('reset');
            $('#searchFilterBar').find('.js-filter-bar-item').each(function (index, item) {
                if (!$(item).hasClass('uk-hidden')) {
                    let filterName = $(item).attr('name');
                    let $filterSelect = $form.find(`select[name="${filterName}"]`);
                    $(item).addClass('uk-hidden');
                    $filterSelect.val('');
                    $filterSelect.trigger('change.select2');
                    $('#submitButton').click();
                }
            });
        });
    },
};

$(function () {

    ProductsAction.init();
});



/*[PATH @digikala/supernova-digikala-marketplace/assets/local/js/tableView.js]*/
window.TableView = {
    init: function () {
        this.tableDefaultEmpty = false;
        this.searchFormDefaultArray = [];
        this.searchFormArray = [];
        this.searchFormSubmitted = false;
        this.staticFormData = [];
        this.initStaticFormData();
        this.initPrepareSearchRadioGroup();
        this.initSearchForm();
        this.initDataSetTable();
        this.initExpandTables();

        if (this.isNewUI()) {
            this.initSelect2();
        }

        this.initOnEndEvent();
    },

    serializeForm: function () {
        let $form = $('#searchForm');
        let $formArray = $form.serializeArray();
        let $formArrayFixed = {};
        for (let i = 0; i < $formArray.length; i++) {
            $formArrayFixed[$formArray[i]['name']] = $formArray[i]['value'];
        }
        return $formArrayFixed;
    },

    initSearchForm: function () {
        const $that = this;
        const $form = $('#searchForm');
        const $submitBtn = $('#submitButton');
        const $typeSelect = $('.js-select-type');
        const $statusSelect = $('.js-select-status');

        if (!$form.length) {
            return;
        }

        $that.searchFormArray = $that.serializeForm();
        $that.searchFormDefaultArray = $that.serializeForm();

        $('.js-persian-date-picker').persianDatepicker({
            initialValue: false,
            autoClose: true,
            format: 'YYYY/MM/DD'
        });

        // To manually configure date picker for the page
        if ($('.js-order-history-search-input').length) {
            $('.js-persian-date-picker').persianDatepicker({
                initialValue: false,
                autoClose: true,
                format: 'YYYY/MM/DD',
                observer: true,
                onSelect: function () {
                    $(this.model.inputElement).trigger('change');
                },
            });
        }

        $submitBtn.click(function () {
            if ($that.tableDefaultEmpty) {
                return false;
            }

            let $currentFormArray = $that.serializeForm();
            if (JSON.stringify($that.searchFormArray) === JSON.stringify($currentFormArray) && !window.canSearchWithNoChange) {
                return false;
            }

            $that.searchFormArray = $currentFormArray;
            $that.searchFormSubmitted = true;
            $that.search(1, $that.getItemsPerPage());

            // return false;
        });

        $form.on('submit', function (e) {
            e.preventDefault();
            $submitBtn.click();
        });


        if ($typeSelect.length) {
            $typeSelect.on('change', function (e) {
                e.preventDefault();
                $submitBtn.click()
            });
        }

        if ($statusSelect.length) {
            $statusSelect.on('change', function (e) {
                e.preventDefault()
                $submitBtn.click();
            })


        }

        $(document).on('click', '#export-button', function () {
            $that.requestExport($that.serializeForm(), $that.staticFormData);
            return false;
        });

        $('#export-invoice-button').click(function () {
            if ($that.tableDefaultEmpty) {
                return false;
            }

            let $currentFormArray = $that.serializeForm();
            if (JSON.stringify($that.searchFormArray) === JSON.stringify($currentFormArray)) {
                return false;
            }

            //TODO STUPID
            $that.searchFormArray = $currentFormArray;
            window.Services.ajaxPOSTRequestHTML(
                '/sellerinvoice/printinvoices/',
                $that.searchFormArray,
                function (response) {
                    if (response) {
                        window.open('/sellerinvoice/printinvoices/?order_created_at_from=' + $that.searchFormArray['search[order_created_at_from]']);
                    }
                }
            );

            return false;
        });

        $('#resetButton').click(function () {
            if ($that.tableDefaultEmpty) {
                return false;
            }

            const $productVariantAjax = $('.js-select2, .js-product-variant-ajax');
            if (!$that.searchFormSubmitted) {
                let $currentFormArray = $that.serializeForm();
                if (JSON.stringify($that.searchFormDefaultArray) === JSON.stringify($currentFormArray)) {
                    return false;
                }

                $form[0].reset();
                $productVariantAjax.val('').trigger('change');

                return false;
            }

            $form[0].reset();
            $productVariantAjax.val('').trigger('change');

            $that.searchFormArray = $that.serializeForm();
            $that.searchFormSubmitted = false;
            $that.search(1, $that.getItemsPerPage());

            return false;
        });
    },

    initDataSetTable: function () {
        const $searchTable = $('.js-search-table');

        if (!$searchTable.length) {
            return;
        }

        const $that = this;

        $(document).on('click', '.js-search-table-column-sortable', function () {
            $that.search($that.getCurrentPage(), $that.getItemsPerPage(), $(this).data('sort-column'), $(this).data('sort-order'));
        });

        $(document).on('click', '.js-search-pager a', function () {
            const $page = $(this).data('page');
            if ($page === $that.getCurrentPage()) {
                return;
            }

            const $searchUpdatedTable = $('.js-search-table');

            $that.search($page, $that.getItemsPerPage(), $searchUpdatedTable.data('sort-column'), $searchUpdatedTable.data('sort-order'));
        });

        $(document).on('change', '.js-search-items-per-page', function () {
            $that.search(1, $(this).val());
        });

        if (this.isNewUI) {
            if (this.isHeaderFloating()) {
                this.fixTableHeader();
            }

            if (this.hasCheckboxes()) {
                this.initRowSelection();
            }

            if (this.hasTooltips()) {
                this.initTooltips();
            }
        }

        if ($that.reloadInSeconds()) {
            setInterval(
                function () {
                    window.location.reload();
                },
                $that.reloadInSeconds() * 1000
            );
        }
    },

    initStaticFormData: function () {
        let $that = this;

        $('.js-static-form-data').each(function () {
            $that.staticFormData[$(this).attr('name')] = $(this).val();
        });
    },

    getCurrentPage: function () {
        let $aPage = $('ul.js-search-pager li.uk-active:first a');
        let $page;

        if ($aPage !== 'undefined' && ($page = $aPage.data('page'))) {
            return $page;
        }

        return 1
    },

    getSearchUrl: function (selector) {
        selector = selector || '.js-search-table';
        return $(selector).data('search-url');
    },

    getExportUrl: function () {
        return $('.js-search-table').data('export-url');
    },

    getItemsPerPage: function () {
        return $('.js-search-items-per-page:first').val();
    },

    isNewUI: function () {
        return $('.js-search-table').data('new-ui');
    },

    isHeaderFloating: function (tableSelector) {
        tableSelector = tableSelector || '.js-search-table';

        let $table = $(tableSelector);
        if (!isTable($table)) {
            $table = $table.find('table');
        }
        if ($table.length == 0 || !isTable($table)) {
            return;
        }
        return $table.data('is-header-floating');

        function isTable($el) {
            return $el[0].tagName === 'TABLE';
        }
    },

    hasCheckboxes: function (tableSelector) {
        tableSelector = tableSelector || '.js-search-table';

        let $table = $(tableSelector);
        if (!isTable($table)) {
            $table = $table.find('table');
        }
        if ($table.length == 0 || !isTable($table)) {
            return;
        }
        return $('.js-search-table').data('has-checkboxes');

        function isTable($el) {
            return $el[0].tagName === 'TABLE';
        }
    },

    hasTooltips: function () {
        return $('.c-ui-table__tooltip').length > 0;
    },

    reloadInSeconds: function () {
        return $('.js-search-table').data('auto-reload-seconds');
    },

    initExpandTables: function () {
        const $this = this;
        const tables = document.querySelectorAll('.c-ui-table');
        if (!tables) {
            return;
        }

        for (let i = 0, len = tables.length; i < len; i++) {
            $this.initTable(tables[i]);
        }
    },

    initTable: function (table) {
        let tableHeight = {value: null};

        if (table.classList.contains('js-table-expandable')) {
            this.expandTable(table, tableHeight);
        }
    },

    expandTable: function (table, tableHeight) {
        const tableClasses = {
            expander: 'c-ui-table__expander',
            togglerActive: 'c-ui-table__expander-control--expanded',
            hiddenRow: 'c-ui-table__expand-row--hidden',
        };
        let controls;
        let expandebles;
        let allToggle;
        const rowControls = table.querySelectorAll('tbody .' + tableClasses.expander);

        if (rowControls) {
            controls = [];
            expandebles = [];

            for (let i = 0, len = rowControls.length; i < len; i++) {
                rowControl(rowControls[i], controls, expandebles);
            }

            const allControl = table
                .querySelector('thead .' + tableClasses.expander);
            if (!allControl || !controls.length) {
                return;
            }

            allToggle = allControl.querySelector('.' + tableClasses.expander + '-control');
            if (!allToggle) {
                return;
            }

            allToggle.isExpanded = isExpanded(controls);
            controlClass(allToggle.classList, tableClasses.togglerActive, allToggle.isExpanded);
            toggleRowClass(allToggle.classList, allToggle.isExpanded);

            allToggle.addEventListener('click', function () {
                const expanded = !this.isExpanded;

                this.isExpanded = expanded;
                controlClass(this.classList, tableClasses.togglerActive, expanded);

                for (let i = 0, len = controls.length; i < len; i++) {
                    triggerControls(controls[i]);
                }

                toggleTargetRowsClass(expandebles, expanded);

                function triggerControls(control) {
                    control.isExpanded = expanded;
                    controlClass(control.classList, tableClasses.togglerActive, expanded);
                }
            });
        }

        function rowControl(control) {
            const toggler = control.querySelector('.' + tableClasses.expander + '-control');
            let expandableRows;

            if (toggler) {
                toggler.isExpanded = false;
                controlClass(toggler.classList, tableClasses.togglerActive, toggler.isExpanded);
                controls.push(toggler);

                const targetId = control.dataset.expand;
                if (!targetId) {
                    return;
                }

                expandableRows = table.querySelectorAll('[data-expand-target="' + targetId + '"]');
                if (!expandableRows) {
                    return;
                }

                for (let i = 0, len = expandableRows.length; i < len; i++) {
                    expandebles.push(expandableRows[i]);
                }

                toggler.addEventListener('click', toggleExpandableRows);
            }

            function toggleExpandableRows() {
                const controlExpanded = !this.isExpanded;
                this.isExpanded = controlExpanded;

                controlClass(this.classList, tableClasses.togglerActive, controlExpanded);
                toggleTargetRowsClass(expandableRows, controlExpanded);

                if (allToggle) {
                    const allExpanded = isExpanded(controls);
                    controlClass(
                        allToggle.classList,
                        tableClasses.togglerActive,
                        allExpanded
                    );
                    allToggle.isExpanded = allExpanded;
                }
            }

        }


        function controlClass(nodeClassList, className, expand) {
            nodeClassList[expand ? 'add' : 'remove'](className);
        }

        function isExpanded(arrOfNodes) {
            return arrOfNodes.some(checkExpand);
        }

        function checkExpand(node) {
            return node.isExpanded;
        }

        function toggleTargetRowsClass(nodes, show) {
            for (let i = 0, len = nodes.length; i < len; i++) {
                toggleRowClass(nodes[i].classList, show);
            }
            tableHeight.value = table.offsetHeight;
        }

        function toggleRowClass(nodeClassList, show) {
            nodeClassList[show ? 'remove' : 'add'](tableClasses.hiddenRow);
        }
    },

    search: function ($page, $itemsPerPage, $sortColumn, $sortOrder, $urlSelector, $containerSelector) {
        const $that = this;

        $containerSelector = $containerSelector || '.js-table-container';
        $($containerSelector + ' .c-loading').removeClass('c-loading--hidden');
        $($containerSelector + ' .c-card__loading').addClass('is-active');

        Services.showLoader = function () {
        };
        Services.hideLoader = function () {
        };
        let params = {};
        (new URL(location.href))
            .searchParams
            .forEach(function (v, k) {
                params[k] = v
            });
        let $loader = $('#pageLoader');
        if ($loader.length) {
            $('#pageLoader').addClass('c-content-loading');
            $('html').addClass('c-loader-overflow');
        }

        window.Services.ajaxPOSTRequestHTML(
            $that.getSearchUrl($urlSelector),
            $.extend(
                {
                    sortColumn: $sortColumn,
                    sortOrder: $sortOrder,
                    items: $itemsPerPage,
                    page: $page,
                    params: params
                },
                $that.searchFormArray,
                $that.staticFormData
            ),
            function (data) {
                $containerSelector = $containerSelector || '.js-table-container';
                $($containerSelector).replaceWith(data);
                window.ga('send', 'pageview');
                if ($that.isNewUI()) {
                    $that.initSelect2($containerSelector);

                    if ($that.isHeaderFloating($containerSelector)) {
                        $that.fixTableHeader($containerSelector);
                    }

                    if ($that.hasCheckboxes()) {
                        $that.initRowSelection();
                    }
                }

                const tables = document.querySelectorAll('.c-ui-table');
                if (!tables) {
                    return;
                }

                for (let i = 0, len = tables.length; i < len; i++) {
                    $that.initTable(tables[i]);
                }

                $($containerSelector).trigger('onSearchFinished');

                if ($loader.length) {
                    $('#pageLoader').removeClass('c-content-loading');
                    $('html').removeClass('c-loader-overflow');
                    Services.commonSelect2();
                }

                var $expandBtn = $('.js-expand-comment'),
                    $expandRow = $('.js-expanded-row');
                if ($expandBtn.length && $expandRow.length) {
                    $expandBtn.on('click', function () {
                        // toggle class of expand button parent row
                        $(this).parents('tr').toggleClass('c-profile-rating__expanded-product-row');

                        var expandeData = $(this).parent('td').data('expand'),
                            expandedRow = $(this).parents('tr').next();

                        $(this).toggleClass('c-ui-table__expander-control--expanded');
                        expandedRow.toggleClass('c-ui-table__expand-row--hidden');
                    });
                }
            },
            false,
            true
        );
    },

    requestExport: function ($searchFormArray, $staticFormData, $sortColumn, $sortOrder, $url) {
        $url = $url || this.getExportUrl();
        window.Services.ajaxPOSTRequestJSON(
            $url,
            $.extend(
                {
                    sortColumn: $sortColumn,
                    sortOrder: $sortOrder
                },
                $searchFormArray,
                $staticFormData
            ),
            function (data) {
                window.UIkit.modal.alert("<div class='modal-confirm'><span class='modal-confirm-icon' uk-icon='icon: warning; ratio: 5'></span> <h2></h2></div> " + data, {
                    labels: {
                        'ok': 'تایید'
                    }
                });
                $('.modal-confirm').parent().siblings('.uk-modal-footer').removeClass('uk-text-right').addClass('uk-text-center').css('border', 'none');
            },
            false,
            true
        );
    },

    initSelect2: function (containerSelector) {
        const $selects = containerSelector
            ? $(containerSelector).find('.js-search-items-per-page, .c-ui-select--common')
            : $('.js-search-items-per-page, .c-ui-select--common');

        if ($selects.length) {
            for (let i = 0, len = $selects.length; i < len; i++) {
                const $select = $($selects[i]);
                // const $dropdown = $select.siblings('.js-select-options').length > 0 && $select.siblings('.js-select-options') || null;
                $select.select2({
                    placeholder: $select.attr('placeholder'),
                    dropdownParent: null,
                    minimumResultsForSearch: $select.hasClass('c-ui-select--search') ? 0 : Infinity,
                    language: window.Services.selectSearchLanguage
                }).data('select2').$dropdown.addClass('c-ui-select__dropdown c-ui-select__dropdown--gap');

            }
        }
    },

    fixTableHeader: function (containerSelector) {
        containerSelector = containerSelector || '.js-table-container';

        const container = document.querySelector(containerSelector);
        const tables = container.querySelectorAll('.js-search-table');
        let navbarHeight;
        let posY;

        tables.forEach(function initTable(table) {
            let transformed;
            let ticker;

            const headerRow = table.querySelector('thead .c-ui-table__row');
            if (!headerRow) {
                return;
            }

            const headers = headerRow.querySelectorAll('.c-ui-table__header');
            if (headers) {
                if (!navbarHeight) {
                    const nav = document.querySelector('.js-header-nav');
                    navbarHeight = nav ? nav.clientHeight : 0;
                }
                posY = posY || window.scrollY;
                transformed = false;
                ticker = false;

                window.addEventListener('scroll', fixTableHeader);
            }

            function fixTableHeader() {
                posY = window.scrollY;
                if (!ticker) {
                    window.requestAnimationFrame(animateHeader);
                    ticker = true;
                }
            }

            function animateHeader() {
                setHeaderPosition();
                ticker = false;
            }

            function setHeaderPosition() {
                const MIN_POSITION = 300;
                const scrolled = posY;
                const tablePositionY = offsetTop(table, scrolled);
                const fromTop = navbarHeight + scrolled;
                const minShift = tablePositionY + table.scrollHeight - MIN_POSITION;

                if (fromTop > minShift) {
                    return;
                }
                if (fromTop >= tablePositionY) {
                    const translateY = Math.floor(fromTop - tablePositionY);
                    const transformValue = 'transform: translate3d(0, ' + translateY + 'px, 0);';

                    assignTransformToElements(headers, transformValue);
                    transformed = true;
                } else if (transformed) {
                    const transformValue = 'transform: none;';

                    assignTransformToElements(headers, transformValue);
                    transformed = false;
                }
            }
        });

        function assignTransformToElements(nodes, style) {
            for (let i = 0, length = nodes.length; i < length; i++) {
                nodes[i].style = style;
            }
        }

        function offsetTop(node, shiftY) {
            return node.getBoundingClientRect().top + shiftY;
        }
    },

    initTooltips: function () {
        $(document).on('mouseenter', '.c-ui-table__info', function () {
            const $info = $(this);
            const $tooltip = $info.find('.c-ui-table__tooltip');
            const $wrapper = $tooltip.closest('.c-ui-table');
            let $visibleTooltip = null;

            $tooltip.show();
            const style = {
                top: $tooltip.offset().top,
                left: $tooltip.offset().left,
                height: $tooltip.innerHeight(),
                display: 'block',
            };
            $visibleTooltip = $tooltip.clone().css(style).appendTo('body');
            $tooltip.removeAttr("style");

            $wrapper.on('scroll', detectScroll);
            $(document).on('scroll', detectScroll);
            $info.on('mouseleave', detectScroll);

            function detectScroll() {
                if (!$visibleTooltip) {
                    return;
                }

                /** @var $visibleTooltip.remove() */
                $visibleTooltip.remove();
                $wrapper.off('scroll', detectScroll);
                $(document).off('scroll', detectScroll);
            }
        });
    },

    initRowSelection: function (containerSelector) {
        containerSelector = containerSelector || '.c-ui-table';
        const checkboxesSelector = containerSelector + ' .c-ui-checkbox__origin';
        const $rowCheckboxes = $(checkboxesSelector);

        if (!($rowCheckboxes.length > 1)) {
            return;
        }

        $(document).on('change', checkboxesSelector, function () {
            const $toggledCheckbox = $(this);
            const $table = $toggledCheckbox.closest('.c-ui-table');
            const $checkboxes = $table.find('input:checkbox');
            let enabledCreateBtn = false;
            let isAllChecked = true;

            if ($checkboxes[0] === this) {
                enabledCreateBtn = this.checked;

                for (let i = 1, len = $checkboxes.length; i < len; i++) {
                    $checkboxes[i].checked = enabledCreateBtn;
                    setSelectedRow($checkboxes[i], enabledCreateBtn);
                }
            } else {
                for (let i = 1, len = $checkboxes.length; i < len; i++) {
                    if (!$checkboxes[i].checked) {
                        isAllChecked = false;
                        break;
                    }
                }
                $checkboxes[0].checked = isAllChecked;
                setSelectedRow(this, this.checked);
            }
        });

        let $variants = $('[name="selected-variants"]');

        if ($variants.length <= 0) {
            $variants = $('[name="search[selected-variants]"]');
        }

        if ($variants.length > 0) {
            let selectedVariants = $variants.val();

            if (selectedVariants.length > 0) {
                let activateCreateButton = false;

                selectedVariants = selectedVariants.split(',');

                const $orders = $('[name="add-to-order"]');
                if ($orders.length > 0) {
                    selectedVariants.forEach(function (value) {
                        $orders.each(function (key, item) {
                            if (item.value === value) {
                                $(this).prop('checked', true);
                                activateCreateButton = true;
                            }
                        });
                    });
                }

                const $consignment = $('[name="add-to-package"]');
                if ($consignment.length > 0) {
                    selectedVariants.forEach(function (value) {
                        $consignment.each(function (key, item) {
                            if (item.value === value) {
                                $(this).prop('checked', true);
                                activateCreateButton = true;
                            }
                        });
                    });
                }

                if (activateCreateButton) {
                    $('.js-create-package').attr('disabled', false);
                }
            }
        }

        function setSelectedRow(checkbox, isSelected) {
            const row = checkbox.closest('tr');
            if (!row) {
                return;
            }

            row.classList[isSelected ? 'add' : 'remove']('is-selected');
        }
    },

    initPrepareSearchRadioGroup() {
        $('.js-search-radio-group-container label').on('click', function () {
            if (!$(this).hasClass('c-ui-search-radio-group-container__label--checked')) {
                $(this).addClass('c-ui-search-radio-group-container__label--checked');
                $(this).siblings('label').removeClass('c-ui-search-radio-group-container__label--checked');

            }
        })
    },


    initOnEndEvent() {
        $(document).triggerHandler('tableViewEnd');
    }
};

$(function () {
    window.TableView.init();
});



/*[PATH @digikala/supernova-digikala-marketplace/assets/local/js/controllers/productsController/productVariantAction.js]*/
IndexAction = {
    init: function () {
        this.initOpenProductVariantModal();
        this.initVariantForm();
        this.initSaveVariantForm();
    },
    initOpenProductVariantModal: function () {
            $(document).on('click', '.js-add-variant', function () {
                let $productId = $(this).data('id');
                Services.ajaxPOSTRequestHTML(
                    '/ajax/product/createvariantmodal/',
                    {
                        productId: $productId
                    },
                    function (response) {
                        if (response.status == false) {
                            UIkit.notification(response.data, {
                                status: 'danger',
                                pos: 'bottom-right',
                                timeout: 5000
                            });
                        }
                        else {
                            $('.product-variant-modal').replaceWith(response);
                            $('#product_id').val($productId);

                            IndexAction.initVariantForm();
                            UIkit.modal('#product-variant-container').show();
                            $('#product_variant_warranty').val(-1);
                            $('#product_variant_sizes').val(-1);
                            $('#product_variant_colors').val(-1);
                            $('#product_variant_lead_times').val(-1);

                            $('.js-product-variant-warranty-ajax').select2({
                                placeholder: 'انتخاب کنید...',
                                dir: "rtl",
                                language: {
                                    noResults: function () {
                                        return 'نتیجه ای پیدا نشد';
                                    },
                                    searching: function () {
                                        return 'form.general.select.search.searching';
                                    }
                                }
                            });

                            $('#product_variant_sizes').select2({
                                placeholder: 'انتخاب کنید...',
                                minimumResultsForSearch: -1
                            });

                            $('#product_variant_colors').select2({
                                placeholder: 'انتخاب کنید...',
                                minimumResultsForSearch: -1
                            });

                            $('#product_variant_lead_times').select2({
                                placeholder: 'انتخاب کنید...',
                                minimumResultsForSearch: -1
                            });

                            Main.initThousandSeparator();

                        }
                    },
                    function (response)    {
                        UIkit.notification(response, {
                            status: 'danger',
                            pos: 'bottom-right',
                            timeout: 5000
                        });
                    },
                    false,
                    true
                );
        })
    },
    initVariantForm: function () {

        let $form = $('#variantForm');

        $form.find('input').first().focus();

        $form.validate({
            errorPlacement: function (error, element) {
                var inputWrapper = element.parent();

                if (inputWrapper.length > 0) {
                    error.appendTo(inputWrapper).addClass('c-ui-feedback-hint');
                    element.closest('.js-valid-row').addClass('has-error');
                }
            },
            rules: {
                'variant[product_warranty_id]': {
                    required: true
                },
                'variant[color_id]': {
                    required: true
                },
                'variant[price_sale]': {
                    required: true,
                    digits: true,
                    min: 1
                },
                'variant[price_list]': {
                    digits: true,
                    min: 1
                },
                'variant[seller_physical_stock]': {
                    required: true,
                    digits: true,
                    max: 30000
                },
                'variant[maximum_per_order]': {
                    required: true,
                    digits: true,
                    min: 1,
                    max: 30000
                },
                'variant[lead_time]': {
                    required: true,
                    digits: true,
                    min: 1,
                    max: 10
                }
            },
            messages: {
                'variant[product_warranty_id]': {
                    'required': 'وارد کردن مقدار گارانتی ضروری است'
                },
                'variant[color_id]': {
                    'required': 'انتخاب رنگ اجباری می باشد'
                },
                'variant[price_sale]': {
                    'required': 'وارد کردن مقدار قیمت فروش(ریال) ضروری است',
                    'digits': 'تنها اعداد را وارد نمایید',
                    'number': 'تنها اعداد را وارد نمایید',
                    'min': 'قیمت فروش میبایست بیشتر از صفر باشد'
                },
                'variant[price_list]': {
                    'digits': 'تنها اعداد را وارد نمایید',
                    'number': 'تنها اعداد را وارد نمایید',
                    'min': 'قیمت بازار بایتسی بزرگتر از صفر باشد'
                },
                'variant[seller_physical_stock]': {
                    'required': 'وارد کردن مقدار موجودی نزد فروشنده ضروری است',
                    'digits': 'تنها اعداد را وارد نمایید',
                    'number' : 'تنها اعداد را وارد نمایید',
                    'max': 'form.variant.max.seller.physical.stock.validation'
                },
                'variant[maximum_per_order]': {
                    'required': 'وارد کردن مقدار حداکثر تعداد قابل سفارش در هر سبد ضروری است',
                    'digits': 'تنها اعداد را وارد نمایید',
                    'number' : 'تنها اعداد را وارد نمایید',
                    'min': 'حداقل تعداد ۱ می باشد',
                    'max': 'حداکثر تعداد سفارش در سبد نمی تواند بیشتر از 30 باشد.'
                },
                'variant[lead_time]': {
                    'required': 'وارد کردن مقدار بازه زمانی ارسال ضروری است',
                    'digits': 'تنها اعداد را وارد نمایید',
                    'number' : 'تنها اعداد را وارد نمایید',
                    'min': 'بازه‌ی زمانی انتخابی باید بین ۱ تا ۱۰ روز باشد.',
                    'max': 'بازه‌ی زمانی انتخابی باید بین ۱ تا ۱۰ روز باشد.'
                }
            }
        }).showBackendErrors();
    },
    initSaveVariantForm: function () {
        $(document).on('click', '#btn-create-product-variant', function (e) {
            e.preventDefault();
            let $form = $('#variantForm');
            let formData = new FormData();
            formData.append('variant[productId]',  $('#product_id').val());
            let validator = $form.validate();

            if (validator.form()) {
                $("#btn-create-product-variant").prop("disabled",true);
                Services.ajaxPOSTRequestHTML(
                    '/ajax/product/savevariant/',
                    {
                        data: $form.serialize(),
                        product_id: $('#product_id').val()
                    },
                    function (response) {
                        if (response.status == false) {
                            $("#btn-create-product-variant").prop("disabled",false);
                            let $errorMessage = "";
                            $.each(response.data, function (index, value) {
                                $errorMessage += value + "<br />";
                            });

                            UIkit.notification($errorMessage, {status: 'danger', pos: 'bottom-right', timeout: 1000});
                        }
                        else {
                            $("#btn-create-product-variant").prop("disabled",false);
                            window.location.href = $('#product_edit_url').val() + '?ref=conf#variants';
                            UIkit.modal('#product-variant-container').hide();
                        }
                    },
                    function (response)    {
                        $("#btn-create-product-variant").prop("disabled",false);
                        let $errorMessage = "";
                        $.each(response.data, function (index, value) {
                            $errorMessage += value + "<br />";
                        });

                        UIkit.notification($errorMessage, {status: 'danger', pos: 'bottom-right', timeout: 1000});
                    },
                    false,
                    true
                )
            } else {
                $("#btn-create-product-variant").prop("disabled",false);
            }
        })
    },
};

$(function () {
    IndexAction.init();
});
