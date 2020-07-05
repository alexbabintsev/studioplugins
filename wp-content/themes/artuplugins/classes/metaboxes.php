<?php
function true_meta_boxes() {
    add_meta_box('pl_keys_in_pl_product', 'Ключи', 'pl_keys_in_pl_product_callback', 'pl_product', 'normal', 'default');
}
function pl_keys_in_pl_product_callback($post)
{
    $keys = get_posts(array(
        'numberposts'	=> -1,
        'post_type'		=> 'pl_key',
        'meta_query'	=> array(
            'relation'		=> 'AND',
            array(
                'key'	 	=> 'produnct',
                'value'	  	=> $post->ID,
                'compare' 	=> '=',
            ),
        ),/**/
    ));
    if($keys)
    {
        ?>
        <table class="widefat fixed">
            <thead>
                <tr>
                    <th class="manage-column column-columnname" scope="col">Ключ</th>
                    <th class="manage-column column-columnname" scope="col">Владелец</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($keys as $key):
                //$produnct = get_field('produnct', $key);
                $owner = get_field('owner', $key);?>
            <tr>
                <td class="column-columnname"><a href="<?=admin_url('post.php?'.http_build_query(['action'=>'edit','post'=>$key->ID])); ?>"><?= get_field('key', $key)?></a></td>
                <td class="column-columnname"><a href="<?=admin_url('user-edit.php?'.http_build_query(['user_id'=>$owner->ID,'wp_http_referer'=>'/wp-admin/users.php'])); ?>"><?= $owner->first_name.' '.$owner->last_name;?></a></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
        <?php
    }
    else
        echo 'Нет ключей!';
    //var_dump($keys);
}

add_action( 'add_meta_boxes', 'true_meta_boxes' );