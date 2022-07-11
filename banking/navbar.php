<!-- navigation bar-->
<nav class=' navbar navbar-expand-md navbar-light bg-light'><!--navbar denotes start of this, navbar-light denotes the theme ,bg-light denotes background theme,navbar-expand-md setting the limit where it should change as drop down form-->
<a class='navbar-brand ' href='index.php' >  <!--navbar-brand denotes company name-->
<img src='image/bnklg.png' alt='Logo' width='26' style='margin-bottom:4px;'><b>  Banking System </b></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><!-- inorder to get the toggle button-->
    <span class="navbar-toggler-icon"></span>
</button>
<div class='collapse navbar-collapse' id='collapsibleNavbar'>
    <ul class='navbar-nav ml-auto'><!--to hold the items we use navbar-nav it is a wrapper and ml-auto for margin left as default -->
        <li class='nav-item'><!--for items inside navbar-->
            <a class='nav-link' href='entry.php' style='color:#495057;'><b>Home</b></a><!--to link the items we use nav-link-->
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='createuser.php' style='color:#495057;'><b>Create User</b></a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='removeuser.php' style='color:#495057;'><b>Remove User</b></a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='transfermoney.php' style='color:#495057;'><b>Transfer Money</b></a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='transcationhistory.php' style='color:#495057;'><b>Transcation History</b></a>
        </li>
        <li class='nav-item'>
            <a class='nav-link' href='index.php' style='color:#495057;'><b>Logout</b></a>
        </li>
</ul>
</div>
</nav>
