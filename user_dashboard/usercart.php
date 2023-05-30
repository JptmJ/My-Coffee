<?php
session_start();
session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add to Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart']), 'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo
                "<script>
                alert('Item Already Added');
                window.location.href='food.php';
                </script>";

            }
            $_Count=count($_SESSION['cart']);
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            print_r($_SESSION['cart']);
            echo
                "<script>
                alert('Item Added');
                window.location.href='food.php';
                </script>";
        }
    }

    
}

?>

