<!DOCTYPE html>
<html lang="it">
<?php include('contents/heading.html'); ?>
<body>
<?php include('contents/navbar.html'); ?>
    <div class="page">
        <div class="content">
            <div class="title">Qui puoi vedere tutti i miei lavori</div>

            <?php
                $file = file_get_contents('database/jobs.json');
                $json = json_decode($file);
                foreach ($json as $key => $value) {
                    echo('
                        <div class="box">
                        <div class="title">'.$value->titolo.'</div>
                            <div class="inner-box">
                                <div class="left">
                                    <a href="'.$value->link.'"><img src="'.$value->immagine.'"></a>
                                </div>
                                <div class="right">
                                    <div class="description">'.$value->descrizione.'</div>
                                </div>
                            </div>
                        </div>
                    ');
                    
                }
            ?>
        </div>
        <?php include('contents/form.html'); ?>
        <?php include('contents/footer.html'); ?>
    </div>
</body>
</html>