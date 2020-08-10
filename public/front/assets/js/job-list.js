$(document).ready(function(){
    
})

$selected_filter = "";
$location_id = "";
$category_id = "";

function show_filter_list($filter_by){
    if ($('.filter-container').hasClass('collapsed')){
        $('.filter-list').empty();
        $('.filter-container').css('height',$('.filter-container div ').height());
        $('.filter-container').removeClass('collapsed');

        if ($selected_filter != $filter_by){
            get_filter_action($filter_by)
        }
        $selected_filter = $filter_by

    }else{
        get_filter_action($filter_by)
    }
}

function filter_jobs_action($location_id, $category_id){
    $location_id = $location_id;
    $category_id = $category_id;

    $.ajax({
        type: "POST",
        url: $filter_jobs_url,
        data: {
            '_token':$csrf_token,
            'location_id': $location_id,
            'category_id': $category_id
        },
        success: function (response) {
            console.log(response)
            $('.pagination').first().html(response.pagination)
            $('.job-list').html(response.job_items)
        },error: function (xhr, desc, err) {
            alert(xhr.responseText);
        }
    });
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
            $('.filter-container').addClass('collapsed');
            $('.filter-container').css('height',$('.filter-container div ').outerHeight());
        },error: function (xhr, desc, err) {
            alert(xhr.responseText);
        }
    });
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