<?php 
namespace Ves\HelloWorld\Observer;

class MyObserver implements \Magento\Framework\Event\ObserverInterface
{
  public function __construct()
  {
    //Observer initialization code...
    //You can use dependency injection to get any class this observer may need.
  }

  public function execute(\Magento\Framework\Event\Observer $observer)
  {
    //Observer execution code...
    print "OBSERVED!!!!<br />"; 
    $prod = $observer->getData('product');
    print '<strong>' . $prod->getName() . '</strong>';
    print '<br />';
    print_r( $prod->getPrice() );
  }
}

