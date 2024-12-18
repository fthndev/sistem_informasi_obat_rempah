<?php include './style/header.php';
$query=mysqli_query($connect,"SELECT * FROM artikel");
$hasil=mysqli_fetch_assoc($query);
foreach($hasil as $hl){
    echo '<div class="col-md-4 mb-4">
    <div class="card h-100 shadow-sm">
        <div class="card-img-wrapper">
            <img src="https://fahum.umsu.ac.id/blog/wp-content/uploads/2024/10/10-manfaat-jahe-bagi-kesehatan-tubuh-750x375.jpg" class="card-img-top img-fluid" alt="Rahasia Jahe">
        </div>
        <div class="card-body">
            <h5 class="card-title">Rahasia Jahe</h5>
            <p class="card-text">
                Jahe dikenal sebagai rempah yang membantu meredakan mual dan menghangatkan tubuh.
            </p>
            <a href="https://fahum.umsu.ac.id/blog/10-manfaat-jahe-bagi-kesehatan-tubuh/" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
    </div>
</div>';
}
?>



<?php require './style/foot.php' ?>