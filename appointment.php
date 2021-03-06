<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title> The Tailory New York </title>
        
        <link href="https://fonts.googleapis.com/css?family=Anton|Crimson+Text:400,700,700i|Rakkas" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arsenal|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css"> 
        <link rel="stylesheet" href="css/mainone.css"> 
        <link rel="stylesheet" href="calendar.css"> 
        <link rel="stylesheet" href="new.css">

    </head>   
    <body>
        <header>
            <nav> 
                <ul>
                    <li> <a href="index.html" > Home </a> </li>
                    <li> <a href="appointment.html" >Appointment </a> </li>
                    <li> <a href="gallery.html" >Lookbook</a></li>
                    <li> <a href="contact.html"> Contact </a> </li>
                    <li> <a href="about.html" >About</a></li>
                    <li> <a href="career.html"> Career </a> </li>
                </ul>
            </nav> 
           <div id="logo">
               <a href="index.html">
               <img src="logo_The Tailory New York.png" height="60%" alt="" id="logo-img">
               </a>
           </div>
        </header>
    

        <div class="landing-page">
        <div class="form-appointment">
        <div class="wpcf7" id="wpcf7-f560-p590-o1">
        <form action="/landing-page-template-do-not-delete/#wpcf7-f560-p590-o1" method="post" class="wpcf7-form" novalidate="novalidate" _lpchecked="1">
        <div style="display: none;">
            <input type="hidden" name="_wpcf7" value="560">
            <input type="hidden" name="_wpcf7_version" value="3.5">
            <input type="hidden" name="_wpcf7_locale" value="">
            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f560-p590-o1">
            <input type="hidden" name="_wpnonce" value="dbb28877d5">
        </div>
        
        <div class="group">
        <div style="width: 48%; float: left;">
            <span class="wpcf7-form-control-wrap text-680"><input type="text" name="text-680" value="" size="45" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" placeholder="Name"></span><br>
            <span class="wpcf7-form-control-wrap email-680"><input type="email" name="email-680" value="" size="45" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" placeholder="Email"></span><br>
            <span class="wpcf7-form-control-wrap tel-630"><input type="tel" name="tel-630" value="" size="45" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" placeholder="Phone"></span><br>
            <span class="wpcf7-form-control-wrap textarea-398"><textarea name="textarea-398" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Special notes, concerns, or requirements"></textarea></span>
        </div>
        
        <div style="width: 48%; float: right;">
        <h4>What is the best way to reach you?</h4>
            <p>
                <span class="wpcf7-form-control-wrap radio-98"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item"><label><input type="radio" name="radio-98" value="Phone">&nbsp;<span class="wpcf7-list-item-label">Phone</span></label></span><span class="wpcf7-list-item"><label><input type="radio" name="radio-98" value="Email">&nbsp;<span class="wpcf7-list-item-label">Email</span></label></span></span></span>
            </p>
        <h4>Days of the week you are available for appointment:</h4>
            <p>
                <span class="wpcf7-form-control-wrap checkbox-465"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-465[]" value="Monday">&nbsp;<span class="wpcf7-list-item-label">Monday</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-465[]" value="Tuesday">&nbsp;<span class="wpcf7-list-item-label">Tuesday</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-465[]" value="Wednesday">&nbsp;<span class="wpcf7-list-item-label">Wednesday</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-465[]" value="Thursday">&nbsp;<span class="wpcf7-list-item-label">Thursday</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-465[]" value="Friday">&nbsp;<span class="wpcf7-list-item-label">Friday</span></label></span></span></span>
            </p>
        <h4>Best time of day for your appointment:</h4>
            <p>
                <span class="wpcf7-form-control-wrap checkbox-246"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-246[]" value="Morning">&nbsp;<span class="wpcf7-list-item-label">Morning</span></label></span><span class="wpcf7-list-item"><label><input type="checkbox" name="checkbox-246[]" value="Afternoon">&nbsp;<span class="wpcf7-list-item-label">Afternoon</span></label></span></span></span>
            </p>

        </div>
        </div>
       
        <div style="text-align: center; padding-top: 2em; border-top: 1px solid black; margin-top: 1em;">
            <input type="submit" value="Request My Appointment" class="wpcf7-form-control wpcf7-submit">
            <img class="ajax-loader" src="http://www.professionalaudiologicalservices.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
        </div>
        <div class="wpcf7-response-output wpcf7-display-none"></div>
        </form>
        </div>
        </div>
        </div>

        <?php
        include 'calendar.php';
        $calendar = new Calendar();
 
        echo $calendar->show();
        ?>








        
        <footer>          
            &copy; 2017 The Tailory New York All Rights Reserved 
        </footer>
    </body>
    
</html>