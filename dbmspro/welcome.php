<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <img src="logo.svg" class="logo">
        <a href="signup.php" class="btn effect01"><span>Get Started</span></a>
        <div class="explore">Explore The World</div>
    </div>
</body>
</html>



<style>
@import url('https://fonts.googleapis.com/css2?family=Antonio&family=Montserrat&display=swap');
*{
   margin: 0;
   padding: 0;
   font-family:'Roboto', sans-serif;
}
    .container{
        display:flex;
        justify-content: center;
    align-items: center;
    flex-direction: column;
    background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0,0,0,0)),url(welcomepic.jpg);
    width: 100%;
    height: 100vh;
    background-size: 100% 100%;
    background-position: center;
    
    }
   
.logo{
    cursor: pointer;
    width: 600px;
    height: auto;
    color:black;
}
.explore{
    font-size:40px;
    color:white;
    font-family:'Antonio';
    margin-bottom:80px;
}

.btn {
    display:flex;
    justify-content: center;
    align-items: center;
  letter-spacing: 0.1em;
  cursor: pointer;
  font-size: 14px;
  font-weight: 400;
  line-height: 40px;
  max-width: 160px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  width: 100%;
  margin-top:350px;
  margin-bottom:50px;
}
.btn:hover {
  text-decoration: none;
}

/*btn_background*/
.effect01 {
  color: #000;
  border: 0px solid #000;
  box-shadow:0px 0px 0px 1px #000 inset;
  background-color: #fff;
  overflow: hidden;
  position: relative;
  transition: all 0.3s ease-in-out;
}
.effect01:hover {
  border: 0px solid #666;
  background-color: #000;
  box-shadow:0px 0px 0px 0px #EEE inset;
}

/*btn_text*/
.effect01 span {
  transition: all 0.2s ease-out;
  z-index: 2;
}
.effect01:hover span{
  letter-spacing: 0.13em;
  color: #fff;
}

/*highlight*/
.effect01:after {
  background: #000;
  border: 0px solid #fff;
  content: "";
  height: 155px;
  left: -75px;
  opacity: .8;
  position: absolute;
  top: -50px;
  -webkit-transform: rotate(35deg);
          transform: rotate(35deg);
  width: 50px;
  transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);/*easeOutCirc*/
  z-index: 1;
}
.effect01:hover:after {
  background: #000;
  border: 20px solid #fff;
  opacity: 0;
  left: 120%;
  -webkit-transform: rotate(40deg);
          transform: rotate(40deg);
}
</style>