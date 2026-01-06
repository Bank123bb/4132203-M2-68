<html>
    <body>
        <div id="titlie">hello php</div>
        <div id="blog"></div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>
        document.getElementByID("title").innerHTML="wecome php"
        $(function(){});
        $(doncumment).ready(function(){
            $("#title").html("Ready !!");
            $("#blog").load("/page/blog.php");
        });


    </script>
</html>