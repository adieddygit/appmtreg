<?php
  require_once "nav.php";
 ?>

<body id="appv_body">
    <div class="appv_appoint">
       <h1>Appointment Registration Form</h1>
           <nav>
               <a class="nav-link" href="#">Patient</a>
               <a class="nav-link" href="#">Services</a>
           </nav>
    </div>
    
    <section class="row">
        <div class="col-3">
        <div class="sidenav" id="mySidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="javascript:void(0)" onclick="showAppointments()">View Appointments</a>
        </div>
        <div>
            <span id="app_span" onclick="openNav()">&#9776;</span>
        </div>
        </div>
        
    <form class="col-5" method="" action="" id="appointments" name="appointments"
       onsubmit="return validateAppointment();" autocomplete="off" >
       <label for="name1">Fullname:</label>
       <input type="text" id="name1" name="name1" placeholder="enter name" autocomplete="on">
       <span id="name1Err"></span>
     
       <label for="hospitalrec">Hospital Record ID:</label>
       <input type="text" id="hospitalrec" name="hospitalrec">
       <span id="hospitalrecErr"></span>
    
       <label for="phone">Phone Number:</label>
       <input type="text" id="phone" name="phone">
       <span id="phoneErr"></span>
    
       <label for="appointment_d">Date of Appointment:</label>
       <input type="date" id="appointment_d" name="appointment_d">
       <span id="appointmentErr"></span>
    
       <label for="appointment_time">Time of Appointment:</label>
       <input type="time" id="appointment_time" name="appointment_time">
       <span id="appointmenttimeErr"></span>
    
       <label for="reason">Please state reasons for appointment:</label>
       <textarea id="reason" name="reason"></textarea>
       <span id="reasonErr"></span>
    
           <button class="appointment_button" id="submit" onclick="saveAppointments()">Save</button>
           <p class="appv_p">Please click on the toggle button on the left to view Appointments</p>
    </form>

           <div class="col-4" id="display-container"></div>

    </section>

    <script src="scripts/appointment_validate.js"></script>
    <script src="scripts/appointment_storage.js"></script>

    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "200px";
        document.getElementById("mySidenav").style.height = "200px";
        document.getElementById("main").style.marginLeft = "0px";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }

    function showAppointments() {
        // Function to display the appointments container
        var displayContainer = document.getElementById('display-container');
        displayContainer.style.display = displayContainer.style.display === 'none' ? 'block' : 'none';
    }
    </script>
    
     </body>
     <?php
  require_once "footer.php";
 ?> 
 