<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>
<style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    }
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif; 
      overflow-x:hidden;
      background: #fff;
      height: 100vh;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      }
form
{
width: 400px;
height: 400px;
border: 1px solid black;
border-radius: 10px;
}
#heading_box
{
width: 100%;
height: 15%;
border: 1px solid transparent;
font-size: 40px;
display: flex;
align-items: center;
justify-content: center;
font-weight: 600;
}
#form_box
{
width: 100%;
height: 70%;
border: 1px solid transparent;
display: flex;
flex-direction: column;
}
#submit_box
{
width: 100%;
height: 15%;
border: 1px solid transparent;
}
#date
{
font-size: 30px;
display: flex;
gap: 10%;
margin-left: 9px;
}
#date input
{
font-size: 18px;
padding-left: 10px;
border: 1px outset transparent;
}
#day
{
font-size: 30px;
display: flex;
gap: 10%;
margin-top: 30px;
margin-left: 9px;
}
            #day select
            {
            font-size: 18px;
            }
#activity
{
font-size: 30px;
display: flex;
gap: 10%;
margin-top: 30px;
margin-left: 9px;
}
        #activity input
        {
        font-size: 18px;
        }
#type
{
font-size: 30px;
display: flex;
gap: 2%;
margin-top: 30px;
}
#type label
{
font-size: 20px;
margin-top: 5px;
}
#submit_box input
{
height: 100%;
width: 100%;
font-size: 22px;
font-weight: 600;
cursor: pointer;
border-bottom-left-radius: 10px;
border-bottom-right-radius: 10px;
}
</style>

</head>
<body>
<form action="send.php" method="POST">
    <div id="heading_box">Add Activity</div>
    <div id="form_box">
            <div id="date">Date:-<input type="text" name="date"  placeholder="dd-mm-yyyy" ></div>
            <div id="day">Day:-<select name="day">
                                <option>Sunday</option>
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thrusday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                            </select> 
                                </div>
            <div id="activity">Activity<input type="text" placeholder="Diwali" name="activity"></input>   </div>
            <div id="type">Type:-<input class="button" type="radio" name="type"  value="ACAD" required ><label>ACAD</label>
                           <input class="button" type="radio" name="type" value="Activity" required><label>Activity</label>
                           <input class="button" type="radio" name="type" value="Holiday" required><label>Holiday</label>    </div>
    </div>
    <div id="submit_box"><input type="Submit" value="Submit"></div>


</form>  
</body>
</html>