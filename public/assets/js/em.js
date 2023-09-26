import auth from './class/validate';
import chain from './class/SecurityFilterChain'; 

var xhr, userDetailsToken='',newData, tokenChain, get_init, read, data, csrf_token, headers, getdata, items, _items, obj, myAuthObject, response;
xhr = new XMLHttpRequest();
// Asynchronous function to fetch data
const getData = async () => {
    try {
        headers = new Headers();
        myAuthObject = new auth();
        tokenChain = new chain();
        tokenChain.getHeader().then((e)=>{
            userDetailsToken = e.v;
            xhr.open('GET', root_url + 'api/collect?iat=sort&action=true&target=csrf&v=1&tokenType=MIT');
            xhr.setRequestHeader('Authorization', 'Bearer ' + userDetailsToken);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    try {
                        const fetcher = async () => {
                            xhr.open('GET', root_url + 'api/collect?iat=sort&action=true&target=items');
                            xhr.setRequestHeader('Authorization', 'Bearer ' + userDetailsToken);
                            xhr.onreadystatechange = function () {
                                if (xhr.readyState == 4 && xhr.status == 200) {
                                    items = xhr.responseText;
                                    obj = JSON.parse(items)._items
                                    $('#subjects-list').empty();
                                    obj.forEach(function (CallRecieve) {
                                        $('#subjects-list').append(`<li><div id="ember654" class="ember-view"><a tabindex="0" href="${root_url}libraries/${CallRecieve.package_id}/subjects/${CallRecieve.subjectid}/?sort=title&all=1" id="ember655" class="subjects-list-subject ember-view"><span class="subjects-list-subject-name">${CallRecieve.subjects_name}</span><span class="subjects-list-subject-icon flaticon solid files"></span></a></div></li>`);
                                    });
                                }
                            }
                            xhr.send();
                        }
                    fetcher()
                    } catch (error) {
                       throw new Error(`Error: ${error}`); 
                    }
                }
            }
            xhr.send();
        }); 
    } catch (error) {
        throw new Error(`Error: ${error}`); 
    }
}
setTimeout(() => {
    $('.custom-loader').hide();
}, 2000);
// Call the fetchData function when the page is loaded
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(getData, 2000); // 5000 milliseconds = 5 seconds
});

$('document').ready(function () {
    $('#logout_user').click(function (e) {
        myAuthObject = new auth();
        e.preventDefault();
        myAuthObject.logout();
    })
})