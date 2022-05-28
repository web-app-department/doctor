
var innerHTML = "";
var spinner;
$("form").submit(function (e) {
    e.preventDefault();
    const btn = $("#submit_btn");
    btn.text("Creating Appointment...");
    const formdata = new FormData($(this)[0]);
    $.ajax({
        url: "/api/create-appointment/",
        type: "POST",
        processData: false,
        contentType: false,
        data: formdata,
        success: (data) => {
            window.location.href = `${data["payment_url"]}${data["appointment"]}/`
        },
        error: (error) => {
            console.log(error);
            window.location.href = "/"
        }
    });
    let count = 0;
    spinner = setInterval(() => {
        if (count % 3 == 0) {
            btn.text("Creating Appointment");
        }
        count++;
        btn.text(btn.text() + '.');
    }, 500);
});

//clearInterval(spinner);

function createCards() {
    $.ajax({
        url: '/api/doctor/' + doctorid + '/',
        type: 'GET',
        data: {},
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                var doctordata = data.doctordata;
                console.log(doctordata);
                var credentials = doctordata.credentials;
                document.getElementById('designation').innerHTML = doctordata.designation;
                document.getElementById('department').innerHTML = doctordata.department;
                document.getElementById('current_chamber').innerHTML = doctordata.current_chamber;
                document.getElementById('credentials').innerHTML = credentials;
            }
        }
    });
}

createCards();