<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">


    <title>MESSAGE BOARD</title>


    <style>
        body {
            background-image: url(parchment.jpg);
            font-family: 'Playfair Display', serif;
            font-weight: bold;
        }


        #padder {
            background-color: grey;
            padding-top: 10px;
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

    </style>




</head>

<body>

    <img src="flag.jpeg" class="img-fluid" alt="Responsive image" id="banner">

    <?php require_once('nav.php'); ?>

    <div id="spaceundernav">

    </div>



    <div id="padder">
        <div id="inner">
            <img src="Simpsons.png" id="avatar">
            <p id="usertext">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>


    <?php

       $cnt = mysqli_connect('localhost', 'root','', 'myDatabase');

       $qry = "select * from myTable";

       $result = mysqli_query($cnt, $qry);
    
        $newArray= [];
//        print_r($result);
    
        while($row = $result->fetch_assoc()){
            array_unshift($newArray, $row);
        }
        print_r($newArray);
    
        for($i = 0; $i < count($newArray); $i++){
//            print_r($row);
//            echo '<br><br>';
           if($newArray[$i]['avatar'] == 'trump')
           $avatarName = "Donald Trump";
           if($newArray[$i]['avatar'] == 'hillary')
           $avatarName = "Hillary Clinton";
           if($newArray[$i]['avatar'] == 'mitch')
           $avatarName = "Mitch McConnel";
           if($newArray[$i]['avatar'] == 'obama')
           $avatarName = "Barack Obama";
           if($newArray[$i]['avatar'] == 'cortez')
           $avatarName = "Alexandria Ocasio-Cortez";
           if($newArray[$i]['avatar'] == 'bush')
           $avatarName = "George W. Bush";
           if($newArray[$i]['avatar'] == 'pence')
           $avatarName = "Mike Pence";
           if($newArray[$i]['avatar'] == 'pelosi')
           $avatarName = "Nancy Pelosi";
           
           echo '
           
    <div id="padder">
        <div id="inner">
            <img src="'.$newArray[$i]['avatar'].'.jpg" id="avatar">
            <p id="usertext">
                '.$avatarName.' says: <br>
                "'.$newArray[$i]['message'].'"
            </p>
        </div>
    </div>
           ';
       };

       mysqli_close($cnt);

       ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
