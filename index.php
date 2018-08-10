<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="assets/css/styles.css">
             
         <!-- JQUERY -->
             
       <link rel="stylesheet" href="assets/css/jquery.mobile-1.4.5.min.css"> 
       <script src="assets/js/jquery.js"></script>
       <script src="assets/js/jquery.mobile-1.4.5.js"></script>
         <!-- JS -->       
        <script src="assets/js/custom.js"></script>
        
    </head>
    <body>
        
      <div id="one" data-role="page">
 
        <div data-role="header">
            <h1>ListView</h1>
        </div><!-- /header -->
 
        <div role="main" class="ui-content">            
	
                <ul id="listBox" data-role="listview" data-inset="true">
                    
                    
                  <?php  
                  
                  include_once 'db.php';                  
                  //var_dump(getAllClubs());
                  $allCats = getAllCats();
                  for($i=0;$i < count($allCats);$i++){
                  echo  "<li class='listItem' data-nr=".$allCats[$i]['id'].">
                         <a href='#two'><img src='assets/images/".$allCats[$i]['image']."'>
                            <h2>".$allCats[$i]['rasse']."</h2>
                         </a>
                        </li>";    
                   }
                  
                   ?>
                    
                    
                </ul>            
               
        </div>
        <!-- /content -->
 
        <div data-role="footer">
            <h4>My Footer</h4>
        </div><!-- /footer -->
 
    </div><!-- /page -->
    
    <div id="two" data-role="page">
        <div data-role="header">
            <h1 id="detailTitle">DetailView</h1>
        </div><!-- /header -->        
        <div role="main" id="detailContent" class="ui-content"> 
            <div class="ui-grid-a">
                <div class="ui-block-a"><div class="ui-bar ui-bar-a catImage" style="height:120px">Block A</div></div>
                <div class="ui-block-b"><div class="ui-bar ui-bar-a catInfo" style="height:120px">Block B</div></div>
            </div><!-- /grid-a -->
            <a href="#one" class="ui-btn">back</a>
        </div>        
    </div>
    
    </body>
</html>
