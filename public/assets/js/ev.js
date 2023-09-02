$('document').ready(function (){
    $('.back-button').click(function (e) {
        e.preventDefault();
        window.history.go(-1)
    })
})