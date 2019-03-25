<?php require 'header.php'; ?>
<?php require 'config.php'; ?>
    <main>
        <?php

            if(isset($message))
            {
                echo '<label class="text-danger">'.$message.'</label>';
            }
        ?>
        <div class="banner">
            <div class="container">

                <img src="img/bannerbackground.png" alt="teamwork.png">
                <div class="centered">
                    <h2>N<span>A</span>P</h2>
                </div>
                <div class="bottom">
                    <span>For all your project downloads, and PHP and HTML/CSS issues.</span>
                </div>

            </div>

        </div>

        <div class="information">
            <div class="container">
                <h3>Information</h3>
                <div class="information-items">
                    <div class="information-item">
                        <h4>Lorem</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias nostrum nulla ipsam neque repellat sapiente impedit tenetur sit, sequi, fugiat maxime! Eius impedit consectetur delectus suscipit. Repellendus id earum, illum.</p>
                    </div>
                    <div class="information-item">
                        <h4>Lorem</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius voluptatum ut aliquam magni velit, necessitatibus quam ab itaque sunt quo ad, dicta minus maxime consequuntur. Aperiam iusto labore eligendi ratione.</p>
                    </div>
                    <div class="information-item">
                        <h4>Lorem</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est animi alias quo unde neque, asperiores mollitia, ipsa iusto perspiciatis facilis repellendus, veritatis omnis! Necessitatibus eligendi, nisi vero animi commodi illum?</p>
                    </div>
                </div>
            </div>
        </div>


    </main>

<?php require 'footer.php'; ?>