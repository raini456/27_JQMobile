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
        
        
             
         <!-- JQUERY -->
             
       <link rel="stylesheet" href="assets/css/jquery.mobile-1.4.5.min.css"> 
       <script src="assets/js/jquery.js"></script>
       <script src="assets/js/jquery.mobile-1.4.5.js"></script>
         <!-- JS -->       
        <script src="assets/js/custom.js"></script>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>
        
      <div id="one" data-role="page" class="myBG">
 
        <div data-role="header">
            <h1>ListView</h1>
        </div><!-- /header -->
 
        <div role="main" class="ui-content">            
	
                <ul id="listBox" data-role="listview" data-inset="true">
                    
                    
                  <?php  
                  
                  include_once 'db.php';                  
                  //var_dump(getAllClubs());
                  $allClubs = getAllClubs();
                  for($i=0;$i < count($allClubs);$i++){
                  echo  "<li class=\"listItem\" data-nr=\"".$allClubs[$i]['id']."\">
                         <a href=\"#two\" class=\"myBtnBG\">
                            <img src=\"assets/images/".$allClubs[$i]["img"]."\">
                            <h2>".$allClubs[$i]['name']."</h2>
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
        
        <div id="detailContent" role="main" class="ui-content">    
            <a href="#one" class="ui-btn">back</a>
        </div>
        
        <div id="detailFooter" data-role="footer">
            <a href="#one" class="ui-btn ui-btn-inline">back</a>
        </div>
    </div>
    
    </body>
</html>
