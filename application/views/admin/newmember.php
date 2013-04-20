<div class"content">
    <div class="newmemberform">
        <form class="form-horizontal" name='addMemberForm' id='addMemberForm' method='post' action='/admin/saveNewUser'>
            <fieldset>

<legend>New Members</legend>
    <div class="row">
        <div class="span12">

<div class="control-group">
    <label class="control-label" for="inputfirstName">First Name</label>
    <div class="controls">
        <input type="text" id="inputfirstName" placeholder="John">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputlastName">Last Name</label>
    <div class="controls">
        <input type="text" id="inputlastName" placeholder="Doe">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
        <input type="text" id="inputEmail" placeholder="someone@something.com">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputPassword">Create Password</label>
    <div class="controls">
        <input type="text" id="inputPassword" placeholder="Password">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputPhone">Phone Number</label>
    <div class="controls">
        <input type="text" id="inputPhone" placeholder="(702) 555-0000">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputaddress1">Address 1</label>
    <div class="controls">
        <input type="text" id="inputaddress1" placeholder="1234 Some St.">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputaddress2">Address 2</label>
    <div class="controls">
        <input type="text" id="inputaddress2" placeholder="#5678">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputCity">City</label>
    <div class="controls">
        <input type="text" id="inputCity" placeholder="Las Vegas">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputState">State</label>
    <div class="controls">
        <select id="inputState">
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
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputZip">Zip Code</label>
    <div class="controls">
        <input type="text" id="inputZip" placeholder="89001">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputCounty">Country</label>
    <div class="controls">
        <input type="text" id="inputCounty" placeholder="USA">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputPhoto">Upload Photo</label>
    <div class="controls">
        <input type="file" id="inputPhoto">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputBio">Brother's Bio</label>
    <div class="controls">
        <textarea row="3" type="text" id="inputBio" placeholder="Type Bio Here..."></textarea>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="inputjoinedLodge">Year They Joined Lodge</label>
    <div class="controls">
        <select id="inputjoinedLodge">
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
        </select>
    </div>
</div>

<div class='form-actions'>
        <button type="button" class="btn btn-primary" id='submitBtn'>Submit</button>
</div>


    </div> <!-- /.span12 -->
</div> <!-- /.row -->


            </fieldset>
        </form>
    </div> <!-- /.newmemberform -->
</div> <!-- /.content -->
