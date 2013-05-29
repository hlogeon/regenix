<?php
namespace controllers;

use models\User;
use models\UserValidator;
use regenix\Regenix;
use regenix\cache\Cache;
use regenix\lang\ClassScanner;
use regenix\lang\String;
use regenix\libs\I18n;
use regenix\mvc\Controller;
use regenix\widgets\Widget;

class Application extends Controller {

    public function test(){
        $this->renderText('OK');
    }

    public function page($page = 'index'){
        $lang = I18n::getLang();
        if ($lang === 'default' || $lang === 'en')
            $lang = '';

        $template = $this->actionMethodReflection->getDeclaringClass()->getShortName()
            . '/' . $lang . '/' . $page . '.html';
        if (!$this->templateExists($template))
            $template = $this->actionMethodReflection->getDeclaringClass()->getShortName() . '/' . $page . '.html';

        if (!$this->templateExists($template))
            $this->notFound($page);

        $this->put('page', $template);
        $this->render('.page.html');
    }
}