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

        // if (validator()){
        $.ajax({
            type: "POST",
            container: '#createForm',
            url: $url,
            dataType: 'iframe json',
            data: $form_data ,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
            },error: function (xhr, desc, err) {
                console.log(xhr.responseText);
            }
        });
        // }
    });

    function validator(){
        $first_name = $('input[name="first_name"]')
        $last_name = $('input[name="last_name"]').val()
        $email = $('input[name="email"]').val()
        $phone = $('input[name="phone"]').val()
        $photo = $('input[name="photo"]').prop('files')[0];
        $resume = $('input[name="resume"]').prop('files')[0];

            console.log()
        if ($first_name.val() == ""){
            $($first_name.siblings('.invalid-tooltip')[0]).css('display', 'block')
            return false
        }

        // if ($first_name != "" && $last_name != "" && $email != "" && $phone != "" && $photo !== undefined && $resume !== $resume){
        //     $('input[name="first_name"]').after('<span="invalid-error">This field is required.</span>');
        // }else{
        //     $('input[name="first_name"]').after('<div class="help-block">abc</div>');
        //     return false
        // }
    }
});