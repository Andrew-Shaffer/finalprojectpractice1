<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

    <title>iGovernment, Where YOU are the government!</title>


    <style>
        body {
            background-image: url(parchment.jpg);
            font-family: 'Playfair Display', serif;
            font-weight: bold;
        }


        #padder {
            background-color: grey;
            padding: 10px 0px;
        }

        #inner {
            /*            background-color: beige;*/
            background-image: url(parchment.jpg);
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
            /*            background-color: beige;*/
            background-image: url(parchment.jpg);
        }

        #banner {
            width: 100%;
        }

        #centerTextLarge {
            text-align: center;
            font-size: 70px;
        }

        #centerTextSmall {
            text-align: center;
            font-size: 30px;
        }

    </style>




</head>

<body>

    <?php require_once('nav.php'); ?>



    <div id="spaceundernav">

    </div>

    <h2 id="centerTextLarge">Post a Message</h2>

    <br><br>
    <h2 id="centerTextSmall">Who will you speak as?</h2>



    <form method="post" action="postmessage.php">
        <br>
        <div class="row">
            <div class="col-sm">
                <input type="radio" name="avatar" value="trump"> Donald Trump<img src="trump.jpg" id="avatar"><br>
            </div>
            <div class="col-sm">
                <input type="radio" name="avatar" value="mitch"> Mitch McConnel<img src="mitch.jpg" id="avatar"><br>
            </div>
            <div class="col-sm">
                <input type="radio" name="avatar" value="hillary"> Hillary Clinton<img src="hillary.jpg" id="avatar"><br>
            </div>
            <div class="col-sm">
                <input type="radio" name="avatar" value="obama"> Barack Obama<img src="obama.jpg" id="avatar"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <input type="radio" name="avatar" value="cortez"> Alexandria Ocasio-Cortez<img src="cortez.jpg" id="avatar"><br>
            </div>
            <div class="col-sm">
                <input type="radio" name="avatar" value="bush"> George Bush<img src="bush.jpg" id="avatar"><br>
            </div>
            <div class="col-sm">
                <input type="radio" name="avatar" value="pence"> Mike Pence<img src="pence.jpg" id="avatar"><br>
            </div>
            <div class="col-sm">
                <input type="radio" name="avatar" value="pelosi"> Nancy Pelosi<img src="pelosi.jpg" id="avatar"><br>
            </div>
        </div>

        <label>
            <div class="col-sm">
                Enter Your Message below:<br>
                <textarea rows="5" cols="35" name="comment"></textarea>
        </label>
        <br>
        <input type="submit" name="submit" value="Post Message">
        </div>
    </form>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
