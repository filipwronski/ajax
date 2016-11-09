
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="${encoding}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    </head>
    <body>
        <div>TODO write content</div>
        <div>
            <label>Name :</label>
            <input id="name" type="text">
            <label>Email :</label>
            <input id="email" type="text">
            <label>Password :</label>
            <input id="password" type="password">
            <label>Contact No :</label>
            <input id="contact" type="text">
            <input id="submit" type="button" value="Submit">
        </div>
        <ul id="result"></ul>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
                $(document).ready(function () {
                    $("#submit").click(function () {
                        var name = $("#name").val();
                        var email = $("#email").val();
                        var password = $("#password").val();
                        var contact = $("#contact").val();
                        var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password + '&contact1=' + contact;
                        if (name == '' || email == '' || password == '' || contact == '')
                        {
                            alert("Please Fill All Fields");
                        } else
                        {
                            $.ajax({
                                type: "POST",
                                url: "ajax.php",
                                data: dataString,
                                cache: false,
                                success: function (result) {
                                   if(result){
                                    var json = $.parseJSON(result); 
                                    printResult(json);
                                   }else{
                                       alert('null');
                                   }
                                }
                            });
                        }
                        return false;
                    });
                });
                
                function printResult(json){
                    let text;
                    for(let i=0;i<json.length;i++){
                        text += '<li>'+json[i]+'</li>';
                    }
                    document.getElementById('result').innerHTML=text;
                }
        </script>
    </body>
</html>


