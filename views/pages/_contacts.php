<div class="services">
    <div class="container">
        <h1>List of messages received:</h1>
        <?= preg_replace("/endofline/i", '<br><br>', preg_replace('/;/i', '<br>', $messages)) ?>
    </div>
</div>