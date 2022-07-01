<?php

session_start();

if ($_GET['Submit'] == 'Send')
{
 $title= $_GET['Title'];
 $sendername= $_GET['SenderName'];
 $sender= $_GET['Sender'];
 $receiver= $_GET['Receiver'];
 $content= $_GET['Content'];
 $lt= '<';
 $gt= '>';
 $sp= ' ';
 $from= 'From:';
 $headers = $from.$sendername.$sp.$lt.$sender.$gt;

 mail($receiver, $title, $content, $headers);
 header("Location: mail_file.php?msg= Mail Sent");
 exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<style>
	div#editor {
    	padding: 16px 24px;
        border: 1px solid #D6D6D6;
        border-radius: 4px;
    }
</style>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Malignant email simulation training</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body">
        <div class="d-flex" id="wrapper">

            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-primary"; style="color:white">Hello User</div>

                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Home</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="mail.php">SendMail_Link</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="mail_file.php">SendMail_File</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="dash.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="login.php">Logout</a>
                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="page-content-wrapper">

                <!-- Top navigation-->
                <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
                    <div class="container-fluid">
                        <button class="btn btn-light" id="sidebarToggle">Menu</button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        </div>
                    </div>
                </nav>

                <!-- Page content-->
                <div class="container">
                    <form action="mail_file.php" method="GET">
                            <br>
                            <label for="InputTitle">Title</label>
                            <input type="text" class="form-control" name="Title"style="width:1000px;height:40px;">
                            <br>
                            <label for="InputSenderName">Sender Name</label>
                            <input type="text" class="form-control" placeholder="Write Sender Name" name="SenderName" style="width:1000px;height:40px;">
                            <br>
                            <label for="InputSender">Sender</label>
                            <input type="text" class="form-control" placeholder="Write Sender Email" name="Sender" style="width:1000px;height:40px;">
                            <br>
                            <label for="InputReceiver">Receiver</label>
                            <input type="email" multiple class="form-control" placeholder="Write Recever Email" name="Receiver" style="width:1000px;height:40px;">
                        <br>
                        <label for="InputContent">Content</label>
                        <textarea class="form-control" aria-label="With textarea" rows="10" cols="10" name="Content" style="width:1000px;height:200px;"></textarea>
                        <br>
                        <button type="submit" class="btn btn-primary" id="sendmail" name="Submit" Value="Send">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
