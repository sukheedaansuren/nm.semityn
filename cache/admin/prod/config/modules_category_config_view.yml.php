<?php
// auto-generated by sfViewConfigHandler
// date: 2015/07/24 05:40:50
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'baavar.mn | Өдөр тутмын вэб сэтгүүл', false, false);
  $response->addMeta('description', 'baavar.mn | Өдөр тутмын вэб сэтгүүл', false, false);
  $response->addMeta('keywords', 'baavar.mn | Өдөр тутмын вэб сэтгүүл', false, false);
  $response->addMeta('language', 'en', false, false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('admin.css', '', array ());


