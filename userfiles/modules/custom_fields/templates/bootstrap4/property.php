<div class="col-<?php echo $settings['field_size']; ?>">
    <div class="form-group">

        <?php if($settings['show_label']): ?>
        <label class="col-form-label">
            <?php echo $data['name']; ?>
            <?php if ($settings['required']): ?>
                <span style="color: red;">*</span>
            <?php endif; ?>
        </label>
        <?php endif; ?>

        <input type="hidden" class="form-control" data-custom-field-id="<?php echo $data['id']; ?>" name="<?php echo $data['name']; ?>" value="<?php echo $data['value']; ?>"/>

        <div class="controls">
            <?php echo $data["value"]; ?>
        </div>

        <?php if ($data['help']): ?>
            <small class="form-text text-muted"><?php echo $data['help']; ?></small>
        <?php endif; ?>
    </div>
</div>