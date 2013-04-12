var admin = {}

admin.addmemberIndex = function()
{
    $('#submitBtn').click(function(e){
        admin.checkAddMemberForm();
    });
}

admin.checkAddMemberForm = function()
{

    if ($('#firstName').val() == '')
    {
        global.renderAlert("Please enter your first name!");
        return false;
    }

    if ($('#lastName').val() == '')
    {
        global.renderAlert("Please enter your last name!");
        return false;
    }

    $('#addMemberForm').submit();
    $('#submitBtn').attr('disabled', 'disabled');

}

function contactInit()
{
	$('#contactinfo').load('contact.html #ldg');
	
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
	getsw("sw");
	});	
	
	$('#jwbtn').click(function(){
	getjw("jw");
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
	$.get("/admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}

function getwm(type)
{
	$.get("/admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}
	
function getsw(type)
{
	$.get("/admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	
	
function getjw(type)
{
	$.get("/admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	

function getsd(type)
{
	$.get("/admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}

function getjd(type)
{
	$.get("/admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}
	
function gettrsr(type)
{
	$.get("/admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	
	
function getsec(type)
{
	$.get("/admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	

function getchap(type)
{
	$.get("admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	
	
function getmar(type)
{
	$.get("/admin/contact/" + type, function(data){
	$('#contactinfo').html(data);	
	});
}	
