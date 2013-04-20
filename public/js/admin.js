var admin = {}

admin.addmemberIndex = function()
{
    $('#submitBtn').click(function(e){
        admin.checkAddMemberForm();
    });
}

admin.checkAddMemberForm = function()
{

    if ($('#inputfirstName').val() == '')
    {
        global.renderAlert("Please enter your first name!");
        return false;
    }

    if ($('#inputlastName').val() == '')
    {
        global.renderAlert("Please enter your last name!");
        return false;
    }

    if ($('#inputEmail').val() == '')
    {
        global.renderAlert("Please enter a valid email address! (If no email exists, enter 'x@x.com')");
        return false;
    }

    if ($('#inputPassword').val() == '')
    {
        global.renderAlert("Please create a password!");
        return false;
    }

    if ($('#inputPhone').val() == '')
    {
        global.renderAlert("Please enter your phone number!");
        return false;
    }

    if ($('#inputAddress1').val() == '')
    {
        global.renderAlert("Please enter your address!");
        return false;
    }

    if ($('#inputCity').val() == '')
    {
        global.renderAlert("Please enter your city!");
        return false;
    }

    if ($('#inputZip').val() == '')
    {
        global.renderAlert("Please enter your zip code!");
        return false;
    }

    if ($('#inputCountry').val() == '')
    {
        global.renderAlert("Please enter your country!");
        return false;
    }

    if ($('#inputBio').val() == '')
    {
        global.renderAlert("Please enter your bio!");
        return false;
    }

    $('#addMemberForm').submit();
    $('#submitBtn').attr('disabled', 'disabled');

}

function contactInit()
{
	$('#contactus well').load('contact.html #ldg');
	
	$('#ldgbtn').click(function(){
	getldg("ldg");
	});

	$('#wmbtn').click(function(){
	getwm("wm");
	});
		
	$('#swbtn').click(function(){
	getsw("sw");
	});	
	
	$('#jwbtn').click(function(){
	getjw("jw");
	});
    
	$('#sdbtn').click(function(){
	getsd("sd");
	});

	$('#jdbtn').click(function(){
	getjd("jd");
	});
		
	$('#trsrbtn').click(function(){
	getsw("trsr");
	});	
	
	$('#secbtn').click(function(){
	getsec("sec");
	});
		
	$('#chapbtn').click(function(){
	getchap("chap");
	});	
	
	$('#marbtn').click(function(){
	getmar("mar");
	});


}

function getldg(type)
{
	$.get("/welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}

function getwm(type)
{
	$.get("/welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}
	
function getsw(type)
{
	$.get("/welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	
	
function getjw(type)
{
	$.get("/welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	

function getsd(type)
{
	$.get("/welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}

function getjd(type)
{
	$.get("/welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}
	
function gettrsr(type)
{
	$.get("/welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	
	
function getsec(type)
{
	$.get("/welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	

function getchap(type)
{
	$.get("welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	
	
function getmar(type)
{
	$.get("/welcome/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	
