function signin() {

    $(document).ready(function () {
        $("#signin-btn").click(function () {
            if (document.getElementById("email-input").value != '' && document.getElementById("password-input").value != '') {
                var action = $("#sign-in").attr('action');
                var form_data = {
                    email: $("#email-input").val(),
                    password: $("#password-input").val(),
                    remember: $("#auth-remember-check").is(":checked") ? 1 : 0,
                    is_ajax: 1
                };
                $.ajax({
                    type: "POST",
                    url: action,
                    data: form_data,
                    success: function (response) {
                        if (response == "0") {
                            $("#message").html('<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="bx bx-info-circle label-icon"></i><strong>Success</strong> - You will be redirected to the dashboard in a few moments<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div> ');
                            setTimeout(function () {
                                window.location.href = site_url+"admin/dashboard";
                            }, 1000);
                        } else
                            $("#message").html('<div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="bx bx-info-circle label-icon"></i><strong>Failed</strong> - Please check your email or password<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    }
                });
                return false;
            }
        });
    });
}