<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My jQuery Project</title>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <style>
        a.test {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <a href="http://jquery.com/" class="test">jQuery</a>
    
    <script>
        $(document).ready(function () {
            $("a").click(function (event) {
                event.preventDefault();
                $(this).hide("slow");

            });
        });
    </script>
</body>

</html>