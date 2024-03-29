
document.addEventListener("DOMContentLoaded", function (event) {
    const formIntercomex = document.getElementById('formIntercomex')
    formIntercomex.addEventListener('submit', (event) => {
        event.preventDefault();
        postMethod = document.getElementById('formIntercomex:RedirectPost').value;
        formLoading = document.getElementById('formIntercomex:Loading')
        formSubmit = document.getElementById('formIntercomex:Submit')
        show(formLoading)
        show(formSubmit)
        postData(postMethod)
            .then(data => {
                console.log(data); // JSON data parsed by `data.json()` call
                show(formLoading)
                show(formSubmit)
            });
    })
});

async function postData(url = '', data = {}) {
    const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'force-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
            // 'Content-Type': 'application/x-www-form-urlencoded'
            'Content-Type': 'application/json'
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: JSON.stringify(data) // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
}


function show(elem) {
    if (elem.style.display == "none") {
        elem.style.display = "block";
    } else {
        elem.style.display = "none";
    }
}