<?php foreach ($contentList as $key => $obj) { ?>
    <li class="bg<?php echo $key; ?>">
        <h3 class="subtitle"><?php echo $obj->content; ?></h3>
        <?php foreach ($obj->getGallery() as $keyGallery => $gallery) { ?>
            
            <img class="slide-img" src="<?php echo $gallery->getName(); ?>" alt="Slide <?php echo $keyGallery; ?>"/>
        <?php } ?>
    </li>
<?php } ?>