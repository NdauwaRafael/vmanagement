<?php
        /*query cars from taxi table using carquery variable*/
            $carQuery = "SELECT * FROM `taxi`";
            $carResult = mysqli_query($con, $carQuery);

          while ($car = mysqli_fetch_array($carResult) ) {/*store queried taxis in an array variable cars, the car details will be accessed using their specific indexes from the the database eg, car['route']*/
              $carPlate = $car['plate'];
              $carRoute = $car['route'];
              $carOwner = $car['owner'];
              $carId =$car['id'];
              /*echoing car details inside while loop will enable to output all the cars queried from the
              database to display as they will loop around until the last car is output
              to enable easy html editing we terminate php inside the loop and add the html code after which php is 
              opened again to close the loop*/
              ?>
              <div class="row bordered">
                <div class="col-md-4 col-sm-3 ">Car Image</div>

                    <div class="col-md-4 col-sm-3">
                           <ul class="list-group borderless">
                            <li class="list-group-item "><b>Plate No:</b> <?php echo $carPlate; ?></li>
                            <li class="list-group-item"><b>Car Route:</b> <?php echo $carRoute; ?></li>
                            <li class="list-group-item"><b>Contact:</b> <?php echo $carOwner; ?></li>
                          </ul>                   
                    </div>

                <div class="col-md-4 col-sm-3 " style=" padding:10px; text-align: right;">
                      
                        <br>
                        <br>
                      
                  <button class="btn btn-primary" id="book<?php echo $carId; ?>">book</button>
                </div>
              </div> 


              <script type="text/javascript">
                 $(document).ready(function(){
                    $("#book<?php echo $carId; ?>").click(function(){
                    	var plate1 = "<?php echo $carPlate; ?>";
                        var custEmail1 = "<?php echo $custEmail; ?>";

                        $.post("book.php", {plate:plate1, custEmail:custEmail1}, function(data){
                            alert(data);
                        });

                    })


                 });
              </script>

              <?php
              
          }

?>