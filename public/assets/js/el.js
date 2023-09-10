var subjectSideBar = '', currentURL, url, dataList, headerName, protocol, hostname, port, pathname, search, hash, pathnameSegments, libraryPort, subjectPort, isLoading, currentPage, sidebar, content, checkPost_status, lib, sub, book, sh, csrf_token, data, read, response, pOSTurl, xhr, newData, obj;
// Get the current timestamp
const timestamp = new Date().getTime();
currentURL = window.location.href; url = new URL(currentURL); protocol = url.protocol; hostname = url.hostname; port = url.port; pathname = url.pathname; search = url.search; hash = url.hash;pathnameSegments = pathname.slice(1).split('/'); libraryPort = pathnameSegments[2]; subjectPort = pathnameSegments[4]; isLoading = false; currentPage = 1; sidebar = document.getElementById('Content_Sidebar');content = document.querySelector('.bookshelf');
document.getElementById('spinnerLoad').style.display = 'block';
document.getElementById('loadMoreButton').textContent = 'Loading...';
document.getElementById('loading').style.display = 'block';
xhr = new XMLHttpRequest();

function load_categories() {
    //fetch sidebar categories
    pOSTurl = "getCategoryList=true&library=" + pathnameSegments[2] + "&subject=" + pathnameSegments[4];
    xhr.open('GET', root_url + 'api/apicontext?'+pOSTurl);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            get_category = xhr.response;
            obj = JSON.parse(get_category).data;
            headerName = obj.subject;
            dataList = obj.data;
            document.querySelector('.category-name').innerHTML = headerName.subjects_name;
            $('.category_list').empty();
            dataList.forEach(function (res) {
                $('.category_list').append(`
                    <li class="subject-bookcase-list-item"> 
                        <a href="${root_url}libraries/${headerName.package_id}/subjects/${headerName.subjectid}/bookcases/${res.categoriesid}/?sort=title" id="ember1124" 
                        class="${pathnameSegments[4] !=null && pathnameSegments[6] !=null  && res.categoriesid === pathnameSegments[6] ? "active":""} ember-view">${res.categories_name}</a> 
                    </li>
                `)
            });
        }
    }
    xhr.send();
}

function load_bookcases() {
    //fetch bookcases
    pOSTurl = "getbookcaseList=true&library=" + pathnameSegments[2] + "&subject=" + pathnameSegments[4]+'&bookcases='+pathnameSegments[6];
    xhr.open('GET', root_url + 'api/apicontext?'+pOSTurl);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            get_bookcases = xhr.response;
            obj = JSON.parse(get_bookcases).data;
            headerName = obj.category;
            document.querySelector('.bookcaseHeaderName').innerHTML = headerName.categories_name;
            $('.bookcaseList').empty();
            dataList = obj.bookcases;
            dataList.forEach(function (res) {
                $('.bookcaseList').append(`
                 <li class="bookcase-bookshelf-list-item">
                    <a href="${root_url}libraries/${res.package_id}/subjects/${res.subjectid}/bookcases/${res.categoriesid}/bookshelves/${res.bookshelvesid}/?sort=title" id="ember1119" 
                    class="${pathnameSegments[4] !=null && pathnameSegments[6] !=null  && res.bookshelvesid === pathnameSegments[8] ? "active":""} ember-view" tabindex="0" style="font-size:18px;color: #666;">
                        <span>${res.bookshelves_name}</span>
                    </a>
                    <div id="ember1126" class="ember-view"></div>
                </li>
                `)
            });
        }
    }
    xhr.send();
}

document.addEventListener('DOMContentLoaded', () => {
    //Uncomment this section if you want to use javascript to load sidebar on subject page, [categories and bookcases]
    // if (pathnameSegments[1] =="libraries" && pathnameSegments[1] !="" && pathnameSegments[3] =="subjects" && pathnameSegments[5] == "" || pathnameSegments[5] ==null && pathnameSegments[6] ==null && pathnameSegments[7] ==null && pathnameSegments[8] ==null) {
    //     load_categories();
    // } else if (pathnameSegments[5] == "bookcases" && pathnameSegments[6] !=null && pathnameSegments[1] !=null && pathnameSegments[3] =="subjects" && pathnameSegments[7] =="" || pathnameSegments[7] ==null && pathnameSegments[8] ==null) {
    //     load_categories();
    //     setTimeout(load_bookcases, 1000); 
    // } else if (pathnameSegments[5] == "bookcases" && pathnameSegments[6] != null && pathnameSegments[1] != null && pathnameSegments[3] == "subjects" && pathnameSegments[7] != null || pathnameSegments[7] != "" && pathnameSegments[7] == "bookshelves" && pathnameSegments[8] != null || pathnameSegments[8] !="") {
    //     load_categories();
    //     setTimeout(load_bookcases, 1000); 
    // }
});
function generateRandomString(length) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        result += characters.charAt(randomIndex);
    }
    return result;
}
const randomString = generateRandomString(25);
function generateToken(length) {
    const array = new Uint8Array(length);
    window.crypto.getRandomValues(array);
    return Array.from(array, byte => byte.toString(16).padStart(2, '0')).join('');
}
const secureToken = generateToken(16);

