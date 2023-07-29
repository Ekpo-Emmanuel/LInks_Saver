
<?php 

    $link = array (
        array(
            "name"=>"github", 
            "icon" => 'logo-github',
            "url"=>"https://github.com/Ekpo-Emmanuel"),
        // array(
        //     "name"=>"Portfolio", 
        //     "icon" => '<ion-icon name="folder"></ion-icon>',
        //     "url"=>"https://emmanuelea.netlify.app/"),
        array(
            "name"=>"Linkedin", 
            "icon" => 'logo-linkedin',
            "url"=>"https://www.linkedin.com/in/emmanuel-ekpo-a2973420b/"),
    );

?>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<style>
    .footer {
        padding: 0;
    }
    .footer .links .name span{
        font-family: 'Montserrat Alternates', sans-serif;
        display: block;
        font-size: 10px;
    }
    .footer .links .socials a span{
        font-family: 'Montserrat Alternates', sans-serif;
        display: block;
        font-size: 10px;
        opacity: .6;
    }
    .footer .links .socials a ion-icon{
        margin: auto;
        width: 100%;
        font-size: 10px;
    }
</style>
<div class='footer'>
    <div class="links">
        <div class="name">
            <span>Emmanuel Ekpo</span>
        </div>
        
        <div class="socials">
        <?php foreach ($link as $item) { ?>
            <a href="<?php echo $item['url']; ?>" target="_blank">
                <item.icon class='icon'/>
                <ion-icon name="<?php echo $item['icon']; ?>" ></ion-icon></ion-icon>
                <span><?php echo $item['name']; ?></span>
            </a>
        <?php } ?>
        </div>
    </div>
</div>    

