<!DOCTYPE html>
<html>
<head>
<title>WEB120 Portal - Edit this code to make it your own!</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />


</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Matheus Vazzoler's SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Me</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- TABLE 1 -->
       <!-- The styling of TABLE 1 and TABLE 2 are at the portal.css-->
       <table class="center" border="1">
           <caption>Client Information</caption>
           
           <tr>
               <th>My client's name and the final decision maker</th>
               <td>Jessica. She is a friend of mine and the final decision maker</td>
           </tr>
           
           <tr>
               <th>Client's business (website) name</th>
               <td>ArtSul Tatto</td>
           </tr>
           
           <tr>
               <th>Redesign or brand new website?</th>
               <td>New website</td>
           </tr>
           
           <tr>
               <th>Type of website</th>
               <td>A tatto studio webpage with information about location, tattoo artists that work there </td>
           </tr>
           
           <tr>
               <th>Client's goals</th>
               <td>To have this website to show the studio's portifolio and information</td>
           </tr> 
       
       </table>
       
       
       
       
       
       <!-- TABLE 2 -->
       
       <table class="center" border="1">
           
           <caption>Audience information</caption>
           
           <tr>
               <th>Audiences</th>
               <th>Issues,Concerns,Needs</th>
               <th>Approach</th>
           </tr>
           
           <tr>
               <td><strong>Future customers</strong></td>
               
               <td>
                   <ul>
                       <li>Be able to showcase portifolio</li>
                       <li>Be able to showcase the staff</li>
                       <li>Be able to show contact information</li>
                   </ul>
               </td>
               
               <td>
                    <ul>
                        <li>Create a Staff page</li>
                        <li>Showcase staff's portifolio at the same page</li>
                        <li>Footer with quick contact information and a page showing the studio's location</li>
                        <li>Link to tattoo artists' instagram</li>
                   </ul>
               </td>
           </tr>
           
           <tr>
               <td><strong>Returning customers</strong></td>
               <td>                   
                   <ul>
                       <li></li>
                       <li>Be able to show how to take care of the tattoo</li>
                       <li>Having their work posted on the portifolio</li>
                   </ul>
               </td>
               
               <td>
                   <ul>
                        <li>Create a page for the portifolio of each artist</li>
                        <li>Link some links about tatoo aftercare or even create a whole page for it</li>
                   </ul>
               </td>
           </tr>
           
           <tr>
               <td><strong>Other Tattoo artists / Future empplyees</strong></td>
               <td>
                   <ul>
                        <li>Be able to show information about the owner</li>
                        <li>Be able to see the studio's values</li>
                   </ul>
                   
               </td>
               <td>
                    <ul>
                        <li>Show case who's the owner 
</li>
                        <li>Link her personal information on a page</li>
                        <li>Create a sub-logo with the studio's values</li>
                   </ul>
               </td>
           </tr>
           
<!-- START Footer -->
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="#" target="_blank">Matheus Vazzoler</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>
