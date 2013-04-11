<div class"content">
    <div class="newmemberform">
        <form name='addMemberForm' id='addMemberForm' method='post' action='/admin/saveNewUser'>
            <fieldset>
                <legend>New Members</legend>
                    <div class="row">
                        <div class="span3">
                            <label>First Name</label>
                            <input type="text" name='firstName' id='firstName' placeholder="First Name">
                        </div> <!-- /.span3 -->
                        <div class="span3">
                            <label>Last Name</label>
                            <input type="text" name='lastName' id='lastName' placeholder="Last Name">
                        </div> <!-- /.span3 -->
                        <div class="span3">
                            <label>E-Mail</label>
                            <input type="text" placeholder="something@something.com">
                        </div> <!-- /.span3 -->
                            <label>Phone Number</label>
                            <input type="text" placeholder="(702) 555-0000">
                        <div class="span3">
                        </div> <!-- /.span3 -->
                    </div> <!-- /.row -->
                    <div class="row">
                        <div class="span3">
                            <label>Address 1</label>
                            <input type="text" placeholder="123 Spooner St.">
                        </div> <!-- /.span3 -->
                        <div class="span3">
                            <label>Address 2</label>
                            <input type="text" placeholder="#1234">
                        </div> <!-- /.span3 -->
                        <div class="span3">
                            <label>City</label>
                            <input type="text" placeholder="Las Vegas">
                        </div> <!-- /.span3 -->
                        <div class="span3">
                            <label>State</label>
                            <select>
<?php
if (!empty($states))
{
    foreach ($states as $abb => $stateName)
    {
    echo "<option value='{$abb}'>{$stateName}</option>\n";
    }
}
?>
                            </select>
                        </div> <!-- /.span3 -->
                    </div> <!-- /.row -->
                    <div class="row">
                        <div class="span3">
                            <label>Zip Code</label>
                            <input type="text" placeholder="89001">
                        </div> <!-- /.span3 -->
                        <div class="span3">
                            <label>Country</label>
                            <input type="text" placeholder="USA">
                        </div> <!-- /.span3 -->
                        <div class="span3">
                            <label>Upload Photo</label>
                            <input type="file">
                        </div> <!-- /.span3 -->
                    </div> <!-- /.row -->
                    <div class="row">
                        <div class="span6">
                            <textarea rows="3">Bio Goes Here</textarea>
                        </div> <!-- /.span6 -->
                    </div> <!-- /.row -->
                    <div class="row">
                        <div class="span3">
                            <label>Year Joined Lodge</label>
                            <select>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                            </select>
                        </div> <!-- /.span3 -->
                    </div> <!-- /.row -->
                <!-- <span class="help-block">Example block-level help text here.</span> -->
                <!-- <label class="checkbox"> -->
                    <!-- <input type="checkbox"> Check me out -->
                <!-- </label> -->
            </fieldset>
    
        <div class='form-actions'>
                <button type="button" class="btn btn-primary" id='submitBtn'>Submit</button>
        </div>


        </form>
    </div> <!-- /.newmemberform -->
</div> <!-- /.content -->
