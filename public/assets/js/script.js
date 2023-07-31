$('document').ready(function (e) {
    $('.clearer').hide();
    $('.clearer').click(function () {
        $('.hero-search').val('');
        $('.magnifying-glass').show();
        $('.clearer').hide();
        window.history.pushState("", "Title", root_url);
    });
    $(".hero-search").keyup(function (e) {
        var input = $(this);
        if (input.val() == "") {
             $('.hero-search').val('');
            $('.magnifying-glass').show();
            $('.clearer').hide();
            window.history.replaceState({}, "Title", root_url);
        }

    });
})
//on keyup, start the countdown
var interval = 100;
var filterValue = "";
$(document).ready(function () {
    $(".hero-search").bind("keyup", logKeyPress);
});

function logKeyPress() {
    var now = new Date().getTime();
    var lastTime = this._keyPressedAt || now;
    this._keyPressedAt = now;
    if (!this._monitoringSearch) {
        this._monitoringSearch = true;
        var input = this;
        $('.magnifying-glass').hide();
        $('.clearer').hide();
        $('#ember1178').show();
        window.setTimeout(
            function () {
                search(input);
            }, 0);
    }
}
function search(input) {
    var now = new Date().getTime();
    var lastTime = input._keyPressedAt;
    if ((now - lastTime) > interval) {
        if (input.value != filterValue) {
            filterValue = input.value;
            //trigger a post here
            window.history.pushState("object or string", "Title", root_url + 'subjects?libraries/603/subjects?=' + input.value + '&sort=title');
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON',
                contentType: "application/json; charset=utf-8",
                data: 'encrypted', // our data object
                url: root_url+'api/csrf_token', // the url where we want to POST
                processData: false,
                encode: true,
                crossOrigin: true,
                async: true,
                crossDomain: true,
                headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    'Content-Type': 'application/json'
                },
            }).then((response) => {
                if (response.status === 200) {
                        var xhr = new XMLHttpRequest() || new window.ActiveXObject("Microsoft.XMLHTTP");
                        const postData = { "data": response._token, "_data": input.value }
                        xhr.open("POST", "https://jsonplaceholder.typicode.com/posts", true);
                        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8", this.withCredentials = true);
                        xhr.send(JSON.stringify(postData));
                        xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 201) {
                            $('#ember1178').hide();
                            $('.clearer').show();
                            // document.getElementById("response").innerHTML = "Post request successful: " + xhr.responseText;
                        } else {
                            // document.getElementById("response").innerHTML = "Post request failed: " + xhr.responseText;
                        }
                    }
                } else {
                    return false;
                }
            }).fail((xhr, error) => {
                console.log(error);
            });
        };
        input._monitoringSearch = false;
    }
    else {
        window.setTimeout(
            function () {
                search(input);
            }, 0);
    }
}


$(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {
        // ajax call get data from server and append to the div
        $.ajax({
            url: "http://localhost:3000/",
            type: "GET"
        })
            .done(function (result) {
                $("#myDiv").append("<p>" + result[i] + "</p>");
                i++;
            })
            .always(function () {
                setTimeout(() => { $("#loader-wrapper") }, 5000);
            });
    }
});