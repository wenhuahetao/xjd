<!-- $Id: third_customer_info.htm 2015-08-25 14:45:21Z langlibin $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js,validator.js')); ?>

<form id="form1" method="post" action="third_customer.php?act=insert_update" name="theForm">
<input type="hidden" id="cus_id" name="cus_id" value="<?php echo $this->_var['third_customer']['cus_id']; ?>" />
	<div class="main-div">
		<table id="group-table" cellspacing="1" cellpadding="3" width="100%">
			<tr>
				<td class="label"><?php echo $this->_var['lang']['label_cus_type']; ?></td>
				<td>
					<select name="cus_type" class="required">
						<option value="0" <?php if ($this->_var['third_customer']['cus_type'] == 0): ?> selected <?php endif; ?>><?php echo $this->_var['lang']['qq']; ?></option>
						<option value="1" <?php if ($this->_var['third_customer']['cus_type'] != 0): ?> selected <?php endif; ?>><?php echo $this->_var['lang']['ww']; ?></option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="label">
					<a href="javascript:showNotice('noticOfCusName');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
						<img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>" />
					</a>
					<?php echo $this->_var['lang']['label_cus_name']; ?>
				</td>
				<td>
					<input type="text" id="cus_name" name="cus_name" size="22" value="<?php echo $this->_var['third_customer']['cus_name']; ?>" class="required" />
					<br />
					<span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display: block" <?php else: ?> style="display:none" <?php endif; ?> id="noticOfCusName"><?php echo $this->_var['lang']['notice_of_cus_name']; ?></span>
				</td>
			</tr>
			<tr>
				<td class="label">
					<a href="javascript:showNotice('noticOfCusNo');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
						<img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>" />
					</a>
					<?php echo $this->_var['lang']['label_cus_no']; ?>
				</td>
				<td>
					<input type="text" id="cus_no" name="cus_no" size="22" value="<?php echo $this->_var['third_customer']['cus_no']; ?>" class="required" />
					<br />
					<span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display: block" <?php else: ?> style="display:none" <?php endif; ?> id="noticOfCusNo"><?php echo $this->_var['lang']['notice_of_cus_no']; ?></span>
				</td>
			</tr>
			<tr>
				<td class="label">
					<a href="javascript:showNotice('noticOfIsMaster');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
						<img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>" />
					</a>
					<?php echo $this->_var['lang']['label_is_master']; ?>
				</td>
				<td>
					<input type="radio" id="is_master_1" name="is_master" value="1" size="30" <?php if ($this->_var['third_customer']['is_master'] == 1): ?> checked="checked"<?php endif; ?> />
					<label for="cus_enable_1" style="vertical-align: middle;font:12px/24px verdana;"><?php echo $this->_var['lang']['yes']; ?></label>
					<input type="radio" id="is_master_0" name="is_master" value="0" size="30" <?php if ($this->_var['third_customer']['is_master'] != 1): ?> checked="checked"<?php endif; ?> />
					<label for="cus_enable_0" style="vertical-align: middle;font:12px/24px verdana;"><?php echo $this->_var['lang']['no']; ?></label>
					<br />
					<span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display: block" <?php else: ?> style="display:none" <?php endif; ?> id="noticOfIsMaster"><?php echo $this->_var['lang']['notice_of_is_master']; ?></span>
				</td>
			</tr>
			<tr>
				<td class="label">&nbsp;</td>
				<td>
					<input type="submit" id="btn_submit" name="btn_submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
					<input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
				</td>
			</tr>
		</table>
	</div>
</form>

<script language="JavaScript">


</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
