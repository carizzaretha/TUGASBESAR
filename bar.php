<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"> 
    <link rel="stylesheet" href="buku1.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Bar</title>
</head>
<body>
    <div class="topnav">
        <nav>
            <h2 class="logo">Mother Dragon</h2>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="Buku.html">Buku</a></li>
                <li><a href="">Graf</a></li>
                <li><a href="">bar</a></li>    
            </ul>
        </nav>
    </div>
   <form action="/tubes/bar.php" method="POST">
            <select id="book" name="book">
                <option value="book1">book 1</option>
                <option value="book2">book 2</option>
                <option value="book3">book 3</option>
                <option value="book4">book 4</option>
                <option value="book5">book 5</option>
            </select>
            <input type="submit" value="submit" >
    </form>

            <?php
            include 'connect.php';
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $getBuku=$_POST['book'];
                    echo "<h1>Top 10 Interaction ".$getBuku."</h1>";
                    $buku1 = mysqli_query($koneksi, "SELECT isi+isit, Source
                                                    from(SELECT COUNT(Source)as isi,Source FROM ".$getBuku."
                                                            GROUP by Source)sumber 
                                                    JOIN (SELECT COUNT(Target)as isit,Target FROM ".$getBuku." GROUP by Target)lawan 
                                                    on sumber.source=lawan.target  
                                                    ORDER BY `isi+isit` DESC LIMIT 10");
                    $x=array();
                    $y=array();  
                    while($row = mysqli_fetch_array($buku1)){
                        array_push($x,$row['Source']);
                        array_push($y,$row['isi+isit']);
                    }
                    include 'createBar.php';
                    echo '<div id="topBarChart" style="width:100%; max-width:600px; height:500px;"></div>';
                    
                };
                
            ?>



</body>





</html>