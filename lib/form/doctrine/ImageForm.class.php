<?php

/**
 * Image form.
 *
 * @package    vogue
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ImageForm extends BaseImageForm
{
  public function configure()
  {
      # WIDGETS
    	$this->widgetSchema['content_id']  = new sfWidgetFormInputHidden(array(), array());
    	$this->setDefault('content_id', $this->getOption('contentId'));
      $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array('style'=>'height:200px;'));
      $this->widgetSchema['filename']    = new sfWidgetFormInputFile(array(), array());
      $this->widgetSchema['iscover']     = new sfWidgetFormInputCheckbox(array(), array('value'=>1));
      $object = $this->getObject();
    	$folder = ($object && $object->getFolder()) ? $object->getFolder() : date('Ym');
      $this->widgetSchema['folder']      = new sfWidgetFormInputHidden(array(), array('value'=>$folder));
      $choices = GlobalLib::getNumbers(1, 30);
      $this->widgetSchema['sort']        = new sfWidgetFormChoice(array('choices'=>$choices), array('style'=>'width:50px;'));
      
      
      # VALIDATORS
    	$this->validatorSchema['content_id']  = new sfValidatorInteger();
    	$this->validatorSchema['description'] = new sfValidatorPass();
    	$this->validatorSchema['iscover']     = new sfValidatorPass();
    	$this->validatorSchema['folder']      = new sfValidatorPass();
      $this->validatorSchema['filename']    = new sfValidatorFile(
                                                  array('required' => $this->getObject()->isNew(),
                                                      'path'       => sfConfig::get("sf_upload_dir")."/".$folder,
                                                      'max_size'   => 209715200,
                                                      'mime_types' =>  array('image/jpeg','image/pjpeg','image/png','image/x-png','image/gif',)),
                                                  array(
                                                      'max_size'   => 'Файлын хэмжээ хамгийн ихдээ 20MB байна',
                                                      'mime_types' => 'Дараах өргөтгөлтэй файлууд зөвшөөрөгдөнө: jpg, png, gif'));
      # HELP
      $this->widgetSchema->setHelp('filename', 'dimension: 750 x 500, png|gif|jpg, maxsize:1MB');
      $this->widgetSchema->setHelp('sort', 'Өсөхөөр эрэмбэлнэ');
  }
  
}