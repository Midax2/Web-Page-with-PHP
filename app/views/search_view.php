<!DOCTYPE html>
<html>
<head>
  <title>Wyszukiwanie zdjęcia</title>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>  
  <link href="Files/style_gallery.css"/>
</head>
<body>
   
  <div>
    <div>
      <div>
         <h2>Poszukiwanie zdjęć</h2>
         <input type="text" name="search" id="search" autocomplete="off" placeholder="podaj nazwę zdjęcia....">
         <div id="output"></div>
      </div>           
    </div>
 </div>
 <a href="main">Strona główna</a>
  
  <script type="text/javascript">
    $(document).ready(function(){
       $("#search").keyup(function(){
          var query = $(this).val();
          if (query != "") {
              $.ajax({
              url: 'image',
              method: 'POST',
              data: {query:query},
              success: function(data){
 
                $('#output').html(data);
                $('#output').css('display', 'block');
 
                $("#search").focusout(function(){
                    $('#output').css('display', 'none');
                });
                $("#search").focusin(function(){
                    $('#output').css('display', 'block');
                });
              }
            });
          } else {
          $('#output').css('display', 'none');
        }
      });
    });
  </script>
</body>
</html>