const popup = $('header [identification]');
const identificationButton = $('header nav #identification-button');
const identificationButtonLabel = $('header nav #identification-button p');
const closeButton = $('header [identification] #close-button');
const loginForm = $('header [identification] .formulaire#login');
const registerForm = $('header [identification] .formulaire#register');
const serachInput = $('header nav #search input');

document.addEventListener("DOMContentLoaded", function () {
    localStorage.getItem('isConnected') ? identificationButtonLabel.text('Déconnexion') : null
});

identificationButton.click(function () {
    localStorage.getItem('isConnected') ? logOut() : openPopup();
})

closeButton.click(function () {
    closePopup();
})

loginForm.submit(function (e) {
    e.preventDefault();
    logIn();
})

registerForm.submit(function (e) {
    e.preventDefault();
    register();
})

serachInput.change(function(){
    window.location.href = `./?search=${serachInput.val()}`;
})


//-------------------------------------
function openPopup() {
    popup.css('display', 'flex');
}

//-------------------------------------
function closePopup() {
    popup.css('display', 'none');
}

//-------------------------------------
function logIn() {
    $.ajax({
        url: "?action=log-in",
        dataType: 'json',
        method: 'POST',
        data: {
            email: $('header [identification] .formulaire#login input#email').val(),
            password: $('header [identification] .formulaire#login input#password').val()
        },
        success: function (response) {
            if (response) {
                localStorage.setItem('isConnected', true);
                identificationButtonLabel.text('Déconnexion')
                closePopup();
                window.location.href = "./"
            }
        }
    })
}

//-------------------------------------
function register() {
    $.ajax({
        url: "?action=register",
        dataType: 'json',
        method: 'POST',
        data: {
            username: $('header [identification] .formulaire#register input#username').val(),
            email: $('header [identification] .formulaire#register input#email').val(),
            password: $('header [identification] .formulaire#register input#password').val()
        },
        success: function (response) {
            if (response) {
                localStorage.setItem('isConnected', true);
                identificationButtonLabel.text('Déconnexion')
                closePopup();
                window.location.href = "./"
            }
        }
    })
}

//-------------------------------------
function logOut() {
    $.ajax({
        url: "?action=log-out",
        dataType: 'json',
        success: function (response) {
            localStorage.removeItem('isConnected');
            identificationButtonLabel.text('Connexion')
            closePopup();
            window.location.href = "./"
        }
    })
}