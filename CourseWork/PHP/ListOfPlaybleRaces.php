    <!--Шапка сайта-->
    <?php
    $title = "Список игровых рас";
    $StyleThispage = "../CSS/ListOfPlaybleRace.css";
    include "../PHP/blocks/head.php";
?>
    <!--Контент на заглавной странице-->
    <section>
        <img src="../IMG/BG/BG.jpg">
        <div class="content-box">

        <?php
        $connect = mysqli_connect("localhost", "root", "root", "coursework");
        if (!$connect) {
            die("Ошибка: " . mysqli_connect_error());
        }
        $query = "SELECT * FROM listrace";
        if($result = mysqli_query($connect, $query)){
            $rowsCount = mysqli_num_rows($result); // количество полученных строк
            foreach($result as $row){
                echo " 
                    <div class='race-card' style='background: url(../IMG/Avatar/" . $row['IMG'] . ");'>
                        <div>" 
                        . $row['Name'] . 
                        "</div>
                        <div>
                            <p>" . $row['Description'] . "
                            <p>Расовые черты:
                            <p>" . $row['InnateAbilities'] . "
                        </div>
                        <button>Подробнее</button>
                    </div>";
            }
            mysqli_free_result($result);
        } else{
        echo "Ошибка: " . mysqli_error($connect);
        }
        mysqli_close($connect);   
        ?>
        </div>
    </section>
    <!--Подвал сайта-->
<?php
    require "../PHP/blocks/footer.php";
?>

<!-- <div>
                            <img src='../IMG/Avatar/" . $row['IMG'] . "'>
                        </div> -->