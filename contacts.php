<?php
    $page_title = 'Contacts';
    include('templates/header.php');
?>

        <!-- contacts page -->
        <section class="contacts clearfix">
            <h1>Contact Us. Locale Us. Send Us Your Thoughts!</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Maecenas in magna mollis lectus lacinia mollis.
            </p>

            <div id="map-canvas"></div>
			
            <form class="comments-area clearfix">                                          
                <input type="text" placeholder="FIRST NAME">                                            
                <input type="text" placeholder="LAST NAME">    
                <input type="text" placeholder="EMAIL ADDRESS">                                            
                <textarea placeholder="MESSAGE"></textarea>       
                <input type="submit" value="Submit" class="link-button">        
            </form>
        
        <section>
        <!-- !contacts page -->


<?php include('templates/footer.php') ?>