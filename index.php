<?php ob_start(); ?>

<!DOCTYPE html>
<html>
    <head lang='en'>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

        <link rel='stylesheet' href='styles/styles.css'>

        <title>Emaki Project: Ingrid, Hannah, Aubrienne, Andrew</title>
    </head>

    <body>
        <main>
            <div id='arrow-left' class='arrow'>&#10094;</div>
            <div id='arrow-right' class='arrow'>&#10095;</div>
            <?php
                $descriptions = [
                    [
                        'start' => 0,
                        'end' => 3,
                        'content' =>
                            "
                                <h1>Emaki Project</h1>
                                <h2>The Tattooer</h2>
                                <h4>Tanizaki Jun'ichirō</h4>
                                <h4>Aubrienne Krysiewicz-Bell, Hannah Lamport, <br>Andrew Lee, Ingrid Wall</h4>

                            ",
                        'side' => 'right'
                    ],
                    [
                        'start' => 10,
                        'end' => 17,
                        'content' =>
                            "
                                <p>In the pleasure quarters of Edo, Seikichi was the most renowned tattooer, celebrated for the unrivaled boldness and sensual charm of his art. He derived a secret pleasure from inflicting agonizing pain on the men he tattooed, and he especially enjoyed shading and vermilioning, which were the most excruciating techniques.
                                </p>
                            ",
                        'side' => 'left' 
                    ],
                    [
                        'start' => 20,
                        'end' => 27,
                        'content' =>
                            "
                                <p>For a long time Seikichi had cherished the desire to create a masterpiece on the skin of a beautiful woman. Such a woman had to meet various qualifications of character as well as appearance. One summer evening during the fourth year of his search Seikichi happened to be passing the Hirasei Restaurant in the Fukagawa district of Edo, not far from his own house, when he noticed a woman's bare milk-white foot peeping out beneath the curtains of a departing palanquin. Eager to catch a glimpse of her face, Seikichi began to follow the palanquin. But after pursuing it down several lanes and alleys he lost sight of it altogether. Seikichi's long-held desire turned into passionate love.
                                </p>
                            ",
                        'side' => 'right' 
                    ],
                    [
                        'start' => 35,
                        'end' => 42,
                        'content' =>
                            "
                                <p>One morning late the next spring he was standing on the bamboo-floored veranda of his home in Fukagawa when he heard someone at the garden gate. Around the corner of the inner fence appeared a young girl. She had come on an errand for a friend of his, a geisha of the nearby Tatsumi quarter. Seikichi said to her, \"I have waited five years for you. This is the first time I have seen your face, but I remember your foot... Come in for a moment, I have something to show you.\" Then he brought out two picture scrolls and unrolled one of them before her. As the girl stared at this bizarre picture her lips trembled and her eyes began to sparkle. She had turned pale.
                                </p>
                                <p>
                                    Seikichi told her, \"This painting shows your future,\" Seikichi said, pointing to the woman under the cherry tree—the very image of the young girl. \"All these men will ruin their lives for you.\"

                                </p>
                                <p>
                                    \"Please, I beg of you to put it away!\" She turned her back as if to escape its tantalizing lure and prostrated herself before him, trembling.
                                </p>
                            ",
                        'side' => 'left' 
                    ],
                    [
                        'start' => 64,
                        'end' => 71,
                        'content' =>
                            "
                                <p>After sedating the girl with an anesthetic, he raised the brush, applied its tip to the girl's back, and, with the needle began pricking out a design. He saw in his pigments the hues of his own passions. At every thrust of his needle Seikichi gave a heavy sigh and felt as if he had stabbed his own heart. Little by little the tattoo marks began to take on the form of a huge black-widow spider. 
                                </p>
                            ",
                        'side' => 'right' 
                    ],
                    [
                        'start' => 78,
                        'end' => 85,
                        'content' =>
                            "
                                <p>Finally, the tattoo was finished and the girl washed herself in the bath. Seikichi was amazed at the change that had come over the timid, yielding girl of yesterday. About an hour later she came back, carefully dressed, her damp, sleekly combed hair hanging down over her shoulders. Her eyes were brilliant; there was not a trace of pain in them. \"All my old fears have been swept away—and you are my first victim!\" She darted a glance at him as bright as a sword. The girl slipped the kimono off her shoulders. Just then her resplendently tattooed back caught a ray of sunlight and the spider was wreathed in flames.
                                </p>
                            ",
                        'side' => 'right' 
                    ],
                    [
                        'start' => 97,
                        'end' => 100,
                        'content' =>
                            "
                                <p>Tanizaki, Jun'ichirō. \"The Tattooer\". 1910</p>
                                <h3>Artwork</h3>
                                <p>Hannah Lamport</p>
                                <h3>Research</h3>
                                <p>Aubrienne Krysiewicz-Bell, Andrew Lee, Ingrid Wall</p>
                                <h3>Website Design</h3>
                                <p>Andrew Lee</p>
                            ",
                        'side' => 'left' 
                    ]
                ];
                foreach ($descriptions as $description) {
                    echo "<div class='description description-$description[side]' data-start=$description[start] data-end=$description[end]>";
                    echo $description['content'];
                    echo "</div>";
                }
            ?>
            <div id='fade-left' class='fade'></div>
            <div id='fade-right' class='fade'></div>
            <div id='emaki'>
                <?php
                    $artworks = [
                        'artwork/0.jpg',
                        'artwork/1.jpg',
                        'artwork/2.jpg',
                        'artwork/3.jpg',
                        'artwork/4.jpg',
                        'artwork/5.jpg',
                        'artwork/0.jpg'
                    ];
                    foreach ($artworks as $artwork) {
                        list($width, $height) = getimagesize($artwork);
                        echo "<img class='artwork' src='artwork/transparent.png' data-src='$artwork' width='$width' height='$height'>";
                    }
                ?>
            </div>
        </main>

        <script src='scripts/scripts.js'></script>
    </body>
</html>

<?php
    $f = fopen('index.html', 'w');
    fwrite($f, ob_get_contents());
    fclose($f);
    ob_end_flush();
?>