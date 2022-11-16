<?php include("includes/includedFiles.php");?>

   <div class='container-class'>
        <div class='box'>
            <div class='box-row'>
                <div class='box-child-1'>
                <img src='assets/images/profile-pictures/user.png'>
                </div>
                <div class='box-child-2'  id='yupp'>
                    <p class=''>Welcome</p>
                    <p id='profile'><?php echo $userLoggedIn->getFirstAndLastName(); ?></p>

                    <p class=''>10 public playlists</p>
                </div>
            </div>       
        </div>
        
    </div>

    
    <h1 class="pageHeadingBig">You Might Also Like</h1>

    <div class="gridViewContainer">
        <?php 
            $albumQuery = mysqli_query($con, "SELECT * FROM albums ORDER BY RAND() LIMIT 10");

            while ($row = mysqli_fetch_array($albumQuery)) {
                echo "

                    <div class='gridViewItem'>
                        <span role='link' tabindex=0 onclick='openPage(\"album.php?id=" . $row['id'] . "\")'>
                            <img src='" . $row['artworkPath'] . "'>
                            <div class='gridViewInfo'>"
                                . $row['title'] ,
                            "</div>
                        </span>
                    </div> 
                ";
            }
        ?>
    </div>
          