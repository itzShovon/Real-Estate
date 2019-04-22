<button id="button">Get Users</button>
<div id="regionX"></div>
<div id="districtX"></div>
<div id="cityX"></div>
<div id="wardX"></div>

<script>
    document.getElementById('button').addEventListener('click', loadRegion);
    function loadRegion(){
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'region.php', true);

      xhr.onload = function(){
        if(this.status == 200){
          var region = JSON.parse(this.responseText);
          var output = '';
          output = '<select class="form-control" id="region" name="region" style="display: block;">';
          output += '<option value="">Find Region</option>';
          for(var i in region){
            output += '<option value="'+region[i].region+'">'+region[i].region+'</option>';
          }
          output += '</select>';
          document.getElementById('regionX').innerHTML = output;
        }
      }
      xhr.send();
    }
  </script>
  
  <script>
    document.getElementById('regionX').addEventListener('change', loadDistrict);
    function loadDistrict(){
      var region = document.getElementById('region').value;

      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'district.php?region='+region, true);

      xhr.onload = function(){
        if(this.status == 200){
          var district = JSON.parse(this.responseText);
          var output = '';
          output = '<select class="form-control" id="district" name="district" style="display: block;">';
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
      xhr.open('GET', 'city.php?district='+district, true);

      xhr.onload = function(){
        if(this.status == 200){
          var city = JSON.parse(this.responseText);
          var output = '';
          output = '<select class="form-control" id="city" name="city" style="display: block;">';
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
      xhr.open('GET', 'ward.php?city='+city, true);

      xhr.onload = function(){
        if(this.status == 200){
          var ward = JSON.parse(this.responseText);
          var output = '';
          output = '<select class="form-control" id="ward" name="ward" style="display: block;">';
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