<?php $i = 0; foreach($field->entries()->sortBy('start', 'asc') as $entry): $i++; ?>
<div class="structure-entry" id="structure-entry-<?php echo $entry->id() ?>">
  <span class="index items-index"><?php echo $i; ?></span>
  <div class="structure-entry-content text">
    <?php echo $field->entry($entry) ?>
  </div>
  <?php if(!$field->readonly()): ?>
  <nav class="structure-entry-options cf">
    <a data-modal class="btn btn-with-icon structure-edit-button" href="<?php __($field->url($entry->id() . '/update')) ?>">
      <?php i('pencil', 'left') . _l('fields.structure.edit') ?>
    </a>

    <a data-modal class="btn btn-with-icon structure-delete-button" href="<?php __($field->url($entry->id() . '/delete')) ?>">
      <?php i('trash-o', 'left') . _l('fields.structure.delete') ?>
    </a>
  </nav>
  <?php endif ?>
</div>          
<?php endforeach ?>