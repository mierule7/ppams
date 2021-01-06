<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
    <title>Inventory</title>
</head>
<!-- ******************** THIS IS FOR HEADER ************************ -->

<?php include 'header.php'; ?>

<!-- **************************************************************** -->
<!-- ******************* THIS IS FOR SIDENAV ************************ -->

<?php include 'sidenav.php'; ?>

<!-- **************************************************************** -->








<!-- ******************** THIS IS FOR SCRIPTING ************************ -->

<!-- ***************** THIS IS FOR DROP DOWN ICON ********************** -->

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>

<!-- **************************************************************** -->







<!-- ******************** THIS IS FOR FOOTER ************************ -->

<?php include 'footer.php'; ?>

<!-- **************************************************************** -->
</html>
