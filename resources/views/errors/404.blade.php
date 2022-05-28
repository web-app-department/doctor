<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Not Found</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>

        /*======================
            404 page
        =======================*/


        .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
        }

        .page_404  img{ width:100%;}

        .four_zero_four_bg{

            background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
            height: 400px;
            background-position: center;
        }


        .four_zero_four_bg h1{
            font-size:80px;
        }

        .four_zero_four_bg h3{
            font-size:80px;
        }

        .link_404{
            color: #fff!important;
            padding: 10px 20px;
            background: #39ac31;
            margin: 20px 0;
            display: inline-block;}
        .contant_box_404{ margin-top:-50px;}

    </style>
</head>
<body>

<section class="page_404">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="col-sm-10 col-sm-offset-1  text-center">
                    <div class="four_zero_four_bg">
                        <h1 class="text-center ">404</h1>


                    </div>

                    <div class="contant_box_404">
                        <h3 class="h2">
                            Look like you're lost
                        </h3>

                        <p>the page you are looking for not avaible!</p>

                        <a href="{{route('home')}}" class="link_404">Go to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>
    //original source :  http://timelessname.com/sandbox/matrix.html
    //set the canvas to take the entire screen
    canvas.height = window.screen.height;
    canvas.width = window.screen.width;

    //one entry in the array per column of text
    //each value represent the current y position of the column. (in canvas 0 is at the top and positive y values go downward)
    var columns = []
    var character =0;
    for (i = 0; i < 256; columns[i++] = 1);

    //executed once per frame
    function step() {
        //Slightly darkens the entire canvas by drawing a mostly transparent black rectangle over the entire canvas
        //this explains both the initial flash from white to black (by default the canvas is white and progressively becomes black) as well as the fading of characters.
        canvas.getContext('2d').fillStyle = 'rgba(0,0,0,0.05)';
        canvas.getContext('2d').fillRect(0, 0, canvas.width, canvas.height);

        //green
        canvas.getContext('2d').fillStyle = '#0F0';
        //for each column
        columns.map(function (value, index) {


            //draw the character
            canvas.getContext('2d').fillText(character, //text
                index * 10, //x
                value //y
            );
            if(character==0)
                character=1;
            else
                character=0;
            //move down the character
            //f the character is lower than 758 then there is a random chance of it being reset
            columns[index] = value > 758 + Math.random() * 1e4 ? 0 : value + 10
        })
    }

    //1000/33 = ~30 times a second
    setInterval(step, 33)
</script>

</html>