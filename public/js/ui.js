$(document).ready(function(){

  var $attendeeCount = 0;
  var $attendeeDetails = '<br><h1>'+$attendeeCount+'</h1><div id="attendeeDetails" class="attendeeDetails"><label for="">email</label><input name="email" type="email"><label for="">first name</label><input name="firstName" type="text"><label for="">last name</label><input name="lastName" type="text"><label for="attendeeType">attendee type</label>      <select name="attendeeType" id=""><option value="newspaper">newspaper</option><option value="ky press staff">ky press staff</option><option value="vendor">vendor</option>        <option value="student">student</option><option value="speaker">speaker</option></select><label for="companyName">company name</label><select name="companyName" id="">  <option value="company1">company1</option><option value="company2">company2</option><option value="company3">company3</option><option value="company4">company4</option><option value="company5">company5</option></select></div>';

  $("#addAttendee").on("click",function(){
    $attendeeCount++;
    $(".attendees").append( $($attendeeDetails) );

  });
});
