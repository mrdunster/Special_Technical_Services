 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Special Technical Services - Home</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/reset.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css" />

    <script language="javascript">

    function showimage()
    {
    if (!document.images)
    return
    document.images.pictures.src=
    document.mygallery.picture.options[document.mygallery.picture.selectedIndex].value
    }
    </script>

</head>
<body>
    
    <div id="header">
        
        <div class="container">
        
        <h1><a href="index.php">Special Technical Services</a></h1>
        
        <div id="main_menu">
        
            <ul>
                <li class="first_list"><a href="index.php" class="main_menu_first">home</a></li>
                <li class="first_list with_dropdown">
                    <a href="products.php"  class="main_menu_first">products</a>
                    <ul>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">ground monitoring system</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">grounding cables</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">grounding clamps</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">accessories</a></li>
                        </ul>
                </li>
                <li class="first_list"><a href="#" class="main_menu_first">replacement parts</a></li>
                </li>
                <li class="first_list"><a href="ordering_guide.php" class="main_menu_first main_current">ordering guide</a></li>
                <li class="first_list"><a href="#" class="main_menu_first">applications</a></li>
                <li class="first_list"><a href="#" class="main_menu_first">technical info</a></li>
                <!--li class="first_list"><a href="contact.html" class="main_menu_first">contact us</a></li-->
                </ul>
        

        </div> <!-- END #main_menu -->
    
        </div> <!-- END .container -->
    
    </div> <!-- END #header -->
    
    <div id="main_content">

        <div id="ordering_area">
            
            <div class="container">
            
            <h2 id="ordering">Ordering Guide</h2>

            <table border="0" cellspacing="0" cellpadding="0">
            <tr>
            <td width="100%"><form name="mygallery"><p><select
            name="picture" size="1" onChange="showimage()">
            <option value="product/website/reel.jpg">Reel</option>
            <option value="product/website/clamp_top.jpg">Clamp</option>
            </select></p>
            </form>
            </td>
            </tr>
            <tr>
            <td width="100%"><p align="center"><img src="product/website/reel.jpg" name="pictures" width="99" height="100" border=0></a></td>
            </tr>
            </table>


            </div> <!-- END .container -->

        </div> <!-- END ordering_area -->


    </div> <!--End main_content-->

<?php include 'footer.html';?>

</body>
</html>