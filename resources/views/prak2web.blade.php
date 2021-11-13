<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Praktikum Bootstrap</title>

    <style>
      .container {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 500px;
        background: rgb(197, 105, 105);
        padding: 30px;
        margin: 50px auto;
        min-height: 100vh;
        color: white;
      }


    </style>
  </head>
  <body class="bg-secondary">
    <div class="container">
      <Form action="https://getbootstrap.com/docs/4.0/getting-started/introduction/">
        <h2 class="text-center">Registration Form</h2>
         <!--User id-->
            <div class="row mt-3">
                <div class="col-4" >User Id</div>
                <div class="col-8">
                    <input type="text" class="user">
                </div>
            </div>
          <!--Password-->
            <div class="row mt-3">
                <div class="col-4">Password</div>
                <div class="col-8">
                    <input type="password" class="password">
                </div>
            </div>
          <!--Name-->
            <div class="row mt-3">
                <div class="col-4">Name</div>
                <div class="col-8">
                        <input type="text" class="name">
                </div>
            </div>
          <!--Address-->
            <div class="row mt-3">
                <div class="col-4">Address</div>
                <div class="col-8">
                    <input type="text" class="address">
                </div>
            </div>
          <!--Country-->
            <div class="row mt-3">
                <div class="col-4">Country</div>
                <div class="col-8 ">
                    <select name="" class="country">
                        <option value="0">Please Select a Country</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="USA">USA</option>
                        <option value="korea">Korea</option>
                    </select>
                </div>
            </div>
          <!--ZIP Code-->
            <div class="row mt-3">
                <div class="col-4">ZIP Code</div>
                <div class="col-8">
                    <input type="number" class="zip" required>
                </div>
            </div>
          <!--Email-->
            <div class="row mt-3">
                <div class="col-4">Email</div>
                <div class="col-8">
                    <input type="email" class="email" required>
                </div>
            </div>
          <!--Sex-->
            <div class="row mt-3">
                <div class="col-4">Sex</div>
                <div class="col-8">
                    <input type="radio" name="sex" value="male">Male
                    <input type="radio" name="sex" value="female">Female
                </div>
            </div>
          <!--Languange-->
            <div class="row mt-3">
                <div class="col-4">Language</div>
                <div class="col-8">
                    <input type="checkbox" class="language">English
                    <input type="checkbox" class="language">Non English
                </div>
            </div>
          <!--About-->
            <div class="row mt-3">
                <div class="col-4">About</div>
                <div class="col-8">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
          <!--Button-->
            <div class="button text-center">
                <button type="submit" class="submit">Submit</button>
            </div>
      </Form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $(".submit").click(function(){
          var user = $(".user").val();
          if(user.length < 5 || user.length > 12){
            alert ("user id must be of 5 to 12");
            return false;
          }
          var password = $(".password").val();
          if(password.length < 7 || password.length > 12){
            alert ("password must be of 7 to 12");
            return false;
          }
          var nameVal = $(".name").val();
          var name = /^[a-zA-Z\s]+$/;
          if (!nameVal.match(name)){
            alert ("Name must be alphabet");
            return false;
          }
          var country = $("select option:selected").val();
          if(country == 0){
            alert ("You mush be select a country");
            return false;
          }
          var sex = $("input[type='radio']:checked");
          if(sex.length == 0){
            alert ("you mush be select sex");
            return false;
          }
          var language = $("input[type='checkbox']:checked");
          if(language.length == 0){
            alert ("you mush be select language");
            return false;
          }
        })
      })
    </script>

  </body>
</html>
