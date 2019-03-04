<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic-XHR.html!2019</title>
</head>


<body>
<label>Your name:
        <input type="text" id="ajaxTextbox" />
      </label>
      <span id="ajaxButton" style="cursor: pointer; text-decoration: underline">
        Make a request
      </span>
      
      <script>
        (function() {
        let httpRequest;
        document.getElementById("ajaxButton").onclick = function() {
            //This section is to change to direct to the custom server.
            let userName = document.getElementById("ajaxTextbox").value;
            makeRequest('',userName);
        };
        function makeRequest(url, userName) {
          httpRequest = new XMLHttpRequest();
          if (!httpRequest) {
            alert('All hope is lost... :( Cannot create an XMLHTTP instance');
            return false;
          }
          
          httpRequest.onreadystatechange = alertContents;
          httpRequest.open('', url);
          httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          httpRequest.send('userName=' + encodeURIComponent(userName));
        }
        function alertContents() {
          if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
              var response = JSON.parse(httpRequest.responseText);
              alert(response.computedString);
            } else {
              alert('Houston we have a problem with the request.');
            }
          }
        }
      })();
      </script>

 </body>

 <?php
header("content-type: text/plain");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: "origin, x-requested-with, content-type"');
header('Access-Control-Allow-Methods "GET, POST, OPTIONS"');
if(isset($_POST['userName']) && !empty($_POST['userName'])) {
  $name = $_POST['userName'];
  $computedString = "Post Success: Hi, " . $name . "!";
} else if(isset($_GET['userName']) && !empty($_GET['userName'])) {
  $name = $_GET['userName'];
  $computedString = "GET Success: Hi, " . $name . "!";
} else if ($_POST) {
  $name = $_POST;
  $computedString = "Seems like there was something wrong with your POST " . $name . "!";
} else if ($_GET) {
  $name = $_GET;
  $computedString = "Seems like there was something wrong with your GET " . $name . "!";
} else {
  $name = "no name";
  $computedString = "Seems like my error handling is broke " . $name . "!";
}
// $name = (isset($_POST['userName'])) ? $_POST['userName'] : 'no name';
// $computedString = "Hi, " . $name . "!";
$array = ['userName' => $name, 'computedString' => $computedString];
echo "Was that so hard man? What took you so long... Oh...I don't reconize your ip address... 
Do you have a invite to the show? If so... WELCOME TO THE MONKEY HOUSE";

</html>
echo "<h1> "
    methods origns 

