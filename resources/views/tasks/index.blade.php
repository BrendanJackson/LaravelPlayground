<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
</head>
<body>

  <ul>
    @foreach ($tasks as $task)
    <li>
      <a href="tasks/{{$task->id}}">
        {{ $task->body }}
      </a>
    </li>
    @endforeach
  </ul>



<h1>App UI + more</h1>
<script type="text/javascript">
$(document).ready(function(){

	var $attendeeCount = 0;
	var $attendeeDetails = '<br><h1></h1><div id="attendeeDetails" class="attendeeDetails"><label for="">email</label><input name="email" type="email"><label for="">first name</label><input name="firstName" type="text"><label for="">last name</label><input name="lastName" type="text"><label for="attendeeType">attendee type</label>	    <select name="attendeeType" id=""><option value="newspaper">newspaper</option><option value="ky press staff">ky press staff</option><option value="vendor">vendor</option><option value="student">student</option><option value="speaker">speaker</option></select><label for="companyName">company name</label><select name="companyName" id="">  <option value="company1">company1</option><option value="company2">company2</option><option value="company3">company3</option><option value="company4">company4</option><option value="company5">company5</option></select></div>';

  // var $attendeeDetails =  'bfgdkwfiendkie';

	$("#addAttendee").on("click",function(){
		$attendeeCount++;
    $(".attendees").append( $($attendeeDetails) );

	});
});
</script>
<style media="screen">
  form *{
    display:block;
  }
</style>
  <form action="" method="POST">
  <h2>attendee info</h2>
  <div class="attendees">
    <div id="attendeeDetails0" class="attendeeDetails">
      <label for="">email</label>
      <input name="email" type="email">
      <label for="">first name</label>
      <input name="firstName" type="text">
      <label for="">last name</label>
      <input name="lastName" type="text">

      <label for="attendeeType">attendee type</label>
      <select name="attendeeType" id="">
        <option value="newspaper">newspaper</option>
        <option value="ky press staff">ky press staff</option>
        <option value="vendor">vendor</option>
        <option value="student">student</option>
        <option value="speaker">speaker</option>
      </select>

      <label for="companyName">company name</label>
      <select name="companyName" id="">
        <option value="company1">company1</option>
        <option value="company2">company2</option>
        <option value="company3">company3</option>
        <option value="company4">company4</option>
        <option value="company5">company5</option>
      </select>

    </div>
  </div>

  <input type="submit" value="submit">
</form>

 <button id="addAttendee">Add another attendee</button>




</body>
</html>
