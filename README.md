# zend-httperrors
Http compliant error reporting structure for zend framework.

`composer require phphacks/zend-httperrors`

### Add to your modules.config.php
```php
return [
  'Zend\HttpErrors',
  'My\Other\Modules'
];
```

### Then throw an HttpErrorException
```php
class MyController
{
   private $auth;
   
   public function __construct(AuthorizationService $auth)
   {
      $this->auth = $auth;
   }
   
   public function doSomethingAction()
   {
      if(!$auth->isAuthorized()) {
         throw new HttpUnauthorizedException();
      }
   }
}
```
That's just it.
