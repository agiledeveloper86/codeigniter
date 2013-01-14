<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  
  <body>
    <div id="container">
    	<!-- 1.adding html content 
      <p>My view has been loaded</p> 
       -->

       <!-- 2.dynamically adding data 
       <p>My view has been loaded</p>
       <p><?php echo $myValue; ?></p> 
       <p><?php echo $anotherValue; ?></p>
       -->

       <!-- 3.grabing data from db by active records-->
       <p>My view has been loaded</p>
         <h1><?php foreach($records as $row) {
                      echo $row->title.'<br />'; 
                                         }
          ?><h1>

         

       
		

    </div>
  </body>
</html>