getMyInfo()



function getMyInfo() {
    $.ajax({
        url: "?action=get-my-infos",
        dataType: 'json',
        success: function (response) {
            $('#form-profil #profil-userName').val(response.username)
            $('#form-profil #profil-email').val(response.email)
            $('#form-profil #profil-firstName').val(response.firstName)
            $('#form-profil #profil-lastName').val(response.lastName)
            $('#form-profil #profil-birthDate').val(response.birthDate)

        }
    })
}

$('#form-profil').submit(function (e) {
    e.preventDefault();
    updateMyInfo();
})


function updateMyInfo() {
    $.ajax({
        url: "?action=update-my-infos",
        method: "POST",
        dataType: 'json',
        data: {
            username: $('#form-profil #profil-userName').val(),
            email: $('#form-profil #profil-email').val(),
            firstName: $('#form-profil #profil-firstName').val(),
            lastName: $('#form-profil #profil-lastName').val(),
            birthDate: $('#form-profil #profil-birthDate').val(),
            password: $('#form-profil #profil-password').val()
        },
        success: function (response) {
            if (response) {
                getMyInfo();
            }
        }
    })
}
