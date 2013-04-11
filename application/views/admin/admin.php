<div class='row'>
    <div class='span12'>
        <div class='login'>
            <div class="content">

<?php include_once $_SERVER['DOCUMENT_ROOT'] . 'application/views/template/alert.php'; ?>

<h2>Please login below</h2>
    <div class="loginformdiv">
    <form name='loginForm' id='loginForm' method='post' action='/members/login'>
    <input type='hidden' name='ref' value='<?=$_GET['ref']?>'>

        <table class='login-tbl' align='center'>
            <tbody>
                <tr>
                    <td><strong>E-mail</strong></td>
                    <td width='10px'></td>
                    <td><input type='text' name='email' id='email' autocomplete="off"></td>
                </tr>
                <tr>
                    <td height='50px'><strong>Password</strong></td>
                    <td></td>
                    <td><input type='password'  name='password' id='email' autocomplete="off"></td>
                </tr>
                <tr>
                    <td><button type='submit' id='loginBtn' class='btn btn-primary'>Login</button></td>
                    <td></td>
                    <td><button type='reset' id='loginBtn' class='btn btn-warning'>Reset Password</button></td>
                </tr>
            </tbody>
        </table>

        </form>
        </div>
            </div> <!-- /.content -->
        </div> <!-- /.login -->
    </div> <!-- /.span12 -->
</div> <!-- /.row -->
