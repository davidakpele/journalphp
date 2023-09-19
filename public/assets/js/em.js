import auth from './class/validate';
var xhr, get_init, read, data, csrf_token, headers, getdata, items, _items, obj, myAuthObject, response;
xhr = new XMLHttpRequest();
// Asynchronous function to fetch data
const getData = async () => {
    try {
        headers = new Headers();
        myAuthObject = new auth();
        headers.append('Authorization', 'Bearer '+tsrpc+'');
        // Fetch data from the PHP script
        response = await fetch(root_url+"api/csrf_token", {headers: headers});
        // Check if the response status is OK
        if (!response.ok) {
            throw new Error(`Network response was not OK: ${response.status}`);
        } else {
            // Parse the response as text
            data = await response.text();
            read= JSON.parse(data);
            csrf_token = read._token;
            getdata = await fetch(root_url + "api/items?token=" + csrf_token + "", {headers: headers});
            // Parse the response as text
            items = await getdata.json();
            $('#subjects-list').empty();
            items._items.forEach(function (CallRecieve) {
                $('#subjects-list').append(`<li><div id="ember654" class="ember-view"><a tabindex="0" href="${root_url}libraries/${CallRecieve.package_id}/subjects/${CallRecieve.subjectid}/?sort=title&all=1" id="ember655" class="subjects-list-subject ember-view"><span class="subjects-list-subject-name">${CallRecieve.subjects_name}</span><span class="subjects-list-subject-icon flaticon solid files"></span></a></div></li>`);
            });
           
            // Update the data container with the fetched data
            
            // dataContainer.textContent = data;
        }
        
    } catch (error) {
        console.error('Error fetching data:', error);
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