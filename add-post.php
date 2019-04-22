<style media="screen">
    .hide {
        display: none;
    }

</style>
<?php include'header.php';?>
<?php include'assets/custom/php/session.php';?>
<?php include'assets/custom/php/add-post-helper.php';?>
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="index.php">Home</a> / Register</span>
        <h2>Add New Post</h2>
    </div>
</div>
<!-- banner -->

<script src="assets/custom/js/action.js"></script>


<div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
                <form id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
                    <select class="form-control" id="type" name="postType" onchange="postAction()" required>
                        <option value="">What Do You Want to Do!</option>
                        <option value="sell">Sell</option>
                        <option value="rent">Rent</option>
                    </select>
                    <select class="form-control" id="category" name="category" style="display: none;" onchange="dedicatedOption();" required>
                        <option value="">Choose Category</option>
                        <option value="plot">Plot</option>
                        <option value="apartment">Apartment</option>
                        <option value="independentFloor">Independent Floor</option>
                        <option value="independentHouse">Independent House</option>
                        <option value="agriLand">Agri Land</option>
                        <option value="shopShowroom">Shop/Showroom</option>
                        <option value="officeSpace">Office/Space</option>
                        <option value="hostel">Hostel</option>
                    </select>
                    
                    <input type="file" class="btn btn-primary btn-sm float-left" id="photo" style="display:none;" placeholder="Choose Photos" name="photo[]" multiple required>
                    
                    
                    <input class="form-control" id="title" name="title" style="display: none" placeholder="Title" required>
                    <input class="form-control" id="text" name="text" style="display: none" placeholder="Text" required>
                    <input class="form-control" id="price" name="price" style="display: none" placeholder="Price" required>
                    <select class="form-control" id="priceType" name="priceType" style="display: none;" required>
                        <option value="">Want Price to be visible?</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    
                    <input class="form-control" id="area" name="area" style="display: none" placeholder="Type area in sq-m">
                    <input class="form-control" id="frontRoad" name="frontRoad" style="display: none" placeholder="Front Road Size in sq. feet">
                    <input class="form-control" id="balconie" name="balconie" style="display: none" placeholder="Number of Balconie">
                    <input class="form-control" id="floor" name="floor" style="display: none" placeholder="Number of Floor">
                    <input class="form-control" id="room" name="room" style="display: none" placeholder="Total Number of Room">
                    <select class="form-control" id="hostelType" name="hostelType" style="display: none;">
                        <option value="">Boys/Girls</option>
                        <option value="boys">Boys</option>
                        <option value="girls">Girls</option>
                    </select>
                    <input class="form-control" id="seat" name="seat" style="display: none" placeholder="Number of Seat">
                    <input class="form-control" id="bathroom" name="bathroom" style="display: none" placeholder="Number of Bathroom">
                    <input class="form-control" id="advancePrice" name="advancePrice" style="display: none" placeholder="Advance Price!">
                    

                    <div id="divisionX"></div>
                    <div id="districtX"></div>
                    <div id="cityX"></div>
                    <div id="wardX"></div>
                    
                    <script>
                        document.getElementById('category').addEventListener('change', loadDivision);
                        function loadDivision(){
                            var xhr = new XMLHttpRequest();
                            xhr.open('GET', 'assets/custom/php/Dropdown-Location/division.php', true);

                            xhr.onload = function(){
                                if(this.status == 200){
                                    var division = JSON.parse(this.responseText);
                                    var output = '';
                                    output = '<select class="form-control" id="division" name="division" style="display: block;" required>';
                                    output += '<option value="">Find Division</option>';
                                    for(var i in division){
                                        output += '<option value="'+division[i].division+'">'+division[i].division+'</option>';
                                    }
                                    output += '</select>';
                                    document.getElementById('divisionX').innerHTML = output;
                                }
                            }
                            xhr.send();
                        }
                    </script>
                    <script>
                        document.getElementById('divisionX').addEventListener('change', loadDistrict);
                        function loadDistrict(){
                            var division = document.getElementById('division').value;

                            var xhr = new XMLHttpRequest();
                            xhr.open('GET', 'assets/custom/php/Dropdown-Location/district.php?division='+division, true);

                            xhr.onload = function(){
                                if(this.status == 200){
                                    var district = JSON.parse(this.responseText);
                                    var output = '';
                                    output = '<select class="form-control" id="district" name="district" style="display: block;" required>';
                                    output += '<option value="">Find District</option>';
                                    for(var i in district){
                                        output += '<option value="'+district[i].district+'">'+district[i].district+'</option>';
                                    }
                                    output += '</select>';
                                    document.getElementById('districtX').innerHTML = output;
                                }
                            }
                            xhr.send();
                        }
                    </script>

                    <script>
                        document.getElementById('districtX').addEventListener('change', loadCity);
                        function loadCity(){
                            var district = document.getElementById('district').value;

                            var xhr = new XMLHttpRequest();
                            xhr.open('GET', 'assets/custom/php/Dropdown-Location/city.php?district='+district, true);

                            xhr.onload = function(){
                                if(this.status == 200){
                                    var city = JSON.parse(this.responseText);
                                    var output = '';
                                    output = '<select class="form-control" id="city" name="city" style="display: block;" required>';
                                    output += '<option value="">Find City</option>';
                                    for(var i in city){
                                        output += '<option value="'+city[i].city+'">'+city[i].city+'</option>';
                                    }
                                    output += '</select>';
                                    document.getElementById('cityX').innerHTML = output;
                                }
                            }
                            xhr.send();
                        }
                    </script>
                    <script>
                        document.getElementById('cityX').addEventListener('change', loadWard);
                        function loadWard(){
                            var city = document.getElementById('city').value;

                            var xhr = new XMLHttpRequest();
                            xhr.open('GET', 'assets/custom/php/Dropdown-Location/ward.php?city='+city, true);

                            xhr.onload = function(){
                                if(this.status == 200){
                                    var ward = JSON.parse(this.responseText);
                                    var output = '';
                                    output = '<select class="form-control" id="ward" name="ward" style="display: block;" required>';
                                    output += '<option value="">Find Ward</option>';
                                    for(var i in ward){
                                        output += '<option value="'+ward[i].ward+'">'+ward[i].ward+'</option>';
                                    }
                                    output += '</select>';
                                    document.getElementById('wardX').innerHTML = output;
                                }
                            }
                            xhr.send();
                        }
                    </script>



                    <select class="form-control" id="userType" name="userType" style="display: block;">
                        <option value="">Your Relation</option>
                        <option value="owner">Owner</option>
                        <option value="developer">Developer</option>
                        <option value="representator">Representator</option>
                    </select>
                    
                    
                    <button type="submit" class="btn btn-success" name="Submit">Add Post</button>

                </form>
            </div>

        </div>
    </div>
</div>



<?php include'footer.php';?>
