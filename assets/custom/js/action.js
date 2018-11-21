function postAction() {
    var type = document.getElementById("type").value;
    var category = document.getElementById("category");
    
    var area = document.getElementById("area");
    var price = document.getElementById("price");
    var priceType = document.getElementById("priceType");
    var division = document.getElementById("division");
    var district = document.getElementById("district");
    var city = document.getElementById("city");
    var ward = document.getElementById("ward");
    var location = document.getElementById("location");
    var userType = document.getElementById("userType");
    var frontRoad = document.getElementById("frontRoad");
    var balconie = document.getElementById("balconie");
    var floor = document.getElementById("floor");
    var room = document.getElementById("room");
    var hostelType = document.getElementById("hostelType");
    var seat = document.getElementById("seat");
    var bathroom = document.getElementById("bathroom");
    var advancePrice = document.getElementById("advancePrice");

    if (type === "sell" || type === "rent") {
        category.style.display = "block";

//            commonOption();
//            dedicatedOption();
    }
    else {
        category.style.display = "none";
        
        area.style.display = "none";
        price.style.display = "none";
        priceType.style.display = "none";
        division.style.display = "none";
        district.style.display = "none";
        city.style.display = "none";
        ward.style.display = "none";
        location.style.display = "none";
        userType.style.display = "none";
        frontRoad.style.display = "none";
        balconie.style.display = "none";
        floor.style.display = "none";
        room.style.display = "none";
        hostelType.style.display = "none";
        seat.style.display = "none";
        bathroom.style.display = "none";

//            commonOption();
//            dedicatedOption();
    }
}

function commonOption(){
    var category = document.getElementById("category").value;
    var area = document.getElementById("area");
    var price = document.getElementById("price");
    var priceType = document.getElementById("priceType");
    var division = document.getElementById("division");
    var district = document.getElementById("district");
    var city = document.getElementById("city");
    var ward = document.getElementById("ward");
    var location = document.getElementById("location");
    var userType = document.getElementById("userType");

    area.style.display = "none";
    price.style.display = "none";
    priceType.style.display = "none";
    division.style.display = "none";
    district.style.display = "none";
    city.style.display = "none";
    ward.style.display = "none";
    location.style.display = "none";
    userType.style.display = "none";

    if(category === ""){
        area.style.display = "none";
        price.style.display = "none";
        priceType.style.display = "none";
        division.style.display = "none";
        district.style.display = "none";
        city.style.display = "none";
        ward.style.display = "none";
        location.style.display = "none";
        userType.style.display = "none";
    }
    else{
        area.style.display = "block";
        price.style.display = "block";
        priceType.style.display = "block";
        division.style.display = "block";
        district.style.display = "block";
        city.style.display = "block";
        ward.style.display = "block";
        location.style.display = "block";
        userType.style.display = "block";
    }
}

function dedicatedOption(){
    var category = document.getElementById("category").value;
    var frontRoad = document.getElementById("frontRoad");
    var balconie = document.getElementById("balconie");
    var floor = document.getElementById("floor");
    var room = document.getElementById("room");
    var hostelType = document.getElementById("hostelType");
    var seat = document.getElementById("seat");
    var bathroom = document.getElementById("bathroom");
    var advancePrice = document.getElementById("advancePrice");

    frontRoad.style.display = "none";
    balconie.style.display = "none";
    floor.style.display = "none";
    room.style.display = "none";
    hostelType.style.display = "none";
    seat.style.display = "none";
    bathroom.style.display = "none";

    if(category === ""){
        frontRoad.style.display = "none";
        balconie.style.display = "none";
        floor.style.display = "none";
        room.style.display = "none";
        hostelType.style.display = "none";
        seat.style.display = "none";
        bathroom.style.display = "none";
        advancePrice.style.display = "none";
    }
    else if(category === "plot"){
        frontRoad.style.display = "block";
        balconie.style.display = "none";
        floor.style.display = "none";
        room.style.display = "none";
        hostelType.style.display = "none";
        seat.style.display = "none";
        bathroom.style.display = "none";
        advancePrice.style.display = "none";
    }
    else if(category === "apartment"){
        frontRoad.style.display = "block";
        balconie.style.display = "block";
        floor.style.display = "block";
        room.style.display = "block";
        hostelType.style.display = "none";
        seat.style.display = "none";
        bathroom.style.display = "block";
        advancePrice.style.display = "none";
    }
    else if(category === "independentFloor"){
        frontRoad.style.display = "none";
        balconie.style.display = "none";
        floor.style.display = "none";
        room.style.display = "none";
        hostelType.style.display = "none";
        seat.style.display = "none";
        bathroom.style.display = "none";
        advancePrice.style.display = "none";
    }
    else if(category === "independentHouse"){
        frontRoad.style.display = "block";
        balconie.style.display = "block";
        floor.style.display = "block";
        room.style.display = "block";
        hostelType.style.display = "none";
        seat.style.display = "none";
        bathroom.style.display = "block";
        advancePrice.style.display = "block";
    }
    else if(category === "agriLand"){
        frontRoad.style.display = "block";
        balconie.style.display = "none";
        floor.style.display = "none";
        room.style.display = "none";
        hostelType.style.display = "none";
        seat.style.display = "none";
        bathroom.style.display = "none";
        advancePrice.style.display = "none";
    }
    else if(category === "shopShowroom"){
        frontRoad.style.display = "none";
        balconie.style.display = "none";
        floor.style.display = "block";
        room.style.display = "none";
        hostelType.style.display = "none";
        seat.style.display = "none";
        bathroom.style.display = "none";
        advancePrice.style.display = "block";
    }
    else if(category === "officeSpace"){
        frontRoad.style.display = "none";
        balconie.style.display = "none";
        floor.style.display = "block";
        room.style.display = "none";
        hostelType.style.display = "none";
        seat.style.display = "none";
        bathroom.style.display = "none";
        advancePrice.style.display = "block";
    }
    else{
        frontRoad.style.display = "block";
        balconie.style.display = "block";
        floor.style.display = "block";
        room.style.display = "block";
        hostelType.style.display = "block";
        seat.style.display = "block";
        bathroom.style.display = "block";
        advancePrice.style.display = "block";
    }
}