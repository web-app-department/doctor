
const credentialLength=90;
const chamberLength=70;
var doctorlist={};

var innerHTML = "";
var credential_status = {};

function padSpace(str) {
  var padLength = (credentialLength+10)-str.length;
  var mainStr="";
  for(var i=0;i<=padLength;i++)
    mainStr=mainStr+" "+"&#160;";
  return str+mainStr;
}

function padChamber(str) {
  var padLength = chamberLength-str.length;
  var mainStr="";
  for(var i=0;i<=padLength;i++)
  {
    mainStr=mainStr+" "+"&#160;";
  }

  return str+mainStr;
}


function generateChamber(id)
{
  var str="";
  if(doctorlist[id].current_chamber.length>chamberLength)
  {

      str=doctorlist[id].current_chamber;
  }
  else{
    if(doctorlist[id].name==='Dr. Riffat Rahim')
    {
      str = padChamber(doctorlist[id].current_chamber);
    }
    else if(doctorlist[id].name==='Dr. Salahuddin Mahmud, MD') {
      var mainStr="";
      for(var i=0;i<=5;i++)
      {
        mainStr=mainStr+" "+"&#160;";
      }
      str = doctorlist[id].current_chamber+mainStr;
    }
    else
    {
      str = padChamber(doctorlist[id].current_chamber);
    }
  }

  return str;
}


function generateCredentials(id)
{
  var str="";
  if(doctorlist[id].credentials.length>credentialLength)
  {
    if(credential_status[id]===1)
    {
      str=doctorlist[id].credentials + " <a style='color:#3cc6fa;' onclick='toggleCredentials("+id+");' id='toggleButton"+id+"'>Show Less</a>";
    }
    else{
      str=doctorlist[id].credentials.substring(0,credentialLength) + " <a style='color:#3cc6fa;' onclick='toggleCredentials("+id+");' id='toggleButton"+id+"'>Show More</a>";
    }
  }
  else{
    str =padSpace(doctorlist[id].credentials);
  }

  return str;
}

function toggleCredentials(id)
{
  if (credential_status[id] == 1) {
    credential_status[id] = 0;
  } else {
    credential_status[id] = 1;
  }
    document.getElementById("credentials"+id).innerHTML=generateCredentials(id);

}

function createCards(){
  $.ajax({
    url: '/api/doctor/all',
    type: 'GET',
    data: {},
    dataType: 'json',
    success: function (data) {
      if (data.success) {
        for (var i in data.doctorlist) {
            var doctordata = data.doctorlist[i];
            doctorlist[doctordata.id]=doctordata;
            credential_status[doctordata.id]=0;
            innerHTML += '<div class="post">'+
                  '<img src="'+doctordata.image+'" alt="" class="slider-image">'+
                  '<div class="post-info">'+
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
                  '<b style="font-size:14px;" id="chamber'+doctordata.id+'">'+generateChamber(doctordata.id)+
                  '</b>'+
                  '</div>'+
                  '<div class="cta">'+
                  '<button class="cta-select2" onclick="createAppointment('+doctordata.id+');"><b>Make Appointment</b></button>'+
                  '</div>'+
                  '</div>'+
                  '</div>';
        }


        document.getElementById('doctor-profile-list').innerHTML=innerHTML;
        $(".post-wrapper").slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 2000,
          adaptiveHeight:true,
          nextArrow: $(".right-arrow"),
          prevArrow: $(".left-arrow"),
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
              },
            },
            {
              breakpoint: 800,
              arrows: false,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              },
            },
            {
              breakpoint: 600,
              arrows: false,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              },
            },

            {
              breakpoint: 400,
              arrows: false,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ],
        });
      if(document.getElementsByClassName('slick-dots')!=[] && document.getElementsByClassName('slick-dots')[0]!=undefined  )
          document.getElementsByClassName('slick-dots')[0].style.display="none";
      }
    }
  });

}

createCards();

function createAppointment(doctorid){
  var profile_url= doctorlist[doctorid].profile_url;
  var q = document.getElementById("srcid").value?"srcid="+document.getElementById("srcid").value:"";
  var joiner = q!==""?"&":"";//IF q is empty, don't add &
  var p = document.getElementById("emp").value?"emp="+document.getElementById("emp").value:"";
  window.location.href="/"+profile_url+"?"+q+joiner+p;
}