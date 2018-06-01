$(document).ready(function () {

    var indexCategoryPicker = 0;
    var existingCategoryPicker = [];

    maxCategoryPicker = cityCategories.length;

    var datePickerOptions = {
        language: 'en',
        dateFormat: 'yyyy-mm-dd',
        minDate: new Date()
    }

    $('.custom-datepicker').datepicker(datePickerOptions);


    $('#add-category-picker').click(function (e) {
        e.preventDefault();

        createCityCategorySection(0);
    });

    function initializeCategoryPicker(index) {
        $('.pick-item[data-index="'+index+'"] .custom-datepicker').datepicker(datePickerOptions);
        $('.pick-item[data-index="'+index+'"] .custom-select').select2();


        $('.pick-item[data-index="'+index+'"] .custom-select').on('select2:select', function (e) {
            $('.pick-item[data-index="'+index+'"] .custom-datepicker').attr('disabled', false);
        });
    }
    
    
    function getSelectedCategoryPicker() {
        existingCategoryPicker = $('[name="category"]').map(function( i, e ) {
            if ($( e ).val()) return parseInt($( e ).val());
        }).get();

        return existingCategoryPicker;
    }

    var categoryList = [];

    function populateDataCategoryPicker() {

        var quantity = $('[name=quantity]').val();

        categoryList = [];

        for (var i = 1; i <= indexCategoryPicker ; i++){
            var category = {
                'id': 0,
                'name': '',
                'date': '',
                'price': 0,
                'quantity': quantity,
                'totalPrice': 0,
            };
            var section = $('.pick-item[data-index="'+i+'"]');

            category.id = section.find('[name="category"] option:selected').val();
            category.name = section.find('[name="category"] option:selected').html();
            category.date = section.find('[name="date"]').val();

            categoryList.push(category);
        }
    }
    
    function createCityCategorySection(cityCategoryId) {
        var list = $('.pick-list');

        selectedCityCategory = getSelectedCategoryPicker();

        var clonedSection = $('#default-pick-category .pick-item');
        var clone = clonedSection.clone(true);

        $('.pick-item[data-index="'+indexCategoryPicker+'"] .custom-select').prop("disabled", true);

        indexCategoryPicker++;

        clone.attr('data-index', indexCategoryPicker);

        clone.find('[name="date"]').addClass('custom-datepicker');

        if (cityCategoryId == 0) {
            var selectHtml = '<option value="" disabled selected>Choose your Category</option>';
        }else {
            clone.find('[name="date"]').attr('disabled', false);
        }

        clone.find('[name="category"]').html(selectHtml);

        $.each(cityCategories, function (idx, value) {

            var ifExist = $.inArray(value.id, selectedCityCategory);

            if (ifExist == -1) {


                if (value.id == cityCategoryId){
                    var html = '<option value="'+value.id+'" selected>'+value.category.name+'</option>';
                }else {
                    var html = '<option value="'+value.id+'">'+value.category.name+'</option>';
                }

                clone.find('[name="category"]').append(html);

            }
        });

        clone.find('[name="category"]').addClass('custom-select');

        list.append(clone);

        initializeCategoryPicker(indexCategoryPicker);

        if (indexCategoryPicker == maxCategoryPicker){
            $('#add-category-picker').fadeOut();
        }
    }

    createCityCategorySection(selectedCityCategory[0]);

    var submitData = {};

    $('#btn-book').click(function (e) {



        var form = $('#booking-form');

        form.trigger('submit');

        var countError = form.find('.has-error').length;


        if (countError == 0) {
            populateDataCategoryPicker();

            var listCategory = getCategoryListData();

            submitData = {
                'firstName': $('[name=firstName]').val(),
                'lastName': $('[name=lastName]').val(),
                'email': $('[name=email]').val(),
                'phoneNumber': $('[name=phoneNumber]').val(),
                'cityId': cityId,
                'quantity': $('[name=quantity]').val(),
                'withItenerary': $('[name=withItenerary]:checked').val(),
                'iteneraryPrice': $('[name=iteneraryPrice]').val(),
                'message': $('[name=message]').val(),
                'listCategory': listCategory,
                'totalLineItem': 0,
                'grandTotal': 0,
            };


            populateBookingModalByData(submitData);
        }

    })


    function getCategoryListData() {

        $.each(cityCategories, function (idx, item) {

            $.each(categoryList, function (key, value) {

                if (value.id == item.id) {
                    categoryList[key].price = item.price;
                    categoryList[key].totalPrice = item.price*categoryList[key].quantity;
                }

            })

        });

        return categoryList;
    }



    function populateBookingModalByData(modalData) {

        var wrapper = $('#bookingResultModal');

        wrapper.find('#name').html(modalData.firstName+' '+modalData.lastName);
        wrapper.find('#email').html(modalData.email);
        wrapper.find('#phoneNumber').html(modalData.phoneNumber);
        wrapper.find('#participants').html(modalData.quantity+' people');

        var grandTotal = 0;
        var totalLineItem = 0;
        var itenenaryPrice = 0;

        if (modalData.withItenerary == 1){
            wrapper.find('#withItenerary').html('YES');
            itenenaryPrice = modalData.iteneraryPrice;
        }else {
            wrapper.find('#withItenerary').html('NO');
        }

        wrapper.find('#message').html(modalData.message);
        wrapper.find('#total-category').html(modalData.listCategory.length);

        wrapper.find('.category-item').remove();

        var idx = 1;
        $.each(modalData.listCategory, function (key, val) {
            if (val) {
                totalLineItem += val.totalPrice;

                var html = '<tr class="category-item">' +
                    '       <td>Cateogry '+idx+'</td>' +
                    '       <td>'+val.name+'</td>' +
                    '       </tr>' +
                    '       <tr class="category-item">' +
                    '       <td>Date</td>' +
                    '       <td>'+val.date+'</td>' +
                    '       </tr>';

                idx++;

                wrapper.find('#before-new-category').before(html);
            }
        });

        submitData.totalLineItem = totalLineItem;
        submitData.grandTotal = parseInt(totalLineItem)+parseInt(itenenaryPrice);

        wrapper.find('#total-price').html(submitData.grandTotal);

        wrapper.find('[name=formData]').val(JSON.stringify(submitData));

        console.log(submitData);

        $('#bookingResultModal').modal({
            show: true,
            backdrop: 'static'
        });


    }


})