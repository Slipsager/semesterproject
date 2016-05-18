<?php

/**
 * @file
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<style>
    .contact-content {
        margin-bottom: 20px;
    }
    .contact-content-upper {
        padding: 10px 40px;
    }
    .vigan {
        width: auto;
        padding-left: 20px;
        border-left: 4px solid rgba(30, 123, 128, 0.8);
    }

    .topper {
        border-top: 7px solid rgba(30, 123, 128, 0.8);
    }
</style>

<div class="contact-content">
    <div class="contact-content-upper topper">
        <h1 class="vigan">Affiliate marketing</h1>
    </div>
</div>

<?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<table class="<?php print $class; ?>"<?php print $attributes; ?>>
    <?php if (!empty($caption)) : ?>
        <caption><?php print $caption; ?></caption>
    <?php endif; ?>

    <tbody>
    <?php foreach ($rows as $row_number => $columns): ?>
        <tr <?php if ($row_classes[$row_number]) {
            print 'class="' . $row_classes[$row_number] . '"';
        } ?>>
            <?php foreach ($columns as $column_number => $item): ?>
                <td <?php if ($column_classes[$row_number][$column_number]) {
                    print 'class="' . $column_classes[$row_number][$column_number] . '"';
                } ?>>
                    <?php print $item; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>