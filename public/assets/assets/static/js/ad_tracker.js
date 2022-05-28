const queryString = window.location.search;
//console.log(queryString);
const urlParams = new URLSearchParams(queryString);

if(urlParams.has('srcid'))
{
    const ad = urlParams.get('srcid');
    document.getElementById("srcid").value=ad;
    console.log(ad);
}

if(urlParams.has('search'))
{
    const used_search = urlParams.get('search');
    document.getElementById("search").value=used_search;
    console.log("Search ",used_search);
}

if(urlParams.has('emp'))
{
    const emp = urlParams.get('emp');
    console.log(emp);
    if(document.getElementById('emp')!==null)
    {
        document.getElementById("emp").value=emp;
        console.log("Checking for robi",emp);
        if(emp!=="gpstar" && emp!=="refer" && emp!=="robielite")
        {
            showDiscountedFee();
            console.log("Checking for not robi");
        }
        else if(emp==="gpstar" || emp==="refer" || emp==="robielite") {
            console.log("Checking for robi");
            showDiscountedFee();
            if(document.getElementById('promo_section')!==null)
            {
                if(emp==="refer")
                    document.getElementById('promocode').placeholder='Enter Your promo code';
                else if(emp==="gpstar")
                    document.getElementById('promocode').placeholder='Enter your GPStar Promo Code for 25% Discount';
                else if(emp==="robielite")
                    document.getElementById('promocode').placeholder='Enter your Robi Elite Promo Code for 25% Discount';

                document.getElementById('promo_section').style.display='block';
            }
        }

    }
}
else{
    showDiscountedFee();
}

function showDiscountedFee()
{
    if(typeof discounted_fee !== 'undefined' && typeof doctor_fee !== 'undefined'  && doctor_fee!==discounted_fee)
    {
        if(document.getElementById('original_fee')!==null)
        {
            document.getElementById('original_fee').style.display='none';
        }
        if(document.getElementById('discounted_fee')!==null)
        {
            document.getElementById('discounted_fee').style.display='block';
        }
    }

}

function checkPromoCode() {
    var code = document.getElementById('promocode').value;

    $.ajax({
        url: '/api/check_promo/?promo='+code,
        type: 'GET',
        data: {},
        dataType: 'json',
        success: function (data) {
            console.log("data ",data);
            if (data.success) {
                var discount_type = data.discount_type;
                var discount_value = data.discount_value;
                console.log(discount_type,discount_value);
                applySuccessfulPromoCode(discount_type,discount_value);
            }
            else{
                document.getElementById('promo_error').style.color="red";
                document.getElementById('promo_error').innerText=data.message;
                document.getElementById('promo_error').style.display="block";
                showDiscountedFee();
            }
        }
    });
}

function applySuccessfulPromoCode(discount_type,discount_value)
{
    if(document.getElementById('original_fee')!==null)
    {
        document.getElementById('original_fee').style.display='none';
    }
    if(document.getElementById('discounted_fee')!==null)
    {
        var discounted_fee = doctor_fee;
        if(discount_type==1)
        {
            discounted_fee= doctor_fee- (doctor_fee*discount_value*0.01);
            document.getElementById('promo_error').innerText=discount_value+"% discount applied !";
        }
        else if(discount_type==2){
            discounted_fee= doctor_fee- discount_value;
            document.getElementById('promo_error').innerText=discount_value+"TK discount applied !";
        }

        document.getElementById('discounted_fee').innerHTML="<span style=\"text-decoration: line-through;color:gray\">BDT "+doctor_fee+"</span> BDT "+discounted_fee;
        document.getElementById('discounted_fee').style.display='block';
        document.getElementById('promo_error').style.display="block";
        document.getElementById('promo_error').style.color="green";
    }
}


function getSuffix()
{
    try {
        var q = document.getElementById("srcid").value ? "srcid=" + document.getElementById("srcid").value : "";
        var joiner = q !== "" ? "&" : "";//IF q is empty, don't add &
        var p = document.getElementById("emp").value ? "emp=" + document.getElementById("emp").value : "";
        var suffix = q + joiner + p;
        if (suffix !== "")
            suffix = "?" + suffix;
        return suffix;
    }
    catch ( e ) {
        //console.log(e);
        return "";
    }
}

function redirectToAllDoctors()
{
    window.location.href="/"+getSuffix();
}


function redirectToHome()
{
    window.location.href="/"+getSuffix();
}


function redirectToAbout()
{
    window.location.href="/about"+getSuffix();
}


function redirectToForDoctor()
{
    window.location.href="/fordoctors"+getSuffix();
}
