<header>
  <div class=outer-wrapper>
    <nav class="side" id="myTopnav">

        <!--    LOGO  -->
<!--
     <div class="logo">
         <a href="index.php"><img src="img/logo.png"></a>
     </div>
-->
    <div class="icon">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
          <div id="myDropdown" class="dropdown-content">
            <a href="#home">Profile</a>
            <a href="reset.php">Change Password</a>
          </div>
<!--
        <form action="profile.php" method="post" enctype="multipart/form-data"></form>
        <input type="file" name="profileImage" id="profileImage" class="image-control">
-->
    </div>
      <!-- NAVIGATION -->
      <div class="sidemenu">
          <ul class="menu-list">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="user.php">User</a></li>
            <li><a href="inventory.php">Inventory</a></li>
            <li><a href="vendorlist.php">Vendor List</a></li>
            <li><a href="request.php">Request</a></li>
            <li><a href="systemlog.php">System Log</a></li>
            <li><a href="setting.php">Setting</a></li>
          </ul>
      </div>


        <!-- BARS -->
<!--
      <div class="bar">
        <img src="img/bars.png" alt="">
      </div>
-->

    </nav>
  </div>
</header>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
