<?php if ($this->flashSession->output()) { ?>
<div class="errorMessage">
    <?php echo $this->flashSession->output(); ?>
</div>
<?php } ?>