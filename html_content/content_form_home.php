  <?php session_start() ?>
  <div class="formcontainer w-container">
  <form class="formbody w-clearfix" data-name="Email Form" data-redirect="/form-data" id="email-form" method="post" name="email-form" value="goal_name" redirect="form-data.php" action="form_data.php">
    <label class="clientNameLabel goalfieldlabel" for="name-2">Name:</label>
    <input class="clientNameInput textfield w-input" data-name="Name 2" id="name-2" maxlength="256" name="name" placeholder="Enter client name" type="text">
    <div class="goalwrapper">
      <div class="goalformwrapper w-form">
        
          <h1 class="formtitle">Enter Goals</h1>
          <label class="goalfieldlabel" for="Goal-Name">Goal Name:</label>
          <input class="goaltextfield textfield w-input" data-name="Goal Name" id="Goal-Name" maxlength="256" name="Goal-Name[]" placeholder="Enter Goal Name" required="required" type="text">
          <label class="goalfieldlabel" for="Goal-Description">Goal Description:</label>
          <textarea class="goaltextfield textfield w-input" data-name="Goal Description" id="Goal-Description" maxlength="5000" name="Goal-Description[]" placeholder="Enter Goal Description"></textarea>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form</div>
        </div>
      </div>
    </div>
    <div class="addbuttondiv">
      <div class="addbuttonwrapper"><img class="addbutton" src="images/1486725409_circle-add-plus-new-outline-stroke.svg" width="61"><a class="addbuttontext" href="#">Add New Goal</a>
      </div>
    </div>
    <input class="goalsformbutton w-button" data-ix="new-interaction" data-wait="Please wait..." type="submit" value="Next">
    </form>
  </div>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
