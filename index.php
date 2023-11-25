<!DOCTYPE <html>
    <html>
        <head>
            <title>aplikasi kalkulator</title>
            <head>
                <body>
                        <form action="" method="GET">
                            <h2 class="judul">aplikasi kalkulator</h2>
                            <input type="text"name="bilangan1"autocomplete="off"placeholder="enxe numeru">
                            <p>
                            <input type="text"name="bilangan2"autocomplete="off"placeholder="enxe numeru">
                            </p>
                                <input type="submit"name="mais"value="+">
                                <input type="submit"name="menus"value="-">
                                <input type="submit"name="vezes"value="*">
                                <input type="submit"name="dividir"value="/">
                        </form>
                </body>
                </html>
     <?php
    
    $bilangan1=$_GET['bilangan1'];
    $bilangan2=$_GET['bilangan2'];
    
    if(isset($_GET['mais'])){
        $resultadu=mais($bilangan1, $bilangan2);
    }
    if(isset($_GET['menus'])){
        $resultadu=menus($bilangan1, $bilangan2);
    }
    if(isset($_GET['vezes'])){
        $resultadu=vezes($bilangan1, $bilangan2);
    }
    if(isset($_GET['dividir'])){
        $resultadu=dividir($bilangan1, $bilangan2);
    }

    function mais($bilangan1,$bilangan2){
        return $bilangan1+$bilangan2;
    } 
    
    function menus($bilangan1,$bilangan2){
        return $bilangan1-$bilangan2;
    } 
    
    function vezes($bilangan1,$bilangan2){
        return $bilangan1*$bilangan2;
    } 
    
    function dividir($bilangan1,$bilangan2){
        return $bilangan1/$bilangan2;
    } 
    
    
    ?>

  <html>
    <input type="text" value="<?php echo $resultadu?>">
    </html>