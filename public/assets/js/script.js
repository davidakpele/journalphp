$('document').ready(function (e) {
    $('.clearer').hide();
    $('.clearer').click(function () {
        $('.hero-search').val('');
        $('.magnifying-glass').show();
        $('.clearer').hide();
        window.history.pushState({}, "Title", root_url);
        $('#search_result').empty();
        $('.clone_result').removeClass('subjects-search-container').addClass("subjects-search-container")
        $('.clone_result').removeClass('subjects-search-container complete').addClass("subjects-search-container")
    });
    $(".hero-search").keyup(function (e) {
        var input = $(this);
        if ((input).val().length ==0) {
            input.val('');
            $('.magnifying-glass').show();
            $('.clearer').hide();
            $('#search_result').empty();
            $('.clone_result').removeClass('subjects-search-container').addClass("subjects-search-container")
            $('.clone_result').removeClass('subjects-search-container complete').addClass("subjects-search-container")
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
                    if (input.value =="") {
                        return false;
                    }
                    const Http = new XMLHttpRequest();
                    const postData = { "data": response._token, "_data": input.value }
                    Http.open("POST", root_url+'api/getsearch', true);
                    Http.setRequestHeader("Content-Type", "application/json;charset=UTF-8", this.withCredentials = true);
                    Http.setRequestHeader("X-Requested-With",'xmlhttprequest');
                    Http.setRequestHeader("Access-Control-Allow-Origin", "*");
                    Http.send(JSON.stringify(postData));
                    Http.onreadystatechange = function (e) {
                        if (Http.readyState == 4 && Http.status == 200 && Http.responseText) {
                            var result = JSON.parse(Http.responseText);
                            const strjson = { "data": result.data, "encrypted": response._token };
                            if (result.inc == true) {
                                $.ajax({
                                    url: root_url+'PagesController/clone',
                                    type: "POST",
                                    data: strjson,
                                    crossDomain: true,
                                    dataType: 'html',
                                    crossOrigin: true,
                                    async: true,
                                    cache: false,
                                    processData: true,
                                }).then((data) => {
                                    $('#ember1178').hide();
                                    $('.clearer').show();
                                    $('.clone_result').removeClass('subjects-search-container').addClass("subjects-search-container complete")
                                    $('#search_result').empty();
                                    $('#search_result').append(data);
                                })
                            } else {
                                $('#ember1178').hide();
                                $('.clearer').show();
                                $('.clone_result').removeClass('subjects-search-container').addClass("subjects-search-container complete")
                                $('#search_result').empty();
                                $('#search_result').append('<div class="error-search"><li tabindex="0" class="no-results-container in-progress" style="display:block"><span class="label">No matches for “'+input.value+'”. Title may not be SkyBase Data Center enabled at this time, but still available at your library. <br/><a tabindex="0" href="javascript:void(0)" target="_new">Please click here to search for your title again at your library</a></span></li></div>');
                           }
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

view_All_Search = () => {
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
        const input = $('#ember650').val();
        if (response.status === 200) {
            if (input =="") {
                return false;
            }
            const Http = new XMLHttpRequest();
            const postData = { "data": response._token, "_data": input }
            Http.open("POST", root_url+'api/getsearch', true);
            Http.setRequestHeader("Content-Type", "application/json;charset=UTF-8", this.withCredentials = true);
            Http.setRequestHeader("X-Requested-With",'xmlhttprequest');
            Http.setRequestHeader("Access-Control-Allow-Origin", "*");
            Http.send(JSON.stringify(postData));
            Http.onreadystatechange = function (e) {
                if (Http.readyState == 4 && Http.status == 200 && Http.responseText) {
                    var result = JSON.parse(Http.responseText);
                    const strjson = { "data": result.data, "encrypted": response._token };
                    if (result.inc == true) {
                        $.ajax({
                            url: root_url+'PagesController/clone',
                            type: "POST",
                            data: strjson,
                            crossDomain: true,
                            dataType: 'html',
                            crossOrigin: true,
                            async: true,
                            cache: false,
                            processData: true,
                        }).then((data) => {
                            $('#ember1178').hide();
                            $('.clearer').show();
                            $('.clone_result').removeClass('subjects-search-container').addClass("subjects-search-container complete")
                            $('#search_result').empty();
                            $('#search_result').append(data);
                        })
                    } else {
                        $('#ember1178').hide();
                        $('.clearer').show();
                        $('.clone_result').removeClass('subjects-search-container').addClass("subjects-search-container complete")
                        $('#search_result').empty();
                        $('#search_result').append('<div class="error-search"><li tabindex="0" class="no-results-container in-progress" style="display:block"><span class="label">No matches for “'+input.value+'”. Title may not be SkyBase Data Center enabled at this time, but still available at your library. <br/><a tabindex="0" href="javascript:void(0)" target="_new">Please click here to search for your title again at your library</a></span></li></div>');
                    }
            } 
        }
        } else {
            return false;
        }
    }).fail((xhr, error) => {
        console.log(error);
    });
}

view_Only_Subjects = () => {
    
    const input = $('#ember650').val();
    const Http = new XMLHttpRequest();
    const data = { "data": 'encrypted', "_data": input }
    Http.open("POST", root_url + 'api/csrf_token', true);
    Http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    Http.setRequestHeader("X-Requested-With", 'xmlhttprequest');
    Http.setRequestHeader("Access-Control-Allow-Origin", "*");
    Http.send(JSON.stringify(data));
    Http.onreadystatechange = function (e) {
        if (Http.readyState == 4 && Http.status == 200 && Http.responseText) {
            var result = JSON.parse(Http.responseText);
            const token = result._token;
            const input = $('#ember650').val();
            if (input =="") {
                return false;
            }
            const postData = { "encrypted": token, "data": input }
            $.ajax({
                url: root_url+'PagesController/getsubjects',
                type: "POST",
                data: postData,
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
            }).then((data) => {
                $('#ember1178').hide();
                $('.clearer').show();
                $('.clone_result').removeClass('subjects-search-container').addClass("subjects-search-container complete")
                $('#search_result').empty();
                $('#search_result').append(data);
            })
        }
    }
}


view_Only_Jounals = () => {
    const input = $('#ember650').val();
    const Http = new XMLHttpRequest();
    const data = { "data": 'encrypted', "_data": input }
    Http.open("POST", root_url + 'api/csrf_token', true);
    Http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    Http.setRequestHeader("X-Requested-With", 'xmlhttprequest');
    Http.setRequestHeader("Access-Control-Allow-Origin", "*");
    Http.send(JSON.stringify(data));
    Http.onreadystatechange = function (e) {
        if (Http.readyState == 4 && Http.status == 200 && Http.responseText) {
            var result = JSON.parse(Http.responseText);
            const token = result._token;
            const input = $('#ember650').val();
            if (input =="") {
                return false;
            }
            const postData = { "encrypted": token, "data": input }
            $.ajax({
                url: root_url+'PagesController/getjournals',
                type: "POST",
                data: postData,
                crossDomain: true,
                dataType: 'html',
                crossOrigin: true,
                async: true,
                cache: false,
                processData: true,
            }).then((data) => {
                $('#ember1178').hide();
                $('.clearer').show();
                $('.clone_result').removeClass('subjects-search-container').addClass("subjects-search-container complete")
                $('#search_result').empty();
                $('#search_result').append(data);
            })
        }
    }
}

is_journal = (id) => {
    //requestion connection links
    const input = $('#ember650').val();
    const Http = new XMLHttpRequest();
    const data = { "data": 'encrypted' }
    Http.open("POST", root_url+'api/csrf_token', true);
    Http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    Http.setRequestHeader("X-Requested-With", 'xmlhttprequest');
    Http.setRequestHeader("Access-Control-Allow-Origin", "*");
    Http.send(JSON.stringify(data));
    Http.onreadystatechange = function (e) {
        if (Http.readyState == 4 && Http.status == 200 && Http.responseText) { 
            var csrfToken = JSON.parse(Http.responseText)._token
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': csrfToken },
            });
            $.post('api/is_connect/?id='+ id + '&token='+csrfToken, { _method: 'get' }, function () {})
                .done((response) => {
                    var packageid = JSON.parse(response).data.packageid;
                     //redirect
                    setTimeout(function () {
                        window.location.href = root_url + 'libraries/'+packageid+'/journals/'+id+'/query='+input+'&sort=title&storeQuery=true';
                    }, 3000);
                });
        
        }
    }
}

is_subject = (id) => {
    const Http = new XMLHttpRequest();
    const data = { "data": 'encrypted' }
    Http.open("POST", root_url+'api/csrf_token', true);
    Http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    Http.setRequestHeader("X-Requested-With", 'xmlhttprequest');
    Http.setRequestHeader("Access-Control-Allow-Origin", "*");
    Http.send(JSON.stringify(data));
    Http.onreadystatechange = function (e) {
        if (Http.readyState == 4 && Http.status == 200 && Http.responseText) { 
            var csrfToken = JSON.parse(Http.responseText)._token
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': csrfToken },
            });
            $.post('api/is_connect/?id=' + id + '&token=' + csrfToken, { _method: 'get' }, function () { })
                .done((response) => {
                    var packageid = JSON.parse(response).data.packageid;
                    //redirect
                    setTimeout(function () {
                        window.location.href = root_url + 'libraries/' + packageid + '/subjects/' + id + '/issues/current?sort=title';
                    }, 3000);
                   
                });
        }
    }
}

