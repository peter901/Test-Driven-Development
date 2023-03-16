<?php 

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{

    protected $article;

    protected function setUp(): void
    {
        $this->article = new App\Article;
    }

    public function testTitleIsEmpty(){
        

        $this->assertEmpty($this->article->title);
    }

    public function testSlugIsEmpty(){
        
        $this->assertSame("",$this->article->getSlug());
    }

    // public function testSlugHasSpacesReplacedByUnderscores()
    // {
    //     $this->article->title = "An example article";

    //     $this->assertEquals("An_example_article",$this->article->getSlug());
    // }

    // public function testSlugHasWhitespaceReplacedBySingleUnderscore()
    // {
    //     $this->article->title = "An     example     \n     article";

    //     $this->assertEquals("An_example_article",$this->article->getSlug());
    // }

    // public function testSlugDoesNotStartOrEndWithAnUnderscore()
    // {
    //     $this->article->title = " An example article  ";

    //     $this->assertEquals("An_example_article",$this->article->getSlug());
    // }

    // public function testSlugDoesNotContainSpecialCharacters()
    // {
    //     $this->article->title = "An example's! article";

    //     $this->assertEquals("An_examples_article",$this->article->getSlug());
    // }

    public function titleProvider()
    {
        return [
            ["An example article","An_example_article"],
            ["An     example     \n     article","An_example_article"],
            [" An example article  ","An_example_article"],
            ["An example's! article","An_examples_article"],
        ];
    }

    /**
     * @dataProvider titleProvider
     */
    public function testSlug($title , $slug){

        $this->article->title = $title;

        $this->assertEquals($slug,$this->article->getSlug());
    }
}