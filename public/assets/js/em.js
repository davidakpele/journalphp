// Asynchronous function to fetch data
const getData =async () => {
    try {
        // Fetch data from the PHP script
        const response = await fetch(root_url+"api/csrf_token");
        // Check if the response status is OK
        if (!response.ok) {
            throw new Error(`Network response was not OK: ${response.status}`);
        } else {
            // Parse the response as text
            const data = await response.text();
            const read= JSON.parse(data);
            var csrf_token = read._token;
            const getdata = await fetch(root_url + "api/items?token=" + csrf_token + "");
            // Parse the response as text
            const items = await getdata.json();
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
document.querySelector('.login-institute').addEventListener('click',function (e){
    e.preventDefault();
    window.location.href=root_url+'auth/login'
})




