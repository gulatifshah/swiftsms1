<!-- begin header here -->
<?php include 'partials/header.php'; ?>
    <div id="body">
		<section id="content">
    	    <article>
    			<h2>Gallery</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Commodi inventore necessitatibus distinctio dolore placeat sunt, eaque animi beatae minus odio eveniet ipsa suscipit nemo magni magnam excepturi minima assumenda odit repellendus aliquam, id? Doloremque consequatur rem eum sequi officiis aspernatur voluptatibus eius sunt vel possimus, </p>
                <hr>
                <ul class="list-unstyled">
                    <?php  
                    require_once 'config/dbc.php';
                    $getGalleries = mysqli_query($connection, "SELECT * FROM media WHERE status='ACTIVE' AND media_type='gallery'") or die(mysqli_error($connection));
                    while ($viewGalleries = mysqli_fetch_array($getGalleries)) {
                    ?>
                    <li class="list-inline-item"><a href="uploads/<?php echo $viewGalleries['media_img'] ?>" data-lightbox="image-1"><img src="uploads/<?php echo $viewGalleries['media_img'] ?>" width="100" height="100" class="img-thumbnail" alt="<?php echo $viewGalleries['title']; ?>"></a></li>
                    <?php } ?>
                </ul> 
    		</article>
        </section>
        
        <!-- begin sidebar here -->
        <?php include 'partials/sidebar.php'; ?>
    </div>
   <!-- begin footer here -->
   <?php include 'partials/footer.php'; ?>