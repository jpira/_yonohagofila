<script src="js/plugins/modernizr.custom.32549.js"></script>
<div class="sf_admin_list">
	 <div id="main_container">
		  <!--<div class="row-fluid">-->
			<div class="span12">
			  <div class="box paint color_18">
<!--				<div class="title">
				  <h4> <i class=" icon-bar-chart"></i><span>Lista de Perfiles</span> </h4>
				</div>-->
				<!-- End .title -->
				<div class="content top">
				  <table id="datatable_example" align="center" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0;">
					<thead>
					<tr>
						<?php if ($this->configuration->getValue('list.batch_actions')): ?>
							<th id="sf_admin_list_batch_actions"><input id="sf_admin_list_batch_checkbox" type="checkbox" onclick="checkAll();" /></th>
						<?php endif; ?>
						[?php include_partial('<?php echo $this->getModuleName() ?>/list_th_<?php echo $this->configuration->getValue('list.layout') ?>', array('sort' => $sort)) ?]
						<?php if ($this->configuration->getValue('list.object_actions')): ?>
							<th id="sf_admin_list_th_actions">[?php echo __('Actions', array(), 'sf_admin') ?]</th>
						<?php endif; ?>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th colspan="<?php echo count($this->configuration->getValue('list.display')) + ($this->configuration->getValue('list.object_actions') ? 1 : 0) + ($this->configuration->getValue('list.batch_actions') ? 1 : 0) ?>">
							[?php if ($pager->haveToPaginate()): ?]
							[?php include_partial('<?php echo $this->getModuleName() ?>/pagination', array('pager' => $pager)) ?]
							[?php endif; ?]

							[?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?]
							[?php if ($pager->haveToPaginate()): ?]
							[?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?]
							[?php endif; ?]
						</th>
					</tr>
				</tfoot>
				<tbody>
					[?php foreach ($pager->getResults() as $i => $<?php echo $this->getSingularName() ?>): $odd = fmod(++$i, 2) ? 'odd' : 'even' ?]
					<tr class="sf_admin_row [?php echo $odd ?]">
						<?php if ($this->configuration->getValue('list.batch_actions')): ?>
							[?php include_partial('<?php echo $this->getModuleName() ?>/list_td_batch_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'helper' => $helper)) ?]
						<?php endif; ?>
						[?php include_partial('<?php echo $this->getModuleName() ?>/list_td_<?php echo $this->configuration->getValue('list.layout') ?>', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>)) ?]
						<?php if ($this->configuration->getValue('list.object_actions')): ?>
							[?php include_partial('<?php echo $this->getModuleName() ?>/list_td_actions', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'helper' => $helper)) ?]
						<?php endif; ?>
					</tr>
					[?php endforeach; ?]
				</tbody>
				  </table>
				  <div class="row-fluid  control-group mt15">
				 
    <!--					<div class="pull-left span6 visible-desktop" action="#">
                                              <div class="row-fluid fluid ">
                                                    <div class="controls inline input-large pull-left ">
                                                      <select data-placeholder="Bulk actions: " class="chzn-select " id="default-select">
                                                            <option value=""></option>
                                                            <option value="Bender">Edit</option>
                                                            <option value="Zoidberg">Regenerate thumbnails</option>
                                                            <option value="Kif Kroker">Delete Permanently</option>
                                                      </select>
                                                    </div>
                                                    <button type="button" class="btn btn-inverse inline">Apply</button>
                                              </div>
                                            </div>-->
<!--					<div class="span6" align="right">
					  <div class="pagination pull-right ">
						<ul>
						  <li><a href="#">Prev</a></li>
						  <li><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">Next</a></li>
						</ul>
					  </div >
					</div>-->
				  </div>
				</div>
				<!-- End row-fluid --> 
			  </div>
			  <!-- End .content --> 
			</div>
			<!-- End box --> 
		  </div>
		  <!-- End .span12 --> 
		</div>
	</div>

	<div class="background_changer dropdown">
	  <div class="dropdown" id="colors_pallete"> <a data-toggle="dropdown" data-target="drop4" class="change_color"></a>
		<ul  class="dropdown-menu pull-left" role="menu" aria-labelledby="drop4">
		  <li><a data-color="color_0" class="color_0" tabindex="-1">1</a></li>
		  <li><a data-color="color_1" class="color_1" tabindex="-1">1</a></li>
		  <li><a data-color="color_2" class="color_2" tabindex="-1">2</a></li>
		  <li><a data-color="color_3" class="color_3" tabindex="-1">3</a></li>
		  <li><a data-color="color_4" class="color_4" tabindex="-1">4</a></li>
		  <li><a data-color="color_5" class="color_5" tabindex="-1">5</a></li>
		  <li><a data-color="color_6" class="color_6" tabindex="-1">6</a></li>
		  <li><a data-color="color_7" class="color_7" tabindex="-1">7</a></li>
		  <li><a data-color="color_8" class="color_8" tabindex="-1">8</a></li>
		  <li><a data-color="color_9" class="color_9" tabindex="-1">9</a></li>
		  <li><a data-color="color_10" class="color_10" tabindex="-1">10</a></li>
		  <li><a data-color="color_11" class="color_11" tabindex="-1">10</a></li>
		  <li><a data-color="color_12" class="color_12" tabindex="-1">12</a></li>
		  <li><a data-color="color_13" class="color_13" tabindex="-1">13</a></li>
		  <li><a data-color="color_14" class="color_14" tabindex="-1">14</a></li>
		  <li><a data-color="color_15" class="color_15" tabindex="-1">15</a></li>
		  <li><a data-color="color_16" class="color_16" tabindex="-1">16</a></li>
		  <li><a data-color="color_17" class="color_17" tabindex="-1">17</a></li>
		  <li><a data-color="color_18" class="color_18" tabindex="-1">18</a></li>
		  <li><a data-color="color_19" class="color_19" tabindex="-1">19</a></li>
		  <li><a data-color="color_20" class="color_20" tabindex="-1">20</a></li>
		  <li><a data-color="color_21" class="color_21" tabindex="-1">21</a></li>
		  <li><a data-color="color_22" class="color_22" tabindex="-1">22</a></li>
		  <li><a data-color="color_23" class="color_23" tabindex="-1">23</a></li>
		  <li><a data-color="color_24" class="color_24" tabindex="-1">24</a></li>
		  <li><a data-color="color_25" class="color_25" tabindex="-1">25</a></li>
		</ul>
	  </div>
	</div>


	<script type="text/javascript">
		/* <![CDATA[ */
		function checkAll()
		{
			var boxes = document.getElementsByTagName('input'); for(var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
		}
		/* ]]> */
	</script>
