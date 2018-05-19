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

        for (var i = 1; i <= indexCategoryPicker ; i++){
            var category = {
                'id': 0,
                'name': '',
                'date': '',
                'price': 0,
            };
            var section = $('.pick-item[data-index="'+i+'"]');

            category.id = section.find('[name="category"] option:selected').val();
            category.name = section.find('[name="category"] option:selected').html();
            category.date = section.find('[name="date"]').val();

            categoryList[category.id] = category;
        }

        console.log(categoryList);
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


    $('#btn-book').click(function (e) {


        populateDataCategoryPicker();

        var listCategory = getCategoryListData();

        var data = {
            'firstName': $('[name=firstName]').val(),
            'lastName': $('[name=lastName]').val(),
            'email': $('[name=email]').val(),
            'phoneNumber': $('[name=firstName]').val(),
            'quantity': $('[name=quantity]').val(),
            'withItenerary': $('[name=withItenerary]:checked').val(),
            'message': $('[name=message]').val(),
            'listCategory': listCategory
        };


        console.log(data);

        populateBookingModalByData(data);
    })


    function getCategoryListData() {

        $.each(cityCategories, function (idx, item) {

            console.log(item);

            if (categoryList[item.id]) {
                categoryList[item.id].price = item.price;
            }


        })


        return categoryList;
    }



    function populateBookingModalByData(modalData) {

        var wrapper = $('#bookingResultModal');

        wrapper.find('#name').html(modalData.firstName+' '+modalData.lastName);
        wrapper.find('#email').html(modalData.email);
        wrapper.find('#phoneNumber').html(modalData.phoneNumber);
        wrapper.find('#participants').html(modalData.quantity+' people');

        if (modalData.withItenerary){
            wrapper.find('#withItenenary').html('YES');
        }else {
            wrapper.find('#withItenenary').html('NO');
        }

        wrapper.find('#message').html(modalData.message);

        wrapper.find('#total-category').html(modalData.listCategory.length-1);


        $('#bookingResultModal').modal({
            show: true,
            backdrop: 'static'
        });


    }


})