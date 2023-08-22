var currentURL = window.location.href;
var url = new URL(currentURL);
var protocol = url.protocol; // "https:"
var hostname = url.hostname; // "www.example.com"
var port = url.port;         // "8080"
var pathname = url.pathname; // "/path/to/page"
var search = url.search;     // "?query=param"
var hash = url.hash;         // "#fragment"
var pathnameSegments = pathname.slice(1).split('/');
var libraryPort = pathnameSegments[2]
var subjectPort = pathnameSegments[4]
var isLoading = false;
var currentPage = 1;
var sidebar = document.getElementById('Content_Sidebar');
var content = document.querySelector('.bookshelf');
var flogPost, lib, sub, book, sh;
const get_journals =async () => {
    try {
        const response = await fetch(root_url+"api/csrf_token");
        // Check if the response status is OK
        if (!response.ok) {
            throw new Error(`Network response was not OK: ${response.status}`);
        } else {
            document.getElementById('loading').style.display = 'none';
            // Parse the response as text
            const data = await response.text();
            const read= JSON.parse(data);
            var csrf_token = read._token;
            if (pathnameSegments[1] =="libraries" && pathnameSegments[1] !="" && pathnameSegments[3] =="subjects" && pathnameSegments[6] ==null) {
                lib = pathnameSegments[2]; sub = pathnameSegments[4];
                flogPost = true;
            } else {
                if (pathnameSegments[6] !== "") {
                    if (pathnameSegments[5] =="bookcases" && pathnameSegments[7] =="bookshelves" && pathnameSegments[5] !=null && pathnameSegments[7] !=null) {
                        lib = pathnameSegments[2]; sub = pathnameSegments[4]; book = pathnameSegments[6]; sh = pathnameSegments[8];                        
                        flogPost = false;
                    }
                }
            }
            
            var pOSTurl = (flogPost ? "getall=true&library="+lib+"&subject="+sub+"+&token="+csrf_token+"" : "getcraft=true&library="+lib+"&subject="+sub+"&bookcases="+book+"&bookshelves="+sh+"&token="+csrf_token+"");
            var xhr = new XMLHttpRequest();
            xhr.open('GET', root_url+'/api/apicontext?'+pOSTurl+'&page=' + currentPage, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var newData = xhr.responseText;
                    var obj = JSON.parse(newData)._items;
                    $('.bookshelf').empty();
                    obj.forEach(function (CallRecieve) {
                        $('.bookshelf').append(`
                        <li class="bookshelf-journal-list-item">
                            <div id="ember8270" class="ember-view">
                                <a href="${root_url}libraries/${libraryPort}/journals/${CallRecieve.journalid}/?sort=title" id="ember8271" class="bookshelf-journal ember-view" tabindex="0">
                                    <div id="ember8272" class="journal-cover __771d8 ember-view">
                                        <div class="image-container">
                                            <img src="${root_url}${CallRecieve.imagedata}" alt="${CallRecieve.journal_name}" title="${CallRecieve.journal_name}">
                                        </div>
                                    </div>
                                    <div title="${CallRecieve.journal_name}" class="bookshelf-journal-title">${CallRecieve.journal_name}</div>
                                </a>
                            </div>
                        </li>
                        `);
                    });
                    document.getElementById('loading').style.display = 'block';
                    document.getElementById('Datacontent').append('beforeend', newData);
                    isLoading = false;
                    currentPage++;
                    document.getElementById('loadMoreButton').textContent = 'Load More';
                }
            };
        xhr.send();
            
        }
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(get_journals, 2000); // 5000 milliseconds = 5 seconds
});

function fetchMoreData() {
    if (isLoading) return;
    isLoading = true;
    document.getElementById('loadMoreButton').textContent = 'Loading...';
    document.getElementById('loading').style.display = 'block';

    setTimeout(() => {
        // Make an AJAX request to fetch new data from the server
        var xhr = new XMLHttpRequest();
        xhr.open('GET', root_url+'/api/Authcontext?&page='+currentPage, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var newData = xhr.responseText;
                document.getElementById('loading').style.display = 'none';
                document.getElementById('Datacontent').insertAdjacentHTML('beforeend', newData);
                isLoading = false;
                currentPage++;
                document.getElementById('loadMoreButton').textContent = 'Load More';
            }
        };
        xhr.send();
    }, 1000);
}
// Add a scroll event listener to trigger fetching new data when the user scrolls to the bottom
sidebar.addEventListener('scroll', function() {
    if (sidebar.scrollTop + sidebar.clientHeight >= content.scrollHeight) {
        document.getElementById('loading').style.display = 'block';
    }
});

window.addEventListener('scroll', function () {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
        document.getElementById('loading').style.display = 'block';
    }
});
// Add a click event listener to the "Load More" button
document.getElementById('loading').addEventListener('click', fetchMoreData);