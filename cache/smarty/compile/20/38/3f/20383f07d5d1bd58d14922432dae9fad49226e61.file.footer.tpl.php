<?php /* Smarty version Smarty-3.1.19, created on 2015-03-26 02:41:58
         compiled from "C:\wamp\www\SushiFast\themes\mon-theme\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21311551363e62f9558-13696424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20383f07d5d1bd58d14922432dae9fad49226e61' => 
    array (
      0 => 'C:\\wamp\\www\\SushiFast\\themes\\mon-theme\\footer.tpl',
      1 => 1427128400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21311551363e62f9558-13696424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_551363e63b8c01_06215527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551363e63b8c01_06215527')) {function content_551363e63b8c01_06215527($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row">
							<div id="footer-top">
								<div  class="adresses-magasin" id="elbeuf">
									<!-- <p class="adresse-magasin"><span>02.35.75.28.56</span>76500 ELBEUF - 38, rue du Neubourg</p> -->
									<p class="adresse-magasin">Tous nos produits sont <span>frais</span> et <span>préparés à la commande</span>.</p>
								</div>
							</div>
							<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

							<div id="footer-bottom">
								<p>&copy; 2013-2015 Sushi Fast. Tous droits réservés. <span>Réalisé avec le soutien de Anaïs Mezioune.</span></p>
							</div>
						</div>
					</footer>
				</div><!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
