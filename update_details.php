<?php

$id = $_GET["id"];
?>

<div id="formdiv2">
        <h3 id="headmiddle">Update Details</h3>
        <form id="formchange" action="update_details_back.php?id=<?php echo $id ?>" method="post">


              <label class ="labelstyle" ><b>Address</b></label><br>
              <input type="text" placeholder="Enter Your Address" name="address" required/>


              <br><br>
              <label class ="labelstyle"  ><b>City</b></label>
              <br>
              <input type="text" placeholder="Enter City" name="city" required/><br><br>
                
              <button id="btn" type="submit">Update details</button>
        </form>
 </div>
