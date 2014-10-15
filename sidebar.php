<aside id="sidebar" class="pull-left col-md-3">
    <?php if (!dynamic_sidebar('sidebar')) : ?>
        <div class="alert alert-danger">
              <p>No Widgets Activated!</p>
        </div>
    <? endif; ?>
</aside>