<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="video.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;700&family=Open+Sans:wght@300;400;500;600&family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">


    <title>ELP WEBSITE</title>
</head>
<body>
    <section class="header">
        <nav>
            <div class="nav-links">
                <i class="fa fa-times"></i>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="verification.php">PORTAL</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>EQUITY LEADERS PROGRAM UGANDA</h1>
            <p>The Equity Leaders Program is
                a mentorship and leadership development program that plays a significant role in extending Equity Bank Uganda’s social impact contribution through the scaling up of various programs that are already under implementation 
                through Equity Group Foundation (EGF), 
                the Group's social impact engine.<br>
                It was launched in Uganda  by admitting its first cohort of 123 top performing scholars from the 43 Districts where the bank has a branch presence.</p>
        </div>
    </section>

    <section class="course">
        <h2>What scholars learn</h2>
        <p>The Equity Leaders program seeks to improve the life of the scholars by giving them the following opportunites</p>

        <div class="row">
            <div class="course-col">
                <h3> Giveback Programmes</h3>
                <p>Equity Leaders scholars will have the opportunity to give back to their communities.
                    This will involve claening activities, donations and so much more. With this the scholars will be able to 
                    develop a heart of giving back and helping people in need.
                </p>
            </div>

            <div class="course-col">
                <h3>Paid internship with the Bank</h3>
                <p>The scholars will also get an opportunity to work with the Bank during their Vacation
                    and also while during holidays while at campus. This will enable them to experience an early introduction to 
                    the field of work.
                </p>
            </div>

            <div class="course-col">
                <h3> Leadership and mentorship </h3>
                <p>The bank intends to give leadership and mentorship programmes to the selected scholars as they will be 
                    grouped in chapters according to the different universities in uganda.

                </p>
            </div>
        </div>
        

    </section>


    <section class="campus">
        <h1>University Chapters</h1> 
        <p>The bank has grouped the scholars into different chapters depending on the different universities in uganda. Each of these 
            chapters are led by a chapter president and a team of the executive.

        </p>
        <p style="color: red;">Hover on them to see more</p>

        <div class="row">
            <div class="campus-col">
                <img src="Gallery/1.JPG">
                <div class="layer">
                    <h3>Kyambogo ELP chapter</h3>
                    <a href="kyambogo.php">More >></a>
                </div>
            </div>
            <div class="campus-col">
                <img src="Gallery/equity 1.jpg">
                <div class="layer">
                    <h3>Makerere ELP chapter</h3>
                    <a href="#">More >></a>

                </div>
            </div>
            <div class="campus-col">
                <img src="Gallery/2.JPG">
                <div class="layer">
                    <h3>Mbarara University ELP Chapter</h3>
                    <a href="#">More >></a>

                </div>
            </div>
        </div>

    </section>

    <section class="testimonies">
        <h1>What scholars say</h1>
        <p style="color: red;">click to play</p>

        
        <div class="video-gallery">
            <div class="video-gallery-items">
              <div class="video-gallery-item">
                <video src="Gallery/New video 4.mp4" controls></video>
                <p style="font-size: 14px;margin-top: 10px;">Preview of the Launch by scholars</p>
              </div>
              <div class="video-gallery-item">
                <video src="Gallery/New video.mp4" controls></video>
                <p style="font-size: 14px;margin-top: 10px;">Scholars scholars say</p>
              </div>
      
              <div class="video-gallery-item">
                <video src="Gallery/1.mp4" controls></video>
                <p style="font-size: 14px;margin-top: 10px;">Excitement from scholars</p>
              </div>
      
              <div class="video-gallery-item">
                <video src="Gallery/New.mp4" controls></video>
                <p style="font-size: 14px;margin-top: 10px;">Samuel Kirubi - Former Managing Director</p>
              </div>
      
      
              <div class="video-gallery-item">
                <video src="Gallery/New 2.mp4" controls></video>
                <p style="font-size: 14px;margin-top: 10px;">Scholars express gratitude</p>
              </div>
              <div class="video-gallery-item">
                <video src="Gallery/New 3.mp4" controls></video>
                <p style="font-size: 14px;margin-top: 10px;">Scholars describe lessions learnt</p>
              </div>
              <!-- Add more video gallery items as needed -->
            </div>
          </div>

        
    </section>

    <sectio class="footer">
        <h4>About Equity Leaders Program</h4>
        <p>The Equity Leaders Program is a mentorship and leadership development program that plays a significant role in extending Equity Bank Uganda’s social impact contribution through the scaling up of various programs that are already under implementation through Equity Group Foundation (EGF)</p>
                    <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="verification.php">ELP portal</a></li>
                    </ul>
        <div class="socials">
            <a href="https://www.facebook.com/UgEquityBank"><span><img src="socials/facebook.svg"></span></a>
            <a href="https://twitter.com/UgEquityBank" target="_blank"><span><img src="socials/twitter.svg"></span></a>
            <a href="https://youtu.be/uZpMKsCvJCA" target="_blank"><span><img src="socials/youtube.svg"></span></a>
            <a href="https://www.instagram.com/explore/tags/equitybankuganda/"><span><img src="socials/instagram.svg"></span></a>


        

        </div>
        <div class="copyright" style="margin-top: 20px;">
            &copy; <?php echo date("Y");?>
            </div>
    </sectio>
    
</body>
</html>