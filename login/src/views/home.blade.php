<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>Page Title</title>
</head>
<body>
<div class="bottomlinks">
<div id="username"></div>
<a href="#" name="showUser" id ="showUser">show username</a>

    <a href="{{route('logout')}}" name="logout" id ="logout">logout</a>

</div>
<script>
    $(document).ready(function () {
        var email;
        email = $("#username");

        $('#showUser').click(function () {
            $.ajax({
                type: 'GET',
                url: "../api/data/{{$id}}",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    email.append('<p>' + data['data'] + '</p>');
                }
            });
        })


    });
</script>
</body>
</html>