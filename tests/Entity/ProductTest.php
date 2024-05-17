<?php
namespace App\Tests\Entity;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;
class ProductTest extends TestCase{
       /**
 * @dataProvider pricesForFoodProduct
 */
public function  testcomputeTVAFoodProduct($price,$expectedTva){
 
    $product = new Product('pomme', 'food', $price);
    $this->assertSame($expectedTva, $product->computeTVA());
    }
    public function pricesForFoodProduct(){
    return [[0, 0.0],[20, 1.1],[100, 5.5]];
    }
 
 public function testYoussef(){
    $product = new Product('Pomme', 'pizza', 2);
    $this->assertSame(0.392, $product->computeTVA());
    }
    public function testNegativePriceComputeTVA(){
        $product = new Product('Un produit', 'food', -20);
        $this->expectException('Exception');
        $product->computeTVA();
        }
       
           

}
?>