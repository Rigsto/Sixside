$(document).ready(function(){
    
})

$selected_filter = "";

$e_loc_button = "";
$e_cat_button = "";

$loc_id = null;
$cat_id = null;

function show_filter_list($filter_by){
    if ($('.filter-container').hasClass('collapsed')){
        $('.filter-list').empty();
        $('.filter-container').css('height', "75px");
        $('.filter-container').removeClass('collapsed');

        if ($selected_filter != $filter_by){
            get_filter_action($filter_by)
        }
        $selected_filter = $filter_by

    }else{
        get_filter_action($filter_by)
        $selected_filter = $filter_by
    }
}

function get_filter_action($filter_by){
    $.ajax({
        type: "POST",
        url: $url,
        data: {
            '_token':$csrf_token,
            'filter_by':$filter_by
        },
        success: function (response) {
            $('.filter-list').html(response)

            $('.filter-list input[value='+$loc_id+']').siblings('button').addClass('selected')
            $('.filter-list input[value='+$cat_id+']').siblings('button').addClass('selected')

            $('.filter-container').addClass('collapsed');
            $('.filter-container').css('height',$('.filter-container div ').outerHeight());
        },error: function (xhr, desc, err) {
            alert(xhr.responseText);
        }
    });
}

function filter_jobs_action(e, $location_id, $category_id){
    
    $selected_id = $(e).siblings('input').val()

    if ($location_id != null){
        if ($loc_id == $selected_id){
            $loc_id = null

            $('.loc_toggler').html('Location <i class="fas fa-caret-down"></i>')
            toggle_filter_button(e, false)
        }else{
            $loc_id = $location_id;
            $('.category-name').removeClass('selected');

            $('.loc_toggler').html($(e).text() + ' <i class="fas fa-caret-down"></i>')
            toggle_filter_button(e, true)
        }
    }else{
        if ($cat_id == $selected_id){
            $cat_id = null

            $('.cat_toggler').html('Job Function <i class="fas fa-caret-down"></i>')
            toggle_filter_button(e, false)
        }else{
            $cat_id = $category_id;
            $('.category-name').removeClass('selected');

            $('.cat_toggler').html($(e).text() + ' <i class="fas fa-caret-down"></i>')
            toggle_filter_button(e, true)
        }
    }

    // CLEAR JOB LIST & SHOW SHIMMER EFFECT
    $('.shimmer-container').removeClass('d-none')
    $('.job-list').empty()

    $.ajax({
        type: "POST",
        url: $filter_jobs_url,
        data: {
            '_token':$csrf_token,
            'location_id': $loc_id,
            'category_id': $cat_id
        },
        success: function (response) {
            console.log(response)
            $('.shimmer-container').addClass('d-none')
            $('.pagination').first().html(response.pagination)
            $('.job-list').html(response.job_items)
        },error: function (xhr, desc, err) {
            alert(xhr.responseText);
        }
    });
}

function toggle_filter_button(e, isSelected){
    if (isSelected == true){
        $(e).addClass('selected')
    }else{
        $(e).removeClass('selected')
    }
}

function pagination_action($url, $location_id, $category_id){
    console.log($url)
    $.ajax({
        type: "GET",
        url: $url,
        data: {
            '_token':$csrf_token,
            'location_id': $location_id,
            'category_id': $category_id
        },
        success: function (response) {
            $('.pagination').first().html(response.pagination)
            $('.job-list').html(response.job_items)

            $('html, body').animate({
                scrollTop: $("body").offset().top
            }, 0);

        }, error: function (xhr, desc, err) {
            alert(xhr.responseText);
        }
    });
}