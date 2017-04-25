<?php
/* Smarty version 3.1.30, created on 2017-03-29 18:36:02
  from "C:\wamp\www\micro_blog2\template\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbe2729e7a73_20508069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b4adafbd286b02c8fa341085c0472183e9b738' => 
    array (
      0 => 'C:\\wamp\\www\\micro_blog2\\template\\index.tpl',
      1 => 1490805359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbe2729e7a73_20508069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">              
  <form method="post" action='message.php'>
    <div class="col-sm-10">  
      <div class="form-group">
        <input type="hidden" name="id" value="$smarty.get.id">
        <textarea id="message" name="message" class="form-control" placeholder="Message">
        </textarea> 
      </div>
    </div>
    <div class="col-sm-2">
      <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
    </div>                        
  </form>
</div>
<div>




<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'donnee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['donnee']->value) {
?> 
  <?php echo $_smarty_tpl->tpl_vars['donnee']->value['contenu'];?>


        <a href="index.php?id=$donnee.id"><button type="button" class="btn btn-info">Modifier</button></a>
        <a href="suppression-msg.php?id=$donnee.id"><button type="button" class="btn btn-danger">Supprimer</button></a>

  <?php echo $_smarty_tpl->tpl_vars['donnee']->value['date'];?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



</div><?php }
}
