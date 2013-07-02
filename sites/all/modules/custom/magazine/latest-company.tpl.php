<?php if (!empty($latest_company)): ?>
    <h2>Magazine</h2>
    <?php foreach ($latest_company as $single_prog): ?>
        <?php print l($single_prog->title, 'magazine/' . $single_prog->nid); ?>
        <p><?php print $single_prog->description; ?></p>
        <?php print l(t('Read more'), 'magazine/' . $single_prog->nid, array('attributes' => array('class' => array('btn btn-secondary')))); ?>
    <?php endforeach; ?>
<?php endif; ?>