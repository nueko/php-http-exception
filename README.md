# HTTP Errors Exception

Features
--------
* HTTP status code 
```php 
    /**
     * @var \Exception $e 
     */
    $e->getCode();
    // 502
```
* HTTP status text 
```php 
    /**
     * @var \Exception $e
     */
    $e->getMessage();
    // Bad Gateway
```
* HTTP error explanation 
```php 
    /**
     * @var \Exception $e
     */
    $e->getExplanation();
    // Indicates that the server, while acting as a gateway or proxy, received an invalid response from an inbound server it accessed while attempting to fulfill the request.
```
* HTTP error spec 
```php 
    /**
     * @var \Exception $e
     */
    $e->getSpec();
    // RFC7231#6.6.3
```
* HTTP error reference 
```php 
    /**
     * @var \Exception $e
     */
    $e->getReference();
    // http://tools.ietf.org/html/rfc7231#section-6.6.3
```
* HTTP status 
```php 
    /**
     * @var \Exception $e
     */
    $e->getStatus() 
    // 502 Bad Gateway
```