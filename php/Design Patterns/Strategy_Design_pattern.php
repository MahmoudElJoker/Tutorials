
<?php
/*
Simplest way to descripe Strategy pattern:
Strategy Design pattern is using composition rather than inheritance.

other definition:
Strategy Pattern defines a family of algorithms, encapsulate 
each one and make them interchangeable, Strategy lets the
algorithm very independently from clients that use it.

What is Strategy Design Pattern?
impelement (using interfaces or other method) two things or more with different behavior for each one. So that the
reason why this pattern named Strategy.

important there no need for subclasses in strategy pattern.
Strategy patterns is the power of interfaces.
*/
//----------------------------------------------------
/*
In the Strategy Pattern a context will choose the appropriate concrete extension of a class interface.

In this example, the StrategyContext class will set a 
strategy of StrategyCaps, StrategyExclaim, or StrategyStars 
depending on a parameter StrategyContext receives at 
instantiation. When the showName() method is called in 
StrategyContext it will call the showName() method in the 
Strategy that it set.
*/

class StrategyContext {
    private $strategy = NULL; 
    //bookList is not instantiated at construct time
    public function __construct($strategy_ind_id) {
        switch ($strategy_ind_id) {
            case "C": 
                $this->strategy = new StrategyCaps();
            break;
            case "E": 
                $this->strategy = new StrategyExclaim();
            break;
            case "S": 
                $this->strategy = new StrategyStars();
            break;
        }
    }
    public function showBookTitle($book) {
      return $this->strategy->showTitle($book);
    }
}

interface StrategyInterface {
    public function showTitle($book_in);
}
 
class StrategyCaps implements StrategyInterface {
	public $titleCount;
    public function showTitle($book_in) {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return strtoupper ($title);
    }
}

class StrategyExclaim implements StrategyInterface {
    public function showTitle($book_in) {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return Str_replace(' ','!',$title);
    }
}

class StrategyStars implements StrategyInterface {
    public function showTitle($book_in) {
        $title = $book_in->getTitle();
        $this->titleCount++;
        return Str_replace(' ','*',$title);
    }
}

class Book {
    private $author;
    private $title;
    function __construct($title_in, $author_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
    function getAuthorAndTitle() {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}

  writeln('BEGIN TESTING STRATEGY PATTERN');
  writeln('');

  $book = new Book('PHP for Cats','Larry Truett');
 
  $strategyContextC = new StrategyContext('C');
  $strategyContextE = new StrategyContext('E');
  $strategyContextS = new StrategyContext('S');
 
  writeln('test 1 - show name context C');
  writeln($strategyContextC->showBookTitle($book));
  writeln('');

  writeln('test 2 - show name context E');
  writeln($strategyContextE->showBookTitle($book));
  writeln('');
 
  writeln('test 3 - show name context S');
  writeln($strategyContextS->showBookTitle($book));
  writeln('');

  writeln('END TESTING STRATEGY PATTERN');

  function writeln($line_in) {
    echo $line_in."<br/>";
  }

?>