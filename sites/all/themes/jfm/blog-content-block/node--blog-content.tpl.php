<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>


<?php
$c = $node->field_blog_category["und"][0]["taxonomy_term"]->name;
$cat = strtolower(strip_tags($c));
$catClass = "";

switch ($cat) {
    case "seo":
        $catClass = "seo";
        break;
    case "sociale medier":
        $catClass = "sociale-medier";
        break;
    case "affiliate marketing":
        $catClass = "affiliate-marketing";
        break;
    case "bannerannoncering":
        $catClass = "bannerannoncering";
        break;
    case "email marketing":
        $catClass = "email-marketing";
        break;
    case "google adwords":
        $catClass = "google-adwords";
        break;
}

?>

<div class="content-main contact-content box-top-<?php print $catClass; ?>">
    <div class="contact-content-upper">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="gallery_title box-left-<?php print $catClass; ?>">
                    <!-- <h3><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3> -->
                    <h3><?php print $title; ?></h3>
                    <h4 class="box-color-<?php print $catClass; ?>"><?php print $c; ?></h4>
                </div>
            </div>
        </div>

        <div class="row">

            <?php
            hide($content['comments']);
            hide($content['links']);
            print render($content);
            ?>

        </div>

        <br/><br/>
        <hr/>
        <div class="row">
            <div class="col-xs-12">
                <h2>Kom i direkte kontakt med skribenten</h2>
            </div>
            <div class="col-sm-12 col-md-6 contact_left">
                <form class="form-horizontal" method="post" action="#">


                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Din e-mail"
                               value="">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="4" name="message"
                                  placeholder="Dit spørgsmål til "></textarea>
                    </div>

                    <div class="form-group">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn view_more box-bg-color-<?php print $catClass; ?> btn-submit">
                    </div>

                </form>
            </div> <!-- .contact-left -->

            <div class="col-sm-12 col-md-6 contact_right">

                <div class="col-md-12 contact_title">
                    <?php print $user_picture; ?>
                </div>

                <div class="col-md-12 contact_sub_title">
                    <?php if ($display_submitted): ?>
                        <div class="submitted">
                            <?php print $submitted; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-12 contact_text">
                    <em class="text-success">Du er velkommen til at kontakte leverandøren af denne artikel for at stille
                        uddybende spørgsmål.</em>
                </div>
            </div> <!-- .contact_right -->

        </div> <!-- .row -->
    </div>
</div> <!-- .contact-content -->
<br/><br/><br/>
<br/><br/><br/>
<div class="content-main contact-content">
    <div class="contact-content-upper">
        <?php print render($content['links']); ?>

        <?php print render($content['comments']); ?>
    </div>
</div>


