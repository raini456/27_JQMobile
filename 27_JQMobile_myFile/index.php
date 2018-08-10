<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  include_once 'db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/jquery.mobile-1.4.5.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/jquery.mobile-1.4.5.js" type="text/javascript"></script>
        <script src="assets/js/custom.js" type="text/javascript"></script>
    </head>
    <body>
       <div data-role="page">
  
            <div data-role="header">
                <h1>Katzen</h1>
                <?php 
                  $catInfos= getAllCats(); 
                  var_dump($catInfos[0]["rasse"]);
                ?>
            </div><!-- /header -->

            <div role="main" class="ui-content">  
                <div id="two" data-role="page">                
                <div class="ui-grid-a">
                    <div class="ui-block-a"><div class="ui-bar ui-bar-a" style="height:60px" id='imageCat'>
                        <?php    
                          $catInfos= getAllCats();
                          foreach($catInfos as $key => $value){
                              echo "key: ".$key."<br>";
                              
                          }
                          echo '<img src="assets/images/britische-kurzhaar-katze.jpg" height="60" width="100">';
                        ?>
                        </div></div>
                    <div class="ui-block-b"><div class="ui-bar ui-bar-a" style="height:60px">       


                            <ul data-role="listview" data-inset="true">
                                <li><a href="#">Katze1</a></li>

                            </ul>
                        </div></div>
                </div><!-- /grid-a -->
                </div>
                <a href="#" class="ui-btn ui-btn-inline">Zur&uuml;ck</a>
                <button class="ui-btn ui-btn-inline bgColor" href="one">Vor</button>
                <label for="slider">Slider:</label>
                <input name="slider" id="slider" value="50" min="0" max="100" type="range">		
            </div><!-- /content -->

            <div data-role="footer">
                <h4>My Footer</h4>
            </div><!-- /footer -->

        </div><!-- /page -->
    </body>
</html>
