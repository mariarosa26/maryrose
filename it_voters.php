<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>USTP E-voting System</title>
        <link rel="stylesheet" type="text/css" href="it_voters.css">
        <meta charset = "utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel = "stylesheet" href ="https://pro.fontawesome.com/release/v5.10.0/css/all.css"/>
        <script src = "https://unpkg.com/@phosphor-icons/web"></script> 
        <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
    <div class="header">
    <ul>
        <li>E-VOTING SYSTEM</li>
      <li class=""><a href="home.php"> <!-- <i class="fa fa-home">--></i>Home</li> 

       <li class="active"><a href="#"><!--<i class="fa fa-angle-right">--></i>Courses</a>
        <div class="sub-menu-1">
            <ul>
                <li><a href="it.php">BS IT</a></li>
                 <li><a href="esm.php">BS ESM</a></li>
                  <li><a href="met.php">BS MET</a></li>
                   <li><a href="tcm.php">BS TCM</a></li>
                    <li><a href="name.php">BS NAME</a></li>
        </ul>
        </div>


        <li><a href="#"><!--<i class="fa fa-angle-right">--></i>Votes</a>
        <div class="sub-menu-1">
            <ul>
                <li><a href="it_tally.php">BS IT</a></li>
                 <li><a href="esm_tally.php">BS ESM</a></li>
                  <li><a href="met_tally.php">BS MET</a></li>
                   <li><a href="tcm_tally.php">BS TCM</a></li>
                    <li><a href="name_tally.php">BS NAME</a></li>
        </ul>
        </div>
        <li><a href="#"><!--<i class="fa fa-angle-right">--></i>Voters</a>
        <div class="sub-menu-1">
        <ul>
                <li><a href="it_voters.php">BS IT</a></li>
                 <li><a href="esm_voters.php">BS ESM</a></li>
                  <li><a href="met_voters.php">BS MET</a></li>
                   <li><a href="tcm_voters.php">BS TCM</a></li>
                    <li><a href="name_voters.php">BS NAME</a></li>
        </ul>
        </div>
        <li><a href="candidates.php"><!--<i class="fa fa-angle-right">--></i>Candidates</a>
       
        <li><a href="#"><!--<i class="fa fa-angle-right">--></i>Registered Parties</a>
        <div class="sub-menu-1">
            <ul>
                <li><a href="">BS IT</a></li>
                 <li><a href="">BS ESM</a></li>
                  <li><a href="">BS MET</a></li>
                   <li><a href="">BS TCM</a></li>
                    <li><a href="">BS NAME</a></li>
        </ul>
        </div>
       <li><a href="#"><!--<i class="fa fa-users">--></i>Users</li> 
    </ul>
    </div>
    
    <div class="scroll-container">
    <!-- <img class="iti" src="img/it.png" alt=""> -->
    <div class="info-container">
<div class="container">
<!-- <div class = "title"><h3>VOTER'S LIST</h3></div> -->

<div class="grid-container">

        <div class="grid-item2">
            <div class="grid-content">
                <h1>12786</h1>
                <h2>Total Voters</h2>
                <a href="it_tvoters_table.php"><p>See More</p></a>
            </div>
        </div>

        <div class="grid-item3">
            <div class="grid-content">
                <h1>12672</h1>
                <h2>Voted</h2>
                <a href="it_vvoters_table.php"><p>See More</p></a>
            </div>
        </div>
        <div class="grid-item5">
            <div class="grid-content">
                <h1>12672</h1>
                <h2>Unvoted</h2>
                <a href="it_uvoted_table.php"><p>See More</p></a>
            </div>
        </div>
      
        <div class="grid-item4">
            <div class="grid-content" onclick="openPopup('Add voters ')">
            <!-- Grid Item 4 -->
           <img src="img/addp.png" alt="Add Voters">
           <h2>Add Voters</h2>
</div>
</div>
<form id="myForm" onsubmit="clearAndSubmit(event)">
<div class="popup" id="popup">
<button class="close-button" onclick="closePopup()">X</button>  


  <h2 id="popup-content"></h2>
  <label for="inputField1">ID Number:</label>
  <input type="text" id="inputField1" placeholder="Enter text...">
  
  <label for="inputField2">Name:</label>
  <input type="text" id="inputField2" placeholder="Enter text...">
  
  <label for="inputField2">Course:</label>
  <input type="text" id="inputField2" placeholder="Enter text...">

  <label for="inputField2">Year Level:</label>
  <input type="text" id="inputField2" placeholder="Enter text...">
<br> <br>
  <button onclick="closePopup()">Submit</button>

</div>
</form>




<div class="overlay" id="overlay" onclick="closePopup()"></div>

<script>
  function openPopup(content) {
    document.getElementById('popup-content').innerText = content;
    document.getElementById('popup').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
  }


  function closePopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
  }
  function clearAndSubmit(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Get the form element
            var form = document.getElementById("myForm");

            // Clear the form inputs
            form.reset();
           
            Swal.fire({
                icon: 'success',
                title: 'Form Submitted!',
                text: 'You succesfully added new voter!!!.',
            });
        }

       
</script>

                
          

</body>
</html>
