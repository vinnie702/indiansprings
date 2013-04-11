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
