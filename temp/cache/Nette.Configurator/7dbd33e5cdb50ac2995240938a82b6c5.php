<?php
// source: /Users/martin/Sites/odpad/test-mapper/app/config/config.neon 
// source: /Users/martin/Sites/odpad/test-mapper/app/config/config.local.neon 

/**
 * @property Nette\Application\Application $application
 * @property Nette\Caching\Storages\FileStorage $cacheStorage
 * @property LeanMapper\Connection $connection
 * @property Nette\DI\Container $container
 * @property Nette\Http\Request $httpRequest
 * @property Nette\Http\Response $httpResponse
 * @property Nette\Bridges\Framework\NetteAccessor $nette
 * @property Nette\Application\IRouter $router
 * @property Nette\Http\Session $session
 * @property Nette\Security\User $user
 */
class SystemContainer extends Nette\DI\Container
{

	protected $meta = array(
		'types' => array(
			'nette\\object' => array(
				'nette',
				'nette.cacheJournal',
				'cacheStorage',
				'nette.httpRequestFactory',
				'httpRequest',
				'httpResponse',
				'nette.httpContext',
				'session',
				'nette.userStorage',
				'user',
				'application',
				'nette.presenterFactory',
				'nette.mailer',
				'nette.templateFactory',
				'23_Cake_Security_Authenticator',
				'24_Cake_Security_Authorizator',
				'container',
			),
			'nette\\bridges\\framework\\netteaccessor' => array('nette'),
			'nette\\caching\\storages\\ijournal' => array('nette.cacheJournal'),
			'nette\\caching\\storages\\filejournal' => array('nette.cacheJournal'),
			'nette\\caching\\istorage' => array('cacheStorage'),
			'nette\\caching\\storages\\filestorage' => array('cacheStorage'),
			'nette\\http\\requestfactory' => array('nette.httpRequestFactory'),
			'nette\\http\\irequest' => array('httpRequest'),
			'nette\\http\\request' => array('httpRequest'),
			'nette\\http\\iresponse' => array('httpResponse'),
			'nette\\http\\response' => array('httpResponse'),
			'nette\\http\\context' => array('nette.httpContext'),
			'nette\\http\\session' => array('session'),
			'nette\\security\\iuserstorage' => array('nette.userStorage'),
			'nette\\http\\userstorage' => array('nette.userStorage'),
			'nette\\security\\user' => array('user'),
			'nette\\application\\application' => array('application'),
			'nette\\application\\ipresenterfactory' => array('nette.presenterFactory'),
			'nette\\application\\presenterfactory' => array('nette.presenterFactory'),
			'nette\\application\\irouter' => array('router'),
			'nette\\mail\\imailer' => array('nette.mailer'),
			'nette\\mail\\sendmailmailer' => array('nette.mailer'),
			'nette\\bridges\\applicationlatte\\ilattefactory' => array('nette.latteFactory'),
			'nette\\application\\ui\\itemplatefactory' => array('nette.templateFactory'),
			'nette\\bridges\\applicationlatte\\templatefactory' => array('nette.templateFactory'),
			'leanmapper\\defaultmapper' => array('20_Cake_Model_Mapper'),
			'leanmapper\\imapper' => array('20_Cake_Model_Mapper'),
			'cake\\model\\mapper' => array('20_Cake_Model_Mapper'),
			'cake\\model\\baserepository' => array('21_Cake_Model_UserRepository'),
			'leanmapper\\repository' => array('21_Cake_Model_UserRepository'),
			'cake\\model\\userrepository' => array('21_Cake_Model_UserRepository'),
			'cake\\routing\\routerfactory' => array('22_Cake_Routing_RouterFactory'),
			'nette\\security\\iauthenticator' => array('23_Cake_Security_Authenticator'),
			'cake\\security\\authenticator' => array('23_Cake_Security_Authenticator'),
			'nette\\security\\permission' => array('24_Cake_Security_Authorizator'),
			'nette\\security\\iauthorizator' => array('24_Cake_Security_Authorizator'),
			'cake\\security\\authorizator' => array('24_Cake_Security_Authorizator'),
			'leanmapper\\ientityfactory' => array('25_LeanMapper_DefaultEntityFactory'),
			'leanmapper\\defaultentityfactory' => array('25_LeanMapper_DefaultEntityFactory'),
			'dibiconnection' => array('connection'),
			'dibiobject' => array('connection'),
			'leanmapper\\connection' => array('connection'),
			'nette\\di\\container' => array('container'),
		),
	);


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => '/Users/martin/Sites/odpad/test-mapper/app',
			'wwwDir' => '/Users/martin/Sites/odpad/test-mapper/www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'environment' => 'development',
			'consoleMode' => FALSE,
			'container' => array(
				'class' => 'SystemContainer',
				'parent' => 'Nette\\DI\\Container',
				'accessors' => TRUE,
			),
			'tempDir' => '/Users/martin/Sites/odpad/test-mapper/app/../temp',
			'database' => array(
				'driver' => 'mysqli',
				'host' => 'localhost',
				'database' => 'testmapper',
				'username' => 'root',
				'password' => 'root',
				'profiler' => TRUE,
				'lazy' => TRUE,
			),
		));
	}


	/**
	 * @return Cake\Model\Mapper
	 */
	public function createService__20_Cake_Model_Mapper()
	{
		$service = new Cake\Model\Mapper;
		return $service;
	}


	/**
	 * @return Cake\Model\UserRepository
	 */
	public function createService__21_Cake_Model_UserRepository()
	{
		$service = new Cake\Model\UserRepository($this->getService('connection'), $this->getService('20_Cake_Model_Mapper'), $this->getService('25_LeanMapper_DefaultEntityFactory'));
		return $service;
	}


	/**
	 * @return Cake\Routing\RouterFactory
	 */
	public function createService__22_Cake_Routing_RouterFactory()
	{
		$service = new Cake\Routing\RouterFactory;
		return $service;
	}


	/**
	 * @return Cake\Security\Authenticator
	 */
	public function createService__23_Cake_Security_Authenticator()
	{
		$service = new Cake\Security\Authenticator($this->getService('21_Cake_Model_UserRepository'));
		return $service;
	}


	/**
	 * @return Cake\Security\Authorizator
	 */
	public function createService__24_Cake_Security_Authorizator()
	{
		$service = new Cake\Security\Authorizator;
		return $service;
	}


	/**
	 * @return LeanMapper\DefaultEntityFactory
	 */
	public function createService__25_LeanMapper_DefaultEntityFactory()
	{
		$service = new LeanMapper\DefaultEntityFactory;
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication()
	{
		$service = new Nette\Application\Application($this->getService('nette.presenterFactory'), $this->getService('router'), $this->getService('httpRequest'), $this->getService('httpResponse'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		Tracy\Debugger::getBar()->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('router'), $this->getService('httpRequest'), $this->getService('nette.presenterFactory')));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\FileStorage
	 */
	public function createServiceCacheStorage()
	{
		$service = new Nette\Caching\Storages\FileStorage('/Users/martin/Sites/odpad/test-mapper/app/../temp/cache', $this->getService('nette.cacheJournal'));
		return $service;
	}


	/**
	 * @return LeanMapper\Connection
	 */
	public function createServiceConnection()
	{
		$service = new LeanMapper\Connection(array(
			'driver' => 'mysqli',
			'host' => 'localhost',
			'database' => 'testmapper',
			'username' => 'root',
			'password' => 'root',
			'profiler' => TRUE,
			'lazy' => TRUE,
		));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttpRequest()
	{
		$service = $this->getService('nette.httpRequestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'httpRequest\', value returned by factory is not Nette\\Http\\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttpResponse()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Bridges\Framework\NetteAccessor
	 */
	public function createServiceNette()
	{
		$service = new Nette\Bridges\Framework\NetteAccessor($this);
		return $service;
	}


	/**
	 * @return Nette\Caching\Cache
	 */
	public function createServiceNette__cache($namespace = NULL)
	{
		$service = new Nette\Caching\Cache($this->getService('cacheStorage'), $namespace);
		trigger_error('Service cache is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\FileJournal
	 */
	public function createServiceNette__cacheJournal()
	{
		$service = new Nette\Caching\Storages\FileJournal('/Users/martin/Sites/odpad/test-mapper/app/../temp');
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceNette__httpContext()
	{
		$service = new Nette\Http\Context($this->getService('httpRequest'), $this->getService('httpResponse'));
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceNette__httpRequestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy(array());
		return $service;
	}


	/**
	 * @return Latte\Engine
	 */
	public function createServiceNette__latte()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('/Users/martin/Sites/odpad/test-mapper/app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceNette__latteFactory()
	{
		return new SystemContainer_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_nette_latteFactory($this);
	}


	/**
	 * @return Nette\Mail\SendmailMailer
	 */
	public function createServiceNette__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Nette\Application\PresenterFactory
	 */
	public function createServiceNette__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory('/Users/martin/Sites/odpad/test-mapper/app', $this);
		$service->setMapping(array('*' => 'Cake\\*Module\\*Presenter'));
		return $service;
	}


	/**
	 * @return Nette\Templating\FileTemplate
	 */
	public function createServiceNette__template()
	{
		$service = new Nette\Templating\FileTemplate;
		$service->registerFilter($this->getService('nette.latteFactory')->create());
		$service->registerHelperLoader('Nette\\Templating\\Helpers::loader');
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\PhpFileStorage
	 */
	public function createServiceNette__templateCacheStorage()
	{
		$service = new Nette\Caching\Storages\PhpFileStorage('/Users/martin/Sites/odpad/test-mapper/app/../temp/cache', $this->getService('nette.cacheJournal'));
		trigger_error('Service templateCacheStorage is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\TemplateFactory
	 */
	public function createServiceNette__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('nette.latteFactory'), $this->getService('httpRequest'), $this->getService('httpResponse'), $this->getService('user'), $this->getService('cacheStorage'));
		return $service;
	}


	/**
	 * @return Nette\Http\UserStorage
	 */
	public function createServiceNette__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session'));
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouter()
	{
		$service = $this->getService('22_Cake_Routing_RouterFactory')->createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'router\', value returned by factory is not Nette\\Application\\IRouter type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession()
	{
		$service = new Nette\Http\Session($this->getService('httpRequest'), $this->getService('httpResponse'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceUser()
	{
		$service = new Nette\Security\User($this->getService('nette.userStorage'), $this->getService('23_Cake_Security_Authenticator'), $this->getService('24_Cake_Security_Authorizator'));
		Tracy\Debugger::getBar()->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		Nette\Bridges\Framework\TracyBridge::initialize();
		Nette\Caching\Storages\FileStorage::$useDirectories = TRUE;
		$this->getByType("Nette\Http\Session")->exists() && $this->getByType("Nette\Http\Session")->start();
		header('X-Frame-Options: SAMEORIGIN');
		header('X-Powered-By: Nette Framework');
		header('Content-Type: text/html; charset=utf-8');
		Nette\Utils\SafeStream::register();
		Nette\Reflection\AnnotationsParser::setCacheStorage($this->getByType("Nette\Caching\IStorage"));
		Nette\Reflection\AnnotationsParser::$autoRefresh = TRUE;
	}

}



final class SystemContainer_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_nette_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{

	private $container;


	public function __construct(Nette\DI\Container $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('/Users/martin/Sites/odpad/test-mapper/app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		return $service;
	}

}
