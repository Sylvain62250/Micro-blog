<?php
/* Smarty version 3.1.30, created on 2017-04-25 17:24:32
  from "C:\wamp\www\Micro-blog-master\template\formulaire_inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ff6a3005dd36_21564416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '537ea45b72b4e0c1484c828e0a4c14282924429c' => 
    array (
      0 => 'C:\\wamp\\www\\Micro-blog-master\\template\\formulaire_inscription.tpl',
      1 => 1493133262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ff6a3005dd36_21564416 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="form-horizontal" id="form" action="inscription.php" method="POST">
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='name'class="form-control" id="name" placeholder="Nom">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='username'class="form-control" id="username" placeholder="Prénom">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='pseudo'class="form-control" id="pseudo" placeholder="Pseudo">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4">
            <input type="input" name='mail'class="form-control" id="mail" placeholder="Mail">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-4"> 
            <input type="password" name='mdp' class="form-control" id="pwd" placeholder="Mot de passe">
        </div>
    </div>
    <div class="form-group"> 
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" id="inscription" class="btn btn-success">S'inscrire</button>
       </div>
    </div>
</form><?php }
}
