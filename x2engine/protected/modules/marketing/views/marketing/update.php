<?php
/*********************************************************************************
 * The X2CRM by X2Engine Inc. is free software. It is released under the terms of 
 * the following BSD License.
 * http://www.opensource.org/licenses/BSD-3-Clause
 * 
 * X2Engine Inc.
 * P.O. Box 66752
 * Scotts Valley, California 95067 USA
 * 
 * Company website: http://www.x2engine.com 
 * Community and support website: http://www.x2community.com 
 * 
 * Copyright (C) 2011-2012 by X2Engine Inc. www.X2Engine.com
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * - Redistributions of source code must retain the above copyright notice, this 
 *   list of conditions and the following disclaimer.
 * - Redistributions in binary form must reproduce the above copyright notice, this 
 *   list of conditions and the following disclaimer in the documentation and/or 
 *   other materials provided with the distribution.
 * - Neither the name of X2Engine or X2CRM nor the names of its contributors may be 
 *   used to endorse or promote products derived from this software without 
 *   specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND 
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED 
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. 
 * IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, 
 * INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, 
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, 
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF 
 * LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE 
 * OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE.
 ********************************************************************************/

$this->pageTitle = $model->name;

$authParams['assignedTo'] = $model->createdBy;
$this->actionMenu = $this->formatMenu(array(
	array('label'=>Yii::t('marketing','All Campaigns'), 'url'=>array('index')),
	array('label'=>Yii::t('module','Create'), 'url'=>array('create')),
	array('label'=>Yii::t('module','View'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('module','Update')),
	array('label'=>Yii::t('module','Delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('app','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('contacts','Contact Lists'), 'url'=>array('/contacts/lists')),
	array('label'=>Yii::t('marketing','Newsletters'), 'url'=>array('weblist/index')),
	array('label'=>Yii::t('marketing','Web Lead Form'), 'url'=>array('webleadForm')),
	array('label'=>Yii::t('marketing','Web Tracker'), 'url'=>array('webTracker')),
),$authParams);

$form = $this->beginWidget('CActiveForm', array(
	'id'=>'campaign-form',
	'enableAjaxValidation'=>false
));
?>
<h2><?php echo Yii::t('marketing','Update Campaign'); ?>: <b><?php echo $model->name; ?></b>
	<?php echo CHtml::submitButton(Yii::t('app','Save'),array('class'=>'x2-button highlight right')); ?></h2>
<?php
$this->renderPartial('_form', array('model'=>$model, 'modelName'=>'Campaign','form'=>$form));

$this->endWidget();
