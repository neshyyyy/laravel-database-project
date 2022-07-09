<html>
    <head>
        <title>Mini Project</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="/css/headers.css" rel="stylesheet">
        <link href="/css/footers.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link href="/css/signin.css" rel="stylesheet">

        <link href="css/form-validation.css" rel="stylesheet">


    </head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/form-validation.js"></script>

    <script>
        function removeFadeOut( el, speed ) {
            var seconds = speed/1000;
            el.style.transition = "opacity "+seconds+"s ease";

            el.style.opacity = 0;
            setTimeout(function() {
                el.parentNode.removeChild(el);
            }, speed);
        }

        function closeFunction() {
            // document.getElementById("message").style.display="none";
            removeFadeOut(document.getElementById('message'), 2000);
        }
    </script>
</body>