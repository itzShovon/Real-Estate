<?php
    try{
        if(($_SESSION['type'] === 'users') && ($_SESSION['flag'] === '1')){
            $user = $_SESSION['id'];
            $password = $_SESSION['password'];
            $statement = $db->prepare("SELECT * FROM property WHERE  user='$user' ORDER BY id DESC");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);

            foreach($result as $row){
                if(($user === "$row->user")){
                    $id = $row->id;
                    $title = $row->title;
                    $userType = $row->userType;
                    $area = $row->area;
                    $price = $row->price;
                    $priceType = $row->priceType;
                    $division = $row->division;
                    $district = $row->district;
                    $city = $row->city;
                    $ward = $row->ward;
                    // $location = $row->location;
                    $postType = $row->postType;
                    $category = $row->category;
                    $frontRoad = $row->frontRoad;
                    $balconie = $row->balconie;
                    $floor = $row->floor;
                    $room = $row->room;
                    $hostelType = $row->hostelType;
                    $seat = $row->seat;
                    $bathroom = $row->bathroom;
                    $advancePrice = $row->advancePrice;
                    $status = $row->status;
                    $flag = $row->flag;
?>
                

    <div class="col-lg-5">
        <table class="table table-striped">
            <tbody>
                <tr>
                <th><span class="pull-left"><a href='property-detail.php?id=<?php echo "$id"; ?>'>Post <?php echo "$id"; ?> View</a></span></th>
                    <th><span class="pull-right"><a href='assets/custom/php/delete-post.php?id=<?php echo "$id"; ?>'>Delete</a></span></th>
                </tr>
                <tr>
                    <th scope="col">User Type</th>
                    <td><?php echo "$userType" ?></td>
                </tr>
                <tr>
                    <th scope="col">Category</th>
                    <td><?php echo "$postType" ?></td>
                </tr>
                <tr>
                    <th scope="col">Title</th>
                    <td><?php echo "$title" ?></td>
                </tr>
                </tr>
                <tr>
                    <th scope="col">Property</th>
                    <td><?php echo "$category" ?></td>
                </tr>
                <tr>
                    <th scope="col">Area</th>
                    <td><?php echo "$area" ?></td>
                </tr>
                <tr>
                    <th scope="col">Price</th>
                    <td><?php echo "$price" ?></td>
                </tr>
                <tr>
                    <th scope="col">Price Type</th>
                    <td><?php echo "$priceType" ?></td>
                </tr>
                <tr>
                    <th scope="col">Division</th>
                    <td><?php echo "$division" ?></td>
                </tr>
                <tr>
                    <th scope="col">District</th>
                    <td><?php echo "$district" ?></td>
                </tr>
                <tr>
                    <th scope="col">City</th>
                    <td><?php echo "$city" ?></td>
                </tr>
                <tr>
                    <th scope="col">Ward</th>
                    <td><?php echo "$ward" ?></td>
                </tr>
                <tr>
                    <th scope="col">Front Road</th>
                    <td><?php echo "$frontRoad" ?></td>
                </tr>
                <tr>
                    <th scope="col">Balconie</th>
                    <td><?php echo "$balconie" ?></td>
                </tr>
                <tr>
                    <th scope="col">Floor</th>
                    <td><?php echo "$floor" ?></td>
                </tr>
                <tr>
                    <th scope="col">Room</th>
                    <td><?php echo "$room" ?></td>
                </tr>
                <tr>
                    <th scope="col">Hostel Type</th>
                    <td><?php echo "$hostelType" ?></td>
                </tr>
                <tr>
                    <th scope="col">Seat</th>
                    <td><?php echo "$seat" ?></td>
                </tr>
                <tr>
                    <th scope="col">Bathroom</th>
                    <td><?php echo "$bathroom" ?></td>
                </tr>
                <tr>
                    <th scope="col">Advance Price</th>
                    <td><?php echo "$advancePrice" ?></td>
                </tr>
                </tr>
                <tr>
                    <th scope="col">Approval</th>
                    <?php if(($status === '1') && ($flag === '1')){ ?>
                    <td>Approved</td>
                    <?php }else{ ?>
                    <td>Not Approved</td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
<?php
                }
            }
        }
    }catch (Exception $ex) {
        echo $ex->getMessage();
    }
?>