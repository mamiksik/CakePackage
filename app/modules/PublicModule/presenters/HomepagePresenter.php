<?php

namespace Cake\PublicModule;

use Nette,
    Cake\Model,
    Cake\Model\UserRepository;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePublicPresenter
{


    /** @var UserRepository @inject */
    public $userRepository;

    public function renderDefault()
    {

    }

    /**
     * Sign-in form factory.
     * @return Nette\Application\UI\Form
     */

    protected function createComponentRegisterForm()
    {
        $form = new Nette\Application\UI\Form;
        $form->addText('nick', 'Username:')
            ->setRequired('Please enter your username.');

        $form->addPassword('password', 'Password:')
            ->setRequired('Please enter your password.');

        $form->onSuccess[] = $this->registerFormSucceeded;
        $form->addSubmit('send', 'Register');
        return $form;
    }

    public function registerFormSucceeded($form, $values)
    {
          $v = $form->getValues();
          try {
              $this->userRepository->register($v);
              $this->flashSuccess('Uživatel byl přidán.');
              $this->redirect('default');
          } catch(AuthenticationException $e) {
             $this->flashError($e->getMessage());
             $this->refresh();
          }

    }
}
