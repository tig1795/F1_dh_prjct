<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT Champion FROM f1_driver_wm_standings ORDER BY Champion ASC");
?>
<html>
<head>
<link rel="stylesheet" href="../CSS/menubar.css">
<link rel="stylesheet" href="../CSS/table.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Alle Formel 1 Weltmeister der Geschichte</title>
</head>
<body>
<div class="menu-bar">
    <div class="logo">
      <a href="Home.php"><img src="../../images/F1_Logo.png" alt="" width="140" height="80"/></a>
    </div>
<ul>
<li class="#"><a href="Home.php"><i class="fa fa-home"></i>Home</a></li>
<li class="active"><a href="#"><i class="fa fa-calculator"></i>Statistik</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="index.php">Fahrerwertung</a></li>
            <li><a href="#">Vision</a></li>
            <li><a href="#">Team</a></li>
        </ul>
    </div>
</li>
<li><a href="#"><i class="fa fa-car"></i>Fahrer</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="#">Web Designing</a></li>
            <li class="hover-me"><a href="#">Marketing</a><!-- <i class="fa fa-angle-right"></i> -->
              <!--<div class="sub-menu-2">
                <ul>
                    <li><a href="#">SEO</a></li>
                    <li><a href="#">Social Media</a></li>
                    <li><a href="#">Emial Marketing</a></li>
                </ul>
              </div>  -->          
            </li>
            <li class="hover-me"><a href="#">Mobile App</a><!-- <i class="fa fa-angle-right"></i> -->
            <!-- <div class="sub-menu-2">
                <ul>
                    <li><a href="#">Android App</a></li>
                    <li><a href="#">iOS App</a></li>
                    <li><a href="#">Ionic App</a></li>
                    <li><a href="#">Flutter App</a></li>
                    <li><a href="#">Unity App</a></li>
                </ul>
              </div>  -->        
          </li>
        </ul>
    </div>
</li>
<li><a href="#"><i class="fa fa-trophy"></i>Pokale</a></li>
<li><a href="#"><i class="fa fa-calendar"></i>Kalender</a></li>
<li><a href="About.php"><i class="fa fa-info"></i>About</a></li>
<li><a href="login.php"><i class="fa fa-user-circle-o"></i>Login</a></li>
</ul>
</div>
<br>
    <h2>Alle Formel 1 Weltmeister der Geschichte</h2>
    <form method="POST" name="search" action="index.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="champion[]" multiple="multiple">
                    <option value="0" selected="selected">Select Formula1 Champion</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['Champion'] . '">' . $countryResult[$key]['Champion'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['champion'])) {
                    ?>
                    <table cellpadding="200" cellspacing="20">

                <thead>
                    <tr>
                        <th><strong>Saison</strong></th>
                        <th><strong>GPs</strong></th>
                        <th><strong>Champion</strong></th>
                        <th><strong>Car</strong></th>
                        <th><strong>Nationality</strong></th>
                        <th><strong>Age</strong></th>
                        <th><strong>Points</strong></th>
                        <th><strong>Wins</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from f1_driver_wm_standings";
                    $i = 0;
                    $selectedOptionCount = count($_POST['champion']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['champion'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE champion in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['Saison']; ?> </div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['GPs']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['Champion']; ?></div></td>
                        <td><div class="col" id="user_data_4"><?php echo $result[$key]['Car']; ?> </div></td>
                        <td><div class="col" id="user_data_5"><?php echo $result[$key]['Nationality']; ?> </div></td>
                        <td><div class="col" id="user_data_6"><?php echo $result[$key]['Age']; ?></div></td>
                        <td><div class="col" id="user_data_7"><?php echo $result[$key]['Points']; ?> </div></td>
                        <td><div class="col" id="user_data_8"><?php echo $result[$key]['Wins']; ?> </div></td>
                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>