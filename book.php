<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ticket Booking Page</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="tooplate-style.css">
        <link rel="stylesheet" href="style3.css">
        <link rel="shortcut icon" href="logo.png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    </head>

<body>
<style>
body {
background-image:url("home.jpg");
background-repeat:no-repeat;
background-attachment: fixed;
background-position: center;
background-color:Black;
background-size: cover;
}
</style>
    <nav>
    <div class="menu">
      <div class="logo">
        
        <a href="home.php">CHENNAI RAILWAYS</a>
      </div>
      <ul>
        <li><a href="index.php">LOGIN</a></li>
        <li><a href="https://www.metrotraintimings.in/Chennai/Wimco_Nagar-to-Chennai_Central-sunday-Local-suburban-MRTS-Train-Timings.htm">TRAIN TIMINGS</a></li>
        <li><a href="about1.html">ABOUT US</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </nav>
  
    <section class="banner" id="top">
                      
       <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            
                            <div class="submit-form">
                                <h4>BOOK TICKET</h4>
                                <form action="book_action.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="from">From:</label>
                                                <select required name='source' onchange='this.form.()'>
                                                    <option value="">Select a location...</option>
                                                    <option value="Wimco Nagar">Wimco Nagar</option>
                                                    <option value="Tiruvottiyur">Tiruvottiyur</option>
                                                    <option value="V.O.C Nagar">V.O.C Nagar</option>
                                                    <option value="Tondiarpet">Tondiarpet</option>
                                                    <option value="Korukkupet">Korukkupet</option>
                                                    <option value="Basin Bridge Junction">Basin Bridge Junction</option>
                                                    <option value="Chennai Suburban Terminal">Chennai Suburban Terminal</option>
                                             
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="to">To:</label>
                                                <select required name='dest' onchange='this.form.()'>
                                                    <option value="">Select a location...</option>
                                                    <option value="Wimco Nagar">Wimco Nagar</option>
                                                    <option value="Tiruvottiyur">Tiruvottiyur</option>
                                                    <option value="V.O.C Nagar">V.O.C Nagar</option>
                                                    <option value="Tondiarpet">Tondiarpet</option>
                                                    <option value="Korukkupet">Korukkupet</option>
                                                    <option value="Basin Bridge Junction">Basin Bridge Junction</option>
                                                    <option value="Chennai Suburban Terminal">Chennai Suburban Terminal</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="departure">Class Type:</label>
                                               
                                                <select required name='class' onchange='this.form.()'>
                                                    <option value="">Select Class Type...</option>
                                                    <option value="1">First Class</option>
                                                    <option value="2">Second Class</option>
                                                </select>
                                             
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="return">TICKETS (MAX 6):</label>
                                                
                                                <select required name='number' onchange='this.form.()'>
                                                    <option value="">Select No of Tickets...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                                  
                                                    
                                               
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio-select">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="round">Return</label>
                                                        <input type="radio" name="type" id="round" value="2" required="required"onchange='this.form.()'>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="oneway">Oneway</label>
                                                        <input type="radio" name="type" id="oneway" value="1" required="required"onchange='this.form.()'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <button type="Submit" id="login_submit" class="btn">Pay Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>