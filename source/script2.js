var check = function () {
    if (document.getElementById('password').value ==
        document.getElementById('cpassword').value) {
        document.getElementById('message').style.color = '#5dd05d';
        document.getElementById('message').innerHTML = 'Matched';
    } else {
        document.getElementById('message').style.color = '#f55252';
        document.getElementById('message').innerHTML = 'Not Matching';
    }
}

function alphaOnly(event) {
    var key = event.keyCode;
    return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen() {
    var pass1 = document.getElementById("password");
    if (pass1.value.length < 6) {
        alert("Password must be at least 6 characters long. Try again!");
        return false;
    }
}

function load_search_history() {
    var search_query = document.getElementsByName('search_box')[0].value;

    if (search_query == '') {

        fetch("process_data.php", {

            method: "POST",

            body: JSON.stringify({
                action: 'fetch'
            }),

            headers: {
                'Content-type': 'application/json; charset=UTF-8'
            }

        }).then(function (response) {

            return response.json();

        }).then(function (responseData) {

            if (responseData.length > 0) {

                var html = '<ul class="list-group">';

                html += '<li class="list-group-item d-flex justify-content-between align-items-center"><b class="text-primary"><i>Your Recent Searches</i></b></li>';

                for (var count = 0; count < responseData.length; count++) {

                    html += '<li class="list-group-item text-muted" style="cursor:pointer"><i class="fas fa-history mr-3"></i><span onclick="get_text(this)">' + responseData[count].search_query + '</span> <i class="far fa-trash-alt float-right mt-1" onclick="delete_search_history(' + responseData[count].id + ')"></i></li>';

                }

                html += '</ul>';

                document.getElementById('search_result').innerHTML = html;

            }

        });

    }
}

