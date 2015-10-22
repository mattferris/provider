Provider
========

Common interfaces `ProviderInterface` and `ConsumerInterface` for inverting control of configuration. This allows a *consumer* to pass control to a *provider* so that the *provider* can configure the *consumer*.

The *consumer* must implement a `register()` method and the provider must implement a `provides()` method. An instance of *provider* is passed to the `register()`, and `register()` in turn calls `provides()` and passes an instance of itself. This then allows the *provider* to call methods on the *consumer* and configure as needed.

In practice, this might look like:

    use MattFerris\Provider\ConsumerInterface;
    use MattFerris\Provider\ProviderInterface;

    // service container which contains service definitions
    class ServiceContainer implements ConsumerInterface
    {
        public function register(ProviderInterface $provider)
        {
            $provider->provides($this);
            return $this;
        }

        ...
    }

    class DatabaseProvider implements ProviderInterface
    {
        public function provides(ConsumerInterface $consumer)
        {
            $consumer->set('DatabaseService', $databaseServiceDefinition);
        }
    }

    $container = new ServiceContainer();
    $container->register(new DatabaseProvider());
    $db = $container->get('DatabaseService');
    $db->query(...);

Taking this example further, if an application contains multiple packages that each provide services, packages can configure their services automatically by implementing their own providers.

    $container = new ServiceContainer();
    $container
        ->register(new DatabasePackage\ServiceProvider())
        ->register(new Authentication\ServiceProvider())
        ->register(new EventDispatcher\ServiceProvider());
