<?php
/* Smarty version 3.1.30, created on 2017-04-25 17:33:36
  from "C:\wamp\www\Micro-blog-master\template\formulaire_connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ff6c50562d88_17457532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48fb633c613a1b9b7defa4ae0c221a2712417a42' => 
    array (
      0 => 'C:\\wamp\\www\\Micro-blog-master\\template\\formulaire_connexion.tpl',
      1 => 1493134266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ff6c50562d88_17457532 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id='boite' class = 'hidden'></div>

<form class="form-horizontal" id="form" action="connexion.php" method="POST">
  <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='pseudo'class="form-control" id="pseudo" placeholder="Pseudo">
      </div>
  </div>
  <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4"> 
            <input type="password" name='mdp' class="form-control" id="pwd" placeholder="Mot de passe">
      </div>
  </div>
   <div class="form-group"> 
        <div class="col-sm-offset-4 col-sm-1">
            <button type="submit" id="connexion" class="btn btn-success">Connexion</button>
       </div>
       <div class="col-sm-1">
           <button type="button" onclick="location.href='inscription.php'" id="inscription" class="btn btn-success">Inscription</button>
       </div>
    </div>
</form>

<?php }
}
