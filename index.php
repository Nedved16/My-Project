<?php


   if ( isset($_GET['id']) && $_GET['id']){
       $id = $_GET['id'];
   }

?>

<!DOCTYPE html>
<html lang="en">

<?php
require ('_head.php');
?>
<body>

<?php
require_once ('_menu.php');

                    $id = empty($id) ? 'index' : $id;

                  switch ($id) {
                      case('blog'):
                          include_once ('_blog.php');
                          break;
                      case('blog_single'):
                          include_once ('_blog_single.php');
                          break;
                      case('about'):
                          include_once ('_about.php');
                          break;
                      case('contact'):
                          include_once ('_contact.php');
                          break;
                      default: include_once('_index.php');
                  }




require ('_footer.php');
?>


</body>
