var innerHTML = "";
var doctorlist={};
const chamberLength=70;
const credentialLength=100;
var main_doctor_data={};
var has_used_search = 0;

function padChamber(str) {
    var padLength = chamberLength-str.length;
    var mainStr="";
    for(var i=0;i<=padLength;i++)
    {
        mainStr=mainStr+" "+"&#160;";
    }

    return str+mainStr;
}


function padSpace(str) {
    var padLength = credentialLength-str.length;
    var mainStr="";
    for(var i=0;i<=padLength;i++)
        mainStr=mainStr+" "+"&#160;";
    return str+mainStr;
}


function generateCredentials(id)
{
    var str="";
    if(doctorlist[id].credentials.length>credentialLength)
    {

       str=doctorlist[id].credentials ;
    }
    else{
        str =padSpace(doctorlist[id].credentials);
    }

    return str;
}


function generateChamber(id)
{
    var str="";
    if(doctorlist[id].current_chamber.length>chamberLength)
    {
        str=doctorlist[id].current_chamber;
    }
    else{
        if(doctorlist[id].credentials.length>credentialLength) {
            str = doctorlist[id].current_chamber;
        }
        else
        {
            str = padChamber(doctorlist[id].current_chamber);
        }
    }

    return str;
}

function createCards(){
    $.ajax({
        url: '/api/doctor/all',
        type: 'GET',
        data: {},
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                main_doctor_data = data;
                for (var i in data.doctorlist) {
                    var doctordata = data.doctorlist[i];
                    doctorlist[doctordata.id]=doctordata;
                }
                generateCards(data);
            }
        }
    });

}

function generateSingleCard(doctordata){
    var badgeColor = "orange";
    if(doctordata.availability_message==="Today" || doctordata.availability_message==="Tomorrow")
    {
        badgeColor = "#1DC468";
    }
    else{
        badgeColor = "#F5C228";
    }
    var content = '<div class="post">'+
        '<div style="display:flex;height:100%;flex-direction:column;">'+
        '<img style="cursor: pointer" onclick="createAppointment('+doctordata.id+');" src="'+doctordata.image+'" alt="" class="slider-image">'+
        '<div class="post-info" onclick="createAppointment('+doctordata.id+');" style="cursor: pointer">'+
        '<b class="speciality">'+doctordata.speciality+'</b>'+
        '<div class="post-name">'+
        '<b>'+doctordata.name+'</b>'+
        '</div>'+
        '<div class="work">'+
        '<p id="credentials'+doctordata.id+'">'+
        generateCredentials(doctordata.id)+
        '</p>'+
        '</div>'+
        '<div class="qualifications">'+
        '<b>'+doctordata.designation+'</b><br>'+
        '<b>'+doctordata.department+'</b><br>'+
        '<b style="font-size:15px;" id="chamber'+doctordata.id+'">'+generateChamber(doctordata.id)+
        '</b>'+
        '</div>'+
        '<div id="doctor-availability-badge" style="margin-bottom: 10px">' +
         '<div class="availability-today-div" >Next Serial Available (until now): <br><span class="badge" style="background-color:'+badgeColor+';"></span><b style=color:'+badgeColor+'>'+doctordata.availability_message+'</b></div>'+
        '</div>'+
        '<div class="cta">'+
        '<a style="text-decoration: none;" href="'+generateURLForDoctor(doctordata.id)+'"><button class="cta-select2" ><b>Make Appointment</b></button></a>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>';
    return content;
}

function generateCards(data)
{
    innerHTML ="";
    for (var i in data.doctorlist) {
        var doctordata = data.doctorlist[i];
        innerHTML += generateSingleCard(doctordata);
    }
    document.getElementById('doctor-profile-list').innerHTML=innerHTML;


}
function generateSearchCards(doctordata)
{
    var content = '<div class="search-post" onclick="createAppointment(\'' + doctordata.id + '\');">' +
        '            <div style="display:flex;height:100%;flex-direction:row;">' +
        '                <div style="width:20%" class="search-doctor-image-container"><div class="search-doctor-image" style="background-image: url(\'' + doctordata.image + '\');" >' +
        '                </div></div>' +
        '                <div class="search-post-info">' +
        '                    <b class="search-speciality">' + doctordata.speciality + '</b>' +
        '                    <div class="search-post-name"><p>' + doctordata.name + '</p></div>' +
        '                    <div class="search-work">' +
        '                        <p id="search-credentials' + doctordata.id + '">' + generateCredentials(doctordata.id) + '</p>' +
        '                    </div>' +
                            '<div class="search-qualifications">'+
                            '<b>'+doctordata.designation+'</b><br>' +
        '<p>'+doctordata.department+'</p>'+
        '</div>'+
                            '<b class="search-chamber" id="search-chamber'+doctordata.id+'">'+generateChamber(doctordata.id)+
                            '</b>'+
        '                </div>' +
        '                <button style="width:8%" class="search-cta-btn" onclick="createAppointment(\"' + doctordata.id + '\");">' +
        '                    <span style="color:#3cc6fa;" class="icon icon-right"></span>' +
        '                </button>' +
        '            </div>' +
        '        </div>';
    return content;
}

