<?php

namespace Cake;

use Nette\Application\UI\Presenter;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Presenter
{
    public function flashError($message)
    {
        return $this->flashMessage($message, 'danger');
    }

    public function flashSuccess($message)
    {
        return $this->flashMessage($message, 'success');
    }

    public function refresh() {
        $this->redirect('this');
    }
}
