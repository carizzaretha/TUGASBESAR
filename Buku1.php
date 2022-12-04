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


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script> 
    <title>Buku 1</title>
</head>
<body>
    <div class="topnav">
        <nav>
            <h2 class="logo">Mother Dragon</h2>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="Buku.html">Buku</a></li>
                <li><a href="">Graf</a></li>
                <li><a href="">Grafik</a></li>    
            </ul>

        </nav>
    </div>

    <main class="bb" style="height:200px;">
            <div class="home__container">
                <div class="home__data">
                    <h3 class="home__title" style="color:#0e0f11; justify-contents:center">Buku pertama Game of Thrones</h3>                  
                </div>
            </div>

    </main>

    <table id="example" class="table table-striped table-bordered" style="width:100%; color:black">
    <thead>
            <tr>
                <th>Source</th>
                <th>Target</th>
                <th>Type</th>
                <th>Weight</th>
                <th>Book</th>
            </tr>
    </thead>

    <tbody>
            <?php
                include 'connect.php';
                $buku1 = mysqli_query($koneksi, "select * from book1");
                while($row = mysqli_fetch_array($buku1)){
                    echo "<tr>
                    <td>".$row['Source']."</td>
                    <td>".$row['Target']."</td>
                    <td>".$row['Type']."</td>
                    <td>".$row['weight']."</td>
                    <td>".$row['book']."</td> 
                    </tr>";
                }
            ?>
        </tbody>
    </table>
    <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
</script>
</body>





</html>