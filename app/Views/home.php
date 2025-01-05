<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ahmed's Radiant Path Yoga Studio</title>
    </head>
    <body>
        <header>
            <h1>Ahmed's Radiant Path Yoga Studio</h1>
        </header>
        <main>
            <p>Ahmed’s Radiant Path Yoga Studio warmly invites you to embark on a journey of peace and self-discovery.
Our tranquil studio offers yoga classes tailored for every level, from beginners to seasoned practitioners.
 Whether you’re new to yoga or have practiced for years, 
 our dedicated instructors will guide and adapt the sessions to support your well-being.
Illuminate your inner light with us at Ahmed’s Radiant Path Yoga Studio.</p>

<div>
    <?php
    // Define the image path
    $imagePath = base_url('/images/yoga.png'); ?>
    <img src="<?= esc($imagePath); ?>" alt="Yoga Studio" style="width:900px; height:500px; float:right; ">
</div>

<h3>We offer a variety of yoga classes, including</h3>
<ul>
    <li>Hatha, Vinyasa, and Restorative styles</li>
    <li>Drop-ins are always welcome</li>
    <li>Mats, blocks, and blankets are provided for your convenience</li>
    <li>Unwind in our serene lounge before or after your session</li>
</ul>
</main><br /> <br />

<footer>
    <div class="studio"><?php echo "Ahmed's  Radiant Path Yoga Studio"; ?></div>
    <address>
        999 Loyal Way<br />
        Chicago IL 96100
        <a id="mobile" href="tel:888-555-5555">888-555-5555</a><br />
        <a href="mailto:sumayyahaahmed@lewisu.edu">sumayyahaahmed@lewisu.edu</a>
    </address>
</footer>
</body>
</html>


