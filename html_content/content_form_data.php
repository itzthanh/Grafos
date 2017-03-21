<?php session_start(); ?>
<div class="formcontainer w-container">
    <div class="w-form">
      <form class="formbody" data-name="form-data" id="form-data" name="form-data">
        <?php echo "<h1 class=\"formtitle\">" . "Record Data for " . $_POST["name"] . "</h1>" ?>
        <!--<label class="goalfieldlabel" for="name-2">Name:</label>
        <input class="textfield w-input" data-name="Name 2" id="name-2" maxlength="256" name="name" placeholder="Enter client name" type="text">-->
        
        <div class="displayGoal">
          <?php 
          $goals = [];
          $counter=0;
          $goals = array_combine($_POST["Goal-Name"], $_POST["Goal-Description"]);
          foreach ($goals as $k => $v){
            echo "<div class=\"goals\" id=\"goals" . $counter . "\"" . ">" . "Goal: " . $k . "<br>" . "Description: " . $v . "<br>" . "</div>";
            $counter++;
          }
          ?>
        </div>
        <button class="dataformbuttton" type="button" style="color:white">Export</button>
        <!--<input class="dataformbuttton w-button" data-wait="Please wait..." type="submit" value="Export">-->

 <a href="http://pdf-ace.com/pdfme?url=https://grafos134.herokuapp.com/form_data.php" target="_blank">Save as PDF</a>
      </form>
      <!--<div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form</div>
      </div>-->
    </div>
  </div>
