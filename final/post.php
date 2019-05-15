<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>MESSAGE BOARD</title>


    <style>
        #padder {
            background-color: grey;
            padding: 10px 0px;
        }

        #inner {
            background-color: beige;
            padding-bottom: 10px;
        }

        #avatar {
            float: left;
            height: 100px;
            padding: 10px;
        }

        #usertext {
            padding: 10px;
        }

        #spaceundernav {
            padding-bottom: 56px
        }

        #beige {
            background-color: beige;
        }

    </style>




</head>

<body id="beige">

    <?php require_once('nav.php'); ?>



    <div id="spaceundernav">

    </div>

    <h2>Post a Message</h2>
    <form method="post" action="postmessage.php">
        <br>
        <div class="row">
            <div class="col">
                <input type="radio" name="avatar" value="trump"> Donald Trump<img src="trump.jpg" id="avatar"><br>
            </div>
            <div class="col">
                <input type="radio" name="avatar" value="mitch"> Mitch McConnel<img src="mitch.jpg" id="avatar"><br>
            </div>
            <div class="col">
                <input type="radio" name="avatar" value="hillary"> Hillary Clinton<img src="hillary.jpg" id="avatar"><br>
            </div>
            <div class="col">
                <input type="radio" name="avatar" value="obama"> Barack Obama<img src="obama.jpg" id="avatar"><br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="radio" name="avatar" value="quimby"> Mayor Quimby<img src="Simpsons.png" id="avatar"><br>
            </div>
            <div class="col">
                <input type="radio" name="avatar" value="bush"> George Bush<img src="Simpsons.png" id="avatar"><br>
            </div>
            <div class="col">
                <input type="radio" name="avatar" value="hillary"> Hillary Clinton<img src="Simpsons.png" id="avatar"><br>
            </div>
            <div class="col">
                <input type="radio" name="avatar" value="obama"> Barack Obama<img src="Simpsons.png" id="avatar"><br>
            </div>
        </div>

        <label>
            <textarea row="4" col="100" name="comment">Enter your message here...</textarea></label>
        <br>
        <input type="submit" name="submit" value="Post Message">
    </form>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
