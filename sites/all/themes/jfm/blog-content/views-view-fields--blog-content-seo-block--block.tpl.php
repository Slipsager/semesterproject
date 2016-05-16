<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<?php
$cat = strtolower(strip_tags($fields['field_blog_category']->content));
$body = substr($fields['body']->content, 0, 200) . "...";
$author = "Af " . $fields['name']->content;
?>

<?php if($cat == "seo") : ?>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="box box-seo">
            <div class="box-icon">
                <?php print $fields['field_blog_image']->content; ?>
            </div>
            <div class="info float-container">
                <div class="col-sm-12 london-title paris-title">
                    <h3 class="text-uppercase"><?php print $fields['title']->content; ?></h3>
                    <h4 class="text-uppercase"><?php print $fields['field_blog_category']->content; ?></h4>
                </div>
                <p><?php print $body; ?></p>
                <hr/>
                <div class="col-sm-12 location-main">
                    <div class="pull-left location">
                        <?php print $author; ?>
                    </div>
                    <div class="pull-right user-icons">
                        LÆS MERE
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>