const get_journals =async () => {
    try {
        response = await fetch(root_url+"api/csrf_token");
        // Check if the response status is OK
        if (!response.ok) {
            throw new Error(`Network response was not OK: ${response.status}`);
        } else {
            // Parse the response as text
            data = await response.text();
            read= JSON.parse(data);
            csrf_token = read._token;
            if (pathnameSegments[1] =="libraries" && pathnameSegments[1] !="" && pathnameSegments[3] =="subjects" && pathnameSegments[5] == "" || pathnameSegments[5] ==null && pathnameSegments[6] ==null && pathnameSegments[7] ==null && pathnameSegments[8] ==null) {
                lib = pathnameSegments[2]; sub = pathnameSegments[4];
                checkPost_status = 1;
            } else if (pathnameSegments[5] == "bookcases" && pathnameSegments[6] !=null && pathnameSegments[1] !=null && pathnameSegments[3] =="subjects" && pathnameSegments[7] =="" || pathnameSegments[7] ==null && pathnameSegments[8] ==null) {
                lib = pathnameSegments[2]; sub = pathnameSegments[4]; book = pathnameSegments[6];                      
                checkPost_status = 2;
            }else {
                if (pathnameSegments[6] !== "") {
                    if (pathnameSegments[5] =="bookcases" && pathnameSegments[7] =="bookshelves" && pathnameSegments[5] !=null && pathnameSegments[7] !=null) {
                        lib = pathnameSegments[2]; sub = pathnameSegments[4]; book = pathnameSegments[6]; sh = pathnameSegments[8];                        
                        checkPost_status = 3;
                    }
                }
            }
            
            pOSTurl =(checkPost_status ==1 ? "getall=true&library=" + lib + "&subject=" + sub + "&token=" + csrf_token + "" : (checkPost_status ==2) ? "getbookcases=true&library="+lib+"&subject="+sub+"&bookcases="+book+"&token=" + csrf_token +"" : "getcraft=true&library=" + lib + "&subject=" + sub + "&bookcases=" + book + "&bookshelves=" + sh + "&token=" + csrf_token + "");
            xhr.open('GET', root_url+'api/apicontext?'+pOSTurl+'&collect='+timestamp+'&page=' + currentPage+'&v=1&_v='+randomString+'&t=timing&en='+secureToken, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    newData = xhr.responseText;
                    obj = JSON.parse(newData)._items;
                    $('.bookshelf').empty();
                    obj.data.journalList.forEach(function (CallRecieve) {
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
                    isLoading = false;
                    currentPage++;
                    document.getElementById('spinnerLoad').style.display = 'none';
                    document.getElementById('loadMoreButton').textContent = 'Load More';
                    // Get the element with the class "message"
                    const messageElement = document.querySelector('.message');
                    const ErrormessageElement = document.querySelector('.error-msg');
                    (obj.rowCount > 39 || obj.rowCount == 40 ? [document.getElementById('loading').style.display = 'block', ErrormessageElement.style.display = "none"] : obj.rowCount == 0 ? [currentPage = 1, ErrormessageElement.style.display = "block", document.getElementById('loadMoreButton').classList.add('primary'), document.getElementById('loadMoreButton').textContent = 'No Data Found..!', document.getElementById('loading').style.display = 'block']: $('#loading').remove());  
                }
            };
        xhr.send();
        }
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(get_journals, 2000); // 3000 milliseconds = 3 seconds
});

function fetchMoreData() {
    if (isLoading) return;
    isLoading = true;
    document.getElementById('spinnerLoad').style.display = 'block';
    document.getElementById('loadMoreButton').textContent = 'Loading...';
    document.getElementById('loading').style.display = 'block';
    document.querySelector('.error-msg').style.display = 'none';
    var button=   document.getElementById('loadMoreButton');
   if (button.classList.contains('primary')) {
        button.classList.remove('primary');
    } 
    setTimeout(() => {
        if (pathnameSegments[1] =="libraries" && pathnameSegments[1] !="" && pathnameSegments[3] =="subjects" && pathnameSegments[5] == "" || pathnameSegments[5] ==null && pathnameSegments[6] ==null && pathnameSegments[7] ==null && pathnameSegments[8] ==null) {
            lib = pathnameSegments[2]; sub = pathnameSegments[4];
            checkPost_status = 1;
        } else if (pathnameSegments[5] == "bookcases" && pathnameSegments[6] !=null && pathnameSegments[1] !=null && pathnameSegments[3] =="subjects" && pathnameSegments[7] =="" || pathnameSegments[7] ==null && pathnameSegments[8] ==null) {
            lib = pathnameSegments[2]; sub = pathnameSegments[4]; book = pathnameSegments[6];                      
            checkPost_status = 2;
        }else {
            if (pathnameSegments[6] !== "") {
                if (pathnameSegments[5] =="bookcases" && pathnameSegments[7] =="bookshelves" && pathnameSegments[5] !=null && pathnameSegments[7] !=null) {
                    lib = pathnameSegments[2]; sub = pathnameSegments[4]; book = pathnameSegments[6]; sh = pathnameSegments[8];                        
                    checkPost_status = 3;
                }
            } 
        }
        csrf_token = 'b24efe8e-40f5-11ee-aa1b-e442a6933c18';
        pOSTurl =(checkPost_status ==1 ? "getall=true&library=" + lib + "&subject=" + sub + "&token=" + csrf_token + "" : (checkPost_status ==2) ? "getbookcases=true&library="+lib+"&subject="+sub+"&bookcases="+book+"&token=" + csrf_token +"" : "getcraft=true&library=" + lib + "&subject=" + sub + "&bookcases=" + book + "&bookshelves=" + sh + "&token=" + csrf_token + "");
        // Make an AJAX request to fetch new data from the server
        xhr.open('GET', root_url+'api/apicontext?'+pOSTurl+'&page=' + currentPage, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                newData = xhr.responseText;
                obj = JSON.parse(newData)._items;
                document.getElementById('loading').style.display = 'none';
                document.getElementById('spinnerLoad').style.display = 'none';
                var dataContainer = document.querySelector('.bookshelf');
                // ✅ Create element
                var itemElement = document.createElement('li');
                // ✅ Add classes to element
                itemElement.classList.add('bookshelf-journal-list-item');
                itemElement.id = 'newjournal';
                obj.data.journalList.forEach(function (CallRecieve) {
                    itemElement=`<li class="bookshelf-journal-list-item"><div id="ember8270" class="ember-view">
                                <a href="${root_url}libraries/${libraryPort}/journals/${CallRecieve.journalid}/?sort=title" id="ember8271" class="bookshelf-journal ember-view" tabindex="0">
                                    <div id="ember8272" class="journal-cover __771d8 ember-view">
                                        <div class="image-container">
                                            <img src="${root_url}${CallRecieve.imagedata}" alt="${CallRecieve.journal_name}" title="${CallRecieve.journal_name}">
                                        </div>
                                    </div>
                                    <div title="${CallRecieve.journal_name}" class="bookshelf-journal-title">${CallRecieve.journal_name}</div>
                                </a>
                            </div></li>`
                    dataContainer.insertAdjacentHTML('beforeend', itemElement)
                });
                isLoading = false;
                currentPage++;
                document.getElementById('loadMoreButton').textContent = 'Load More';
                // Get the element with the class "error-msg"
                const messageElement = document.querySelector('.message');
                const ErrormessageElement = document.querySelector('.error-msg');
                (obj.rowCount > 39 || obj.rowCount == 40 ? [document.getElementById('loading').style.display = 'block', ErrormessageElement.style.display = "none"] : obj.rowCount==0 ? [currentPage=1, ErrormessageElement.style.display = "block", document.getElementById('loadMoreButton').classList.add('primary'), document.getElementById('loadMoreButton').textContent = 'No Data Found..!', document.getElementById('loading').style.display = 'block']: $('#loading').remove());
            }
        };
        xhr.send();
    }, 1000);
}
// Add a scroll event listener to trigger fetching new data when the user scrolls to the bottom
sidebar.addEventListener('scroll', function() {
    if (sidebar.scrollTop + sidebar.clientHeight >= content.scrollHeight) {
        document.getElementById('loading').style.display = 'block';
        document.getElementById('spinnerLoad').style.display = 'none';
    }
});
window.addEventListener('scroll', function () {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
        document.getElementById('loading').style.display = 'block';
        document.getElementById('spinnerLoad').style.display = 'none';
    }
});
// Add a click event listener to the "Load More" button
document.getElementById('loadMoreButton').addEventListener('click', fetchMoreData);
document.querySelector('.login-institute').addEventListener('click',function (e){
    e.preventDefault();
    window.location.href= root_url+'auth/login'
})