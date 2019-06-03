<?php
/*
Observer Pattern change its state over time and this pattern
heavily used in JDK. We can also define Observer pattern as changing state in real
time.

Observer pattern is about push vs poll.
Observer is pushing not polling.

We can define Observer pattern as:
The Observer Pattern defines a one-to-many
dependency between objects so that when one
object changes state, all of its dependents are
notified and updated automatically.

Important Observer pattern is very suitable for chat 
room/system
*/
//-------------------------------------------------------
/*
Observer is a behavioral design pattern that allows one objects to notify other objects about changes in their state.

The Observer pattern provides a way to subscribe and unsubscribe to and from these events for any object that implements a subscriber interface.
*/
//---------------------------------------------------------
/*
This example illustrates the structure of the Observer 
design pattern and focuses on following questions:
    What classes does it consists of?
    What roles do these classes play?
    In what way the elements of the pattern are related?

After learning about the pattern’s structure it’ll be easier 
for you to grasp the following example, based on a real 
world PHP use case.
*/
//----------------------------------------------------------

namespace RefactoringGuru\Observer\Structural;

/**
 * PHP has a couple of built-in interfaces related to the Observer pattern.
 *
 * Here's what the Subject interface looks like:
 *
 * @link http://php.net/manual/en/class.splsubject.php
 *
 *     interface SplSubject
 *     {
 *         // Attach an observer to the subject.
 *         public function attach(SplObserver $observer);
 *
 *         // Detach an observer from the subject.
 *         public function detach(SplObserver $observer);
 *
 *         // Notify all observers about an event.
 *         public function notify();
 *     }
 *
 * There's also a built-in interface for Observers:
 *
 * @link http://php.net/manual/en/class.splobserver.php
 *
 *     interface SplObserver
 *     {
 *         public function update(SplSubject $subject);
 *     }
 */

/**
 * The Subject owns some important state and notifies observers when the state
 * changes.
 */
class Subject implements \SplSubject
{
    /**
     * @var int For the sake of simplicity, the Subject's state, essential to
     * all subscribers, is stored in this variable.
     */
    public $state;

    /**
     * @var array List of subscribers. In real life, the list of subscribers can
     * be stored more comprehensively (categorized by event type, etc.).
     */
    private $observers = [];

    /**
     * The subscription management methods.
     */
    public function attach(\SplObserver $observer): void
    {
        echo "Subject: Attached an observer.<br />";
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer): void
    {
        foreach ($this->observers as $key => $s) {
            if ($s === $observer) {
                unset($this->observers[$key]);
                echo "Subject: Detached an observer.<br />";
            }
        }
    }

    /**
     * Trigger an update in each subscriber.
     */
    public function notify(): void
    {
        echo "Subject: Notifying observers...<br />";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Usually, the subscription logic is only a fraction of what a Subject can
     * really do. Subjects commonly hold some important business logic, that
     * triggers a notification method whenever something important is about to
     * happen (or after it).
     */
    public function someBusinessLogic(): void
    {
        echo "<br />Subject: I'm doing something important.<br />";
        $this->state = rand(0, 10);

        echo "Subject: My state has just changed to: {$this->state}<br />";
        $this->notify();
    }
}

/**
 * Concrete Observers react to the updates issued by the Subject they had been
 * attached to.
 */
class ConcreteObserverA implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if (! $subject instanceof Subject) {
            return;
        }

        if ($subject->state < 3) {
            echo "ConcreteObserverA: Reacted to the event.<br />";
        }
    }
}

class ConcreteObserverB implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if (! $subject instanceof Subject) {
            return;
        }

        if ($subject->state == 0 || $subject->state >= 2) {
            echo "ConcreteObserverB: Reacted to the event.<br />";
        }
    }
}

/**
 * The client code.
 */

$subject = new Subject;

$o1 = new ConcreteObserverA;
echo "<br />";
$subject->attach($o1);
echo "<br />";
$o2 = new ConcreteObserverB;
echo "<br />";
$subject->attach($o2);
echo "<br />";
$subject->someBusinessLogic();
echo "<br />";
$subject->someBusinessLogic();
echo "<br />";
$subject->detach($o2);
echo "<br />";
$subject->someBusinessLogic();
echo "<br />";

?>