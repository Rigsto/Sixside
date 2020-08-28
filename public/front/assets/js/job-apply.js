$is_validated = false

$(document).ready(function(){
    $('input[name="photo"]').change(function(e){
        $('.photo-name').text(e.target.files[0].name);
    });

    $('input[name="resume"]').change(function(e){
        $('.resume-name').text(e.target.files[0].name);
    });

    console.log($url);

    $("#createForm").submit(function(e) {
        e.preventDefault();

        if ($is_validated){
            $('.captcha-empty-state').addClass('d-none');

            $form_data = new FormData()
            $form_data.append('_token', $csrf_token);
            $form_data.append('term_agreement', "yes");
            $job_id = $('input[name="job_id"]').val()
            $form_data.append('job_id', $job_id)
            $first_name = $('input[name="first_name"]').val()
            $last_name = $('input[name="last_name"]').val()
            $form_data.append('full_name', $first_name+" "+$last_name)
            $email = $('input[name="email"]').val()
            $form_data.append('email', $email)
            $phone = $('input[name="phone"]').val()
            $form_data.append('phone', $phone)
            $photo = $('input[name="photo"]').prop('files')[0];
            $form_data.append('photo', $photo)
            $resume = $('input[name="resume"]').prop('files')[0];
            $form_data.append('resume', $resume)
            $cover_letter = $('textarea#cover_letter').val();
            $form_data.append('cover_letter', $cover_letter)
    
            $.ajax({
                type: "POST",
                container: '#createForm',
                url: $url,
                data: $form_data,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response.status);
                    if (response.status){
                        window.location.href = $view_jobs_url
                    }
                },error: function (xhr, desc, err) {
                    console.log(xhr.responseText);
                }
            });
        }else{
            $('.captcha-empty-state').removeClass('d-none');
        }
    });
});

window.recaptcha_callback = recaptcha_callback
function recaptcha_callback(){
    $is_validated = true
} 