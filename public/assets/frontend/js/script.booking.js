$(document).ready(function () {

    var indexCategoryPicker = 0;

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
        var categoryIds = $('[name="category[]"]').map(function( i, e ) {
            return parseInt($( e ).val());
        }).get();

        return categoryIds;
    }
    
    
    
    function createCityCategorySection(cityCategoryId) {
        var list = $('.pick-list');

        var existingCategoryPicker = getSelectedCategoryPicker();

        var clonedSection = $('#default-pick-category .pick-item');
        var clone = clonedSection.clone(true);

        $('.pick-item[data-index="'+indexCategoryPicker+'"] .custom-select').prop("disabled", true);

        indexCategoryPicker++;

        clone.attr('data-index', indexCategoryPicker);

        clone.find('[name="date[]"]').addClass('custom-datepicker');

        if (cityCategoryId == 0) {
            var selectHtml = '<option value="" disabled selected>Choose your Category</option>';
        }else {
            clone.find('[name="date[]"]').attr('disabled', false);
        }

        clone.find('[name="category[]"]').html(selectHtml);

        $.each(cityCategories, function (idx, value) {

            var ifExist = $.inArray(value.id, existingCategoryPicker);

            if (ifExist == -1) {


                if (value.id == cityCategoryId){
                    var html = '<option value="'+value.id+'" selected>'+value.category.name+'</option>';
                }else {
                    var html = '<option value="'+value.id+'">'+value.category.name+'</option>';
                }

                clone.find('[name="category[]"]').append(html);

            }





        });

        clone.find('[name="category[]"]').addClass('custom-select');

        list.append(clone);

        initializeCategoryPicker(indexCategoryPicker);

        if (indexCategoryPicker == maxCategoryPicker){
            $('#add-category-picker').fadeOut();
        }
    }

    createCityCategorySection(selectedCityCategory);

})