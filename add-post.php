<style media="screen">
    .hide {
        display: none;
    }

</style>
<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / Register</span>
        <h2>Add New Post</h2>
    </div>
</div>
<!-- banner -->

<script src="assets/custom/js/action.js"></script>

<!--
<script>
    function commonOptionRent(){
        var sell = document.getElementById("sell").value;
        var rent = document.getElementById("rent").value;
        var state = document.getElementById("state");
        var area = document.getElementById("area");
        var maxprice = document.getElementById("maxprice");
        var minprice = document.getElementById("minprice");
        var room = document.getElementById("room");
        var seat = document.getElementById("seat");
        var stateX = document.getElementById("state");
        
        sell = "";
        state.style.display = "none";
        area.style.display = "none";
        maxprice.style.display = "none";
        minprice.style.display = "none";
        stateX.style.display = "none";
        stateX = "";
//        stateX();

        if(rent != ""){
            state.style.display = "block";
            area.style.display = "block";
            maxprice.style.display = "block";
            minprice.style.display = "block";
        }
        else{
            state.style.display = "none";
            area.style.display = "none";
            maxprice.style.display = "none";
            minprice.style.display = "none";
        }

        if((rent === "Apartment") || (rent === "Building") ||  (rent === "IndependentHouse") ||  (rent === "IndependentFloor")){
            room.style.display = "block";
        }
        else
            room.style.display = "none";

        if((rent === "Room") || (rent === "Vehicle")){
            seat.style.display = "block";
        }
        else
            seat.style.display = "none";
    }
</script>
<script>
    function stateX(){
        var stateX = document.getElementById("state").value;
        var staterajshahi = document.getElementById("staterajshahi");
        var statedhaka = document.getElementById("statedhaka");
        
        if(stateX === "Rajshahi"){
            staterajshahi.style.display = "block";
            statedhaka.style.display = "none";
        }
        else if(stateX === "Dhaka"){
            staterajshahi.style.display = "none";
            statedhaka.style.display = "block";
        }
        else{
            staterajshahi.style.display = "none";
            statedhaka.style.display = "none";
        }
    }
</script>
-->


<div class="container">
    <div class="spacer">
        <div class="row register">
            <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
                <form id="myform" action="#">
                    <select class="form-control" id="type" onchange="postAction()">
                        <option value="">What Do You Want to Do!</option>
                        <option value="sell">Sell</option>
                        <option value="rent">Rent</option>
                    </select>
                    <select class="form-control" id="category" style="display: none;" onchange="commonOption(); dedicatedOption()">
                        <option value="">Choose Category</option>
                        <option value="plot">Plot</option>
                        <option value="apartment">Apartment</option>
                        <option value="independentFloor">Independent Floor</option>
                        <option value="independentHouse">Independent House</option>
                        <option value="agriLand">Agri Land</option>
                        <option value="shopShowroom">Shop/Showroom</option>
                        <option value="officeSpace">Office/Space</option>
                    </select>
                    <input class="form-control" id="area" style="display: none" placeholder="Type area in sq-m">
                    <input class="form-control" id="price" style="display: none" placeholder="Price">
                    <select class="form-control" id="priceType" style="display: none;">
                        <option value="">Want Price to be visible?</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    <select class="form-control" id="division" style="display: none;">
                        <option value="">Find Division</option>
                        <option value="east">East</option>
                        <option value="west">West</option>
                        <option value="north">North</option>
                        <option value="south">South</option>
                    </select>
                    <select class="form-control" id="district" style="display: none;">
                        <option value="">Find District</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="dinajpur">Dinajpur</option>
                        <option value="ranjpur">Ranjpur</option>
                    </select>
                    <select class="form-control" id="city" style="display: none;">
                        <option value="">Find City</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="dinajpur">Dinajpur</option>
                        <option value="ranjpur">Ranjpur</option>
                    </select>
                    <select class="form-control" id="ward" style="display: none;">
                        <option value="">Find Ward/Union</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                    </select>
                    <input class="form-control" id="location" style="display: none" placeholder="Location">
                    <select class="form-control" id="userType" style="display: none;">
                        <option value="">Your Relation</option>
                        <option value="owner">Owner</option>
                        <option value="developer">Developer</option>
                        <option value="representator">Representator</option>
                    </select>
                    
                    
                    <input class="form-control" id="frontRoad" style="display: none" placeholder="Front Road Size in sq. feet">
                    <input class="form-control" id="balconie" style="display: none" placeholder="Number of Balconie">
                    <input class="form-control" id="floor" style="display: none" placeholder="Number of Floor">
                    <input class="form-control" id="room" style="display: none" placeholder="Total Number of Room">
                    <select class="form-control" id="hostelType" style="display: none;">
                        <option value="">Boys/Girls</option>
                        <option value="boys">Boys</option>
                        <option value="girls">Girls</option>
                    </select>
                    <input class="form-control" id="seat" style="display: none" placeholder="Number of Seat">
                    <input class="form-control" id="bathroom" style="display: none" placeholder="Number of Bathroom">
                    <input class="form-control" id="advancePrice" style="display: none" placeholder="Advance Price!">
                    
                    <button type="submit" class="btn btn-success" name="Submit">Find Opinions</button>

                </form>
            </div>

        </div>
    </div>
</div>



<?php include'footer.php';?>
