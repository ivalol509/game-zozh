<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class = "col-12 mx-auto bg-primary" style="height:100px; margin-bottom: 100px"></div> <!--верхняя шняга -->
    <div class="col-12 mx-auto bg-danger border border-1" style="height: 1000px;padding-top:50px" > <!-- игра -->
      <div class= "col-9 mx-auto" style="height: 700px; background-image: url(img/img1.jpg); background-size: 100%; padding-top:87px"> <!-- персы и графика -->
        <img src="img/gg.png" style>
      </div>
      <div class="col-9 mx-auto bg-primary " id="1" style="height: 100px"> <!-- текст бокс -->
        <h1>сегодня я пол</h1>
      </div>
      <div class="col-9 mx-auto bg-warning raw " style="height: 50px">
        <button type="button" class="btn btn-success"onclick="myFunction() " id="2" style="margin-right: 600px">чел харош</button>
        <button type="button" class="btn btn-success w-10" onclick="myFunction1()" id="3" style="margin-right: 550px">ок</button>
        <button type="button" class="btn btn-success" onclick="myFunction2()" id="4">нет</button>
      </div>

    </div>

    


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script type="text/javascript">
      let btn = document.getElementById("1");
      let buttons = document.getElementById("2");
      let buttons2 = document.getElementById("3");
      let buttons3 = document.getElementById("4");

      function myFunction() {
      btn.innerHTML="харош";
      buttons.innerHTML="ploxosh";
      buttons2.innerHTML="sam";
      buttons3.innerHTML="net";
      }
      function myFunction1() {
      btn.innerHTML="ок";
      buttons.innerHTML="ok";
      buttons2.innerHTML="net";
      buttons3.innerHTML="ladno";
      }
      function myFunction2() {
      btn.innerHTML="сам";
      buttons.innerHTML="net ti";
      buttons2.innerHTML="ladno ya";
      buttons3.innerHTML="ladno ti";
      
      }


    </script>
  </body>
</html>