createCards();
//createHorizontalDivs();
function createAppointment(doctorid){
    window.location.href=generateURLForDoctor(doctorid);
}

function generateURLForDoctor(doctorid){
    var profile_url= doctorlist[doctorid].profile_url;
    var q = document.getElementById("srcid").value?"srcid="+document.getElementById("srcid").value:"";
    var joiner = q!==""?"&":"";//IF q is empty, don't add &
    var p = document.getElementById("emp").value?"emp="+document.getElementById("emp").value:"";
    console.log("Parameters ",q,p,joiner);
    var url_parameters = q+joiner+p;
    console.log(url_parameters,has_used_search);
    if(url_parameters!=="")
    {
        url_parameters="?"+url_parameters;
    }
    console.log(url_parameters,has_used_search);
    var search_suffix = "search="+has_used_search;

    if(has_used_search!==0){
        if(url_parameters==="")
        {
            url_parameters = "?"+search_suffix;
        }
        else{
            url_parameters = url_parameters+"&"+search_suffix;
        }

    }
    console.log(url_parameters);

    return "/"+profile_url+"/"+url_parameters;
}

function clearBtnPress(e)
{
    var keyword =document.getElementById('searchTerm').value;
    has_used_search =-1;
    if(keyword.length>0)
    {
        console.log("Clear Clicked");
        document.getElementById('searchTerm').value ="";
        generateCards(main_doctor_data);
        document.getElementById('clear_btn').style.display ="none";
    }

}

function handleKeyPress(e){
    var keyword =document.getElementById('searchTerm').value;
    /*
        If Zero Length keyword, don't show clear button, Show regular cards.
        Else show clear button

        If enter key is pressed, search
        if keycode is backspace or delete,
            If keyword length 0 - 2, show all doctors using search
            if keyword length > 2, show search result
     */

    if(keyword.length==0)
    {
        document.getElementById('clear_btn').style.display ="none";
        has_used_search = 0;
        generateCards(main_doctor_data);
        return;
    }else if(keyword.length>30){
        document.getElementById('clear_btn').style.display ="block";
        generateCards(main_doctor_data);
        return;
    }
    else{
         document.getElementById('clear_btn').style.display ="block";
    }
    if(e.keyCode === 13){
        e.preventDefault(); // Ensure it is only this code that runs
        searchDoctor();
    }
    else if(e.keyCode===8 || e.keyCode===46)
    {
        console.log("Backspace received",e.keyCode);
        if(keyword.length>0 && keyword.length<3){
            console.log("Generating all");
            searchDoctor();
        }
    }
    else if(keyword.length>2)
    {
        searchDoctor();
    }
}


function searchDoctor()
{
    has_used_search = 1;
    var keyword =document.getElementById('searchTerm').value;
    $.ajax({
        url: '/api/search/?q='+keyword,
        type: 'GET',
        data: {},
        dataType: 'json',
        success: function (data) {
            console.log(data);
            var keyword =document.getElementById('searchTerm').value;
            if(keyword.length<3)
            {
                return;
            }
            if (data.success) {
                var innerContent ="";
                for (var i in data.doctorlist) {
                    var doctordata = data.doctorlist[i];
                    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
                    if (isMobile) {
                        innerContent = innerContent+generateSearchCards(doctordata);
                    }
                    else{
                        innerContent = innerContent+generateSingleCard(doctordata);
                    }
                }
                document.getElementById('doctor-profile-list').innerHTML=innerContent;
                /*
                for (var i in data.doctorlist) {
                    var doctordata = data.doctorlist[i];
                    console.log(doctordata);
                }

                 */
            }
        }
    });
}


/*

function getCategories()
{
    var categoryList= {};
    $.ajax({
        url: '/api/categories/',
        type: 'GET',
        data: {},
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data.success) {
                for (var i in data.categories) {
                    var category = data.categories[i];
                    categoryList[category.id]=category.name;
                }
                console.log(categoryList);
            }
        }
    });
}


function getDoctorByCategory()
{
    $.ajax({
        url: '/api/doctor_category/?id=1',
        type: 'GET',
        data: {},
        dataType: 'json',
        success: function (data) {
            console.log(data);
            if (data.success) {
                for (var i in data.doctorlist) {
                    var doctordata = data.doctorlist[i];
                    console.log(doctordata);
                }
            }
        }
    });
}
//getCategories();
//getDoctorByCategory();
*/
