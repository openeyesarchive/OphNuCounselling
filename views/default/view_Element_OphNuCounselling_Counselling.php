<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>

<section class="element">
	<header class="element-header">
		<h3 class="element-title"><?php echo $element->elementType->name?></h3>
	</header>

	<div class="element-data">
		<div class="row data-row">
			<div class="large-3 column">
				<div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('pre_emotions'))?>:</div>
			</div>
			<div class="large-9 column end">
				<div class="data-value">
					<?php if (empty($element->pre_emotions)) {?>
						None
					<?php }else{
						foreach ($element->pre_emotions as $pre_emotion) {
							echo $pre_emotion->name."<br/>";
						}
					}?>
				</div>
			</div>
		</div>
		<div class="row data-row">
			<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('counselling_outcome_id'))?>:</div></div>
			<div class="large-9 column end"><div class="data-value"><?php echo $element->counselling_outcome ? $element->counselling_outcome->name : 'None'?></div></div>
		</div>
		<?php if ($element->counselling_outcome->name == 'Other (please specify)') {?>
			<div class="row data-row">
				<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('other_comments'))?>:</div></div>
				<div class="large-9 column end"><div class="data-value"><?php echo CHtml::encode($element->other_comments)?></div></div>
			</div>
		<?php }?>
		<?php if ($element->comments) {?>
			<div class="row data-row">
				<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('comments'))?>:</div></div>
				<div class="large-9 column end"><div class="data-value"><?php echo CHtml::encode($element->comments)?></div></div>
			</div>
		<?php }?>
		<div class="row data-row">
			<div class="large-3 column">
				<div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('post_emotions'))?>:</div>
			</div>
			<div class="large-9 column end">
				<div class="data-value">
					<?php if (empty($element->post_emotions)) {?>
						None
					<?php }else{
						foreach ($element->post_emotions as $post_emotion) {
							echo $post_emotion->name."<br/>";
						}
					}?>
				</div>
			</div>
		</div>
	</div>
</section>
