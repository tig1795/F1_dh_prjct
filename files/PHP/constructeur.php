<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT Constructor FROM f1_team_wm_standings ORDER BY Constructor ASC");
?>
<html>
<head>
<link rel="stylesheet" href="../CSS/menubar.css">
<link rel="stylesheet" href="../CSS/table.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Alle Konstrukteur-Weltmeister der Formel 1 Geschichte</title>
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
            <li><a href="constructeur.php">Konstrukteure</a></li>
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
    <h2>Alle Konstrukteur-Weltmeister der Formel 1 Geschichte</h2>
    <form method="POST" name="search" action="constructeur.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="Constructor[]" multiple="multiple">
                    <option value="0" selected="selected">Select Constructor Champion</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['Constructor'] . '">' . $countryResult[$key]['Constructor'] . '</option>';
                            }
                        }
                        ?>
                </select><br> <br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['Constructor'])) {
                    ?>
                    <table cellpadding="200" cellspacing="20">

                <thead>
                    <tr>
                        <th><strong>Constructor</strong></th>
                        <th><strong>Country</strong></th>
                        <th><strong>Titles</strong></th>
                        <th><strong>Seasons</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from f1_team_wm_standings";
                    $i = 0;
                    $selectedOptionCount = count($_POST['Constructor']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['Constructor'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE Constructor in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['Constructor']; ?> </div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['Country']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['Titles']; ?></div></td>
                        <td><div class="col" id="user_data_4"><?php echo $result[$key]['Seasons']; ?> </div></td>
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