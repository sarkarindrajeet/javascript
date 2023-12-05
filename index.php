<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function add(){
            document.getElementById('content').innerHTML = "Hye this is new content";
            document.getElementById('content').style.fontSize = "35px";
        }
        function on(){
            document.getElementById('image').src="on-light.jpg";
        }
        function off(){
            document.getElementById('image').src="off-light.webp";
        }
    </script>
</head>
<body>
    <p id="content">My first Javascript code.</p>
    <button onclick="add();">click me</button><br>
    <img src="off-light.webp" id="image" style="width: 200px;">
    <button onclick="on();">On</button>
    <button onclick="off();">Off</button><br>
</body>
</html>